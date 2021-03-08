<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_admin')->insert([
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
