<div class="col-lg-5  col-md-6 col-sm-6">
    <div class="single-footer-widget">
        <h6>Новостная рассылка</h6>
        <p>Будьте в курсе наших последних новостнаях</p>
        <div class="" id="mc_embed_signup">

            {!! Form::open(["url" => route("contact"), "method" => "POST", "class" => "form-inline"]) !!}

            {{--  <form target="_blank" novalidate="true" action="" method="get" class="">  --}}
                <input class="form-control" name="email" placeholder="Ваше почта" onfocus="this.placeholder = ''" required id="form-email" type="email">
                    <button class="click-btn btn btn-default">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </button>
                    <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>

                <div class="info pt-20"></div>
            {{--  </form>  --}}

            {!! Form::close() !!}

        </div>
    </div>
</div>
