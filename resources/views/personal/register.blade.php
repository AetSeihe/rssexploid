@extends('layouts.personal_login')

@section('title', "Регистрация")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth-responsive.css') }}">
    <script src="{{ asset('js/main.js')}}"></script>

    <div class="form-wrapper">
        <div class="form">
            <div class="form-title">
                <a class="header-2" href="{{route('personal.login')}}">Вход</a>
                <div class="divider"></div>
                <h2 class="header-2">Регистрация</h2>
            </div>
            <form class="form-body" action="{{route('personal.register')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label " for="email">E-mail</label>
                    <div class="form-control-addon">
                        <input class="form-control _email _req" type="email" id="email" name="email" placeholder="Введите e-mail" />
                    </div>
                    <div class="form-error__msg"></div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password" >Пароль</label>
                    <div class="form-control-addon">
                        <input class="form-control _pass _req" type="password" id="password" name="password" placeholder="Введите пароль" />
                        <button class="password-toggler addon-btn" type="button"></button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="repeat_password">Повторите пароль</label>
                    <div class="form-control-addon">
                        <input class="form-control _rep-pass _req" type="password" id="repeat_password" name="repeat_password" placeholder="Введите пароль" />
                        <button class="password-toggler addon-btn" type="button"></button>
                    </div>
                </div>
                <button class="btn" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection

