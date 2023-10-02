<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CryptocurrencyWalletDetail>
 */
class CryptocurrencyWalletDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coin_image' => $this->faker->imageUrl,
            'coin_name' => $this->faker->word,
            'coin_wallet_address' => $this->faker->uuid,
        ];
    }
}
