<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserProfileController extends Controller
{
    //  Function to show the profile of the logged user (and edit it)
    public function show()
    {
        $user = auth()->user();
        $profile = $user->profile;

        return view('show', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    //  Function to show the profile of any user
    public function showProfile($userId)
{
    $user = User::findOrFail($userId);
    $profile = $user->profile;
    $posts = $user->posts; // Fetch user's posts

    return view('profile', compact('user', 'profile', 'posts'));
}

}
