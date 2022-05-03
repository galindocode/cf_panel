<?php

namespace App\Http\Livewire\Videos;

use Livewire\Component;

class VideosItem extends Component
{
    public function render()
    {
        return view('livewire.videos.videos-item');
    }

    public function mount($video)
    {
        $this->video = $video;
    }
}
