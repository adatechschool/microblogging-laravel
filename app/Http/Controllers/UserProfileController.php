<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('show', [
            'user' => auth()->user()
        ]);
    }
}
