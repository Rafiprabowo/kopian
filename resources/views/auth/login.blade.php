@extends('auth.layoutlogin')
@section('title','login')
@section('content')
<div class="fixed w-full h-full flex flex-col items-center">
    <!-- Background Image -->
    <img class="w-full h-full absolute opacity-30" src="https://i.ibb.co/pR9M2Ct/bg-login.jpg" alt="Background">

    <!-- Logo Image -->
    <div class="flex justify-center items-start z-10">
        <img class="w-34 h-34" src="https://i.ibb.co/j6FZ58C/logo-removebg-preview.png" alt="Logo">
    </div>

    <!-- Form Container -->
    <div class="w-full h-full flex flex-col items-center z-20">
        <form class="space-y-6" action="#" method="POST">
            <div>
              <div class="mt-2 w-full">
                <input id="email" name="email" type="email" autocomplete="email" required placeholder="username" class="w-96 h-16 px-4 py-2 border rounded focus:border-white-500 bg-gray-100 text-gray-800">
              </div>
            </div>
            <div>
                
                <div class="mt-2 relative">
                    <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Password" class="w-96 h-16 px-4 py-2 pr-10 border rounded focus:border-white-500 bg-gray-100 text-gray-800">
                    <button type="button" class=" absolute inset-y-0 right-0 px-3 py-2 bg-gray-300 text-gray-700 focus:outline-none" onclick="togglePasswordVisibility()">
                        show
                    </button>
                </div>
                
                <script>
                    function togglePasswordVisibility() {
                        var passwordInput = document.getElementById('password');
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                        } else {
                            passwordInput.type = 'password';
                        }
                    }
                </script>
                
            </div>

            <div class="flex justify-center w-full">
                <button type="button" class="w-96 h-14 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</button>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm">
                  <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
            </div>
          </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection