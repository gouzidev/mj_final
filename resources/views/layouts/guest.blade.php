<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>La Ministére De La Justice</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href={{asset("logo.png")}}>
        <script src="https://kit.fontawesome.com/a88bd20437.js" crossorigin="anonymous"></script>
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        @vite("resources/css/app.css")

        <!-- Scripts -->
    </head>
    <body class=" text-gray-900 antialiased dark:bg-gray-800">
        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 ">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current" />
                </a>
            </div>

            <div class=" w-full sm:max-w-md mt-6 px-6 py-8  shadow-md overflow-hidden sm:rounded-lg dark:bg-gray-900/20">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
