<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Categories;

class ListSide extends Component
{
    public $categories;
    public function render()
    {
        return view('livewire.categories.list-side');
    }

    public function mount()
    {
        $this->categories = Categories::all();
    }
}
