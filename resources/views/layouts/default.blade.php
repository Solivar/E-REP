<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @include('includes.head')
<body class="d-flex flex-column h-100">
    @include('includes.header')

    <div class="container">
        @include('includes.navigation')

        <main class="flex-shrink-0 mb-5">
            @yield('content')
        </main>
    </div>


    @include('includes.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
