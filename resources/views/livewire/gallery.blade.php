@vite(["resources/css/article.css" , "resources/imports/fontawesome.php"])


<div class="grid gap-4">
    <div class="flex items-center ">
        {{-- <div class="text-3xl font-bold leading-tight text-primary gold font_playfair uppercase">Galerie</div> --}}
        <div class="line-through w-full"></div>
    </div>


</div>

@php
    require_once(resource_path("imports/limitString.php"))
@endphp

<div class=" overflow-hidden relative">
    
    {{-- <div class="bg-white absolute left-0 h-full"></div> --}}

    @if(count($articles))
    <div class="glide " id="gallery">
        {{-- bg-gradient-to-r from-transparent to-white/30 --}}
        <div class="glide__track overflow-hidden" data-glide-el="track">
            
        <ul class="glide__slides flex">
            
                @foreach ($articles as $article)
                        @livewire('article', ['data' => $article])
                @endforeach
                
            </ul>
        </div>
        <div class="glide__arrows absolute top-0 w-full h-full text-white hidden md:block" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--right px-4 py-2 float-left bg-gradient-to-r from-white/50 dark:from-gray-900 to-transparent h-full md:w-1/4" data-glide-dir="<">
                <i class="fa-solid fa-caret-left text-xl "></i>
            </button>
            <button class=" glide__arrow glide__arrow--right px-4 py-2 rounded-lg float-right bg-gradient-to-l from-white/50 dark:from-gray-900 to-transparent h-full md:w-1/4" data-glide-dir=">">
                <i class="fa-solid fa-caret-right text-xl"></i>
            </button>
        </div>
    </div>
    @else
        <div class="text-2xl dark:text-white text-center flex-row">
            <div class="mb-2 ">
                <i class="fa-solid fa-hourglass text-rose-700"></i>
                Empty gallery
            </div>
            <small class="text-sm text-gray-700 dark:text-gray-400">Aucune image trouvée pour le moment !</small>
        </div>
    @endif


    
</div>
    
    
    
    @vite(['resources/js/slider.js'])