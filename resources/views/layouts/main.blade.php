
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="@yield('title')">
    <title>@yield('title')</title>

    <!-- CDNS -->
    @yield('cdns')

    <!-- App Js -->
    @vite('resources/js/app.js')
</head>

<body>
  <!-- Header -->
    @yield('header')

    <!-- Main -->
    @yield('main-content')

    <!-- Footer -->
    <footer></footer>

    {{-- Scripts --}}
    @yield('scripts')
</body>
</html>