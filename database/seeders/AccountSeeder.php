<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
           ['username' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('123456')],
           ['username' => 'khachhang1',
            'email' => 'khachhang1@gmail.com',
            'password' => Hash::make('123456')]
        ]);
    }
}
