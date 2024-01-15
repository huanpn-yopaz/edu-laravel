<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.home');
    }

    public function load_more(Request $request)
    {
        $data = $request->all();
        if ($data['id'] > 0) {
            $post = Post::select('id_post', 'name_post', 'img_post', 'img_teacher', 'name_teacher', 'date_post', 'id_zoom', 'id_object')->with('zoom')->with('objects')->where('id_post', '<', $data['id'])->latest('id_post')->take(6)->get();
        } else {
            $post = Post::select('id_post', 'name_post', 'img_post', 'img_teacher', 'name_teacher', 'date_post', 'id_zoom', 'id_object')->with('zoom')->with('objects')->with('zoom')->with('objects')->latest('id_post')->take(6)->get();
        }
        $output = '';
        if (! $post->isEmpty()) {
            foreach ($post as $key => $value) {
                $last_id = $value->id_post;
                $output .= '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <a href="'.Route('show.post', [$value->id_post, Str::slug($value->name_post)]).'" class="text-decoration-none">
                <div class="classes-item text-black">
                    <div class="bg-light rounded-circle w-75 mx-auto p-3">
                        <img class="img-fluid rounded-circle" src="'.$value->img_post.'" alt="">
                    </div>
                    <div class="bg-light rounded p-4">
                        <p class="d-block text-center h3 mb-4">'.$value->name_post.'</p>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="'.$value->img_teacher.'" alt=""
                                    style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">'.$value->name_teacher.'</h6>
                                    <small>Giáo viên</small>
                                </div>
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-4">
                                <div class="border-top border-3 border-primary pt-2">
                                    <h6 class="text-primary mb-1">Ngày đăng</h6>
                                    <small>'.date('d-m-Y', strtotime($value->date_post)).'</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-top border-3 border-success pt-2">
                                    <h6 class="text-success mb-1">Học sinh</h6>
                                    <small>'.$value->zoom->name_zoom.'</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-top border-3 border-warning pt-2">
                                    <h6 class="text-warning mb-1">Môn học</h6>
                                    <small>'.$value->objects->name_object.'</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>';
            }
            $output .= '<div style="display:flex;justify-content:center" data-wow-delay="0.5s">
        
           <div>
               <button id="load_btn" type="button" class="btn btn-primary" data-id="'.$last_id.'">Xem thêm</button>
           </div>
       </div>';
        } else {
            $output .= '';
        }

        echo $output;
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
