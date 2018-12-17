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
                <img class="animate-one" src="{{ $footer->getBackground() }}" alt="{{ $footer->getBackground('headers') }}"/>
            </div>

            <div class="animation-ctn-hd">
                <center>
                    <h1>О нас: {{ $footer->about_us }}</h1>
                    <p>Копирайт сайта: {{ $footer->copyrite }}</p>
                </center>
            </div>

            <div class="animation-action">

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        <div class="animation-btn">
                            <a class="btn ant-nk-st pulse-ac" href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $footer->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        {{--  <div class="animation-btn">  --}}
                            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $footer->id), "method" => "DELETE"]) !!}
                                <button class="btn btn-danger notika-btn-danger waves-effect col-lg-12">Удалить</button>
                            {!! Form::close() !!}
                        {{--  </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
