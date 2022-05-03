<?php

namespace App\Http\Livewire\Videos;

use Livewire\Component;

class VideoYoutubeShow extends Component
{
    public function render()
    {
        return view('livewire.videos.video-youtube-show');
    }

    public function mount($video) {
        $this->video = $video;
    }
}
