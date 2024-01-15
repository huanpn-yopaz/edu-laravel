<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\Post;
use App\Models\Zoom;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest('id_post')->get();

        return view('admin.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $object = Objects::latest('id_object')->get();
        $zoom = Zoom::latest('id_zoom')->get();

        return view('admin.post.create')->with(compact('object', 'zoom'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->all();

        if ($request->file('img_post')) {
            $img_post = $this->uploads($request->file('img_post'));
            $data['img_post'] = $img_post['filePath'];
        }
        if ($request->file('img_teacher')) {
            $img_teacher = $this->uploads($request->file('img_teacher'));
            $data['img_teacher'] = $img_teacher['filePath'];
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
        $object = Objects::latest('id_object')->get();
        $zoom = Zoom::latest('id_zoom')->get();
        $post = Post::find($id);

        return view('admin.post.edit')->with(compact('object', 'zoom', 'post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        if ($file = $request->file('img_post')) {
            $filedata = $this->uploads($file);
            $data['img_post'] = $filedata['filePath'];
        }
        if ($file_teacher = $request->file('img_teacher')) {
            $filedata = $this->uploads($file_teacher);
            $data['img_teacher'] = $filedata['filePath'];
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
        $post = Post::find($id);
        $post->delete();
        toastr()->success('Xóa bài học thành công');

        return back();
    }
}
