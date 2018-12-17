@if ($errors->any())
    <div class="btn btn-danger col-md-12">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif


@if (session()->has("waring"))
    <div class="btn btn-warning col-md-12">
        <ul>
            {{ session()->pull("waring") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

@if (session()->has("info"))
    <div class="btn btn-info col-md-12">
        <ul>
            {{ session()->pull("info") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

@if (session()->has("success"))
    <div class="btn btn-success col-md-12">
        <ul>
            {{ session()->pull("success") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

@if (session()->has("error"))
    <div class="btn btn-error col-md-12">
        <ul>
            {{ session()->pull("error") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

@if (session()->has("warning"))
    <div class="btn btn-warning col-md-12">
        <ul>
            {{ session()->pull("warning") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

@if (session()->has("denger"))
    <div class="btn btn-warning col-md-12">
        <ul>
            {{ session()->pull("denger") }}
        </ul>
    </div>
    {{-- <br><br><br><br><br><br><br><br><br> --}}
@endif

