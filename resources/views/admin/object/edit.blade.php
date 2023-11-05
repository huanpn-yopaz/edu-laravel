@extends('admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Edit object</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Edit object</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>

                </ul>
            </div>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Sửa lớp</h3>
                </div>
                <form action="{{ Route('object.update', [$object->id_object]) }}" method="post">
                    @method('put')
                    @csrf
                    <div>
                        <input type="text" class="input_form" value="{{ $object->name_object }}" name="name_object">
                    </div>
                    <div><button class="btn_form">Sửa</button></div>
                </form>
            </div>

        </div>
    </main>
@endsection
