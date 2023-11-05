<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\Post;
use App\Models\Zoom;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search()
    {
        $id_object=$_GET['id_object'];
        $id_zoom=$_GET['id_zoom'];
        if($id_object=='' && $id_zoom==''){
            return back();
        }
        elseif($id_object && $id_zoom){
            $post=Post::with('zoom')->with('objects')->where('id_object',$id_object)->where('id_zoom',$id_zoom)->latest('id_post')->get();
        }
        elseif($id_object || $id_zoom){
            $post=Post::with('zoom')->with('objects')->where('id_object',$id_object)->Orwhere('id_zoom',$id_zoom)->latest('id_post')->get();
        }
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        return view('page.search')->with(compact('object','zoom','post'));
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
        //
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
