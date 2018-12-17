@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

        {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".store"), "method" => "POST", 'enctype' => 'multipart/form-data']) !!}
            {{-- <div class="breadcomb-list col-md-12">
                <center>
                    <div class="image-crp-img">
                        <h4>Создать шапку сайта</h4>
                        <p>Загрузить Фоновый изображение (1920 x 920)</p>
                        <div class="btn-group images-cropper-pro">
                            <p class="text-warning" id="test"></p>
                            <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                <input type="file" accept="image/*" name="background" onchange="$('#test').html($(this).val());" id="inputImage" class="hide"> Загрузить новое изображение
                            </label>
                            <button class="btn btn-primary">
                                Загрузит
                            </button>
                            <div class="row">
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
                            </div>
                        </div>
                    </div>
                </center>
            </div> --}}

            <div class="breadcomb-list col-md-12">
                <div class="form-element-list">

                    <div class="basic-tb-hd">
                        <h2>Информация</h2>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="procces">Текст процесса</label>
                                    <input name="procces" id="procces" type="text" class="form-control" placeholder="Текст процесса">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="client">Текст для клтента</label>
                                    <input name="client" id="client" type="text" class="form-control" placeholder="Текст для клтента">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="title">Текст для называние *</label>
                                    <input name="title" id="title" type="text" class="form-control" placeholder="Текст для называние">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="image">Изображение *</label>
                                    <input name="image" id="image" type="text" class="form-control" placeholder="Текст процесса">
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="video">Видео *</label>
                                    <input name="video" id="video" type="text" class="form-control" placeholder="Ссылка на видео из YouTube">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <label for="description">Текст для клтента *</label>
                                    <textarea name="description" id="description" cols="130" rows="10" style="outline: none;" class="form-control" placeholder="Ссылка на страницу"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row pull-right">
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
                        </div>

                        <button class="btn btn-success notika-btn-success waves-effect col-lg-10 pull-left">Создать</button>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}


        {{-- <div class="dropdone-nk mg-t-30">
            <div class="cmp-tb-hd">
                <h2>Drag and Drop File Uploader</h2>
                <p>DropzoneJS is an open source library that provides Drag and Drop file uploads with image previews. It’s lightweight, doesnt depend on any other library (like jQuery) and is highly customizable.</p>
            </div>
            <div id="dropzone1" class="multi-uploader-cs">
                <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                    <div class="dz-message needsclick download-custom">
                        <i class="notika-icon notika-cloud"></i>
                        <h2>Drop files here or click to upload.</h2>
                        <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                        </p>
                    </div>
                </form>
            </div>
        </div> --}}

    </div>
    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                            <th>Действие</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>iamge</td>
                            <td>Christopher</td>
                            <td>@makinton</td>
                            <td>Ducky</td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div> --}}
@endsection
