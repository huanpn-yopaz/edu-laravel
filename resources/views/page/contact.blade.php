@section('title')
    Liên hệ
@endsection
@extends('app')
@section('content')
    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Liên hệ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Liên hệ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Thông tin liên lạc</h1>
                <p>
                    Website demo Laravel + Boostrap coder by Phạm Như Huấn liên quan về chủ để giáo dục và học trực tuyến cho trẻ
                </p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h6>Nam Từ Liêm - Hà Nội</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h6>phuan3366@gmail.com</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h6>+0382 679 151</h6>
                </div>
            </div>
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <p class="mb-4">Mọi thông tin liên hệ xin gửi qua biểu mẫu sau</p>
                            <form autocomplete="off">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name" placeholder="ho va ten">
                                            <label for="name">Họ và Tên</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control border-0" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Số điện thoại</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Địa chỉ</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Mô tả</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Gủi ngay</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.100063036682!2d105.79046867397054!3d20.988625689158354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc81203b6fb%3A0xca13b32bc344a9b0!2zMTI1IFAuIFBow7luZyBLaG9hbmcsIFRydW5nIFbEg24sIEjDoCDEkMO0bmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1695743407474!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
