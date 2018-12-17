<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="{{ $infoCurrentRoute['icon'] }}"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>{{ $infoCurrentRoute['title'] }}</h2>
                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                </div>
                            </div>
                        </div>

                        @if (Route::currentRouteName() !== "admin.galleries.index" && Route::currentRouteName() !== "admin.galleries.show" && Route::currentRouteName() !== "admin.galleries.edit")
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3 pull-right">
                                <div class="breadcomb-report">
                                    <a href="{{ route('admin.' . $infoCurrentRoute['slug'] . '.create') }}" class="btn" data-toggle="tooltip" data-placement="left" title="Создать">
                                        <i class="notika-icon notika-refresh"></i>
                                    </a>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
