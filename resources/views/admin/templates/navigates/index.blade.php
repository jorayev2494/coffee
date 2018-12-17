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
                            <th>Называние меню</th>
                            <th>Слуг</th>
                            <th>Активный</th>
                            <th style="width: 30%;">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($navigates as $navigate)
                            <tr>
                                <td title="{{ $navigate->id }}">{{ $navigate->title ?? "Не оприделено" }}</td>
                                <td title="{{ $navigate->id }}">{{ $navigate->slug ?? "Не оприделено" }}</td>
                                <td title="{{ $navigate->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $navigate->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $navigate->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $navigate->id) }}" style="margin-right: 4px" class="btn btn-warning notika-btn-warning waves-effect pull-left">Посмотреть</a>
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $navigate->id) }}" style="margin-right: 4px" class="btn btn-success notika-btn-success waves-effect pull-left">Редактировать</a>

                                    {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $navigate->id), "method" => "DELETE", "class" => "pull-left"]) !!}
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
