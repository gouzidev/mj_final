@php
    $perview = 4;
    if(count($category->documents)< 4){
        $perview = count($category->documents);
    }
@endphp


<div class="">
    
    <div class="max-w-screen-lg w-full">
        <div class="inline-flex items-center w-full dark:text-white">
            
            <div class="text-xl py-4">{{ $category->category_name }}</div>

        </div>
        <div class="glide overflow-hidden " id="documents_slider{{$key}}">
            <div
                class="glide__track " 
                data-glide-el="track">
                <ul class="glide__slides flex">
                    @foreach($category->documents as $doc)
                        <li class="glide__slide w-full flex">    
                            @livewire("document", [
                                "document" => $doc
                            ])
                        </li>
                    @endforeach
                    
                </ul>
                
            </div>

        </div>
    </div>

</div>

<script>
    var glide = new Glide("#documents_slider{{$key}}", {
      type: "carousel",
      perView: {{$perview}},
      breakpoints: {
          1030:{
              perView: 2
          },
          800:{
              perView:1
          },
          768:{
              perView: 3
          }
      }
    });

    glide.mount();

</script>

