@extends('layouts.admin_layout')

@section('title', 'Редактировать статью')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4>
                <i class="icon fa fa-check"></i>{{session('success')}}
            </h4>
        </div>
    @endif

    <form action="{{ route('post.update', $post['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card card-body">
            <div class="card card-body">
                <div class="form-group col-lg-4">
                    <label for="inputDate">Номер журнала:</label>
                    <input type="number" name="journal_number" class="form-control" value="{{$post['journal_number']}}" step="1" min="1">
                </div>
                <div class="col-lg-4 form-group">
                    <label>Рубрика:</label>
                    <select name="cat_id" class="form-control">
                        @foreach($categories as $cat)
                            <option value="{{$cat['id']}}" @if($cat['id'] == $post['cat_id']) selected @endif>{{$cat['title']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="feature_image">Изображение</label>
                    <img src="/{{$post['img']}}" alt="" id="feature_image-upload" class="img-uploaded mb-1 w-100">
                    <input type="text" name="img" value="{{$post['img']}}" class="form-control mb-1" id="feature_image" readonly name="feature_image" value="">
                    <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение</a>
                </div>

                <div class="form-group col-lg-12">
                    <label for="inputTitle">Введите заголовок:</label>
                    <input type="text" value="{{$post['title']}}" name="title" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                    <label for="inputTitle">Анонс статьи:</label>
                    <textarea class="editor" name="anonce">{{$post['anonce']}}</textarea>
                </div>
                <div class="form-group col-lg-12">
                    <label for="inputTitle">Текст статьи:</label>
                    <textarea class="editor" name="text">{{$post['text']}}</textarea>
                </div>
                <div class="form-group col-lg-12">
                    <label for="inputTitle">Автор:</label>
                    <input type="text" name="autor" value="{{$post['autor']}}" class="form-control">
                </div>
                <div class="form-group form-check col-lg-3">
                    <input class="form-check-input" type="checkbox" name="publish"  <?php echo($post['publish'] == 1 ? "checked" : "") ; ?> value="1" id="flexCheckDefault2">
                    <label class="form-check-label" for="flexCheckDefault2">
                        Опубликовать
                    </label>
                </div>
                <div class="form-group form-check col-lg-3">
                    <input class="form-check-input" type="checkbox" name="subscription"  <?php echo($post['subscription'] == 1 ? "checked" : "") ; ?> value="1" id="flexCheckDefault3">
                    <label class="form-check-label" for="flexCheckDefault3">
                        Требуется подписка
                    </label>
                </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-success">Сохранить</button>
            </div>

        </div>
    </form>
@endsection
