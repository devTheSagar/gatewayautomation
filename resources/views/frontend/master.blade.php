@include('frontend.common.header')

    @yield('content')

    {{-- sweet alert  --}}
    {{-- @include('sweetalert::alert') --}}
    @include('sweetalert2::index')
@include('frontend.common.footer')