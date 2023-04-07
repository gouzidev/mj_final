<script src="https://kit.fontawesome.com/cd6d5ad4e9.js" crossorigin="anonymous"></script>


<div class="container m-auto relative max-w-screen-lg h-full">
<div class="inline-flex items-center w-full dark:text-white">
    <div class="text-xl mr-2">Heading</div>
    <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
</div>
    <div class="glide overflow-hidden " id={{"#document_slider$slider_id"}}>
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
                class="glide_arrow glide_arrow--left absolute -left-14 top-1/2 -translate-y-1/2 h-12 rounded-xl w-12 text-gray-700 dark:text-white duration-200"data-glide-dir="<">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button
                class="glide_arrow glide_arrow--right absolute -right-14 top-1/2 -translate-y-1/2 h-12 rounded-xl w-12 text-gray-700 dark:text-white duration-200"
                data-glide-dir=">">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<script>
    import Glide from "@glidejs/glide";
    import { Autoplay } from "@glidejs/glide/dist/glide.modular.esm";
    var glide = new Glide({{"#document_slider".$slider_id}}, {
        type: "carousel",
        perView: 3,
        autoplay: 4000,
        breakpoints: {
            800: {
                perView: 1,
            },
        },
    });

    glide.mount({ Autoplay });

</script>
