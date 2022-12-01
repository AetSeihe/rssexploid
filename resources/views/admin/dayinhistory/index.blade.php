@extends('layouts.admin_layout')

@section('title', 'Список дней')

@section('content')

<?php
    $month_list = array(
    1  => 'января',
    2  => 'февраля',
    3  => 'марта',
    4  => 'апреля',
    5  => 'мая',
    6  => 'июня',
    7  => 'июля',
    8  => 'августа',
    9  => 'сентября',
    10 => 'октября',
    11 => 'ноября',
    12 => 'декабря'
    );
?>

<a class="btn btn-primary" href="{{route('dayinhistory.create')}}">Добавить день</a>

@if(session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4>
            <i class="icon fa fa-check"></i>{{session('success')}}
        </h4>
    </div>
@endif

<div class="card mt-3">

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th style="width: 20%">
                    Дата
                </th>
                <th style="width: 30%">
                    Название
                </th>
                <th style="width: 30%" class="text-center">
                    Изображение
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($days as $day)
            <tr>
                <td>
                    {{$day['day'] . ' ' . $month_list[$day['month']]}}

                </td>
                <td>
                    {{$day['title']}}
                </td>
                <td  class="text-center">
                    <img style="width:100px;" src="{{'/'.$day['img']}}" alt="">
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('dayinhistory.edit',$day['id']) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Редактировать
                    </a>
                    <form style="display:inline-block" action="{{ route('dayinhistory.destroy', $day['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Удалить
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
