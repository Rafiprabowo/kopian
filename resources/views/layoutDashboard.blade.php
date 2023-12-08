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
<body class="flex-col w-full h-full">
    <nav class="w-full bg-white h-24 border-b-2 flex items-center px-5 fixed top-0 left-0 z-50">
        <div>
            <img class="w-24 h-24" src="https://i.ibb.co/j6FZ58C/logo-removebg-preview.png" alt="Logo">
        </div>
        <div class="w-full flex justify-center">
            <a href="" class="mx-4">Menu</a>
            <a href="" class="mx-4">Gallery</a>
            <a href="" class="mx-4">Promo</a>
        </div>
        <div class="">
            <a href="#"><img class="w-16 h-16" src="https://i.ibb.co/Zf0zDtF/user1-removebg-preview.png" alt=""></a>
        </div>
    </nav>    
    <div class="relative bg-white w-full h-96 border flex shadow-lg" style="margin-top: 10rem;">
        <img class="absolute inset-0 w-full h-full object-cover opacity-30" src="https://i.ibb.co/3pSB2dG/bg-dashboard.jpg" alt="">
        <div class="absolute inset-0 flex justify-center items-center">
            <form class="relative w-96">    
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white shadow-lg" required>
                    <button type="submit" class="text-black absolute end-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 border-4">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        
    </div>
</body>
</html>
