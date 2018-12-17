@extends("layouts.app_master")

@section('content')

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-7">
                    <h6 class="text-white text-uppercase">Теперь вы можете почувствовать энергию</h6>
                    <h1>{{ $header->title }}</h1>
                    <a href="{{ $header->link }}" class="primary-btn text-uppercase">Перейти</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start video-sec Area -->
    <section class="video-sec-area pb-100 pt-40" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="{{ $about->video }}">
                        <img class="img-fluid" src="{{ asset('coffee') }}/img/play-icon.png" alt="Image">
                    </a>
                </div>
                <div class="col-lg-6 video-left">
                    <h6>{{ $about->process }}</h6>
                    <h1>{{ $about->title }}</h1>
                    <p>
                        <span>{{ $about->clients }}</span>
                    </p>
                    <p>
                        {{ $about->description }}
                    </p>
                    <img class="img-fluid" src="{{ asset('coffee') }}/img/signature.png" alt="Play">
                </div>
            </div>
        </div>
    </section>
    <!-- End video-sec Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Какой кофе мы подаем для вас</h1>
                        {{--  <p>Who are in extremely love with eco friendly system.</p>  --}}
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($coffees as $coffee)
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>{{ $coffee->title }}</h4>
                                <p class="price float-right">
                                    ${{ $coffee->price }}
                                </p>
                            </div>
                            <p>
                                {{ $coffee->description }}
                            </p>
                        </div>
                    </div>
                @endforeach

                {{--  <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Americano</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>  --}}

            </div>
        </div>
    </section>
    <!-- End menu Area -->

    <!-- Start gallery Area -->
    {{-- <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="{{ asset('coffee') }}/img/g1.jpg" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('coffee') }}/img/g1.jpg" alt="">
                    </a>
                    <a href="{{ asset('coffee') }}/img/g2.jpg" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('coffee') }}/img/g2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="{{ asset('coffee') }}/img/g3.jpg" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('coffee') }}/img/g3.jpg" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ asset('coffee') }}/img/g4.jpg" class="img-pop-home">
                                <img class="img-fluid" src="{{ asset('coffee') }}/img/g4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ asset('coffee') }}/img/g5.jpg" class="img-pop-home">
                                <img class="img-fluid" src="{{ asset('coffee') }}/img/g5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End gallery Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Какой кофе мы подаем для вас</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-6 col-md-6 single-review">

                        <img src="{{ $product->getIcon() }}" alt="">

                        <div class="title d-flex flex-row">
                            <h4>{{ $product->title }}</h4>
                            <div class="star">

                                @if ($product->star)
                                    @for ($i = 0; $i < $product->star; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor

                                    @for ($j = 0; $j < 5 - $product->star; $j++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                @endif

                            </div>
                        </div>

                        <p>
                            {{ $product->description }}
                        </p>

                    </div>
                @endforeach
            </div>

            <div class="row counter-row">
                @foreach ($progresses as $progress)
                    <div class="col-lg-3 col-md-6 single-counter">
                        <h1 class="counter">{{ $progress->value }}</h1>
                        <p>{{ $progress->title }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End review Area -->


    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Какой кофе мы подаем для вас</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                {{--  {{ dd(($galleries)) }}  --}}

                <div class="col-lg-4">

                    @if (count($galleries) >= 3 && $galleries[2]->active && $galleries[2]->id == 3)
                        <a href="{{ $galleries[2]->getImage() }}" class="img-pop-home">
                            <img class="img-fluid" src="{{ $galleries[2]->getImage() }}" alt="{{ $galleries[2]->getImage() }}">
                        </a>
                    @endif

                    @if (count($galleries) >= 2 && $galleries[1]->active && $galleries[1]->id == 2)
                        {{--  {{ dd(($galleries)) }}  --}}
                        <a href="{{ $galleries[1]->getImage() }}" class="img-pop-home">
                            <img class="img-fluid" src="{{ $galleries[1]->getImage() }}" alt="{{ $galleries[1]->getImage() }}">
                        </a>
                    @endif

                </div>

                <div class="col-lg-8">

                    @if (count($galleries) >= 1 && $galleries[0]->active && $galleries[0]->id == 1)
                        {{--  {{ dd(($galleries)) }}  --}}
                        <a href="{{ $galleries[0]->getImage() }}" class="img-pop-home">
                            <img class="img-fluid" src="{{ $galleries[0]->getImage() }}" alt="{{ $galleries[0]->getImage() }}">
                        </a>
                    @endif

                    <div class="row">

                        @if (count($galleries) >= 4 && $galleries[3]->active && $galleries[3]->id == 4)
                            <div class="col-lg-6">
                                <a href="{{ $galleries[3]->getImage() }}" class="img-pop-home">
                                    <img class="img-fluid" src="{{ $galleries[3]->getImage() }}" alt="{{ $galleries[3]->getImage() }}">
                                </a>
                            </div>
                        @endif

                        @if (count($galleries) >= 5 && $galleries[4]->active && $galleries[4]->id == 5)
                            <div class="col-lg-6">
                                <a href="{{ $galleries[4]->getImage() }}" class="img-pop-home">
                                    <img class="img-fluid" src="{{ $galleries[4]->getImage() }}" alt="{{ $galleries[4]->getImage() }}">
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End gallery Area -->

    <!-- Start blog Area -->
    {{-- <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="{{ asset('coffee') }}/img/b1.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#"><h4>Portable latest Fashion for young women</h4></a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="{{ asset('coffee') }}/img/b2.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#"><h4>Portable latest Fashion for young women</h4></a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End blog Area -->
@endsection

