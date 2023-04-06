<script src="https://kit.fontawesome.com/cd6d5ad4e9.js" crossorigin="anonymous"></script>


<div class="container m-auto relative max-w-screen-lg h-full">
    <div class="glide overflow-hidden " id="document_slider">
        <div
            class="glide__track flex" 
            data-glide-el="track">
            <ul class="glide__slides flex ">
                @foreach($documents as $document)
                    <li class="glide__slide w-full  flex justify-center  items-center">    
                        @livewire("document", ["data"=>$document])
                    </li>
                @endforeach
                
            </ul>
        </div>
        <div
            class="glide__arrows flex items-center"
            data-glide-el="controls">
            <button
                class="glide_arrow glide_arrow--left absolute -left-14 top-1/2 -translate-y-1/2 h-12 rounded-xl w-12 bg-neutral-200 hover:bg-neutral-300 duration-200"data-glide-dir="<">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button
                class="glide_arrow glide_arrow--right absolute -right-14 top-1/2 -translate-y-1/2 h-12 rounded-xl w-12 bg-neutral-200 hover:bg-neutral-300 duration-200"
                data-glide-dir=">">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
@vite(['resources/js/document_slider.js'])
