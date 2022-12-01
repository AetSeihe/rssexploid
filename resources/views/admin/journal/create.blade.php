@extends('layouts.admin_layout')

@section('title', 'Новый журнал')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif
    <form action="{{ route('journal.store') }}" method="POST">
        @csrf
        <div class="card card-body">
            <div class="form-group col-lg-4">
                <label for="feature_image">Обложка</label>
                <img src="" alt="" id="feature_image-upload" class="img-uploaded mb-1 w-100">
                <input type="text" name="cover" class="form-control mb-1" id="feature_image" readonly  value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение обложки</a>
            </div>
            <div class="form-group col-lg-4">
                <label for="feature_image2">Изображение на странице</label>
                <img src="" alt="" id="feature_image2-upload" class="img-uploaded mb-1 w-100">
                <input type="text" name="img" class="form-control mb-1" id="feature_image2" readonly value="">
                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image2">Выберите изображение на странице</a>
            </div>

            <div class="form-group col-lg-12">
                <label for="inputTitle">Введите заголовок:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label for="inputDate">Номер:</label>
                <input type="number" name="number" class="form-control" step="1" min="1">
            </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Ссылка:</label>
                <input type="text" name="href" class="form-control">
            </div>
            <div class="form-group col-lg-12">
                <label for="inputTitle">Aнонс:</label>
                <textarea name="text" cols="30" rows="10" class="editor"></textarea>
            </div>
            <div class="form-group col-lg-4 mb-4">
                <label for="inputDate">Введите дату публикации:</label>
                <input type="date" name="data" class="form-control">
            </div>

            <div class="row">
                <div class="form-group form-check col-lg-3 ml-3">
                    <input class="form-check-input" type="checkbox" name="doublejournal" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Двойной
                    </label>
                </div>
                <div class="form-group form-check col-lg-3">
                    <input class="form-check-input" type="checkbox" name="publish"  value="1" id="flexCheckDefault2">
                    <label class="form-check-label" for="flexCheckDefault2">
                        Опубликовать
                    </label>
                </div>
                <div class="form-group form-check col-lg-3">
                    <input class="form-check-input" type="checkbox" name="free" value="1" id="flexCheckDefault3">
                    <label class="form-check-label" for="flexCheckDefault3">
                        Бесплатный
                    </label>
                </div>
            </div>

            <div class="form-group col-lg-12 mt-3">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
