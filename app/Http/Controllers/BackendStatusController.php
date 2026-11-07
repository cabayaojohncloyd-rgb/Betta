<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class BackendStatusController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,

            'message' => 'BETTA backend is operational.',

            'backend' => [
                'name' => 'BETTA',
                'framework' => 'Laravel',
                'status' => 'operational',
            ],

            'database' => [
                'status' => 'not_connected',
                'integration_ready' => true,
            ],

            'modules' => [
                'authentication' => 'pending',
                'donation_requests' => 'pending',
                'donations' => 'pending',
                'dashboard' => 'pending',
                'administration' => 'pending',
            ],

            'message_for_database_team' =>
                'The backend is prepared for integration with the finalized BETTA database.',
        ], 200);
    }
}