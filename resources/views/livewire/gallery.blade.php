@vite("resources/css/article.css")


<div class="grid gap-4">
    <div class="flex items-center ">
        {{-- <div class="text-3xl font-bold leading-tight text-primary gold font_playfair uppercase">Galerie</div> --}}
        <div class="line-through w-full"></div>
    </div>


</div>


<div class=" w-screen overflow-hidden ">
    
    {{-- <div class="bg-white absolute left-0 h-full"></div> --}}

    <div class="glide py-4 " id="gallery">
        {{-- bg-gradient-to-r from-transparent to-white/30 --}}
        <div class="glide__track " data-glide-el="track">
            
        <ul class="glide__slides flex  ">
            

            @foreach ($articles as $article)
                    @livewire('article', ['data' => $article])
            @endforeach


        </ul>
        </div>
        <div class="glide__arrows  bottom-0 left-0 right-0 mx-auto my-4" data-glide-el="controls">
        
        </div>
    </div>


    
</div>
    
    
    
    @vite(['resources/js/slider.js'])