<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'car_id' => Car::all()->random()->id,
            'rent_date_start' => $this->faker->dateTime(),
            'rent_date_end' => $this->faker->dateTime(),
            'rent_date_end' => $this->faker->dateTime(),
        ];
    }
}
