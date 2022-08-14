<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.index');
    }

    public function search(Request $request)
    {
        $search = strtolower($request->search);
        $videos = $this->searchInVideos($search);

        return view('videos.index', [
            'videos' => $videos,
            'search' => $search
        ]);
    }

    private function searchInVideos($search)
    {
        $videos = Videos::all();
        return $videos->filter(function ($video) use ($search) {
            return str_contains(strtolower($video->title), $search) || str_contains(strtolower($video->description), $search);
        });
    }
}
