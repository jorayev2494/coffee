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
                <img class="animate-one" src="{{ $footer->getBackground() }}" alt="{{ $footer->getBackground() }}"/>
            </div>

            <div class="animation-ctn-hd">
                <center>
                    <h1>О нас: {{ $footer->about_us }}</h1>
                    <p>Копирайт сайта: {{ $footer->copyrite }}</p>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="fm-checkbox">
                                <label class="">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $footer->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    <i>Активировать</i>
                                </label>
                            </div>
                        </div>
                    </div>

                </center>
            </div>

            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $footer->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="breadcomb-list col-md-12">
                    <hr>
                    <center>
                        <div class="image-crp-img">
                            <h4>Создать шапку сайта</h4>
                            <p>Загрузить Фоновый изображение (1920 x 500)</p>
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

                <div class="breadcomb-list col-md-12">
                    <div class="form-element-list">

                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <div class="basic-tb-hd">
                                    <h2>О нас</h2>
                                </div>

                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="about_us" type="text" value="{{ $footer->about_us }}" class="form-control" placeholder="О нас">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="basic-tb-hd">
                                    <h2>Копирайт сайта</h2>
                                </div>

                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="copyrite" type="text" value="{{ $footer->copyrite }}" class="form-control" placeholder="Копирайт">
                                    </div>
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
        <br>
        <br>
        <br>
    </div>
@endsection
