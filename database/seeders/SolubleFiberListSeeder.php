<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class SolubleFiberListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sqlFile = File::get(database_path('seeds/soluble_fiber_lists.sql'));
        DB::unprepared($sqlFile);
    }
}