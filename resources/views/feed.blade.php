<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Feed') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Include the form for creating a new post -->
    @include('post.addPost')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
                        @foreach ($posts as $post)
                            <div class="border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                                <div class="p-4">
                                    <a href="{{ route('user.profile', ['user_id' => $post->author->id]) }}" class="text-lg font-semibold">
                                        {{ $post->author->name }}
                                    </a>
                                    <h1 class="text-sm font">{{ $post->created_at->format('F j, Y') }}</h1>
                                    
                                    @if (!empty($post->url_img))
                            <div class="relative overflow-hidden">
                                    <img src="{{ $post->url_img }}" alt="Post Image" class="w-full h-64 object-cover">
                                </div>
                                @endif 
                                    <div class="mt-2">
                                        @if ($post->tags)
                                            @foreach ($post->tags as $tag)
                                                <span class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-1 rounded-full text-xs">{{ $tag->tag_name }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-gray-700 dark:text-gray-300">{{ $post->post_content }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
