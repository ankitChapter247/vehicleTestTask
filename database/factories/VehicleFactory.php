<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hub;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        $status = ['0', '1'];
        return [
            'name' => $faker->userName,
            'status' => $faker->randomElement(['0', '1']),
            'hub_id' =>  Hub::all()->random()->id,        
        ];
    }
}
