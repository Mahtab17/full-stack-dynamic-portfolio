<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- font awsome kit --}}
    <script src="https://kit.fontawesome.com/{{ config('app.font_awesome_kit') }}.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <div style="margin-bottom: 100px;"></div>

    @yield('content')

    @include('partials.footer')
</body>

</html>
