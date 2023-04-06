
@php
    require_once(resource_path("imports/limitString.php"));
    $limiter = 400;
@endphp

<div class="w-full min-h-screen">
            
    @livewire("gallery",["articles"=> $articles])

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-5">
               @livewire("categories.categories-names")
            </div>
            <div class="hidden lg:mt-0 lg:col-span-7 lg:flex">
                {{-- @livewire("document-slider") --}}
            </div>                
        </div>
    </section>

    @livewire("footer")

    

    <div wire:loading>
        Loading...
    </div>

</div>