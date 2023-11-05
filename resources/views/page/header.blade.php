 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="{{url('/')}}" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Huấn</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{url('/')}}" class="nav-item nav-link {{Request::segment(1)== '' ? 'active' : ''}}">Trang chủ</a>
            <a href="{{url('gioi-thieu')}}" class="nav-item nav-link {{Request::segment(1)== 'gioi-thieu' ? 'active' : ''}}">Giới thiệu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{Request::segment(1)== 'mon-hoc' ? 'active' : ''}}" data-bs-toggle="dropdown">Môn học</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    @foreach ($object as $value) 
                <a href="{{Route('show.object',[$value->id_object, Str::slug($value->name_object)])}}" class="dropdown-item {{Request::segment(2)== $value->id_object.'-'.Str::slug($value->name_object) ? 'active-list' : ''}}">{{$value->name_object}}</a>
                @endforeach
                </div>
            </div>
            <a href="{{url('bai-tap')}}" class="{{Request::segment(1)== 'bai-tap' ? 'active' : ''}} nav-item nav-link">Bài tập</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{Request::segment(1)== 'hoc-sinh' ? 'active' : ''}}" data-bs-toggle="dropdown">Lớp</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    @foreach ($zoom as $value) 
                    <a href="{{Route('show.zoom',[$value->id_zoom, Str::slug($value->name_zoom)])}}" class="dropdown-item {{Request::segment(2)== $value->id_zoom.'-'.Str::slug($value->name_zoom) ? 'active-list' : ''}}">{{$value->name_zoom}}</a>
                    @endforeach
                   
                </div>
            </div>

            <a href="{{url('lien-he')}}" class="nav-item nav-link {{Request::segment(1)== 'lien-he' ? 'active' : ''}}">Liên hệ</a>
            
            
            @if (Auth::check())
            <div class="d-lg-none nav-item d-flex">
                <div>Xin chào {{Auth::user()->name}}</div>
                <div>
                    <form action="{{url('logout')}}" method="post">
                        @csrf
                        <button class="text-primary" type="submit" style="border:none;background-color:transparent;">Đăng xuất</button>
                    </form>
                </div>
               
            </div>
            @else   
            <a href="{{url('dang-nhap')}}" class="d-lg-none nav-item nav-link {{Request::segment(1)== 'dang-nhap' ? 'active' : ''}}">Đăng nhập</a>
            @endif

            @if (Auth::check())
            <a href="{{ url('doi-mat-khau')}}" class="d-lg-none nav-item nav-link">Đổi mật khẩu</a>  
            @endif
            
            
        </div>
        @if (Auth::check())
        <form action="{{url('logout')}}" method="post">
            @csrf
            <button type="submit" style="border-radius: 100px;border:none;background-color:transparent"><div class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Đăng xuất<i class="fa fa-arrow-right ms-3"></i></div></button>
        </form>
        @else
        <a href="{{url('dang-nhap')}}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Đăng nhập<i class="fa fa-arrow-right ms-3"></i></a>
        @endif
       
    </div>
</nav>
<!-- Navbar End -->