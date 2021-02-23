<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            'name' => 'High',
            'description' => 'High priority entity',
            'sequence' => 1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('priorities')->insert([
            'name' => 'Medium',
            'description' => 'Medium priority entity',
            'sequence' => 2,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('priorities')->insert([
            'name' => 'Low',
            'description' => 'Low priority entity',
            'sequence' => 3,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('priorities')->insert([
            'name' => 'Extra',
            'description' => 'Extra priority entity',
            'sequence' => 4,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
