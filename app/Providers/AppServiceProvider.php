<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('user', Auth::user());
        });

        View::composer('*', function ($view) {
            // Get the currently authenticated user
            $user = Auth::user();

            if ($user) {
                // Get the CryptocurrencyWalletDetail associated with the user
                $cryptocurrencyWalletDetails = $user->cryptocurrencyWalletDetails;

                // Get the AtmCardDetail associated with the user
                $atmCardDetails = $user->atmCardDetails;

                // Merge the two details into one array
                $paymentDetails = array_merge($cryptocurrencyWalletDetails->toArray(), $atmCardDetails->toArray());

                // Make the details available to all views
                $view->with('paymentDetails', $paymentDetails);
            }
        });
    }
}
