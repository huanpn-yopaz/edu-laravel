@extends('admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Add Post</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Add Post</a>
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
                <form action="{{ Route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" class="input_form" placeholder="Tên bài học" name="name_post">
                        <div><input onchange="loadFile_post(event)" type="file" id="" name="img_post"></div>
                        <img id="img_post" src="{{ url('img/no_img.jpg') }}" alt="" width="20%">
                        <textarea name="video_post" id="" cols="30" rows="10"></textarea>
                        <input type="text" class="input_form" placeholder="Tên giáo viên" name="name_teacher">
                        <div><input onchange="loadFile_teacher(event)" type="file" name="img_teacher"></div>
                        <img id="img_teacher" src="{{ url('img/no_img.jpg') }}" alt="" width="20%">
                        <input type="date" class="input_form" name="date_post">
                        <select name="id_object" id="" style="width:100%;padding:10px">
                            <option value="">Môn học</option>
                            @foreach ($object as $value)
                                <option value="{{ $value->id_object }}">{{ $value->name_object }}</option>
                            @endforeach
                        </select>
                        <select name="id_zoom" id="" style="width:100%;padding:10px;margin:12px 0">
                            <option value="">Lớp</option>
                            @foreach ($zoom as $value)
                                <option value="{{ $value->id_zoom }}">{{ $value->name_zoom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div><button class="btn_form">Thêm</button></div>
                </form>
            </div>

        </div>
    </main>
@endsection
