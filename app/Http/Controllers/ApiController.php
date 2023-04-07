<?php

namespace App\Http\Controllers;

use App\Models\User;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display all the info for an User
     *
     * @return \Illuminate\Http\Response
     */
    public function userInfo()
    {
        $id = 1;

        $user = User::find($id)->with('professional_skills', 'technical_skills', 'services', 'featuredProjects', 'education', 'experiences', 'portfolios', 'posts', 'reviews', 'social_medias')->get();

        //dd($user);
        return $user->toJson(JSON_PRETTY_PRINT);

    }
}


