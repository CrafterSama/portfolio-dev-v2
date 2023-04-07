<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Helper;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    /**
     * Display all the info for an User
     *
     * @return \Illuminate\Http\JSonResponse
     */
    public function userInfo($id)
    {
        $user = User::with('professional_skills', 'technical_skills', 'services', 'featuredProjects', 'education', 'experiences', 'portfolios', 'posts', 'reviews', 'social_medias')->find($id);

        $status = $user ? 'ok' : 'error';
        $message = $user ? Helper::successMessage('User info retrieved successfully') : Helper::errorMessage('User not found');
        $httpCode = $user ? Response::HTTP_OK : Response::HTTP_NOT_FOUND;

        return response()->json([
                'status' => $status,
                'user' => $user,
                'message' => $message
            ], $httpCode);
    }
}