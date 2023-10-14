<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $accountNumber = $this->generateAccountNumber();

        return DB::transaction(function () use ($input, $accountNumber) {
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'account_number' => $accountNumber,
            ]);

            // Any additional logic or actions you want to perform after creating the user

            return $user;
        });
    }



    private function generateAccountNumber(): string
    {
        $accountNumber = '60' . mt_rand(10000000, 99999999);

        if (User::where('account_number', $accountNumber)->exists()) {
            return $this->generateAccountNumber();
        }

        return $accountNumber;
    }
}


