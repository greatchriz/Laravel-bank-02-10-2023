<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AtmCardDetail>
 */
class AtmCardDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'card_name' => $this->faker->creditCardType,
            'card_holders_name' => $this->faker->name,
            'card_number' => $this->faker->creditCardNumber,
            'card_expiry_date' => $this->faker->creditCardExpirationDateString,
            'card_cvv' => $this->faker->randomNumber(3),
            'card_pin' => $this->faker->randomNumber(4),
            'card_image_front' => $this->faker->imageUrl,
            'card_image_back' => $this->faker->imageUrl,
        ];
    }
}
