<?php

use App\Ride;
use Illuminate\Database\Seeder;

class RidesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Let's truncate our existing records to start from scratch.
        Ride::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Ride::create([
                'origin' => $faker->city,
                'destination' => $faker->city,
                'capacity' => 5,
                'departure' => $faker->dateTime,
                'booked'=> 3,
                'user_id'=> 1
            ]);
        }
    }

}
