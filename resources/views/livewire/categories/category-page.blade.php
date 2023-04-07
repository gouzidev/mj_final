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
    @livewire('nav-fixed')
    
    @foreach ($documents as $document)
      @livewire("categories.category-card", ["document" => $document])
        {{-- <div id="img" class="">
          <img src=
            {{ env("APP_URL") . "/" . $document["thumbnail"] }}
            class="h-full object-cover duration-200 w-full "
          />
        </div>
        <div
          class=" p-6 w-full bg-gradient-to-b from-transparent via-black/50 to-black/70 bottom-0 duration-300"
          id="description"
          >
          <a href="#">
            <h5
              class="mb-2 text-2xl font-bold tracking-tight text-white"
            >
              {{ $document["title"] }}
            </h5>
          </a>
          <p
            class="mb-3 font-normal text-gray-300 flex h-24 overflow-hidden"
          >
            {{ $document["content"] }}
          </p>
        </div> --}}
  
    @endforeach
    
        @livewireScripts

</body>
</html>