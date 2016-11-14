@include('layouts._header')
@include('layouts._navbar')
<div class="main-container container-fluid no-padding-left">
    <div class="col-sm-2 no-padding border-right">
        @if(Auth::check())
            @include('layouts._sidebar')
        @endif
    </div>
    <div class="col-sm-10">
        @yield('content')
    </div>
</div>
@include('layouts._footer')
