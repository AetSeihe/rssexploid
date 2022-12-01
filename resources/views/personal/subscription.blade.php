@extends('layouts.personal_layout')

@section('title', "Оформить подписку")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/subscription.css') }}"/>
    <div class="personal-content">
    <div class="personal-title personal-content__title">Оформить подписку</div>
        <div class="personal-content__row">
            <div class="personal-sub personal-content__item">
                <div class="personal-sub__image">
                    <img src="{{ asset('img/books/book1.jpg')}}" alt="Подписка на Петра первого">
                    <div class="personal-sub__order">
                        <span>1</span>
                    </div>
                </div>
                <div class="personal-sub-title">
                    <div class="personal-sub-title__text">1 номер</div>
                    <div class="personal-sub-title__cost">100 ₽</div>
                </div>
                <form action="{{ route('payment.create') }}" method="post">
                    @csrf
                      <input type="hidden" name="amount" value="100.00">
                    <input type="hidden" name="description" value="Абонемент 1 номер">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="count_number" value="1">
                <button type="submit" class="personal-btn personal-sub__btn">Купить</button>
                </form>
            </div>
            <div class="personal-sub personal-content__item">
                <div class="personal-sub__image">
                    <img src="{{ asset('img/books/book1.jpg')}}" alt="Подписка на Петра первого">
                    <div class="personal-sub__order">
                        <span>6</span>
                    </div>
                </div>
                <div class="personal-sub-title">
                    <div class="personal-sub-title__text">6 номеров</div>
                    <div class="personal-sub-title__cost">500 ₽</div>
                </div>
                <form action="{{ route('payment.create') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="500.00">
                    <input type="hidden" name="description" value="Абонемент 6 номеров">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="count_number" value="6">
                    <button type="submit" class="personal-btn personal-sub__btn">Купить</button>
                </form>
            </div>
            <div class="personal-sub personal-content__item">
                <div class="personal-sub__image">
                    <img src="{{ asset('img/books/book1.jpg')}}" alt="Подписка на Петра первого">
                    <div class="personal-sub__order">
                        <span>12</span>
                    </div>
                </div>
                <div class="personal-sub-title">
                    <div class="personal-sub-title__text">12 номеров</div>
                    <div class="personal-sub-title__cost">1000 ₽</div>
                </div>
                <form action="{{ route('payment.create') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="1000.00">
                    <input type="hidden" name="description" value="Абонемент 12 номеров">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="count_number" value="12">
                    <button type="submit" class="personal-btn personal-sub__btn">Купить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

