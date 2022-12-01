@extends('layouts.admin_layout')

@section('title', 'Новости')

@section('content')

<a class="btn btn-primary" href="{{route('news.create')}}">Добавить новость</a>

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
                    Заголовок
                </th>
                <th style="width: 30%" class="text-center">
                    Изображение
                </th>
                <th style="width: 20%">
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $newsone)
                <tr>
                    <td>
                        {{date('d-m-Y', $newsone['date'])}}

                    </td>
                    <td>
                        {{$newsone['title']}}
                    </td>
                    <td  class="text-center">
                        <img style="width:100px;" src="{{'/'.$newsone['img']}}" alt="">
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{ route('news.edit',$newsone['id']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form style="display:inline-block" action="{{ route('news.destroy', $newsone['id']) }}" method="POST">
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
