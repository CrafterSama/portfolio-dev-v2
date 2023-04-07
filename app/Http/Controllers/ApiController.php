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
    public function userInfo()
    {
        $id = 1;

        $user = User::find($id)->with('professional_skills', 'technical_skills', 'services', 'featuredProjects', 'education', 'experiences', 'portfolios', 'posts', 'reviews', 'social_medias')->get()->first();

        return response()->json([
                'status' => 'ok',
                'user' => $user,
                'message' => Helper::successMessage('User info retrieved successfully')
            ], Response::HTTP_OK);
    }
}