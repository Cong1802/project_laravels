<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' =>'admin',
          'email' => 'admin@gmail.com',
          'password' => Hash::make('123123'),
          'level' => 0,
          'status' => 1,
          'avatar' => '1',
          'city' => '1',
          'district' => '1',
          'ward' => '1',
          'address' => '1',
          'sex' => 1
      ]);
    }
}
