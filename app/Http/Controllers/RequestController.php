<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {

       $validated = $request->validate([
    'organization' => ['required', 'string', 'max:255'],
    'contact' => ['required', 'string', 'max:255'],
    'email' => ['required', 'email', 'max:255'],
    'phone' => ['required', 'string', 'max:30'],
    'address' => ['required', 'string', 'max:1000'],
    'request_type' => ['required', 'in:Food Packs,Meal Sponsorship'],
    'beneficiary_count' => ['required', 'integer', 'min:1'],
    'reason' => ['required', 'string', 'max:5000'],
    'preferred_date' => ['nullable', 'date', 'after_or_equal:today'],
    'distribution_method' => ['required', 'string'],
    'additional_info' => ['nullable', 'string', 'max:5000'],
    'document' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
    'latitude' => ['nullable', 'numeric', 'between:-90,90'],
    'longitude' => ['nullable', 'numeric', 'between:-180,180'],
    'consent' => ['accepted'],
]);

        //temp response for testing
        //no database recording yet

        return back()->with(
            'success',
            'The request passed validation. Database saving is not connected yet.'
        );
    }
}
