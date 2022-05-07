<a href="{{url('videos/' . $video->slug)}}">
    <div class="shadow-lg rounded-lg">

        {{-- Start Video Youtube Preview --}}
        <iframe width="100%" height="160rem" src="https://www.youtube.com/embed/{{ $video->youtubeId }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        {{-- End Video Youtube Preview --}}

        {{-- Start Video Youtube Text --}}
        <div id="description" class="p-4">
            <h1 class="text-gray-800 font-bold text-lg font-title mb-2">{{ $video->title }}</h1>
            <p class="text-gray-500">{{ $video->excerpt }}</p>

            <a href="{{ url('videos/category/' . $video->categorie->name) }}" class="video-catetory-link">Categoría:
                <b>{{$video->categorie->name }}</b>
            </a>

            <div id="youtube-btns-zone" class="text-center mt-6 md:text-right">
                <a href="{{url('videos/' . $video->slug)}}" class="btn btn-primary w-full mx-auto">Ver video</a>
            </div>
        </div>
        {{-- End Video Youtube Text --}}
    </div>
</a>