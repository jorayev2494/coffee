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
                            <th>Называние</th>
                            <th>Икон</th>
                            <th>Ссылка</th>
                            <th>Активный</th>
                            <th style="width: 21%;">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socials as $social)
                            <tr>
                                <td title="{{ $social->id }}">{{ $social->title ?? "Не оприделено" }}</td>
                                <td title="{{ $social->id }}">{{ $social->icon ?? "Не оприделено" }}</td>
                                <td title="{{ $social->id }}">{{ $social->link ?? "Не оприделено" }}</td>
                                <td title="{{ $social->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $social->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $social->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $social->id) }}" style="margin-right: 4px" class="btn btn-warning notika-btn-warning waves-effect pull-left">Посмотреть</a>

                                    {{--  <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $social->id) }}" style="margin-right: 4px" class="btn btn-success notika-btn-success waves-effect pull-left">Редактировать</a>  --}}

                                    {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $social->id), "method" => "DELETE", "class" => "pull-left"]) !!}
                                        <button class="btn btn-danger notika-btn-danger waves-effect">Удалить</button>
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
