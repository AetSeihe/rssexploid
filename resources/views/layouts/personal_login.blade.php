<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Историк</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope&family=Playfair+Display:wght@400;500;700&family=Raleway:wght@600;700;800&display=swap" />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}"/>
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

</head>
<body>
<div class="overlay"></div>
<div class="wrapper">
<header class="header">
    <div class="header__container">
        <div>
            <a href="/" class="header__logo">Историк</a>
        </div>
        <div class="header__menu">
            <a href="" class="back-btn">Назад</a>
            <a href="#menu" class="burger-menu"><span></span></a>
            <nav id="menu" class="menu__body">
                <ul class="menu__list">
                    <li class="menu__item"><a href="{{route('personal.login')}}" class="menu__link">Личный кабинет</a></li>
                    <li class="menu__item"><a href="{{route('journal')}}" class="menu__link">Журнал</a>
                    </li>
                    <li class="menu__item"><a href="{{route('news')}}" class="menu__link">Актуально</a>
                        <div class="dropdown">
                            <div class="dropdown-content">
                                <a href="{{route('news')}}">Новости</a>
                                <a href="{{route('pictures')}}">Картина недели</a>
                                <a href="{{route('dayinhistory')}}">День в истории</a>
                            </div>
                        </div></li>
                    <li class="menu__item"><a href="#" class="menu__link">Архив</a>
                        <div class="dropdown">
                            <div class="dropdown-content">
                                <a href="{{route('journalarchive')}}">Архив</a>
                                <a href="{{route('videoarchive')}}">Архив видео</a>
                            </div>
                        </div>
                    </li>
                    <li class="menu__item"><a href="{{route('about')}}" class="menu__link">О нас</a>
                        <div class="dropdown">
                            <div class="dropdown-content">
                                <a href="{{route('about')}}">Редакция</a>
                                <a href="@if(Auth::guest()) {{route('personal.login')}} @else {{route('personal_shop')}} @endif">Где купить</a>
                                <a href="{{route('faq')}}">Вопрос-ответ</a>
                                <a href="{{route('contacts')}}">Контакты</a>
                            </div>
                        </div>
                    </li>
                    <li class="menu__item">
                        <div class="search-wrap">
                            <form action="{{route('search')}}" method="get">
                                <input class="custom-input search-input" name="headerSearch" autocomplete="off" placeholder="Введите, что вас интересует" type="search">
                                <button class="search-btn" type="submit"></button>
                                <span class="search-icon">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 23L17.925 17.9251M20.6668 11.3331C20.6668 16.4877 16.4881 20.6663 11.3334 20.6663C6.1787 20.6663 2 16.4877 2 11.3331C2 6.17858 6.1787 2 11.3334 2C16.4881 2 20.6668 6.17858 20.6668 11.3331Z" stroke="#F6EFDE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                </span>
                            </form>
                        </div>
                    </li>
                </ul>
                <ul class="burger__list">
                    <li class="menu__item burger__item"><a href="{{route('personal.login')}}" class="menu__link">Личный кабинет</a></li>
                    <li class="menu__item burger__item"><a href="#" class="menu__link search__link">Поиск</a>
                        <form class="mobile-search" action="{{route('search')}}" method="get">
                            <input class="custom-input" name="headerSearch" placeholder="Введите, что вас интересует" type="search">
                            <button class="search-btn" type="submit"></button>
                        </form>
                    </li>
                    <li class="menu__item burger__item"><a href="{{route('journal')}}" class="menu__link">Журнал</a></li>
                    <li class="menu__item burger__item"><a href="{{route('news')}}" class="menu__link">Новости</a></li>
                    <li class="menu__item burger__item"><a href="{{route('dayinhistory')}}" class="menu__link">День в истории</a></li>
                    <li class="menu__item burger__item"><a href="{{route('news')}}" class="menu__link">Актуально</a></li>
                    <li class="menu__item burger__item"><a href="{{route('pictures')}}" class="menu__link">Картина недели</a></li>
                    <li class="menu__item burger__item"><a href="{{route('journalarchive')}}" class="menu__link">Архив</a></li>
                    <li class="menu__item burger__item"><a href="{{route('videoarchive')}}" class="menu__link">Видео</a></li>
                    <li class="menu__item burger__item"><a href="{{route('about')}}" class="menu__link">О нас</a></li>
                    <li class="menu__item burger__item"><a href="@if(Auth::guest()) {{route('personal.login')}} @else {{route('personal_shop')}} @endif" class="menu__link">Где купить</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

        @yield('content')

</div>
<script src="{{ asset('js/menu.js')}}"></script>
<script src="{{ asset('js/toggleMobileSearch.js')}}"></script>
<script src="{{ asset('js/slick.js')}}"></script>
<script src="{{ asset('js/slider-bg.js')}}"></script>
<script src="{{ asset('js/popups.js')}}"></script>
</body>
</html>

