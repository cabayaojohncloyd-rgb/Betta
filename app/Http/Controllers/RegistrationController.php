<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
    /**
     * Validate registration information.
     *
     * Actual account creation will be connected
     * once the BETTA database is finalized.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                ],

                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                ],

                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed',
                ],

                'terms' => [
                    'accepted',
                ],
            ],
            [
                'name.required' => 'Please enter your full name.',

                'name.max' => 'Your name cannot exceed 255 characters.',

                'email.required' => 'Please enter your email address.',

                'email.email' => 'Please enter a valid email address.',

                'email.max' => 'Your email cannot exceed 255 characters.',

                'password.required' => 'Please create a password.',

                'password.min' => 'Your password must contain at least 8 characters.',

                'password.confirmed' => 'Your password confirmation does not match.',

                'terms.accepted' => 'You must agree to the Terms and Conditions.',
            ]
        );

        /*
         * DATABASE INTEGRATION POINT:
         *
         * This is where we will eventually:
         * 1. Check whether the email already exists.
         * 2. Hash the password.
         * 3. Create the user record.
         * 4. Assign the appropriate account role.
         *
         * We are intentionally not creating an account yet
         * because the final BETTA database is not connected.
         */

        return redirect()
            ->route('sign')
            ->withInput($request->only('name', 'email'))
            ->with(
                'registration_notice',
                'Your registration information passed validation. Account creation is currently awaiting database integration.'
            );
    }
}
