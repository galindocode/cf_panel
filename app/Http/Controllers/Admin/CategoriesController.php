<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Videos;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Categories::all()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(
        Request $req
    ) {
        $data = $req->all();
        $data['slug'] = str_replace(' ', '-', Str::lower($data['name']));

        Categories::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'slug' => $data['slug'],
            'free' => $data['free']
        ]);

        return redirect('/admin/categories');
    }

    public function destroy($id)
    {
        // delete all videos of this category
        $videos = Videos::where('categorie_id', $id)->get();
        foreach ($videos as $video) {
            $video->delete();
        }

        // delete category
        Categories::destroy($id);
        return redirect()->route('categories.index');
    }
}
