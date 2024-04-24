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

        return view('profile.show', [
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
    // Function to show the edit form
    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    // Function to update the datas
    public function update(Request $request)
    {
        $request->validate([
            'biography' => 'nullable|string',
            'github_link' => 'nullable|url',
            'profile_picture' => 'nullable|image|max:1999', // 2MB max
            'background_picture' => 'nullable|image|max:1999',
        ]);

        $user = auth()->user();
        $data = $request->only('biography', 'github_link');

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }

        if ($request->hasFile('background_picture')) {
            $path = $request->file('background_picture')->store('background_pictures', 'public');
            $data['background_picture'] = $path;
        }

        $user->profile()->update($data);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
