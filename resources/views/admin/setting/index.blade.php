@extends('layouts.admin_layout')

@section('title', 'Настройки')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif
    <form action="{{ route('setting.update', $settings['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="row">
            <div class="form-group col-lg-4">
                <label for="inputDate">Название сайта:</label>
                <input type="text" value="{{$settings['name']}}" name="name" class="form-control">

            </div>
            <div class="form-group col-lg-12">
            <label for="inputTitle">Описание сайта:</label>
            <input type="text" value="{{$settings['description']}}" name="description" class="form-control">
        </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Адрес:</label>
                <input type="text" value="{{$settings['address']}}" name="address" class="form-control">
            </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="inputTitle">Номер телефона</label>
                    <input type="text" value="{{$settings['phone']}}" name="phone" class="form-control">
                </div>
                <div class="form-group col-lg-3">
                    <label for="inputTitle">E-mail:</label>
                    <input type="text" value="{{$settings['email']}}" name="email" class="form-control">
                </div>
                <div class="form-group col-lg-3">
                    <label for="inputTitle">VK:</label>
                    <input type="text" value="{{$settings['vk']}}" name="vk" class="form-control">
                </div>
                <div class="form-group col-lg-3">
                    <label for="inputTitle">Telegram:</label>
                    <input type="text" value="{{$settings['tg']}}" name="tg" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="inputTitle">Политика конфиденциальности:</label>
                    <input type="text" value="{{$settings['konfpolicy']}}" name="konfpolicy" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputTitle">Соглашение на обработку персональных данных:</label>
                    <input type="text" value="{{$settings['persondata']}}" name="persondata" class="form-control">
                </div>

            </div>
<div class="row">
    <div class="form-group col-lg-12">
        <button class="btn btn-success">Сохранить</button>
    </div>
</div>
        </div>
    </form>
@endsection
