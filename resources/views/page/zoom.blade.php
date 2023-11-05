@section('title')
@foreach ($post->take(1) as $value)
{{$value->zoom->name_zoom}}
@endforeach
@endsection
@extends('app')
@section('content')
     <!-- Page Header End -->
     <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Thông tin lớp học</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{url('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        @foreach ($post->take(1) as $value)
                        {{$value->zoom->name_zoom}}
                        @endforeach</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Bài giảng hôm nay</h1>
                <p>Với kinh nghiệm của các thầy cô 5 năm trong ngành giáo dục tiểu học</p>
            </div>
            <div class="row g-4">
                @foreach ($post as $value)
                    
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{route('show.post',[$value->id_post, Str::slug($value->name_post)])}}" class="text-decoration-none">
                        <div class="classes-item text-black">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('image/'.$value->img_post)}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4">
                                <p class="d-block text-center h3 mb-4">{{$value->name_post}}</p>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('image/'.$value->img_teacher)}}" alt=""
                                            style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">{{$value->name_teacher}}</h6>
                                            <small>Giáo viên</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Ngày đăng</h6>
                                            <small>{{date('d-m-Y', strtotime($value->date_post))}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Học sinh</h6>
                                            <small>{{$value->zoom->name_zoom}}</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Môn học</h6>
                                            <small>{{$value->objects->name_object}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
