@extends('layouts.personal_login')

@section('title', "Вход в личный кабинет")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth-responsive.css') }}">
    <script src="{{ asset('js/main.js')}}"></script>

    <div class="form-wrapper">
        <div class="form">
            <div class="form-title">
                <h2 class="header-2">Вход</h2>
                <div class="divider"></div>
                <a class="header-2" href="{{ route('personal.register') }}">Регистрация</a>
            </div>
            <form class="form-body" method="post" action="{{ route('personal.login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Введите e-mail" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Пароль</label>
                    <div class="form-control-addon">
                        <input class="form-control _req" type="password" id="password" name="password" placeholder="Введите пароль" />
                        <button class="password-toggler addon-btn" type="button"></button>
                    </div>
                </div>
                <button class="btn" type="submit">Войти</button>
                <a href="{{route('personal.reset')}}">Забыли пароль?</a>
            </form>
        </div>
    </div>
@endsection

