<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Cafe!ne</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body class="flex-col w-full h-full overflow-x-hidden">
{{-- navbar --}}
    <nav class="w-full bg-white h-24 border-b-2 flex items-center px- fixed top-0 left-0 z-50">
        <div>
            <img class="w-24 h-24" src="https://i.ibb.co/j6FZ58C/logo-removebg-preview.png" alt="Logo">
        </div>
        <div class="w-full flex justify-center">
            <a href="#menu" class="mx-4">Menu</a>
            <a href="#galery" class="mx-4">Gallery</a>
            <a href="" class="mx-4">Promo</a>
        </div>
        <div class="">
            <a href="#"><img class="w-16 h-16" src="https://i.ibb.co/Zf0zDtF/user1-removebg-preview.png" alt=""></a>
        </div>
    </nav>

{{-- search --}}
    <div class="relative bg-white w-full h-96 border flex shadow-lg" style="margin-top: 10rem;">
        <img class="absolute inset-0 min-w-full h-full object-cover opacity-30" src="https://i.ibb.co/3pSB2dG/bg-dashboard.jpg" alt="">
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
                </div>
            </form>
        </div>
    </div>

{{-- iklan --}}
    <div class="w-full h-96 mt-10 flex">
        <div class="w-full h-full flex justify-center">
            <div id="gallery" class="relative min-w-[800px]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-[888px] h-auto rounded-lg -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-[888px] h-auto rounded-lg -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-[888px] h-auto rounded-lg -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-[888px] h-auto rounded-lg -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-[888px] h-auto rounded-lg -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>

{{-- menu --}}
    <div id="menu" class="flex justify-center w-full mt-36 border-b-8 shadow-lg">
        <h1 class="absoute font-mono text-6xl font-bold z-10 mt-5">menu</h1>
    </div>
{{-- isi menu --}}
<div class="w-full h-[20%] border mt-36  flex-col">
    <h1 class="text-3xl font-bold mt-4">Coffee</h1>
    <div class="flex border mt-6">
        <img class="w-[20%] h-[10rem] border" src="path/to/icon-coffee.png" alt="icon-coffee">
        <div class="flex w-full border justify-center">
            <img class="w-[20%] h-[10rem] border" src="path/to/gambar-coffee1.jpg" alt="gambar-coffee-1">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee2.jpg" alt="gambar-coffee-2">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee3.jpg" alt="gambar-coffee-3">
        </div>
    </div>

    <h1 class="text-3xl font-bold mt-4">Non-Coffee</h1>
    <div class="flex border mt-6">
        <img class="w-[20%] h-[10rem] border" src="path/to/icon-coffee.png" alt="icon-coffee">
        <div class="flex w-full border justify-center">
            <img class="w-[20%] h-[10rem] border" src="path/to/gambar-coffee1.jpg" alt="gambar-coffee-1">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee2.jpg" alt="gambar-coffee-2">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee3.jpg" alt="gambar-coffee-3">
        </div>
    </div>

    <h1 class="text-3xl font-bold mt-4">Snack</h1>
    <div class="flex border mt-6">
        <img class="w-[20%] h-[10rem] border" src="path/to/icon-coffee.png" alt="icon-coffee">
        <div class="flex w-full border justify-center">
            <img class="w-[20%] h-[10rem] border" src="path/to/gambar-coffee1.jpg" alt="gambar-coffee-1">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee2.jpg" alt="gambar-coffee-2">
            <img class="w-[20%] h-[10rem] ml-5 border" src="path/to/gambar-coffee3.jpg" alt="gambar-coffee-3">
        </div>
    </div>
</div>

{{-- galery --}}
    <div id="galery" class="flex justify-center w-full mt-36 border-b-8 shadow-lg">
        <h1 class="absoute font-mono text-6xl font-bold z-10 mt-5">Galery</h1>
    </div>

    <div class="min-w-full h-full mt-36">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


</body>
</html>
