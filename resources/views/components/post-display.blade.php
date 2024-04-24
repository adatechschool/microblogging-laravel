<div class="border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
    <div class="p-4">
        <h1 class="text-lg font-semibold">{{ $post->author->name }}</h1>
        <h1 class="text-sm font">{{ $post->created_at->format('F j, Y')}}</h1>
    </div>
    <div class="relative overflow-hidden">
        <img src="{{ $post->url_img }}" alt="Post Image" class="w-full h-64 object-cover">
    </div>
    <div class="p-4">
        <p class="text-gray-700 dark:text-gray-300">{{ $post->post_content }}</p>
    </div>
</div>
