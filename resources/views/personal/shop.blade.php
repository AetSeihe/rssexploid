@extends('layouts.personal_layout')

@section('title', "Купить выпуск")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}"/>
    <div class="personal-title personal-content__title">Купить выпуск</div>
    <form action="{{ route('personal_shop') }}">
        @csrf
        <div class="personal-search">
            <div class="personal-field__title">Поиск</div>
            <div class='personal-field__input-wrapper'>
                <input class="personal-field__input custom-input" name="headerSearch"
                       placeholder="Введите выпуск или статью" type="search">
                @if(auth()->user()->count_journal_free == 0)
                <div class="personal-field__text">
                    <span>Недостаточно средств для подписки, сначала нужно</span>
                    <strong>пополнить счет.</strong>
                </div>
                @endif
            </div>
        </div>
    </form>
    <div class="personal-content__row">
        @foreach($journals as $journal)
        <div class="personal-card personal-content__item">
            <a href='{{route('archivejournal', $journal['number'])}}' class="personal-card__image">
                <img src="/{{$journal['cover']}}" alt="Изображение выпуска журнала">
            </a>
            <a href='{{route('archivejournal', $journal['number'])}}' class="personal-card__title">{{$journal['title']}}</a>
            <div class='personal-card-stats'>
                <div class="personal-card-stats__item">Выпуск <span>{{$journal['number']}}</span></div>
                                @if(date('n', $journal['date']) != 7)
                    <div class="personal-card-stats__item">{{$month_list[date('n', $journal['date'])]}} <span>{{date('Y', $journal['date'])}}</span></div>
                @else
                    <div class="personal-card-stats__item">июль-август <span>{{date('Y', $journal['date'])}}</span></div>
                @endif
            </div>
            @if(auth()->user()->count_journal_free > 0)
                <form class="journal_pay">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="journal_id" value="{{ $journal['id'] }}">
                    <button type="submit" class="personal-btn shop-btn">Купить</button>
                </form>
            @else
                <button type="submit" class="personal-btn shop-btn">Купить</button>
            @endif
        </div>
        @endforeach
            <div class="pagination">
                {{ $journals->links('paginate_news') }}
            </div>
    </div>

@endsection

