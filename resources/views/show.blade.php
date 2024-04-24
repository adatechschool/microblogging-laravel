{{-- @extends('layouts.app') --}}
{{-- @section('slot') --}}
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 relative">
                    
                    <div class="bg-gray-200 overflow-hidden h-60 relative">
                        <img src="{{$profile->background_picture}}" alt="Background Picture" class="w-full h-full object-cover">
                    </div>
                    <div class="container mx-auto px-4 py-6">
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="flex items-center">
                                <img src="{{$profile->profile_picture}}" alt="Profile Picture" class="h-24 w-24 rounded-full mr-6">
                                <div class="px-6">
                                    <h1 class="text-3xl font-bold text-gray-800">{{$user->name}}</h1>
                                    <p class="text-gray-600">{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-xl font-bold text-gray-800 mb-2">Biography</h2>
                                <p class="text-gray-600">{{$profile->biography}}</p>
                                <h2 class="text-xl font-bold text-gray-800 mt-4 mb-2">Github</h2>
                                <p class="text-gray-600">{{$profile->github_link}}</p>
                            </div>
                            <div class="mt-6">
                                <button class="bg-blue-500 hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded">
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
