<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $profile = $user->profile; 

        return view('show', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }
}

