<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
    <div class="single-footer-widget">
        <h6>Подписывайтесь на нас</h6>
        <p>Let us be social</p>

        <div class="footer-social d-flex align-items-center">

            @foreach ($socials as $social)
                <a href="{{ $social->link }}" target="_blank">
                    <i class="fa {{ $social->icon }}"></i>
                </a>
            @endforeach

        </div>

    </div>
</div>
