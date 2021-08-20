<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BloodGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blood_group')->insert([
            'name' => 'A+',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'A-',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'B+',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'B-',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'O+',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'O-',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'AB+',
        ]);

        DB::table('blood_group')->insert([
            'name' => 'AB-',
        ]);
    }
}
