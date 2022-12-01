@extends('layouts.personal_layout')

@section('title', "Мои покупки")

@section('content')

    <div class="personal-title personal-content__title">Мои покупки</div>
    <div class="personal-content__row">
        @foreach($journals as $journal)
        <div class="personal-card personal-content__item">
            <a href='{{route('archivejournal', $journal->number)}}' class="personal-card__image">
                <img src="/{{$journal->cover}}" alt="картинка учебника с Петром первым">
            </a>
            <a href='{{route('archivejournal', $journal->number)}}' class="personal-card__title">{{$journal->title}}</a>
            <div class='personal-card-stats'>
                <div class="personal-card-stats__item">Выпуск <span>{{$journal->number}}</span></div>
                @if(date('n', $journal->date) != 7)
                    <div class="personal-card-stats__item">{{$month_list[date('n', $journal->date)]}} <span>{{date('Y', $journal->date)}}</span></div>
                @else
                    <div class="personal-card-stats__item">июль-август <span>{{date('Y', $journal->date)}}</span></div>
                @endif
            </div>
        </div>
        @endforeach

    </div>

@endsection

