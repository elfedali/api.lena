<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Review;
use App\Models\User;
use App\Models\Vehicle;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'vehicle_id' => Vehicle::factory(),
            'reviewer_id' => User::factory(),
            'rating' => $this->faker->numberBetween(-10000, 10000),
            'review' => $this->faker->text(),
            'is_approved' => $this->faker->boolean(),
            'approved_by_id' => User::factory(),
            'approved_date' => $this->faker->dateTime(),
        ];
    }
}
