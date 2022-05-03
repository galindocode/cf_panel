<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Categories;

class NavbarMain extends Component
{
    public $categories;

    public function mount()
    {
        $categories = Categories::latest()->get();
    }

    public function render()
    {
        return view('livewire.layouts.navbar-main');
    }
}
