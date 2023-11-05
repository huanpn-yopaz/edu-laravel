@section('title')
    Bài tập
@endsection
@extends('app')
@section('content')
    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-2">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Bài tập</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Bài tập về nhà</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class=" container">
        <div>
            <strong><p>Câu 1 : Phép tính cộng hai số 1 + 2 = ?</p></strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                   2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau1" id="cau1">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
            <div class="resuft text-success"></div>
            <div class="fail text-danger"></div>
        </div>


        <div>
            <strong><p>Câu 2 : Phép tính trừ hai số 8 - 3 = ?</p></strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau2" id="cau2">
                <label class="form-check-label" for="flexRadioDefault1">
                    5
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau2" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                   2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau2" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau2" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault2">
                    1
                </label>
            </div>
            <div class="resuft2 text-success"></div>
            <div class="fail2 text-danger"></div>
        </div>
        <div>
            <strong><p>Câu 3 : Phép tính nhân hai số 4 x 3 = ?</p></strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    8
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                   16
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau3" id="cau3">
                <label class="form-check-label" for="flexRadioDefault1">
                    12
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau3" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault2">
                    15
                </label>
            </div>
            <div class="resuft3 text-success"></div>
            <div class="fail3 text-danger"></div>
        </div>
        <div>
            <strong><p>Câu 4 : Phép tính chia hai số 8 : 4 = ?</p></strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau4" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    8
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau4" id="cau4">
                <label class="form-check-label" for="flexRadioDefault1">
                   2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau4" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cau4" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault2">
                    1
                </label>
            </div>
            <div class="resuft4 text-success"></div>
            <div class="fail4 text-danger"></div>
        </div>
        <div class="my-4">
            <button id="send" class="btn btn-success mx-2">Nộp bài</button> 
            <button id="reset" class="btn btn-danger">Làm lại</button>
        </div>
    </div>
@endsection
