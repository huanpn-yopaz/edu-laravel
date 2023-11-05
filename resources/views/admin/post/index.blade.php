@extends('admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Danh sách bài học</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Danh sách bài học</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>

                </ul>
            </div>
        </div>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Thông tin lớp</h3>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên bài</th>
                            <th>Tên giáo viên</th>
                            <th>Ảnh giáo viên</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $key => $value)
                            <tr>
                                <td>
                                    @php
                                        $key++;
                                    @endphp
                                    {{ $key }}
                                </td>
                                <td>{{ $value->name_post }}</td>
                                <td>{{ $value->name_teacher }}</td>
                                <td><img src="{{ asset('image/' . $value->img_teacher) }}" alt=""></td>

                                <td style=" display:flex;gap:0 8px">
                                    <a href="{{ Route('post.edit', [$value->id_post]) }}"><span
                                            class="status completed">Sửa</span></a>
                                    <form action="{{ Route('post.destroy', [$value->id_post]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="status completed" style="border:none">Xóa</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
