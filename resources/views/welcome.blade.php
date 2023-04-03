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
    @vite(['resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>



    @livewireStyles

</head>
<body class="p-2 md:p-0">
    @livewire('navbar')
    
    @livewire("app")
        



    @livewireScripts




</body>
</html>