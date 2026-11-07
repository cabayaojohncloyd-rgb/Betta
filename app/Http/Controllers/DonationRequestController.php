<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationRequestController extends Controller
{
    // Store donation request
    public function store(Request $request)
    {
        // Temporary redirect for testing
        return redirect()->route('req.confirmation');
    }

    // Display confirmation page
    public function confirmation()
    {
        return view('submitted');
    }
}