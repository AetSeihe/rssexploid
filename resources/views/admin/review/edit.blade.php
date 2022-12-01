@extends('layouts.admin_layout')

@section('title', 'Редактировать отзыв')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('review.update', $review['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="inputDate">Введите дату:</label>
                <input type="date" name="data" value="{{date('Y-m-d', $review['date'])}}" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="feature_image">Изображение</label>
                <img src="/{{$review['img']}}" id="feature_image-upload" alt="" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" value="{{$review['img']}}" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
            </div>

        <div class="form-group col-lg-12">
            <label for="inputTitle">ФИО:</label>
            <input type="text" name="fio" value="{{$review['fio']}}" class="form-control">
        </div>

            <div class="form-group col-lg-12">
                <label for="inputTitle">Дополнительная информация:</label>
                <input type="text" name="dopinfo" value="{{$review['dopinfo']}}" class="form-control">
            </div>

            <div class="form-group col-lg-12">
                <textarea class="editor" name="text">{{$review['text']}}</textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
