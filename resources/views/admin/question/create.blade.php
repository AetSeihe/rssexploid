@extends('layouts.admin_layout')

@section('title', 'Добавить Вопрос/Ответ')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('question.store') }}" method="POST">
        @csrf
        <div class="card card-body">

        <div class="form-group col-lg-12">
            <label for="inputTitle">Введите вопрос:</label>
            <textarea class="editor" name="question"></textarea>
        </div>

            <div class="form-group col-lg-12">
                <label for="inputTitle">Введите ответ:</label>
                <textarea class="editor" name="answer"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
