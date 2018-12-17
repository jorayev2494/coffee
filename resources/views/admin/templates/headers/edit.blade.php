@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="animation-single-int">

            <h2>{{ $infoCurrentRoute['title'] }}</h2>
            <br>
            <div class="animation-img mg-b-15 col-md-12">
                <img class="animate-one" src="{{ $header->getBackground('headers') }}" alt="{{ $header->getBackground('headers') }}"/>
            </div>

            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $header->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="animation-ctn-hd">
                    <center>
                        <h1>{{ $header->title }}</h1>
                        <p>Ссылка: {{ $header->link }}</p>

                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" {{ $header->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        <i>Активировать</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </center>
                </div>

                <div class="breadcomb-list col-md-12">
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
                </div>

                <div class="animation-action">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <label for="title">Текст</label>
                                <div class="nk-int-st">
                                    <input name="title" type="text" id="title" value="{{ $header->title }}" class="form-control" placeholder="Главный текст">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <label for="link">Ссылка</label>
                                <div class="nk-int-st">
                                    <input name="link" type="text" id="link" value="{{ $header->link }}" class="form-control" placeholder="Ссылка на страницу">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <center>
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
                </center>  --}}

                {{--  <br>  --}}
                <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Обновить</button>
                <br>
                <br>

            {!! Form::close() !!}


        </div>
        <br>
        <br>
    </div>
@endsection
