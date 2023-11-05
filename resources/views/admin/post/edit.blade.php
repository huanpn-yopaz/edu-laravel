@extends('admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Sửa Post</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Sửa Post</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>

                </ul>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Tạo mới bài giảng</h3>
                </div>
                <form action="{{ Route('post.update', [$post->id_post]) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div>
                        <input type="text" class="input_form" placeholder="Tên bài học" name="name_post"
                            value="{{ $post->name_post }}">
                        <div><input onchange="loadFile_post(event)" type="file" id="" name="img_post"></div>
                        <img id="img_post" src="{{ asset('image/' . $post->img_post) }}" alt="" width="20%">
                        <textarea name="video_post" id="" cols="30" rows="10">{{ $post->video_post }}</textarea>
                        <input type="text" class="input_form" placeholder="Tên giáo viên" name="name_teacher"
                            value="{{ $post->name_teacher }}">
                        <div><input onchange="loadFile_teacher(event)" type="file" name="img_teacher"></div>
                        <img id="img_teacher" src="{{ asset('image/' . $post->img_teacher) }}" alt="" width="20%">
                        <input type="date" class="input_form" name="date_post" value="{{ $post->date_post }}">
                        <select name="id_object" id="" style="width:100%;padding:10px">
                            <option value="">Môn học</option>
                            @foreach ($object as $value)
                                <option value="{{ $value->id_object }}"
                                    @if ($value->id_object == $post->id_object) {{ 'selected' }}
                                    @else
                                        {{ '' }} @endif>
                                    {{ $value->name_object }}</option>
                            @endforeach
                        </select>
                        <select name="id_zoom" id="" style="width:100%;padding:10px;margin:12px 0">
                            <option value="">Lớp</option>
                            @foreach ($zoom as $value)
                                <option value="{{ $value->id_zoom }}"
                                    @if ($value->id_zoom == $post->id_zoom) {{ 'selected' }}
                                @else
                                    {{ '' }} @endif>
                                    {{ $value->name_zoom }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div><button class="btn_form">Cập nhật</button></div>
                </form>
            </div>

        </div>
    </main>
@endsection
