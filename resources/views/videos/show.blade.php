<livewire:layouts.header :title="$video->title" />
<livewire:layouts.navbar-main />

<div class="mt-8 px-4">
    <div class="w-full text-center md:text-left">
        <a href="{{ url("videos") }}" class="inline-block btn btn-primary mb-4  md:ml-8">Volver a todos los videos</a>
    </div>
    @if ($video->type == 'youtube')
    <livewire:videos.video-youtube-show :video="$video" />
    @endif

</div>
{{--
<div class="basis-2/5 w-full hidden md:flex">
    <livewire:videos.videos-similar />
</div> --}}


<livewire:layouts.footer>