<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    @vite(['resources/css/app.css'])

    @livewireStyles

</head>
<body class="p-2 md:p-0 flex-wrap dark:bg-gray-900 ">
    @livewire('navbar')

    @livewire("app",
        [
            "articles" => $articles,
            "categories_and_docs" => $categories_and_docs,
            "documents" => $documents
        ])

    @livewireScripts
    
</body>
</html>