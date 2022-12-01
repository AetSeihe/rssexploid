@extends('layouts.admin_layout')

@section('title', 'Добавить сотрудника редакции')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('redcol.store') }}" method="POST">
        @csrf
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="feature_image">Фото</label>
                <img src="" alt="" id="feature_image-upload" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
            </div>

        <div class="form-group col-lg-12">
            <label for="inputTitle">ФИО:</label>
            <input type="text" name="fio" class="form-control">
        </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Анонс для страницы Редакция:</label>
                <textarea class="editor" name="anonce"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Текст:</label>
                <textarea class="editor" name="text"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
