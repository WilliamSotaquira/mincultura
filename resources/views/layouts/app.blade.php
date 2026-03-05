<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Mincultura') }}</title>
    {{-- @vite(['resources/css/corev15.css']) --}}

    @include('partials.head')
</head>

<body>
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- utils.js BDC -->
    <script src="https://cdn.www.gov.co/layout-govco-v5/script.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
