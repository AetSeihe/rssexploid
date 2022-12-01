@extends('layouts.admin_layout')

@section('title', 'Редактирование дня')
<?php
if( $day['month'] < 10) $day['month'] = '0'. $day['month'];
?>
@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif
    <form action="{{ route('dayinhistory.update', $day['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="inputDate">Введите дату:</label>
                <input type="date" value="{{$day['year'] . '-' . $day['month'] . '-' . $day['day'] }}" name="data" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="feature_image">Изображение</label>
                <img src="/{{$day['img']}}" id="feature_image-upload" alt="" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" value="{{$day['img']}}" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
            </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Введите заголовок:</label>
                <input type="text" value="{{$day['title']}}" name="title" class="form-control">
            </div>
            <div class="form-group col-lg-12">
                <textarea class="editor" name="text">{{$day['text']}}</textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>


    </form>
@endsection

