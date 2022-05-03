<livewire:layouts.header :title="'Videos'" />
<livewire:layouts.navbar-main>
<body>
    @php
    $videoList = $videos->items()
    @endphp
    
    <div class="px-8">
        <livewire:videos.videos-all :videos="$videoList">
    </div>
    <livewire:layouts.footer>
</body>
</html>