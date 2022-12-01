@extends('layouts.admin_layout')

@section('title', 'Журналы')

@section('content')

<a class="btn btn-primary" href="{{route('journal.create')}}">Новый журнал</a>
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
                <th style="width: 10%">
                    Дата
                </th>
                <th style="width: 10%">
                    Номер
                </th>
                <th style="width: 20%">
                    Назнание
                </th>
                <th style="width: 20%" class="text-center">
                    Обложка
                </th>
                <th style="width: 20%" class="text-center">
                    Изображение
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($journals as $journal)
                <tr>
                    <td>
                        {{date('d-m-Y', $journal['date'])}}

                    </td>
                    <td>
                        {{$journal['number']}}
                    </td>
                    <td>
                        {{$journal['title']}}
                    </td>
                    <td  class="text-center">
                        <img style="width:100px;" src="{{'/'.$journal['cover']}}" alt="">
                    </td>
                    <td  class="text-center">
                        <img style="width:100px;" src="{{'/'.$journal['img']}}" alt="">
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{ route('journal.edit',$journal['number']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form style="display:inline-block" action="{{ route('journal.destroy', $journal['id']) }}" method="POST">
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
