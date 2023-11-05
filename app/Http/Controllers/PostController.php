<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\Post;
use App\Models\Zoom;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::latest('id_post')->get();
        return view('admin.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        return view('admin.post.create')->with(compact('object','zoom'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->all();
       
        if ($save_img_post = $request->file('img_post')) {
            $destinationPath = 'image';
            $img_post = date('YmdHis') . "." . $save_img_post->getClientOriginalExtension();
            $save_img_post->move($destinationPath, $img_post);
            $post['img_post'] = $img_post;
        }
        if ($save_img_teacher = $request->file('img_teacher')) {
            $destinationPath = 'image';
            $img_teacher = date('YdmHis') . "." . $save_img_teacher->getClientOriginalExtension();
            $save_img_teacher->move($destinationPath, $img_teacher);
            $post['img_teacher'] = $img_teacher;
        }

        Post::create($post);
        toastr()->success('Thêm bài học thành công');
        return back();
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
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        $post=Post::find($id);
        return view('admin.post.edit')->with(compact('object','zoom','post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        if ($save_img_post = $request->file('img_post')) {
            $destinationPath = 'image';
            $img_post = date('YmdHis') . "." . $save_img_post->getClientOriginalExtension();
            $save_img_post->move($destinationPath, $img_post);
            $input['img_post'] = $img_post;
            unlink('image/' . $post->img_post);
        }
        if ($save_img_teacher = $request->file('img_teacher')) {
            $destinationPath = 'image';
            $img_teacher = date('YdmHis') . "." . $save_img_teacher->getClientOriginalExtension();
            $save_img_teacher->move($destinationPath, $img_teacher);
            $input['img_teacher'] = $img_teacher;
            unlink('image/' . $post->img_teacher);
        }

        $post->update($input);
        toastr()->success('Cập nhật bài học thành công');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::find($id);
        if($post->img_post && $post->img_teacher){
            unlink('image/'.$post->img_post);
            unlink('image/'.$post->img_teacher);
        }
        $post->delete();
        toastr()->success('Xóa bài học thành công');
        return back();
    }
}
