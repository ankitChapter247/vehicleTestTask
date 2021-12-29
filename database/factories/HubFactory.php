<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hub;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class HubFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hub::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['0', '1'];
        return [          
            'name' => Str::random(10),
            'status' => Arr::random($status)
        ];
    }
}
