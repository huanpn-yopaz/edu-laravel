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
                    <h3>cap nhat mới bài giảng</h3>
                </div>
                <form action="{{ Route('news.update', [$news->id]) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div>
                        <input type="text" class="input_form" placeholder="Tên bài viet" name="name" value="{{$news->name}}">
                        <div><input type="file" id="" name="image"></div> <br>
                        <img src="{{$news->image}}" alt="" width="30">
                        <textarea id="summernote" name="content">{{$news->content}}</textarea>
                    </div>
                    <div><button class="btn_form">Thêm</button></div>
                </form>
            </div>

        </div>
    </main>
@endsection
