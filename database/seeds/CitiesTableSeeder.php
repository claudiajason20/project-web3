<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        factory(App\City::class, 5)->create();

        // DB::table('cities')->insert([
        //     'name' => str_random(3).' City',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'description' => 'Lorem ipsum dolor sit amet.',
        //     'image' => 'Image 1'
        // ]);
    }
}
