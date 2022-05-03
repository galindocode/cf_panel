<?php

namespace App\Http\Livewire\Videos;

use Livewire\Component;

class VideoYoutube extends Component
{
    public $video;

    public function render()
    {
        return view('livewire.videos.video-youtube');
    }

    public function mount($video) {
        $this->video = $video;
    }
}
