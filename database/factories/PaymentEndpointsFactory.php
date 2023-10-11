<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersContributions>
 */
class PaymentEndpointsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "account_number" => fake()->unique()->phoneNumber(),
            "method_name" => fake()->randomElement(['Airtel Money','Mpesa',"Orange Money"]),
            "max_amount" => fake()->numberBetween(0, 10000),
            "ussd_template" => fake()-> randomElement(['*501*1*{{amount}}#','*144#','*501']),
            "accepted_currency" => fake()->randomElement(['USD','CDF','EUR']),
        ];
    }
}
