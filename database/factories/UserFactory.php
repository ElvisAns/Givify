<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\UsersContributions;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            "echeance" => fake()->dateTimeBetween('now', '+6 months'),
            "montant_souscrit" => fake()->numberBetween(1001, 5000),
            "addresse" => fake()->address(),
            "phone_1" => fake()->phoneNumber(),
            "phone_2" => ''
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    
    public function usercontributions(): HasMany
    {
        return $this->hasMany(UsersContributions::class);
    }
}
