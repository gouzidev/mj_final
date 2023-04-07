
<div class="">
    
    <div class=" max-w-screen-lg w-full">
        <div class="inline-flex items-center justify-center w-full dark:text-white">
            
            <div class="text-xl mr-2">Heading</div>

        </div>
        <div class="glide overflow-hidden " id="documents_slider{{$key}}">
            <div
                class="glide__track flex" 
                data-glide-el="track">
                <ul class="glide__slides flex ">
                    @foreach($documents as $document)
                        <li class="glide__slide w-full  flex justify-center items-center">    
                            @livewire("document", ["data"=>$document])
                        </li>
                    @endforeach
                    
                </ul>
                
            </div>

            {{-- <div
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
            </div> --}}
        </div>
    </div>
</div>

<script>
    var glide = new Glide("#documents_slider{{$key}}", {
        type: "carousel",
        perView: 4,
        autoplay: 4000,
        breakpoints: {
            1030:{
                perView: 3
            }
        },
    });

    glide.mount();

</script>
