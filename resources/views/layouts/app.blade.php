<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Resources | @yield('title')</title>
</head>

<body class="bg-[#09090A]">

    <div class="wrapper ">
        @yield('content')
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
