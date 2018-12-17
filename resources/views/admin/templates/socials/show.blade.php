@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="animation-single-int">

            <h2>{{ $title }}</h2>
            <br>
            <div class="animation-ctn-hd">

                <center>
                    Назыавнте: <h2>{{ $social->title }}</h2>
                    Икон: <h2>{{ $social->icon }}</h2>
                    Ссылка: <h2>{{ $social->link }}</h2>
                    Активный: <h2>{{ $social->active ? "Активный" : "Не активный" }}</h2>
                </center>

            </div>

            <div class="animation-action">

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        <div class="animation-btn">
                            <a class="btn ant-nk-st pulse-ac" href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $social->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $social->id), "method" => "DELETE"]) !!}
                            <button class="btn btn-danger notika-btn-danger waves-effect col-lg-12">Удалить</button>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
