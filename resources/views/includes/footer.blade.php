<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>О нас</h6>
                    <p>
                        {{ $footer->about_us }}
                    </p>
                    <p class="footer-text">
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                        {{ $footer->copyrite }}
                        <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                    {{--  <p class="footer-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>  --}}

                </div>
            </div>

            {{--  Контакты  --}}
            @include("includes.contact")

            {{--  Подключение соцтальный сеть  --}}
            @include("includes.socials")


        </div>
    </div>
</footer>
