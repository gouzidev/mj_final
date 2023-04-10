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

    {{-- [▼
    "id" => 4
    "title" => "test1"
    "content" => """
      Use jQuery UI's accordion - its nice, easy and fast. See more info here\n
      Or, if you still wanna do this by yourself, you could remove the fieldset (its not semantically right to use it for this anyway) and create a structure by yours ▶
      """
    "thumbnail" => "images/UxiKrWAcbiPHCsShYEyzppxSOUHkvh-metab2llXzExMjQ4MzFXc0FROUlOVi5wbmc=-.png"
    "created_at" => "2023-04-07 15:40:38"
    "updated_at" => "2023-04-07 15:40:38"
  ] --}}


    @livewire('navbar')
        


    
    
    @if(count($articles))
      <div class=" max-w-screen-xl mx-auto ">

            
            @livewire("articles-search")



            <div class="w-full flex flex-wrap">
              @foreach ($articles as $article)
                <div class="w-full md:w-1/2 py-2">
                  @livewire("article-card",["data"=>$article])
                </div>
              @endforeach
            </div>
        </div>
      @else
            <div class="text-lg text-center md:text-3xl dark:text-gray-400 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                Aucune article trouvée
            </div>
      @endif
        
        




    @livewireScripts

</body>
</html>