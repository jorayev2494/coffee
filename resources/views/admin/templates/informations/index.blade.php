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
                            <th style="width: 14%">Процесс</th>
                            <th style="width: 14%">Называние</th>
                            <th style="width: 14%">Клиент</th>
                            <th style="width: 10%">Видео</th>
                            <th style="width: 14%">Изображение</th>
                            <th style="width: 20%">Описание</th>
                            <th>Активный</th>
                            <th style="width: 32%">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informations as $information)
                            <tr>
                                <td title="{{ $information->id }}">{{ $information->process ?? "Не оприделено" }}</td>
                                <td title="{{ $information->id }}">{{ $information->title   ?? "Не оприделено" }}</td>
                                <td title="{{ $information->id }}">{{ $information->clients ?? "Не оприделено" }}</td>
                                <td title="{{ $information->id }}">
                                    <a href="{{ $information->video ?? "Не оприделено" }}" target="_blank">{{ $information->video ? "Видео" : "Не оприделено" }}</a>
                                </td>
                                <td title="{{ $information->id }}">{{ $information->image ?? "Не оприделено" }}</td>
                                <td title="{{ $information->id }}">{{ str_limit($information->description, 20) ?? "Не оприделено" }}</td>
                                {{-- <td title="{{ $information->id }}">{{ $information->link ?? "Не оприделено" }}</td> --}}
                                <td title="{{ $information->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $information->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $information->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $information->id) }}" class="btn btn-warning notika-btn-warning waves-effect pull-left" style="margin-right: 4px">Посмотреть</a>
                                    {{-- <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $information->id) }}" class="btn btn-success notika-btn-success waves-effect pull-left" style="margin-right: 4px">Редактировать</a> --}}

                                    {{-- {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $information->id), "method" => "DELETE", "class" => "pull-right"]) !!}
                                        <button class="btn btn-danger notika-btn-danger waves-effect">Удалить</button>
                                    {!! Form::close() !!} --}}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
