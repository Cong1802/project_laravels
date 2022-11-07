<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = [
          'email' => 'admin@gmail.com',
          'password' => bcrypt('123123'),
          'name' => 'admin',
        ];
        DB::table('users')->insert($data);
    }
}
