<livewire:layouts.header :title="$video->title">
<livewire:layouts.navbar-main>
<div class="flex flex-row p-8">
    <div class="basis-4/5">
        @if ($video->type == 'youtube')
        <livewire:videos.video-youtube-show :video="$video">
        @endif
    </div>

    <div class="basis-2/5 w-full hidden md:flex">
        <livewire:videos.videos-similar>
    </div>

</div>

<livewire:layouts.footer>