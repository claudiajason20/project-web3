<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Place::class, 3)->create();

        DB::table('places')->insert([
            'name' => str_random(3).' City',
            'created_at' => now(),
            'updated_at' => now(),
            'description' => 'Lorem ipsum dolor sit amet.'
        ]);
    }
}
