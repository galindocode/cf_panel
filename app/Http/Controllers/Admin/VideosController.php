<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.videos.index', [
            'videos' => Videos::latest()->get()
        ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create', [
            'categories' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['slug'] = str_replace(' ', '-', Str::lower($data['small_description']));
        Videos::create($data);


        return redirect('/admin/videos');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(Videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Videos::find($id);
        $categories = Categories::all();

        return view('admin.videos.update', ['video' => $video, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Videos::find($id);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['slug'] = str_replace(' ', '-', Str::lower($data['small_description']));
        $video->update($data);


        return redirect('/admin/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Videos::destroy($id);
        return redirect('/admin/videos');
    }

    // Helpers

    private function getType(Request $request)
    {
        $type = $request->input('type');
        return  ucfirst(strtolower($type));
    }
}
