<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Categories;

class ListInline extends Component
{
    public $categories;
    public function render()
    {
        return view('livewire.categories.list-inline');
    }

    public function mount()
    {
        $this->categories = Categories::all();
    }
}
