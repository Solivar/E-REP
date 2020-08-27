<html lang="en" class="h-100">
    @include('includes.head')
<body class="d-flex flex-column h-100">
    @include('includes.header')

    <main class="flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('includes.footer')
</body>
</html>
