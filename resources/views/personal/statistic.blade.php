@extends('layouts.personal_layout')

@section('title', "Статистика")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/statistics.css') }}"/>

    <div class="personal-title personal-content__title">Статистика</div>
    <ul class="statistics__list">
        <li class="statistics__item">Куплено выпусков : <span>{{ $journal_count }}</span></li>
        <li class="statistics__item">Добавлено в "Избранное" : <span>16</span></li>
        <!--<li class="statistics__item">На сайте проведено времени : <span>1 час 40 минут</span></li>-->
        <li class="statistics__item">Понравившиеся статьи : <span>0</span></li>
    </ul>
@endsection

