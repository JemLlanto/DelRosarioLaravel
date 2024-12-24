<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'EduCheck')</title>

    {{-- BoxIcons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- bootstrap links --}}
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">

    {{-- Include Popper.js before Bootstrap.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    @yield('content')
</body>

</html>
