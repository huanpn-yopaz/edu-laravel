<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\Post;
use App\Models\Zoom;
use Illuminate\Http\Request;

class DetailPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        $post=Post::with('zoom')->with('objects')->find($id);
        if($post){
            return view('page.detailpost')->with(compact('object','zoom','post'));
        }
        else{
            abort(404);
        }
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
