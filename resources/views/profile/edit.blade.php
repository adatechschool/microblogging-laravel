<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-5">
            @csrf
            <div class="mb-6">
                <label for="biography" class="block text-gray-700 text-sm font-bold mb-2">Biography</label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="biography" name="biography">{{ $user->profile->biography ?? '' }}</textarea>
            </div>
            <div class="mb-6">
                <label for="github_link" class="block text-gray-700 text-sm font-bold mb-2">GitHub Link</label>
                <input type="url"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="github_link" name="github_link" value="{{ $user->profile->github_link ?? '' }}">
            </div>
            <div class="mb-6">
                <label for="profile_picture" class="block text-gray-700 text-sm font-bold mb-2">Profile Picture</label>
                <input type="file"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="profile_picture" name="profile_picture">
            </div>
            <div class="mb-6">
                <label for="background_picture" class="block text-gray-700 text-sm font-bold mb-2">Background
                    Picture</label>
                <input type="file"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="background_picture" name="background_picture">
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
                Profile</button>
        </form>
    </div>
</x-app-layout>
