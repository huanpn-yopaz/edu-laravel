@section('title')
    Đăng nhập
@endsection
@extends('app')
@section('content')
    <div>
        <div class="container py-3">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                  <h2 class="text-center mt-2">Đăng nhập</h2>
                    <form action="{{url('check_login')}}" method="POST" autocomplete="off">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email</label>
                            <input type="text" id="form1Example13" class="form-control form-control-lg" name="email" value="{{old('email')}}">
                        </div>
                        @error('email')
                            <p class="text-danger"><i class="bi bi-exclamation-triangle mx-1"></i>{{$message}}</p>
                        @enderror

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Mật khẩu</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" value="{{old('password')}}">
                        </div>
                        @error('password')
                            <p class="text-danger"><i class="bi bi-exclamation-triangle mx-1"></i>{{$message}}</p>
                        @enderror

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                        <div class="d-flex justify-content-around align-items-center my-3">
                            Bạn chưa có tài khoản ?<a href="{{url('dang-ki')}}">Đăng kí ngay</a>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">Hoặc</p>
                        </div>

                       <div class="w-100">
                          <a class="btn btn-primary btn-lg btn-block w-100" style="background-color: #e53f19;" href="{{ url('auth/google') }}"
                              role="button">
                              <i class="bi bi-google me-3"></i>Đăng nhập bằng Google
                          </a>
                       </div>

                    </form>
                </div>
            </div>
        </div>
      </div>
@endsection
