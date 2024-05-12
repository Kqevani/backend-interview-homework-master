<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbTestSeeder extends Seeder
{
    public function run()
    {
        DB::table('ab_tests')->insert([
            ['name' => 'Homepage Design', 'is_active' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Checkout Process', 'is_active' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Button Color Test', 'is_active' => false, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
