@extends('layouts.admin_layout')

@section('title', "Редактирование журнала №".$journal['number'].' от '.date('d-m-Y', $journal['data']))

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
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Статьи ({{$posts->count()}})</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <form action="{{ route('journal.update', $journal['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card card-body">
                            <div class="form-group col-lg-4">
                                <label for="feature_image">Обложка</label>
                                <img src="/{{$journal['cover']}}" alt="" id="feature_image-upload" class="img-uploaded mb-1 w-100">
                                <input type="text" name="cover" class="form-control mb-1" id="feature_image" readonly  value="{{$journal['cover']}}">
                                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image">Выберите изображение обложки</a>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="feature_image2">Изображение на странице</label>
                                <img src="/{{$journal['img']}}" alt="" id="feature_image2-upload" class="img-uploaded mb-1 w-100">
                                <input type="text" name="img" class="form-control mb-1" id="feature_image2" readonly value="{{$journal['img']}}">
                                <a href="" class="btn btn-primary popup_selector" data-inputid="feature_image2">Выберите изображение на странице</a>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="inputTitle">Введите заголовок:</label>
                                <input type="text" value="{{$journal['title']}}" name="title" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDate">Номер:</label>
                                <input type="number" name="number" value="{{$journal['number']}}"class="form-control" step="1" min="1">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="inputTitle">Ссылка:</label>
                                <input type="text" value="{{$journal['href']}}" name="href" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="inputTitle">Aнонс:</label>
                                <textarea name="text" cols="30" rows="10" class="editor">{{$journal['text']}}</textarea>
                            </div>
                            <div class="form-group col-lg-4 mb-4">
                                <label for="inputDate">Введите дату публикации:</label>
                                <input type="date" value="{{date('Y-m-d', $journal['date'])}}"name="data" class="form-control">
                            </div>

                            <div class="row">
                                <div class="form-group form-check col-lg-3 ml-3">
                                    <input class="form-check-input" type="checkbox" name="doublejournal" <?php echo($journal['doublejournal']==1 ? "checked" : "") ; ?> value="1" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Двойной
                                    </label>
                                </div>
                                <div class="form-group form-check col-lg-3">
                                    <input class="form-check-input" type="checkbox" name="publish"  <?php echo($journal['publish']==1 ? "checked" : "") ; ?> value="1" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Опубликовать
                                    </label>
                                </div>
                                <div class="form-group form-check col-lg-3">
                                    <input class="form-check-input" type="checkbox" name="free" <?php echo($journal['free']==1 ? "checked" : "") ; ?> value="1" id="flexCheckDefault3">
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
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <a class="btn btn-primary" href="{{ route('post.create', ['journal_number' => $journal['number']]) }}">Добавить статью</a>
                    <div class="card mt-3">

                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 10%">
                                        Дата
                                    </th>
                                    <th style="width: 20%">
                                        Заголовок
                                    </th>
                                    <th style="width: 20%">
                                        Рубрика
                                    </th>
                                    <th style="width: 20%">
                                        Опубликовано
                                    </th>
                                    <th style="width: 30%" class="text-center">
                                        Изображение
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            {{date('d-m-Y', $post['date'])}}

                                        </td>
                                        <td>
                                            {{$post['title']}}
                                        </td>
                                        <td>
                                            @if(isset($post->category['title']))
                                            {{$post->category['title']}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($post['publish'] == 1)
                                                Да
                                            @else
                                                Нет
                                            @endif
                                        </td>
                                        <td  class="text-center">
                                            <img style="width:100px;" src="{{'/'.$post['img']}}" alt="">
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ route('post.edit',$post['id']) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <form style="display:inline-block" action="{{ route('post.destroy', $post['id']) }}" method="POST">
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
