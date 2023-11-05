@section('title')
{{$post->name_post}}
@endsection
@extends('app')
@section('content')
     <!-- Page Header End -->
     <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Thông tin bài giảng</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{url('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{$post->name_post}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div>
        <div class="container">
            {!!$post->video_post!!}
        </div>
        <div class="accordion my-3" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Thông tin bài học
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <strong>Tên bài học :</strong>  {{$post->name_post}} <br>
                        <strong>Môn học :</strong>  {{$post->objects->name_object}} <br>
                        <strong>Học sinh lớp :</strong>  {{$post->zoom->name_zoom}}<br>
                        <strong>Ngày đăng :</strong>  {{date('d-m-Y', strtotime($post->date_post))}}<br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Thông tin giảng viên
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>Đó là cô {{$post->name_teacher}} </strong>một cô giáo còn rất trẻ, cô dậy môn văn. Ngày đầu tiên khi cô vào dậy lớp tôi cô mặc một chiếc áo dài màu trắng, trông cô thật trẻ trung và năng động. Cô dành một tiết đầu tiên để làm quen với lớp và tự giới thiệu về bản thân mình. Ngay từ những tiết học đầu tiên, cô đã cho tôi một quan niệm hoàn toàn khác về môn văn. Môn văn đối với tôi từ trước cho đến nay là một môn cực kì khó nhưng mỗi lời cô giảng giải khiến tôi như được bước vào một thế giới khác, một thế giới mà tôi có thể thỏa sức tưởng tượng và cho tôi biết thêm về tình yêu thương về tình cảm về mọi mặt trong xã hội. Cô không hắt hủi hay chê bai những đứa học kém như tôi mà thậm chí cô còn luôn quan tâm chỉ bảo một cách tận tình.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Đánh giá phụ huynh
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        
                        <div class="fb-comments" data-href="https://huanadmin.000webhostapp.com" data-width=""
                            data-numposts="5"></div>
                            <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0"
                            nonce="vz2yCzPx"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
