<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gender')->insert([
            'code' => 'FEM',
            'name' => 'Female',
        ]);

        DB::table('gender')->insert([
            'code' => 'MAE',
            'name' => 'Male',
        ]);

        DB::table('gender')->insert([
            'code' => 'Other',
            'name' => 'Others',
        ]);
    }
}
