<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();



        \App\Models\User::all()->each(function ($user) {
            $user->atmCardDetails()->saveMany(
                \App\Models\AtmCardDetail::factory()->count(5)->make()
            );
        });

        \App\Models\User::all()->each(function ($user) {
            $user->cryptocurrencyWalletDetails()->saveMany(
                \App\Models\CryptocurrencyWalletDetail::factory()->count(5)->make()
            );
        });



    }
}
