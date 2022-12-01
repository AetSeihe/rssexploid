@extends('layouts.public_layout')

@section('title', 'Главная')

@section('content')
    <section class="main-section">
        <div class="main-section__container">
            <div class="main-section__slider swiper">
                <div class="main-section__swiper swiper-wrapper">
                    <div class="main-section__slider-item swiper-slide">
                        <div class="main-section__media-block block-media">
                            <div class="block-media__image"><picture><source srcset="{{asset('img/main/prj-img.webp')}}" type="image/webp"><img src="{{asset('img/main/prj-img.png')}}" alt="Изображение проекта"></picture></div>
                        </div>
                        <div class="main-section__info">
                            <div class="main-section__project-name">
                                <h2>Название проекта Название проекта</h2>
                            </div>
                            <div class="main-section__project-organization">
                                <p>Название компании организатора Название компании организатора</p>
                            </div>
                            <a href="" class="main-section__btn btn btn_orange">Подробнее</a>
                        </div>
                    </div>
                    <div class="main-section__slider-item swiper-slide">
                        <div class="main-section__media-block block-media">
                            <div class="block-media__image"><picture><source srcset="{{asset('img/main/prj-img.webp')}}" type="image/webp"><img src="{{asset('img/main/prj-img.png')}}" alt="Изображение проекта"></picture></div>
                        </div>
                        <div class="main-section__info">
                            <div class="main-section__project-name">
                                <h2>Название проекта Название проекта</h2>
                            </div>
                            <div class="main-section__project-organization">
                                <p>Название компании организатора Название компании организатора</p>
                            </div>
                            <a href="" class="main-section__btn btn btn_orange">Подробнее</a>
                        </div>
                    </div>
                    <div class="main-section__slider-item swiper-slide">
                        <div class="main-section__media-block block-media">
                            <div class="block-media__image"><picture><source srcset="{{asset('img/main/prj-img.webp')}}" type="image/webp"><img src="{{asset('img/main/prj-img.png')}}" alt="Изображение проекта"></picture></div>
                        </div>
                        <div class="main-section__info">
                            <div class="main-section__project-name">
                                <h2>Название проекта Название проекта</h2>
                            </div>
                            <div class="main-section__project-organization">
                                <p>Название компании организатора Название компании организатора</p>
                            </div>
                            <a href="" class="main-section__btn btn btn_orange">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-nav">
                <div class="swiper-button-prev _icon-slider-arrow"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next _icon-slider-arrow"></div>
            </div>
        </div>
    </section>
    <section class="courses-catalog">
        <div class="courses-catalog__container">
            <div class="courses-catalog__title title">
                <h2>Лучшие курсы</h2>
            </div>
            <div class="courses-catalog__content">
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp') }}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <button class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</button>

                    </div>
                </div>
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <a class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</a>

                    </div>
                </div>
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <a class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</a>

                    </div>
                </div>
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}'" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <a class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</a>

                    </div>
                </div>
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <a class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</a>

                    </div>
                </div>
                <div class="courses-catalog__item">
                    <div class="courses-catalog__media-block">
                        <picture><source srcset="{{asset('img/main/courses-cat-img.webp')}}" type="image/webp"><img src="{{asset('img/main/courses-cat-img.png')}}" alt="Изображение курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                                    <picture><source srcset="{{asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
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
                        <a class="courses-catalog__details-btn btn btn_blue" href="{{route('course')}}">Подробнее</a>

                    </div>
                </div>
            </div>
            <button class="courses-catalog__btn btn btn_orange">Перейти в каталог</button>
        </div>
    </section>
    <section class="about-project">
        <div class="about-project__container">
            <div class="about-project__content">
                <div class="about-project__info">
                    <div class="about-project__title title">
                        <h2>Название проекта</h2>
                    </div>
                    <div class="about-project__subtitle subtitle">О проекте</div>
                    <div class="about-project__description main-text">
                        Каждый из нас понимает очевидную вещь: перспективное планирование в значительной степени обусловливает важность существующих
                        финансовых и административных условий. Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт
                        предпосылки для экспериментов, поражающих по своей масштабности и грандиозности.
                    </div>
                    <div class="about-project__description main-text">
                        Каждый из нас понимает очевидную вещь: перспективное планирование в значительной степени обусловливает важность существующих
                        финансовых и административных условий. Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт
                        предпосылки для экспериментов, поражающих по своей масштабности и грандиозности.
                    </div>

                </div>
                <div class="about-project__media-block block-media">
                    <div class="block-media__image"><picture><source srcset="{{asset('img/main/prj-img1.webp')}}" type="image/webp"><img src="{{asset('img/main/prj-img1.png')}}" alt="Изображение проекта"></picture></div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="advantages__container">
            <div class="advantages__title title">Наши преимущества</div>
            <div class="advantages__content">
                <div class="advantages__item list__item">
                    <div class="advantages__logo list__logo"><picture><source srcset="{{asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{asset('img/main/adv-logo.png')}}" alt="Преимущество"></picture></div>
                    <div class="advantages__description main-text">
                        <b>«Культура онлайн»</b> — проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
                <div class="advantages__item list__item">
                    <div class="advantages__logo list__logo"><picture><source srcset="{{asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{asset('img/main/adv-logo.png')}}" alt="Преимущество"></picture></div>
                    <div class="advantages__description main-text">
                        <b>«Культура онлайн»</b> — проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
                <div class="advantages__item list__item">
                    <div class="advantages__logo list__logo"><picture><source srcset="{{asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{asset('img/main/adv-logo.png')}}" alt="Преимущество"></picture></div>
                    <div class="advantages__description main-text">
                        <b>«Культура онлайн»</b> — проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
                <div class="advantages__item list__item">
                    <div class="advantages__logo list__logo"><picture><source srcset="{{asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{asset('img/main/adv-logo.png')}}" alt="Преимущество"></picture></div>
                    <div class="advantages__description main-text">
                        <b>«Культура онлайн»</b> — проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

