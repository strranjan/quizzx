<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@g10.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 1,
            'is_active' => 1,
        ]);

        DB::table('internal_profile_details')->insert([
            'user_id' => 1,
            'full_name' => 'Admin',
            'mobile' => '8126133883',
            'email' => 'admin@g10.com',
        ]);
    }
}
