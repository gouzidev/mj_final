
@php
    require_once(resource_path("imports/limitString.php"));
    $limiter = 400;
@endphp

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.4.1/dist/glide.min.js"></script>
<div class="w-full min-h-screen">


    @livewire("gallery",["articles"=> $articles])

    <div class="mx-auto max-w-screen-xl px-4  py-8 lg:gap-8 xl:gap-0 lg:py-16">
        <div class="px-4">
        @livewire("search-document", compact("articles", "categories_and_docs"))
        </div>
        <section class="md:flex space-x-2">
                <div class=" w-full lg:w-2/3  flex justify-center">
                    @livewire("categories.categories-names")
                </div>
                
                <div class=" w-full lg:w-2/3 md:w-1/2 lg:flex-row ">
                    @foreach ($categories_and_docs as $category)
                        {{-- gets the docs from cat (look for categories_and_docs => (CTRL + F)) --}}
                        @livewire("document-slider",[
                            "category" => $category,
                            "key" => $category->id])
                    @endforeach
                </div>                
        </section>

    </div>
    
    @livewire("footer")

    

    <div wire:loading>
        Loading...
    </div>

</div>