<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 1,
            'name' => 'Google',
        ]);

        DB::table('companies')->insert([
            'id' => 2,
            'name' => 'Microsoft',
        ]);

        DB::table('companies')->insert([
            'id' => 3,
            'name' => 'IBM',
        ]);
    }
}
