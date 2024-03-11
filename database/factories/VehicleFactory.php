<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Agency;
use App\Models\User;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by_id' => User::factory(),
            'agency_id' => Agency::factory(),
            'make' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'model' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'year' => $this->faker->numberBetween(-10000, 10000),
            'color' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'plate' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'kilometers' => $this->faker->numberBetween(-10000, 10000),
            'daily_rent' => $this->faker->randomFloat(0, 0, 9999999999.),
            'comment_status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'ping_status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}
