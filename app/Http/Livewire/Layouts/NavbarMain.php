<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Categories;

class NavbarMain extends Component
{
    public $categories;
    public $search;

    public function mount($search = '')
    {
        $this->$search = $search;
        $categories = Categories::latest()->get();
    }

    public function render()
    {
        return view('livewire.layouts.navbar-main');
    }
}
