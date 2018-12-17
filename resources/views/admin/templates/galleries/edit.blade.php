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
                <center>
                    <img class="animate-one" src="{{ $gallery->getImage() }}" alt="{{ $gallery->getImage() }}"/>
                </center>
            </div>

            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $gallery->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="animation-ctn-hd">
                    <center>
                        <h1>{{ $gallery->title }}</h1>
                        <p>Размер изображени: ( {{ $gallery->size }} )</p>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" {{ $gallery->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        <i>Активировать</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </center>
                </div>

                <hr>
                <div class="breadcomb-list col-md-12">
                    <center>
                        <div class="image-crp-img">
                            <h4>{{ $title }}</h4>
                            <p>Загрузите изображени в галерею ( {{ $gallery->size }} )</p>
                            <div class="btn-group images-cropper-pro">
                                <p class="text-warning" id="test"></p>
                                <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                    <input type="file" name="image" onchange="$('#test').html($(this).val());" id="inputImage" class="hide">
                                    Загрузить новое изображение
                                </label>

                                <br><br>

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

                <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Обновить</button>
                <br>
                <br>

            {!! Form::close() !!}


        </div>
        <br>
        <br>
    </div>
@endsection
