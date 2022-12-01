@extends('layouts.admin_layout')

@section('title', 'Добавить рубрику')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="card card-body">
        <div class="form-group col-lg-12">
            <label for="inputTitle">Название рубрики:</label>
            <input type="text" name="title" class="form-control">
        </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Ссылка:</label>
                <input type="text" name="href" class="form-control">
            </div>

            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
