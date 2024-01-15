<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <title>Admin</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="{{ url('/') }}" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Laravel</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ url('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/object') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Môn học</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('object.create') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Thêm môn học</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/zoom') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Lớp</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('zoom.create') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Thêm lớp</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('post.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Bài giảng</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('post.create') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Tạo bài giảng</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('news.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Bài viet</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('news.create') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Tạo bài viet</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" style="border: none">Logout</button>
                        </form>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Laravel</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('img/icon.png') }}">
            </a>
        </nav>
        @yield('content')
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

    <script>
        $(document).ready(function() {
            $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('video_post');
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script>
        var loadFile_post = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var img_post = document.getElementById('img_post');
                img_post.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile_teacher = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var img_teacher = document.getElementById('img_teacher');
                img_teacher.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
</body>

</html>
