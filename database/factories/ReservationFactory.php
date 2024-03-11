<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Vehicle;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'client_id' => Client::factory(),
            'vehicle_id' => Vehicle::factory(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'total_amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'description' => $this->faker->text(),
            'payment_type' => $this->faker->word(),
        ];
    }
}
