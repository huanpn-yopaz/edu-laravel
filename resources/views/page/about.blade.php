@section('title')
    Giới thiệu
@endsection
@extends('app')
@section('content')
     <!-- Page Header End -->
     <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Giới thiệu</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{url('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Giới thiệu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">Tìm hiểu thêm về công việc và hoạt động văn hóa của chúng tôi</h1>
                    <p>Giáo dục có mục tiêu cung cấp, trang bị kiến thức, kỹ năng cũng như rèn luyện đạo đức, nhân cách và lối sống cho con người để hòa nhập với cộng đồng của mình</p>
                    <p class="mb-4">Có thể nói, mục tiêu giáo dục tương ứng với mỗi thời đại nhất định trong quá trình phát triển xã hội, bao gồm một hệ thống các yêu cầu xã hội cụ thể, các chuẩn mực của một hình mẫu nhân cách cần hình thành ở một người được giáo dục nhất định. Đối với các giai đoạn phát triển xã hội, mục tiêu giáo dục cũng có nhiều thay đổi</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Đọc thêm</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Linh Đan</h6>
                                    <small>Giáo viên giỏi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about3.jpg" alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about2.jpeg" alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="img/teacher.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Giáo viên nhiệt tình</h1>
                            <p class="mb-4">Là một cô giáo trẻ nhưng có chuyên môn vững vàng, nhiệt tình, uy tín với bạn bè, đồng nghiệp, cô luôn hoàn thành tốt các công việc nhà trường, cấp trên giao phó, có nhiều sáng kiến trong công tác giảng dạy cũng như chủ nhiệm lớp. Tôi thật may mắn khi được là đồng nghiệp của cô
                            </p>
                            <a class="btn btn-primary py-3 px-5" href="">Bắt đầu ngay<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Gương mặt tiêu biểu</h1>
                <p>Giáo viên hàng đầu với kinh nghiệm 10 năm dạy học</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="img/teacher3.jpg" alt="">
                        <div class="team-text">
                            <h3>Hoàng Yến</h3>
                            <p>Giáo viên Toán</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="img/teacher1.jpg" alt="">
                        <div class="team-text">
                            <h3>Bảo Thanh</h3>
                            <p>Giáo viên Tiếng Anh</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="img/teacher2.jpg" alt="">
                        <div class="team-text">
                            <h3>Thu Hường</h3>
                            <p>Giáo viên Văn</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
