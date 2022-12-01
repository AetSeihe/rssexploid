@extends('layouts.admin_layout')

@section('title', 'Редактировать новость')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('news.update', $news['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="inputDate">Введите дату:</label>
                <input type="date" name="data" value="{{date('Y-m-d', $news['date'])}}" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="feature_image">Изображение</label>
                <img src="/{{$news['img']}}" id="feature_image-upload" alt="" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" value="{{$news['img']}}" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
            </div>

        <div class="form-group col-lg-12">
            <label for="inputTitle">Введите заголовок:</label>
            <input type="text" name="title" value="{{$news['title']}}" class="form-control">
        </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Aнонс:</label>
                <textarea name="anonce" cols="30" rows="10" class="editor">{{$news['anonce']}}</textarea>
            </div>
            <div class="form-group col-lg-12">
                <textarea class="editor" name="text">{{$news['text']}}</textarea>
            </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Автор:</label>
                <input type="text" name="author" value="{{$news['author']}}" class="form-control">
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
