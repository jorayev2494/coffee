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
                    <h2>{{ $contact->email }}</h2>
                </center>

            </div>

            <div class="animation-action">

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        <div class="animation-btn">
                            <a class="btn ant-nk-st pulse-ac" href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $contact->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $contact->id), "method" => "DELETE"]) !!}
                            <button class="btn btn-danger notika-btn-danger waves-effect col-lg-12">Удалить</button>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
