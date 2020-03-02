<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.head')
</head>

<body>

    @include('layouts.preloader')

    <div class="wrapper">

        @include('layouts.header', ['overlay' => (isset($overlay)) ? $overlay : null])

        @yield('hero')
        @yield('page-title')    

        <section class="body-content">

            @yield('content')

        </section>


        @include('layouts.footer')

    </div>


    <script src="https://maps.google.com/maps/api/js?key=AIzaSyD4g3IXTxk5Ecl9bU4GEA3Qjf-hozF3PTQ&callback=initMap"></script>
    @include('layouts.script')
</body>

</html>
