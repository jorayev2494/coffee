@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="animation-single-int" style="background: #b68834;">

            <h2>{{ $infoCurrentRoute['title'] }}</h2>
            <br>
            <div class="animation-img mg-b-15 col-md-12">
                <center>
                    <img class="animate-one" src="{{ $product->getIcon() }}" alt="{{ $product->getIcon() }}"/>
                </center>
            </div>

            <div class="animation-ctn-hd">
                <center>
                    <h1>Называние: {{ $product->title }}</h1>
                    <p>Звезда: {{ $product->star }}</p>
                    <p>Описание: {{ $product->description }}</p>
                </center>
            </div>

            <div class="animation-action">

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        <div class="animation-btn">
                            <a class="btn ant-nk-st pulse-ac" href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.edit', $product->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>

                <div class="row mg-t-10">
                    <div class="col-lg-12">
                        {{--  <div class="animation-btn">  --}}
                            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".destroy", $product->id), "method" => "DELETE"]) !!}
                                <button class="btn btn-danger notika-btn-danger waves-effect col-lg-12">Удалить</button>
                            {!! Form::close() !!}
                        {{--  </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
