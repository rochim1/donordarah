<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\admin
     */
    public function create(array $input)
    {
        // print_r($input);
        // dump($input);
        // dd($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:mysql2.admin'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        // membuat user baru mengguankan fortify unutk table user
        // ini fungsi yang digunakan 
        // return User::create([
            //     'name' => $input['name'],
            //     'email' => $input['email'],
            //     'password' => Hash::make($input['password']),
            // ]);

        // membuat user baru mengguankan fortify unutk table admin
        return admin::create([
            'nama_admin' => $input['name'],
            'level_admin' => 'admin',
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
