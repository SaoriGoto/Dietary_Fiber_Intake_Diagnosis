<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class InsolubleFiberListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sqlFile = File::get(database_path('seeds/insoluble_fiber_lists.sql'));
        DB::unprepared($sqlFile);
    }
}