<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersContributions>
 */
class OrganizationInformationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "organisation_id" => fake()->uuid(),
            "organisation_name" => fake()->word(),
            "short description" => fake()->text(),
            "other_informations" => json_encode(["color_scheme" => "default"])
        ];
    }
}
