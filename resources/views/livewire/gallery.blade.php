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

    <div class="glide " id="gallery">
        {{-- bg-gradient-to-r from-transparent to-white/30 --}}
        <div class="glide__track overflow-hidden" data-glide-el="track">
            
        <ul class="glide__slides flex ">
            

            @foreach ($articles as $article)
                    @livewire('article', ['data' => $article])
            @endforeach


        </ul>
        </div>
        <div class="glide__arrows absolute top-0 translate-y-1/2 w-full h-full px-8" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--right bg-white/80 px-4 py-2 rounded-lg float-left " data-glide-dir="<">
                <i class="fa-solid fa-caret-left text-xl"></i>
            </button>
            <button class="glide__arrow glide__arrow--right bg-white/80 px-4 py-2 rounded-lg float-right" data-glide-dir=">">
                    <i class="fa-solid fa-caret-right text-xl"></i>
            </button>
          </div>
    </div>


    
</div>
    
    
    
    @vite(['resources/js/slider.js'])