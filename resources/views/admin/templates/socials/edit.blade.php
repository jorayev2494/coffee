@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list col-md-12">
            <div class="form-element-list">

                <h2>{{ $title }}</h2>

                {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $social->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input name="title" value="{{ $social->title }}" type="text" class="form-control" placeholder="Называние кофи">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input name="icon" value="{{ $social->icon }}" type="text" class="form-control" placeholder="Называние кофи">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input name="link" value="{{ $social->link }}" type="text" class="form-control" placeholder="Называние кофи">
                                </div>
                            </div>
                        </div>

                        <center>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" class="i-checks" {{ $social->active ? 'checked' : null }} style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        Активировать
                                    </label>
                                </div>
                            </div>
                        </center>

                    </div>

                    <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Обновить</button>

                {!! Form::close() !!}

            </div>
        </div>
        <br>
        <br>
    </div>
@endsection
