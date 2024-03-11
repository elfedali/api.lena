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
            'address' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'help_address' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'city' => $this->faker->city(),
            'state' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'country' => $this->faker->country(),
            'zip_code' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'website' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'logo' => $this->faker->word(),
            'cover' => $this->faker->word(),
            'description' => $this->faker->text(),
            'status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'comment_status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'currency' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
