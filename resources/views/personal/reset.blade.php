@extends('layouts.personal_login')

@section('title', "Восстановление пароля")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>

    <div class="form-wrapper">
        <div class="form">
            <div class="form-title">
                <h2 class="header-2">Смена пароля</h2>
            </div>
            <form class="form-body" method="post" action="{{route('personal.reset')}}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" value="@if(isset($email)) {{$email}} @endif" placeholder="Введите e-mail" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Новый пароль</label>
                    <div class="form-control-addon">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Введите пароль" />
                        <button class="password-toggler addon-btn" type="button"></button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Повторите пароль</label>
                    <div class="form-control-addon">
                        <input class="form-control" type="password" id="repeat_password" name="repeat_password" placeholder="Введите пароль" />
                        <button class="password-toggler addon-btn" type="button"></button>
                    </div>
                </div>
                <button class="btn" type="submit">Сменить пароль</button>
            </form>
        </div>
    </div>
@endsection

