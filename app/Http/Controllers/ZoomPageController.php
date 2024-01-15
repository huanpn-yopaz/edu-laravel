<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zoom;
use Illuminate\Http\Request;

class ZoomPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::select('id_post', 'name_post', 'img_post', 'img_teacher', 'name_teacher', 'date_post', 'id_zoom', 'id_object')->with('zoom')->with('objects')->with('zoom')->with('objects')->latest('id_post')->where('id_zoom', $id)->get();
        $name_zoom = Zoom::find($id)->name_zoom;

        return view('page.zoom')->with(compact('post', 'name_zoom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
