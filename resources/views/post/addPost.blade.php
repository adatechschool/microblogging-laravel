
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <form method="POST" action="{{ route('newpost') }}">
                    @Write your post
                    @csrf <!-- {{ csrf_field() }} -->
                    <!-- Image URL -->
                    <div class="mb-4">
                        <label for="url_img" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Image URL</label>
                        <input id="url_img" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-300 rounded-md" type="url" name="url_img" />
                        <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
                    </div>

                    <!-- Post Content -->
                    <div class="mb-4">
                        <label for="post_content" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Your Post</label>
                        <textarea id="post_content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-300 rounded-md" name="post_content" rows="4"></textarea>
                        <x-input-error :messages="$errors->get('post_content')" class="mt-2" />
                    </div>

                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-grey bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-700 dark:hover:bg-indigo-800">Post</button>
                </form>
            </div>
        </div>
    </div>
