@extends('layouts.public_layout')

@section('title', "Личный кабинет")

@section('content')
    <section class="personal-account">
        <div class="personal-account__container">
            <div data-tabs class="personal-account__content tabs">
                <div class="personal-account__sidebar">
                    <div class="personal-account__user-menu">
                        <div class="personal-account__user-info">
                            <div class="personal-account__user">
                                <div class="personal-account__user-name">
                                    {{auth()->user()->first_name .' '. auth()->user()->last_name}}
                                </div>
                                <div class="personal-account__user-contacts">
                                    <div class="user-contacts__item">{{auth()->user()->email}}</div>
                                    <div class="user-contacts__item">8 000 000 00 00</div>
                                </div>
                            </div>
                            <div class="personal-account__settings">
                                <a class="settings__btn" href="#"><img src="{{asset('img/custom-icons-font/settings.svg')}}" alt="Настройки"></a>
                            </div>
                        </div>
                        <div class="personal-account__user-action">
                            <a class="user-action__item item_active" href="{{route('personal_account')}}">Личный кабинет</a>
                            <a class="user-action__item" href="{{route('personal.logout')}}">Выход</a>
                        </div>
                    </div>
                    <nav data-tabs-titles class="personal-account__sidebar tabs__navigation">
                        <button type="button" class="personal-account__sidebar-item tabs__title _tab-active">Все курсы</button>
                        <button type="button" class="personal-account__sidebar-item tabs__title">Мои курсы</button>
                        <button type="button" class="personal-account__sidebar-item tabs__title">Завершенные</button>
                        <button type="button" class="personal-account__sidebar-item tabs__title">Мои достижения</button>
                        <button type="button" class="personal-account__sidebar-item tabs__title">Избранное</button>
                        <button type="button" class="personal-account__sidebar-item tabs__title">Сообщения</button>
                    </nav>
                </div>
                <div data-tabs-body class="personal-account__content-box tabs__content">

                    <div class="tabs__body">
                        <div class="courses-catalog__title title">
                            <h2>Лучшие курсы</h2>
                        </div>
                        <div class="courses-catalog__content tabs__body">
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__body">
                        <div class="courses-catalog__title title">
                            <h2>Мои курсы</h2>
                        </div>
                        <div class="courses-catalog__content tabs__body">
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__body">
                        <div class="courses-catalog__title title">
                            <h2>Завершенные</h2>
                        </div>
                        <div class="courses-catalog__content tabs__body">
                            <div class="courses-catalog__item">
                                <div class="courses-catalog__media-block">
                                    <picture><source srcset="{{ asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
                                </div>
                                <div class="courses-catalog__course-period">
                                    <p>12 месяцев</p>
                                </div>
                                <div class="courses-catalog__course-name subtitle">
                                    <h4>Название курса</h4>
                                </div>
                                <div class="courses-catalog__course-description main-text">
                                    <p>Краткое описание курса. Возможно его приемущества,
                                        Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                                </div>
                                <div class="courses-catalog__course-lectors course-lectors">
                                    <div class="course-lectors__title subtitle">
                                        <h5>Преподаватели</h5>
                                    </div>
                                    <div class="course-lectors__content">
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                        <div class="course-lectors__item">
                                            <div class="course-lectors__lector-img">
                                                <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                                            </div>
                                            <div class="course-lectors__lector-name">
                                                <p>Имя Фамилия</p>
                                            </div>
                                            <div class="course-lectors__lector-position">
                                                <p>Должность</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-catalog__details">
                                    <button class="courses-catalog__details-btn btn btn_blue">Подробнее</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

