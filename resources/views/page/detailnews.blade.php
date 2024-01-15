@section('title')
    {{$news->name}}
@endsection
@extends('app')
@section('content')
    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4"> Tin Tức</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"> Thông tin tìm kiếm</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
       <div class="container">
        <h4>{{$news->name}}</h4>
        {!!$news->content!!}
       </div>
    </div>
    <!-- Contact End -->
@endsection
