@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="animation-single-int">

            <h2>{{ $title }}</h2>


            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $progress->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="animation-ctn-hd">
                    <center>
                        <h4>Называние: {{ $progress->title }}</h4>
                        <p>Значение: {{ $progress->value }}</p>
                    </center>
                </div>


                <div class="animation-action">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="nk-int-st">
                                <input name="title" type="text" class="form-control" value="{{ $progress->title }}" placeholder="Называние прогресса">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="form-group">
                            <div class="nk-int-st">
                                <input name="value" type="number" min="1" max="10000" value="{{ $progress->value }}" class="form-control" placeholder="Значение прогресса">
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="fm-checkbox">
                                <label class="">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $progress->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    <i>Активировать</i>
                                </label>
                            </div>
                        </div>
                    </div>
                </center>

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
