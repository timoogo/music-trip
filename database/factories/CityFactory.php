<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->city; //

        return [
            'name' => $faker-city(),
            'lng' => $faker->longitude(46, 48),
            'lat' => $faker->latitude(-90, 90)
        ];
    }
}
