<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.hed')
</head>

<body class="sb-nav-fixed">
    @include('includes.neb')
    <div id="layoutSidenav">
        @include('includes.saidver')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
    </div>
    @include('includes.script')

</body>

</html>
