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
                            <th>Изображение</th>
                            <th>Размерь</th>
                            <th>Активный</th>
                            <th style="width: 21%">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td title="{{ $gallery->id }}" style="padding: 4px">
                                    <center>
                                        <img src="{{ $gallery->getImage() ?? "Не оприделено" }}" alt="{{ $gallery->getImage() ?? "Не оприделено" }}" width="100px" height="100px">
                                    </center>
                                </td>
                                <td title="{{ $gallery->id }}">{{ $gallery->size ?? "Не оприделено" }}</td>
                                <td title="{{ $gallery->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $gallery->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $gallery->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $gallery->id) }}" class="btn btn-success notika-btn-success waves-effect pull-left">Посмотреть</a>
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $gallery->id) }}" class="btn btn-warning notika-btn-warning waves-effect pull-right">Обновить</a>

                                    {{-- {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $gallery->id), "method" => "DELETE", "class" => "pull-right"]) !!}
                                        <button class="btn btn-danger notika-btn-danger waves-effect">Удал</button>
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
