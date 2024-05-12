<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AbTest;
use App\Models\Variant;

class AssignAbTestVariant
{
    public function handle(Request $request, Closure $next)
    {
        $abTest = AbTest::where('is_active', true)->first();
        if ($abTest) {
            $variants = $abTest->variants;
            $selectedVariant = $this->selectVariantBasedOnRatio($variants);
            session(['ab_test_variant' => $selectedVariant->name]);
        }

        return $next($request);
    }

    private function selectVariantBasedOnRatio($variants)
    {
        $totalRatio = $variants->sum('targeting_ratio');
        $randomPoint = mt_rand(1, $totalRatio);
        $currentPoint = 0;

        foreach ($variants as $variant) {
            $currentPoint += $variant->targeting_ratio;
            if ($currentPoint >= $randomPoint) {
                return $variant;
            }
        }
    }
}