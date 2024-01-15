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
                            <th>Tên</th>
                            <th>Ảnh bai viet</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $key => $value)
                            <tr>
                                <td>
                                    @php
                                        $key++;
                                    @endphp
                                    {{ $key }}
                                </td>
                                <td>{{ $value->name }}</td>
                                <td><img src="{{ $value->image }}" alt=""></td>

                                <td style=" display:flex;gap:0 8px">
                                    <a href="{{ Route('news.edit', [$value->id]) }}"><span
                                            class="status completed">Sửa</span></a>
                                    <form action="{{ Route('news.destroy', [$value->id]) }}" method="post">
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
