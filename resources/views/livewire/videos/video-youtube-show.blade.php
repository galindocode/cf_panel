<div class="w-full md:px-8">
    {{-- Start Youtube Video --}}
    <div class="video-container">
        <iframe class="video-responsive h-80 md:h-4/4" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    {{-- End Youtube Video --}}

    {{-- Start Video Description --}}
    <div id="video-title" class="flex justify-between mt-8">
        <h1 class="text-3xl font-title text-gray-800 font-bold">{{ $video->title }}</h1>
        <span id="video-love"
            class="text-4xl text-gray-500 hover:text-red-500 active:text-red-500 hover:cursor-pointer">
            <i class="fa-solid fa-heart"></i>
        </span>
    </div>
    <div id="video-description" class="my-4">
        <p class="text-lg text-gray-500 ">{{ $video->description }}</p>
    </div>
    {{-- End Video Description --}}

    <span class="text-gray-300 block mb-24 mt-4">
        {{ $video->created_at->diffForHumans() }}
    </span>

    <script>
        const heartBtn = document.getElementById('video-love');
    heartBtn.addEventListener('click', () => {
        heartBtn.classList.toggle('text-gray-500');
       heartBtn.classList.toggle("text-red-500");
    });
    </script>
</div>