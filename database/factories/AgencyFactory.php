<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Agency;
use App\Models\User;

class AgencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agency::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'owner_id' => User::factory(),
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'address' => $this->faker->address(),
            'help_address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'zip_code' => $this->faker->postcode(),
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->imageUrl(),
            'cover' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'comment_status' => $this->faker->randomElement(['open', 'closed', 'private']),
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'GBP', 'CAD', 'AUD']),
        ];
    }
}
