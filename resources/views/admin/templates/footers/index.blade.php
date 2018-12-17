@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="normal-table-list">

            <div class="basic-tb-hd">
                <h2>{{ $infoCurrentRoute['title'] }}</h2>
            </div>

            <div class="bsc-tbl">
                <table class="table table-sc-ex">
                    <thead>
                        <tr>
                            <th>Фоновый изображение</th>
                            <th>О нас</th>
                            <th>Копирайт сайта</th>
                            <th>Активный</th>
                            <th style="width: 18%">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footers as $footer)
                            <tr>
                                <td title="{{ $footer->id }}">

                                    @if ($footer->background)
                                        <center>
                                            <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $footer->id) }}">
                                                <img src="{{ $footer->getBackground() }}" alt="{{ $footer->getBackground() }}" width="192" height="50">
                                            </a>
                                        </center>
                                    @else
                                        "Не оприделено"
                                    @endif

                                </td>
                                {{-- <td title="{{ $footer->id }}">{{ $footer->background ?? "Не оприделено" }}</td> --}}
                                <td title="{{ $footer->id }}">{{ $footer->about_us ?? "Не оприделено" }}</td>
                                <td title="{{ $footer->id }}">{{ $footer->copyrite ?? "Не оприделено" }}</td>
                                <td title="{{ $footer->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $footer->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $footer->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $footer->id) }}" class="btn btn-success notika-btn-success waves-effect pull-left">Посмотреть</a>

                                    {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $footer->id), "method" => "DELETE", "class" => "pull-right"]) !!}
                                        <button class="btn btn-danger notika-btn-danger waves-effect">Удал</button>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
