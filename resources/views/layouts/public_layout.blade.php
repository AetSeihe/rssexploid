<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Главная</title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css?_v=20221114204002')}}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <a href="index.html" class="header__logo"><img src="{{asset('img/logo.svg')}}" alt="Logo"></a>
            <div class="header__menu menu">
                <nav class="menu__body">
                    <ul class="menu__list">
                        @if(Auth::guest())
                            <li class="menu__item"><a href="" data-popup="#authPopup" class="menu__link">Личный кабинет</a></li>
                        @else
                        <li class="menu__item"><a href="{{route('personal_account')}}" class="menu__link">Личный кабинет</a></li>
                        @endif
                        <li class="menu__item"><a href="/" class="menu__link">Главная</a></li>
                        <li class="menu__item"><a href="" class="menu__link">О «Культуре онлайн»</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Проекты</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Новости</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Премия</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Партнеры</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <button type="button" class="menu__icon icon-menu"><span></span></button>
        </div>
    </header>
@yield('content')
<footer class="footer">
    <div class="footer__container">
    </div>
</footer>
</div>
<div id="authPopup" aria-hidden="true" class="popup">
    <div class="auth-form__wrapper popup__wrapper">
        <div data-tabs class="auth-form__content popup__content tabs">
            <button data-close type="button" class="popup__close">X</button>
            <nav data-tabs-titles class="auth-form__heading tabs__navigation">
                <button type="button" class="auth-form__heading-item title tabs__title _tab-active">Вход</button>

                <button type="button" class="auth-form__heading-item title tabs__title">Регистрация</button>
            </nav>
            <div data-tabs-body class="tabs__content">
                <div class="tabs__body">
                    <form class="auth-form__form-body form__body" method="post" action="{{ route('personal.login') }}">
                        @csrf
                        <div class="auth-form__form-item form__item">
                            <label for="FormEmailAuth" class="course-form__form-label form__label">Email</label>
                            <input data-required="email" data-error="Введен не верный E-mail" id="aFormEmailAuth" type="text" name="email" class="course-form__form-input form__input" placeholder="Ваш Email">
                        </div>
                        <div class="auth-form__form-item form__item">
                            <label for="formPassAuth" class="course-form__form-label form__label">Пароль</label>
                            <input data-required data-error="Поле должно быть заполнено" id="formPassAuth" type="password" name="password" class="course-form__form-input form__input" autocomplete=off placeholder="Ваш пароль">
                            <button class="form__viewpass _icon-show-pass" type="button"></button>
                        </div>
                        <button type="submit" class="auth-form__btn form__submit btn btn_orange">Войти</button>
                    </form>
                    <a href="#" class="auth-form__remind-pass">Забыли пароль?</a>
                </div>
                <div class="tabs__body">
                    <form class="auth-form__form-body form__body"action="{{route('personal.register')}}" method="post">
                        @csrf
                        <div class="auth-form__form-item form__item">
                            <label for="FormEmailReg" class="course-form__form-label form__label">Имя</label>
                            <input data-required data-error="Поле должно быть заполнено" id="FormNameReg" type="text" name="name" class="course-form__form-input form__input" placeholder="Ваше Имя">
                        </div>
                        <div class="auth-form__form-item form__item">
                            <label for="FormEmailReg" class="course-form__form-label form__label">Фамилия</label>
                            <input data-required data-error="Поле должно быть заполнено" id="FormSurnameReg" type="text" name="surname" class="course-form__form-input form__input" placeholder="Ваша Фамилия">
                        </div>
                        <div class="auth-form__form-item form__item">
                            <label for="FormEmailReg" class="course-form__form-label form__label">Email</label>
                            <input data-required="email" data-error="Введен не верный E-mail" id="FormEmailReg" type="text" name="email" class="course-form__form-input form__input" placeholder="Ваш Email">
                        </div>
                        <div class="auth-form__form-item form__item">
                            <label for="formRegPass" class="course-form__form-label form__label">Пароль</label>
                            <input data-required data-error="Поле должно быть заполнено" id="formPassReg" type="password" name="password" class="course-form__form-input form__input" autocomplete="off" placeholder="Введите пароль">
                            <button class="form__viewpass _icon-show-pass" type="button"></button>
                        </div>
                        <div class="auth-form__form-item form__item">
                            <label for="formPassRegRep" class="course-form__form-label form__label">Повторите пароль</label>
                            <input data-required data-error="Поле должно быть заполнено" id="formPassRegRep" type="password" name="repeat_password" class="course-form__form-input form__input" autocomplete="off" placeholder="Введите пароль">
                            <button class="form__viewpass _icon-show-pass" type="button"></button>
                        </div>
                        <button type="submit" class="auth-form__btn form__submit btn btn_orange">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/app.min.js')}}"></script>
</body>
</html>

