<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();

        // DB::table(cities')->insert([
        //     'name' => str_random(3).' City',
        //     'username' => 'Lorem ipsum dolor sit amet.',
        //     'password' => 'Image 1',
        //     'email' => 'b@gmail.com',
        //     'image' => 'img-1.jpg'
        //     'status' => 'active',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
