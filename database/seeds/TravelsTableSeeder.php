<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i=0; $i < 50; $i++) { 
            $newTravel = new Travel();
            $newTravel-> destination = $faker->state();
            $newTravel-> resort_name = $faker->company();
            $newTravel-> city = $faker->city();
            $newTravel-> nearest_airport = $faker->sentence();
            $newTravel-> availability = $faker->boolean();
            $newTravel-> discount = $faker->biasedNumberBetween($min = 10, $max = 70);
            $newTravel->save();
        }
    }
}
