<div class="shadow-lg rounded-lg">
    <iframe width="100%" height="160rem" src="https://www.youtube.com/embed/{{ $video->youtubeId }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div id="description" class="p-4">
        <h1 class="text-gray-800 font-bold text-lg">{{ $video->title }}</h1>
        <p class="text-gray-500">{{ $video->excerpt }}</p>
        
        
        <a href="{{ url('videos/category/' . $video->categorie->name) }}" class="video-catetory-link">Categoría: <b>{{ $video->categorie->name }}</b></a>
        <div id="youtube-btns-zone" class="text-right mt-6">
            <a href="{{url('videos/' . $video->slug)}}" class="btn btn-primary">Ver video</a>
        </div>
    </div>
</div>
