@extends('layouts.admin_layout')

@section('title', "Редакция")

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Настройки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Сотрудники редакции</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <form action="{{ route('about.update', 1) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card card-body">
                            <div class="form-group col-lg-12">
                                <label for="inputTitle">Текст страницы:</label>
                                <textarea name="text" cols="30" rows="10" class="editor">{{$about['text']}}</textarea>
                            </div>

                            <div class="form-group col-lg-12 mt-3">
                                <button class="btn btn-success">Сохранить</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <a class="btn btn-primary" href="{{ route('redcol.create') }}">Добавить сотрудника редакции</a>
                    <div class="card mt-3">

                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 30%">
                                        Фото
                                    </th>
                                    <th style="width: 50%">
                                        ФИО
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($persons as $person)
                                    <tr>
                                        <td>
                                            <img style="width:100px;" src="{{'/'.$person['img']}}" alt="">
                                        </td>
                                        <td>
                                            {{$person['fio']}}
                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ route('redcol.edit',$person['id']) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <form style="display:inline-block" action="{{ route('redcol.destroy', $person['id']) }}" method="POST">
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
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
