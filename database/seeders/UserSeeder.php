<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = DB::table('users')->insert([
            'name'  => 'Pardu´s Barber',
            'email'     => 'pardus@gmail.com',
            'password'  => bcrypt('Pardus%23%$')
        ]);
    }
}
