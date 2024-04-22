{{-- @extends('layouts.app') --}}
{{-- @section('slot') --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-6 bg-white dark:bg-gray-800">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Profil de {{ $user->name }}</h1>
        <p class="text-xl text-gray-600 dark:text-gray-300">Email : {{ $user->email }}</p>
        <!-- Ajouter plus d'éléments de profil si nécessaire -->
        <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded 
                       dark:bg-blue-400 dark:hover:bg-blue-500">
            Editer mon profil
        </button>
    </div>
</x-app-layout>
{{-- @endsection --}}