<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Helper;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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

        if ($user->count() >= 1) {
            return response()->json([
                    'status' => 'ok',
                    'user' => $user,
                    'message' => Helper::successMessage('User info retrieved successfully')
                ], Response::HTTP_OK);
        } else {
            return response()->json([
                    'status' => 'error',
                    'user' => null,
                    'message' => Helper::errorMessage('User not found')
                ], Response::HTTP_NOT_FOUND);
        }
    }
}