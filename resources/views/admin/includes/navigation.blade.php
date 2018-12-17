<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">

                    <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : null }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="notika-icon notika-house"></i>
                            Home
                        </a>
                    </li>

                    @foreach ($navigations as $navigate)
                        <li class="{{ str_contains(Route::currentRouteName(), $navigate->slug) ? 'active' : null }}">
                            <a href="{{ route('admin.' . $navigate->slug . '.index') }}">
                                <i class="{{ $navigate->icon }}"></i>
                                {{ $navigate->title }}
                            </a>
                        </li>
                    @endforeach

                </ul>

                {{-- <div class="tab-content custom-menu-content">
                    @foreach ($navigations as $navigate)

                        @if (count($navigate->categories) != 0)
                            <div id="{{ $navigate->slug }}" class="tab-pane in notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    @foreach ($navigate->categories as $category)
                                        {{ dump($category->navigates->slug) }}
                                        <li>
                                            <a href="{{ route('admin.settings.' . $category->slug . '.index') }}">{{ $category->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
</div>
