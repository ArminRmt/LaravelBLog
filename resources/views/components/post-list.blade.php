<div class="container mx-auto p-10">
    <ul class="grid grid-cols-1 gap-1 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
       @foreach($posts as $post)
            <li class="bg-white dark:bg-gray-800 rounded-lg shadow-xl">
                    <img
                    class="object-cover object-center w-full h-44 opacity-90 rounded-lg group-hover:opacity-100 transition duration-500 ease-in-out"
                    src="{{ asset('storage/photos/'. $post->image) }}" alt="avatar">

                        {{-- title     --}}

                        <div class="flex items-center justify-center py-3 bg-gray-900 rounded-lg rounded-b-none">
                            <h1 class="text-lg font-serif text-white group-hover:text-indigo-600">{{ $post->title }}</h1>
                        </div>


                        {{-- discription --}}

                        <div class="px-6 py-4 group-hover:bg-gray-200 dark:group-hover:bg-gray-700 rounded-lg transition duration-500 ease-in-out">

                            <p class="py-2 text-gray-700 dark:text-gray-400">
                            {{ Str::limit($post->body, 90)}}
                            </p>
                        </div>


                        {{-- read more  --}}
                        
                        <div class="flex justify-end">

                            <a href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        
                        </div>


                </li>
       @endforeach
    </ul>
</div>

