<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Cafe!ne</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-no-repeat bg-cover">
    <div class="fixed w-full h-full flex flex-col items-center">
        <!-- Background Image -->
        <img class="w-full h-full absolute opacity-30" src="https://i.ibb.co/pR9M2Ct/bg-login.jpg" alt="Background">
        @yield('content')
    </div>
</body>
</html>
