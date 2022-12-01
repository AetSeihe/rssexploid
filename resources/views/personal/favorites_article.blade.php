@extends('layouts.personal_layout')

@section('title', "Избранные статьи")

@section('content')
    <link rel="stylesheet" href="{{ asset('css/favorites.css') }}"/>

    <div class="personal-title personal-content__title">Избранные статьи</div>
    @if(isset($posts))
    <div class="favorites__row">
            @foreach($posts as $post)

            <div class="favorites-item favorites__item">
                <a href="{{ route('journal.post',$post->id) }}" class="favorites-item__image">
                    <img src="{{ asset($post->img)}}" alt="картинка сохраненной новости">
                </a>
                <a href="{{ route('journal.post',$post->id) }}" class="favorites-item__title">{{$post->title}}</a>
                <a href="{{ route('journal.post',$post->id) }}" class="favorites-item__text">{{$post->autor}}</a>
            </div>
            @endforeach

    @endif
    @if(isset($days))

            @foreach($days as $day)

                <div class="favorites-item favorites__item">
                    <a href="{{ route('dayinhistory',['day_id'=>$day->id]) }}" class="favorites-item__image">
                        <img src="{{ asset($day->img)}}" alt="картинка сохраненной новости">
                    </a>
                    <a href="{{ route('dayinhistory',['day_id'=>$day->id]) }}" class="favorites-item__title">{{$day->title}}</a>
                </div>
            @endforeach

    @endif
    @if(isset($pictures))

            @foreach($pictures as $picture)

                <div class="favorites-item favorites__item">
                    <a href="{{ route('picture',$picture->id) }}" class="favorites-item__image">
                        <img src="{{ asset($picture->img)}}" alt="картинка сохраненной новости">
                    </a>
                    <a href="{{ route('picture',$picture->id) }}" class="favorites-item__title">{{$picture->title}}</a>
                </div>
            @endforeach

    @endif
    @if(isset($news))

            @foreach($news as $n)

                <div class="favorites-item favorites__item">
                    
                    <a href="{{ route('news.post',$n->id) }}" class="favorites-item__title">{{$n->title}}</a>
                    <a href="{{ route('news.post',$n->id) }}" class="favorites-item__text">{!!$n->anonce!!}</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection

