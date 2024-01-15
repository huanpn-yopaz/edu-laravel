@section('title')
    Tin Tức
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
                    <li class="breadcrumb-item text-white active" aria-current="page"> Tin Tức</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <form action="{{Route('news.search')}}" method="get">
            <div class="row container mb-4 m-auto">
                <div class="col-sm-8">
                    <div class="form-group">
                       
                        <input required type="text" class="form-control" placeholder="Nhập tên bài viết" name="keyword">
                      </div>
                </div>
                
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary w-100">Tìm kiếm ngay</button>
                </div>
            </div>
        </form>
        <div class="container">
            <div class="row">
                @foreach ($news as $value)
                    
                <div class="col-12 col-md-3 mb-3">
                    <div class="card">
                        <img src="{{$value->image}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$value->name}}</h5>
                            
                            <a href="{{Route('news.show',[$value->slug])}}" class="btn btn-success">Xem chi tiết</a>
                        </div>
                    </div>          
                </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
    <!-- Contact End -->
@endsection
