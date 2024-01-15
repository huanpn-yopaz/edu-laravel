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
                    <h3>Tạo viet mới</h3>
                </div>
                <form action="{{ Route('news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" class="input_form" placeholder="Tên bài viet" name="name">
                        <div><input type="file" id="" name="image"></div> <br>
                        <textarea id="summernote" name="content"></textarea>
                    </div>
                    <div><button class="btn_form">Thêm</button></div>
                </form>
            </div>

        </div>
    </main>
@endsection
