@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="animation-single-int">

            <h2>{{ $infoCurrentRoute['title'] }}</h2>
            <br>
            {{-- <div class="animation-img mg-b-15 col-md-12">
                <img class="animate-one" src="{{ $information->getBackground() }}" alt="{{ $information->getBackground() }}"/>
            </div> --}}

            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $information->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="animation-ctn-hd">
                    <center>
                        <p>Текст процесса: {{ $information->process ?? "Не указано" }}</p>
                        <h1>{{ $information->title }}</h1>
                        <p>Текст клиента: {{ $information->clients ?? "Не указано" }}</p>
                        <p>
                            Ссылка на видео: <a href="{{ $information->video ?? "Не указано" }}" target="_blank">{{ $information->video ?? "Не указано" }}</a>
                        </p>
                        <p>Ссылка: {{ $information->description }}</p>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" {{ $information->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        Активировать
                                    </label>
                                </div>
                            </div>
                        </div>

                    </center>

                    {{-- <div class="breadcomb-list col-md-12">
                        <hr>
                        <center>
                            <div class="image-crp-img">
                                <h4>Создать шапку сайта</h4>
                                <p>Загрузить Фоновый изображение (1920 x 920)</p>
                                <div class="btn-group images-cropper-pro">
                                    <p class="text-warning" id="test"></p>
                                    <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                        <input type="file" name="background" onchange="$('#test').html($(this).val());" id="inputImage" class="hide">
                                        Загрузить новое изображение
                                    </label>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="fm-checkbox">
                                                <label class="">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" name="active" class="i-checks" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                    <i>Активировать</i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div> --}}
                    <hr>

                    <div class="form-element-list">

                        <div class="basic-tb-hd">
                            <h2>Информация</h2>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="procces">Текст процесса</label>
                                        <input name="procces" id="procces" type="text" value="{{ $information->procces }}" class="form-control" placeholder="Текст процесса">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="client">Текст для клтента</label>
                                        <input name="client" id="client" type="text" value="{{ $information->client }}" class="form-control" placeholder="Текст для клтента">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="title">Текст для называние *</label>
                                        <input name="title" id="title" type="text" value="{{ $information->title }}" class="form-control" placeholder="Текст для называние">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="image">Изображение *</label>
                                        <input name="image" id="image" type="text" class="form-control" placeholder="Текст процесса">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="video">Видео *</label>
                                        <input name="video" id="video" type="text" value="{{ $information->video }}" class="form-control" placeholder="Ссылка на видео из YouTube">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="description">Текст для клтента *</label>
                                        <textarea name="description" id="description" cols="130" rows="10" style="outline: none;" class="form-control" placeholder="Ссылка на страницу">{{ $information->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row pull-right">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="fm-checkbox">
                                        <label class="">
                                            <div class="icheckbox_square-green" style="position: relative;">
                                                <input type="checkbox" name="active" {{ $information->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                            Активировать
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-success notika-btn-success waves-effect col-lg-10 pull-left">Оюновить</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}


        </div>
        <br>
        <br>
    </div>
@endsection
