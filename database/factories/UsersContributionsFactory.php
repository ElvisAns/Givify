<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\PaymentEndpoints;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersContributions>
 */
class UsersContributionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'montant' => fake()->numberBetween(100, 1000),
            'confirmed' => fake()->randomElement([false,true]),
            "payment_endpoint_id" => PaymentEndpoints::factory()
        ];
    }

    public function paymentEndpoint(): HasOne
    {
        return $this->hasOne(PaymentEndpoints::class);
    }
}
