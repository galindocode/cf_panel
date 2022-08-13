<a href="{{url('videos/' . $video->slug)}}">
    <div class="shadow-md hover:shadow-lg transition-all  duration-150 hover:scale-105 rounded-lg">

        {{-- Start Video Youtube Preview --}}
        <iframe width="100%" height="160rem" src="https://www.youtube.com/embed/{{ $video->youtubeId }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        {{-- End Video Youtube Preview --}}

        {{-- Start Video Youtube Text --}}
        <div id="description" class="p-4">
            <h1 class="text-gray-800 font-bold text-sm font-title mb-2">{{ $video->title }}</h1>
            <p class="text-gray-600 text-sm font-normal">{{ $video->excerpt }}</p>

            <div class="flex justify-between items-center mt-4">
                <a class="flex items-center " href="{{ url('videos/category/' . $video->categorie->name) }}">
                    <img src="{{asset('images/logo.png')}}" width="32" alt="" class="rounded-full bg-blue-500 ">
                    <b
                        class="mx-2 px-2 py-1 text-sm bg-gray-200 hover:bg-gray-300 transition-colors duration-150 rounded-lg">{{$video->categorie->name
                        }}</b>
                </a>

                <b class="mx-2 px-2 py-1 text-sm bg-gray-200 rounded-lg">{{$video->created_at->diffForHumans()
                    }}</b>
            </div>
        </div>
        {{-- End Video Youtube Text --}}
    </div>
</a>