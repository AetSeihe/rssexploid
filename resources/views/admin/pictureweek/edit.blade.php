@extends('layouts.admin_layout')

@section('title', 'Изменить картину')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif
    <form action="{{ route('pictureweek.update', $picture['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="inputDate">Порядковый номер недели года:</label>
                <input type="number" value="{{$picture['weeknumber']}}" name="weeknumber" class="form-control" step="1" min="1" max="53">

            </div>
            <div class="form-group col-lg-4">
                <label for="feature_image">Изображение</label>
                <img src="/{{$picture['img']}}" id="feature_image-upload" alt="" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" value="{{$picture['img']}}" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
            </div>

        <div class="form-group col-lg-12">
            <label for="inputTitle">Введите заголовок:</label>
            <input type="text" value="{{$picture['title']}}" name="title" class="form-control">
        </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Aнонс:</label>
                <textarea name="anonce" cols="30" rows="10" class="editor">{{$picture['anonce']}}</textarea>
            </div>

            <div class="form-group col-lg-12">
                <label for="inputTitle">Текст:</label>
                <textarea class="editor" name="text">{{$picture['text']}}</textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
