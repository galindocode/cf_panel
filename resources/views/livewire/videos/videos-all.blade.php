<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 ">
    @foreach ($videos as $video)
    <div class="container w-46 mx-auto block">
        <div class="card-body">
            <livewire:videos.videos-item :video="$video">
        </div>
    </div>
    @endforeach
</div>