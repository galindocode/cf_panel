<?php

namespace App\Http\Livewire\Videos;

use Livewire\Component;

class VideosAll extends Component
{
    public $videos;

    public function render()
    {
        return view('livewire.videos.videos-all');
    }

    public function mount($videos)
    {
        $this->videos = $videos;
    }

}
