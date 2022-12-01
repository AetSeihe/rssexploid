@extends('layouts.public_layout')

@section('title', 'О курсе')

@section('content')
    <section class="course-main">
        <div class="course-main__container">
            <div class="course-main__content">
                <div class="course-main__info">
                    <div class="course-main__heading">
                        <div class="course-main__course-type">
                            <p>Онлайн курс</p>
                        </div>
                        <div class="course-main__course-name title">
                            <h4>Название курса</h4>
                        </div>
                    </div>
                    <div>
                        <div class="course-main__course-predescription main-text">
                            <p>Реализация намеченных плановых заданий создаёт необходимость включения в
                                производственный план целого ряда мероприятий..</p>
                        </div>
                        <div class="course-main__course-description main-text">
                            <p>Краткое описание курса. Возможно его приемущества,
                                Информация о том, почему этот курс самый классный в своем роде и другие курсы вообще не крутые.</p>
                        </div>
                    </div>
                    <div class="course-main__details">
                        <button class="course-main__details-btn btn btn_blue">Купить</button>
                        <button class="course-main__details-btn btn btn_empty">Узнать больше</button>
                    </div>
                </div>
                <div class="course-main__media-block block-media">
                    <div class="block-media__image"><picture><source srcset="{{ asset('img/main/coursepage-img.webp')}}" type="image/webp"><img src="{{ asset('img/main/coursepage-img.png')}}" alt="Изображение проекта"></picture></div>
                </div>
            </div>
        </div>
    </section>
    <section class="for-whom">
        <div class="for-whom__container">
            <div class="for-whom__title title">Кому подойдет курс?</div>
            <div class="for-whom__content">
                <div class="for-whom__item list__item">
                    <div class="for-whom__logo list__logo"><picture><source srcset="{{ asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{ asset('img/main/adv-logo.png')}}" alt="Для кого"></picture></div>
                    <div class="for-whom__description-title title">
                        <h4>«Культура онлайн»</h4>
                    </div>
                    <div class="for-whom__description main-text">
                        Проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
                <div class="for-whom__item list__item">
                    <div class="for-whom__logo list__logo"><picture><source srcset="{{ asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{ asset('img/main/adv-logo.png')}}" alt="Для кого"></picture></div>
                    <div class="for-whom__description-title title">
                        <h4>«Культура онлайн»</h4>
                    </div>
                    <div class="for-whom__description main-text">
                        Проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
                <div class="for-whom__item list__item">
                    <div class="for-whom__logo list__logo"><picture><source srcset="{{ asset('img/main/adv-logo.webp')}}" type="image/webp"><img src="{{ asset('img/main/adv-logo.png')}}" alt="Для кого"></picture></div>
                    <div class="for-whom__description-title title">
                        <h4>«Культура онлайн»</h4>
                    </div>
                    <div class="for-whom__description main-text">
                        Проект Российского фонда культуры в сотрудничестве
                        с Санкт-Петербургским международным культурным форумом о культурных инициативах в интернете.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-advantages">
        <div class="course-advantages__container">
            <div class="course-advantages__title title">Преимущества курса</div>
            <div class="course-advantages__content">
                <div class="course-advantages__media-block">
                    <picture><source srcset="{{ asset('img/main/course-adv1.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-adv1.png')}}" alt="Фото преимущества"></picture>
                </div>
                <div class="course-advantages__info">
                    <div class="course-advantages__item">
                        <div class="course-advantages__item-title subtitle">Заголовок</div>
                        <div class="course-advantages__description main-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                            sem non convallis molestie.
                        </div>
                    </div>
                    <div class="course-advantages__item">
                        <div class="course-advantages__item-title subtitle">Заголовок</div>
                        <div class="course-advantages__description main-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                            sem non convallis molestie.
                        </div>
                    </div>
                    <div class="course-advantages__item">
                        <div class="course-advantages__item-title subtitle">Заголовок</div>
                        <div class="course-advantages__description main-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                            sem non convallis molestie.
                        </div>
                    </div>
                    <div class="course-advantages__item">
                        <div class="course-advantages__item-title subtitle">Заголовок</div>
                        <div class="course-advantages__description main-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                            sem non convallis molestie.
                        </div>
                    </div>
                    <div class="course-advantages__item">
                        <div class="course-advantages__item-title subtitle">Заголовок</div>
                        <div class="course-advantages__description main-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                            sem non convallis molestie.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-program">
        <div class="course-program__container">
            <div class="course-program__title title">Программа курса</div>
            <div data-spollers class="course-program__content accordion">
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 1
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 2
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 3
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 4
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 5
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
                <div class="course-program__item accordion__item">
                    <button type="button" data-spoller class="course-program__accordion__title accordion__title _icon-accord-arrow">
                        Название блока 6
                    </button>
                    <div class="course-program__accordion__body accordion__body main-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam dignissim, sem non convallis molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim,
                        sem non convallis molestie.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="coursepage-lectors">
        <div class="coursepage-lectors__container">
            <div class="coursepage-lectors__title title">
                <h2>Преподаватели курса</h2>
            </div>
            <div class="coursepage-lectors__content swiper">
                <div class="coursepage-lectors__slider swiper-wrapper">
                    <div class="coursepage-lectors__slide swiper-slide">
                        <div class="coursepage-lectors__media-block">
                            <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                        </div>
                        <div class="coursepage-lectors__info">
                            <div class="coursepage-lectors__heading">
                                <div class="coursepage-lectors__lector-name title">
                                    <h4>Имя фамилия</h4>
                                </div>
                                <div class="coursepage-lectors__lector-position subtitle">
                                    <p>Должность</p>
                                </div>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="coursepage-lectors__slide swiper-slide">
                        <div class="coursepage-lectors__media-block">
                            <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                        </div>
                        <div class="coursepage-lectors__info">
                            <div class="coursepage-lectors__lector-name title">
                                <h4>Имя фамилия</h4>
                            </div>
                            <div class="coursepage-lectors__lector-position subtitle">
                                <p>Должность</p>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="coursepage-lectors__slide swiper-slide">
                        <div class="coursepage-lectors__media-block">
                            <picture><source srcset="{{ asset('img/main/course-lector.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-lector.png')}}" alt="Преподаватель курса"></picture>
                        </div>
                        <div class="coursepage-lectors__info">
                            <div class="coursepage-lectors__lector-name title">
                                <h4>Имя фамилия</h4>
                            </div>
                            <div class="coursepage-lectors__lector-position subtitle">
                                <p>Должность</p>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                            <div class="coursepage-lectors__lector-description main-text">
                                <p>
                                    Каждый из нас понимает очевидную вещь: перспективное планирование
                                    в значительной степени обусловливает важность существующих финансовых и административных условий.
                                    Принимая во внимание показатели успешности, новая модель организационной деятельности создаёт предпосылки для экспериментов,
                                    поражающих по своей масштабности и грандиозности.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coursepage-lectors__nav slider-nav">
                <div class="swiper-button-prev _icon-slider-arrow"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next _icon-slider-arrow"></div>
            </div>
        </div>
    </section>
    <section class="course-form">
        <div class="course-form__container">
            <div class="course-form__content">
                <div class="course-form__col">
                    <div class="course-form__price-title title">
                        <p>Стоимость курса</p>
                    </div>
                    <div class="course-form__price-subtitle subtitle">
                        <p>20000 р</p>
                    </div>
                    <div class="course-form__media-block">
                        <picture><source srcset="{{ asset('img/main/course-form.webp')}}" type="image/webp"><img src="{{ asset('img/main/course-form.png')}}" alt="Изображение курса"></picture>
                    </div>
                </div>
                <div class="course-form__col">
                    <div class="course-form__form">
                        <form action="#" class="course-form__form-body form__body">
                            <div class="course-form__title form__title title">
                                <h3>Заголовок</h3>
                            </div>
                            <div class="course-form__form-item form__item">
                                <label for="formEmail" class="course-form__form-label form__label">Email</label>
                                <input data-required="email" data-error="Введен не верный E-mail" id="formEmail" type="text" name="email" class="course-form__form-input form__input" placeholder="Ваш Email">
                            </div>
                            <div class="course-form__form-item form__item">
                                <label for="formName" class="course-form__form-label form__label">ФИО</label>
                                <input data-required data-error="Поле должно быть заполнено" id="formName" type="text" name="name" class="course-form__form-input form__input" placeholder="Ваше ФИО">
                            </div>
                            <div class="course-form__form-item form__item">
                                <label for="formMsg" class="course-form__form-label form__label">Комментарий</label>
                                <textarea data-required data-error="Поле должно быть заполнено" id="formMsg" type="text" name="message" class="course-form__form-input form__input" placeholder="Ваш комментарий"></textarea>
                            </div>
                            <div class="course-form__form-item form__item">
                                <div class="course-form__checkbox checkbox">
                                    <input data-required data-error="Вы должны согласится с условиями обработки персональных данных" data-no-focus-classes id="formAgreement" type="checkbox" name="agreement" class="course-form__checkbox-input checkbox__input">
                                    <label for="formAgreement" class="course-form__form-label checkbox__label "><span>Согласие на обработку персональных данных</span></label>
                                </div>
                            </div>
                            <div class="course-form__form-buttons">
                                <button class="course-form__btn form__submit btn btn_blue">Купить</button>
                                <a href="#" class="course-form__btn btn btn_empty">Узнать больше</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

