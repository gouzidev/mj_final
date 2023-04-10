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

<div class="mx-auto max-w-screen-xl overflow-hidden relative rounded-md ">
    
    {{-- <div class="bg-white absolute left-0 h-full"></div> --}}

    @if(count($articles))
    <div class="glide " id="gallery">
        {{-- bg-gradient-to-r from-transparent to-white/30 --}}
        <div class="glide__track overflow-hidden" data-glide-el="track">
            
        <ul class="glide__slides flex ">
            
                @foreach ($articles as $article)
                        @livewire('article', ['data' => $article])
                @endforeach
                
            </ul>
        </div>
        <div class="pointer-events-none glide__arrows absolute top-0 w-full h-full text-white hidden md:block" data-glide-el="controls">
            <div class="float-left bg-gradient-to-r dark:from-gray-900 to-transparent h-full md:w-1/4 flex items-center justify-center">
                
            </div>
            <div class="float-right bg-gradient-to-l dark:from-gray-900 to-transparent h-full md:w-1/4 flex items-center justify-center">
                
            </div>
            
        </div>

    </div>
    @else
        <div class="text-2xl dark:text-white text-center flex-row">
            <div class="mb-2 ">
                <i class="fa-solid fa-eye-low-vision text-rose-400"></i>
                Galerie vide
            </div>
            <small class="text-sm text-gray-700 dark:text-gray-400">Aucune image trouvée pour le moment !</small>
        </div>
    @endif


    
</div>
    
    
    
@vite(['resources/js/gallery-slider.js'])