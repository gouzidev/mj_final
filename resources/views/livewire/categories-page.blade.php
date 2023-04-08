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
<body class="p-2 md:p-0 flex-wrap dark:bg-gray-900 min-h-screen relative">

   
    @livewire('navbar')

    <div class="flex max-w-screen-xl mx-auto flex-wrap">

        
        @if(count($categories))

            <div class="w-full md:w-1/3">
                @livewire("categories.categories-names")
            </div>

            <div class="w-full md:w-2/3 md:max-h-screen md:overflow-y-scroll ">
    
                @foreach ($categories as $cat)

                    
                    <div class=" ">
                        <div class="" >
                            <ol class="inline-flex items-center mb-3 sm:mb-0">
                            <li>
                                <div class="flex items-center">
                                <span data-dropdown-toggle="dropdown-project" class=" px-3 py-2 text-sm font-normal text-center text-gray-900 dark:text-white">
                                    <i class="fa-regular fa-folder-open mr-2"></i>{{ $cat->category_name }}
                                </span>
                                </div>
                            </li>
                            <span class="mx-2 text-gray-400">/</span>
                            </ol>
                        </div>
                        
                        <div class=" overflow-hidden mt-2 flex flex-wrap">
                        @if(count($cat->documents))
                            @foreach ($cat->documents as $id=>$doc)
                                <div class="py-4 ">
                                    @livewire("document", ["data"=>$doc])
                                </div>
                                
                            @endforeach
                        @else
                            <div class=" text-sm text-yellow-800 px-6 py-4 dark:text-yellow-400/70">
                                *Il n'y a aucun article!
                            </div>
                        @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-lg text-center md:text-3xl dark:text-gray-400 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                Aucune catégorie trouvée
            </div>
        @endif
        
        
    </div>

    
            
    


    @vite("resources/js/animateOnScroll.js")
    @livewireScripts

</body>
</html>