<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'JavaScript',
            'description' => 'JavaScript entity',
            'sequence' => 1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'React.JS',
            'description' => 'React.JS entity',
            'sequence' => 2,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Redux',
            'description' => 'Redux entity',
            'sequence' => 3,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Mobx',
            'description' => 'Mobx entity',
            'sequence' => 4,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
