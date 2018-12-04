<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Review::class, 3)->create();

        // DB::table('reviews')->insert([
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'content' => 'Lorem ipsum dolor sit amet.',
        //     'rating' => 4,
        //     'id_user' => 1,
        //     'id_place' => 1
        // ]);
    }
}
