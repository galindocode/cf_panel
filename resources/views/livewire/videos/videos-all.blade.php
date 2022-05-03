<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach ($videos as $video)
        <div class="p-4 container w-46">
            <div class="card-body">
                <livewire:videos.videos-item :video="$video">
            </div>
        </div>
    @endforeach
</div>
