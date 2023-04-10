<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if($search_heading) 
            Resultats de  {{$search_heading}}
        @else
            Impossible de trouver ce que tu cherches
        @endif
    </title>
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
<body class="dark:bg-gray-900">
    
    @livewire('navbar')

    <div class=" max-w-screen-xl mx-auto px-4 py-8">
        
        <p class="text-lg font-medium text-gray-900 dark:text-white">
            Affichage des résultats de "{{$search_heading}}"
        </p>

    </div>
    <div class=" max-w-screen-xl mx-auto flex flex-wrap py-4 ">
        

        @if ($data)
            @if (count($data))
                @foreach ($data as $doc)
                        <div class="py-2">
                            @if ($spec == "documents")
                                @livewire("document", ["document"=>$doc, "category_name"=>$doc->category->category_name])
                            @else
                                @livewire("article-card",["data"=>$doc])
                            @endif
                        </div>
                @endforeach
            @else
                  <h1 class="text-3xl dark:text-white font-bold ">Rien n'a été trouvé</h1>      
            @endif
        @else
            <h1 class="text-xl dark:text-white font-bold ">Il y avait un problème</h1> 
        @endif
        
        
    </div>  
    @livewireScripts
    


</body>
</html>