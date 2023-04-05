
@php
    require_once(resource_path("imports/limitString.php"));
    $limiter = 400;
@endphp

<div class="w-full min-h-screen">
   
            
    @livewire("gallery",["articles"=> $articles])

    
    @livewire("footer")




    <div wire:loading>
        Loading...
    </div>

</div>