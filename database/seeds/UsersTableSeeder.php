<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@google.com',
            'password' => bcrypt('secret'),
            'id_company' => 1
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@microsoft.com',
            'password' => bcrypt('secret'),
            'id_company' => 2
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@ibm.com',
            'password' => bcrypt('secret'),
            'id_company' => 3
        ]);
    }
}
