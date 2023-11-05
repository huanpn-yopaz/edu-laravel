@section('title')
    Đổi mật khẩu
@endsection
@extends('app')
@section('content')
    <div>
        <div class="container py-3">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{asset('img/login.svg')}}" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                  <h2 class="text-center mt-2">Đổi mật khẩu</h2>
                    <form action="{{ Route('doi-mat-khau.update', [Auth::user()->id]) }}" method="POST" autocomplete="off">
                        @method('put')
                        @csrf
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Nhập mật khẩu mới</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" value="">
                        </div>
                        @error('password')
                            <p class="text-danger"><i class="bi bi-exclamation-triangle mx-1"></i>{{$message}}</p>
                        @enderror

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Đổi mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
@endsection
