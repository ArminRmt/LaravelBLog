
<div class="flex justify-center">  

  <div class="rounded overflow-hidden shadow-lg">

    {{-- image --}}

    <img class="w-full h-auto" src="{{ asset('storage/photos/'. $post->image) }}" alt="Mountain">

    <div class="px-6 py-4">

      {{-- title --}}
        <div class="flex font-bold text-xl mb-2 justify-center">{{ $post->title }}</div>

      {{-- body --}}
        <p class="text-gray-700 text-base">{{ $post->body }}</p>

    </div>

       
      {{-- tags --}}

    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#animal</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#wolf</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>


  </div>

</div>

<x-footer />


