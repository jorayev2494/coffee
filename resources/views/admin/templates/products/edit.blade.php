@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="animation-single-int">

            <h2>{{ $infoCurrentRoute['title'] }}</h2>
            <br>
            <div class="animation-img mg-b-15 col-md-12">
                <center>
                    <img class="animate-one" src="{{ $product->getIcon() }}" alt="{{ $product->getIcon() }}" style="background: #b68834;"/>
                </center>
            </div>

            <div class="animation-ctn-hd">
                <center>
                    <h1>Называние: {{ $product->title }}</h1>
                    <p>Звезда: {{ $product->star }}</p>
                    <p>Описание: {{ $product->description }}</p>
                </center>
            </div>

            {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".update", $product->id), "method" => "PUT", 'enctype' => 'multipart/form-data']) !!}

                <div class="animation-ctn-hd">
                    <center>
                        <h1>{{ $product->title }}</h1>
                        <p>Ссылка: {{ $product->link }}</p>

                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" {{ $product->active ? 'checked' : null }} class="i-checks" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        <i>Активировать</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </center>
                </div>

                <div class="breadcomb-list col-md-12">
                    <hr>
                    <center>
                        <div class="image-crp-img">
                            <h4>{{ $title }}</h4>
                            <p>Загрузить Фоновый изображение (70 x 40)</p>
                            <div class="btn-group images-cropper-pro">
                                <p class="text-warning" id="test"></p>
                                <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                    <input type="file" name="icon" onchange="$('#test').html($(this).val());" id="inputImage" class="hide"> Загрузить новое Икону
                                </label>
                                <button class="btn btn-primary">
                                    Создать
                                </button>
                                {{-- <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="fm-checkbox">
                                            <label class="">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" name="active" class="i-checks" style="position: absolute; opacity: 0;">
                                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                </div>
                                                Активировать
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </center>
                </div>

                <div class="breadcomb-list col-md-12">
                    <div class="form-element-list">

                        <div class="basic-tb-hd">
                            <h2>Информация</h2>
                        </div>

                        <div class="row">

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="title" type="text" value="{{ $product->title }}" class="form-control" placeholder="Главный текст">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="star" type="number" min="1" max="5" value="{{ $product->star }}" class="form-control" placeholder="Звезда">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="description">Текст для клтента *</label>
                                    <textarea name="description" id="description" cols="130" rows="10" style="outline: none;" class="form-control" placeholder="Описание продукта">{{ $product->description }}</textarea>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                {{--  <br>  --}}
                <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Обновить</button>
                <br>
                <br>

            {!! Form::close() !!}


        </div>
        <br>
        <br>
    </div>
@endsection
