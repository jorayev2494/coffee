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
                            <th>Называние кофи</th>
                            <th>Цена</th>
                            <th>Описание</th>
                            <th>Активный</th>
                            <th style="width: 30%;">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coffees as $coffee)
                            <tr>
                                <td title="{{ $coffee->id }}">{{ $coffee->title ?? "Не оприделено" }}</td>
                                <td title="{{ $coffee->id }}">{{ $coffee->price ?? "Не оприделено" }}</td>
                                <td title="{{ $coffee->id }}">{{ $coffee->description ?? "Не оприделено" }}</td>
                                <td title="{{ $coffee->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $coffee->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $coffee->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $coffee->id) }}" style="margin-right: 4px" class="btn btn-warning notika-btn-warning waves-effect pull-left">Посмотреть</a>
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $coffee->id) }}" style="margin-right: 4px" class="btn btn-success notika-btn-success waves-effect pull-left">Редактировать</a>

                                    {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $coffee->id), "method" => "DELETE", "class" => "pull-left"]) !!}
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
