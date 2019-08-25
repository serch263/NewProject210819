<?php

use Illuminate\Database\Seeder;

class Gmaps_geocacheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gmaps_geocache')->insert([
            'address' => 'Puebla, Pue',
            'latitude' => '19.0453006',
            'longitude' => '-98.2092325',
        ]);

        DB::table('gmaps_geocache')->insert([
            'address' => 'Ciudad de México',
            'latitude' => '19.39068',
            'longitude' => '-99.2836992',
        ]);

        DB::table('gmaps_geocache')->insert([
            'address' => 'Veracruz',
            'latitude' => '19.1787635',
            'longitude' => '-96.2113357',
        ]);
    }
}
