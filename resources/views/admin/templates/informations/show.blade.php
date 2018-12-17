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
                <img class="animate-one" src="{{ $header->getBackground('headers') }}" alt="{{ $header->getBackground('headers') }}"/>
            </div> --}}

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
            </div>

            <div class="animation-action">

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        <div class="animation-btn">
                            <a class="btn ant-nk-st pulse-ac" href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $information->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        {{--  <div class="animation-btn">  --}}
                            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $information->id), "method" => "DELETE"]) !!}
                                <button class="btn btn-danger notika-btn-danger waves-effect col-lg-12">Удалить</button>
                            {!! Form::close() !!}
                        {{--  </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
