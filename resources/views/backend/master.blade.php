@include('backend.common.header')
        
    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            @include('backend.common.sidebar')
        </div>

        <div id="layoutSidenav_content">
            
            @yield('content')
            @include('sweetalert2::index')
            @include('backend.common.footer')