@section('title')
    Trang chủ
@endsection
@extends('app')
@section('content')
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-4">Việc học là quan trọng</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Việc học là rất quan trọng trong cuộc sống
                                    của con người và có ảnh hưởng lớn đến nhiều mặt khác nhau của cuộc sống</p>
                                <a href="{{ url('gioi-thieu') }}"
                                    class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Tìm hiểu
                                    thêm</a>
                                <a href="{{ url('lien-he') }}"
                                    class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Liên hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown mb-4">Lợi ích của việc học</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Việc học và có được bằng cấp cao hơn giúp con
                                    người có nhiều cơ hội hơn để tìm được việc làm tốt hơn</p>
                                <a href="{{ url('gioi-thieu') }}"
                                    class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Tìm hiểu
                                    thêm</a>
                                <a href="{{ url('lien-he') }}"
                                    class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Liên hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <form action="{{url('tim-kiem')}}" method="get">
        <div class="row container mb-2 m-auto">
            <div class="col-sm-4">
                <select class="form-select" aria-label="Default select example" name="id_object">
                    <option value="">Môn học</option>
                    @foreach ($object as $value) 
                    <option value="{{$value->id_object}}">{{$value->name_object}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4 m-sm-0 my-4">
                <select class="form-select" aria-label="Default select example" name="id_zoom">
                    <option value="">Lớp</option>
                    @foreach ($zoom as $value) 
                    <option value="{{$value->id_zoom}}">{{$value->name_zoom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary w-100">Tìm kiếm ngay</button>
            </div>
        </div>
    </form>
    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Bài giảng hôm nay</h1>
                <p>Với kinh nghiệm của các thầy cô 5 năm trong ngành giáo dục tiểu học</p>
            </div>
            <div class="row g-4" id="all_post">
                {{-- @foreach ($post as $value)
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{Route('show.post',[$value->id_post, Str::slug($value->name_post)])}}" class="text-decoration-none">
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
                @endforeach --}}

            </div>
        </div>
    </div>
    
    <!-- Facilities Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Môn học yêu thích</h1>

            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item">
                        <div class="facility-icon bg-primary">
                            <span class="bg-primary"></span>
                            <i class="bi bi-emoji-frown-fill fa-3x text-primary"></i>

                            <span class="bg-primary"></span>
                        </div>
                        <div class="facility-text bg-primary">
                            <h3 class="text-primary mb-3">Toán</h3>
                            <p class="mb-0">Học Toán giúp học sinh tăng cường trí nhớ, phản xạ nhanh và khả năng suy luận
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="facility-item">
                        <div class="facility-icon bg-success">
                            <span class="bg-success"></span>
                            <i class="bi bi-emoji-sunglasses-fill fa-3x text-success"></i>

                            <span class="bg-success"></span>
                        </div>
                        <div class="facility-text bg-success">
                            <h3 class="text-success mb-3">Tiếng Việt</h3>
                            <p class="mb-0">Biểu hiện qua việc trẻ đọc thông thạo và hiểu đúng ý nghĩa một văn bản ngắn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="facility-item">
                        <div class="facility-icon bg-warning">
                            <span class="bg-warning"></span>

                            <i class="bi bi-emoji-heart-eyes-fill fa-3x text-warning"></i>
                            <span class="bg-warning"></span>
                        </div>
                        <div class="facility-text bg-warning">
                            <h3 class="text-warning mb-3">Tiếng Anh</h3>
                            <p class="mb-0">Bé sẽ hiểu thêm về lối sống, phong tục, con người, xã hội và nhiều điều hay
                                ho
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="facility-item">
                        <div class="facility-icon bg-info">
                            <span class="bg-info"></span>
                            <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                            <span class="bg-info"></span>
                        </div>
                        <div class="facility-text bg-info">
                            <h3 class="text-info mb-3">Nghe và Đọc</h3>
                            <p class="mb-0">Đọc và nghe là hai kĩ năng sẽ giúp bạn phát triển khả năng cảm thụ ngôn ngữ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->
    <!-- Classes Start -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="text-center mx-auto mb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-1">Đánh giá học sinh</h1>
                <p>Cùng xem những đánh giá của các bạn khi học tại Laravel + Boostrap</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <p class="fs-5">
                        Chân thành cảm ơn thầy cô rất nhiều, em đã tích lũy được nhiều kinh nghiệm đáng giá và
                        nâng cao chất lượng</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/comment1.jpeg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Hoàng Tiến Nam</h3>
                            <span>Học sinh Lớp 1</span>
                        </div>

                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <p class="fs-5">
                        Những bài giảng, tài liệu phong phú từ Giải pháp PEN đã giúp ích rất nhiều cho em để đạt được kết
                        quả ngày hôm nay</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/comment2.jpeg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Nguyễn Đình Bảo</h3>
                            <span>Học sinh lớp 2</span>
                        </div>

                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <p class="fs-5">
                        Em muốn gửi lời cảm ơn đến thầy Vũ Khắc Ngọc ạ. Nhờ kiến thức của thầy truyền đạt mà em có thể nắm
                        vững</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/comment3.jpg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Phạm Hoàng Long</h3>
                            <span>Học sinh lớp 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
