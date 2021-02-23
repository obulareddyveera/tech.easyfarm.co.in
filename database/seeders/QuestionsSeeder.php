<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'name' => 'What are the advantages of using React?',
            'description' => 'MVC is generally abbreviated as Model View Controller',
            'categoryId' => 1,
            'priorityId' => 1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
