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
            'make' => $this->faker->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Nissan', 'Honda']),
            'model' => $this->faker->randomElement(['Corolla', 'Fiesta', 'Cruze', 'Sentra', 'Civic']),
            'year' => $this->faker->year(),
            'color' => $this->faker->colorName(),
            'plate' => $this->faker->randomElement(['ABC-123', 'DEF-456', 'GHI-789', 'JKL-012', 'MNO-345']),
            'kilometers' => $this->faker->randomFloat(0, 0, 120000.),
            'daily_rent' => $this->faker->randomFloat(2, 0, 2000),
            'comment_status' => $this->faker->randomElement(['open', 'closed', 'private']),
            'ping_status' => $this->faker->randomElement(['open', 'closed']),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
        ];
    }
}
