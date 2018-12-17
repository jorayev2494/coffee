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
                            <th>Текст</th>
                            <th>Ссылка</th>
                            <th>Активный</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($headers as $header)
                            <tr>
                                <td title="{{ $header->id }}">

                                    @if ($header->background)
                                        <center>
                                            <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $header->id) }}">
                                                <img src="{{ $header->getBackground() }}" alt="{{ $header->getBackground() }}" width="120" height="57">
                                            </a>
                                        </center>
                                    @else
                                        "Не оприделено"
                                    @endif

                                </td>
                                <td title="{{ $header->id }}">{{ $header->title ?? "Не оприделено" }}</td>
                                <td title="{{ $header->id }}">{{ $header->link  ?? "Не оприделено" }}</td>
                                <td title="{{ $header->id }}">
                                    <div class="icheckbox_square-green" style="position: relative;">
                                        <input type="checkbox" name="active" {{ $header->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td title="{{ $header->id }}">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.show', $header->id) }}" class="btn btn-success notika-btn-success waves-effect pull-left">Посмотреть</a>

                                    {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $header->id), "method" => "DELETE", "class" => "pull-right"]) !!}
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
