<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VariantSeeder extends Seeder
{
    public function run()
    {
        DB::table('variants')->insert([
            ['ab_test_id' => 1, 'name' => 'Variant A', 'targeting_ratio' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['ab_test_id' => 1, 'name' => 'Variant B', 'targeting_ratio' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['ab_test_id' => 2, 'name' => 'Variant A', 'targeting_ratio' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['ab_test_id' => 2, 'name' => 'Variant B', 'targeting_ratio' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['ab_test_id' => 3, 'name' => 'Variant A', 'targeting_ratio' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['ab_test_id' => 3, 'name' => 'Variant B', 'targeting_ratio' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
