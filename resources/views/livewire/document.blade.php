
@php
    require_once(resource_path("imports/limitString.php"));
    $size = "md:w-[250px] md:h-[400px]";
    if(isset($category_name)){
      $size = "md:w-[250px] md:h-[450px]";
    }
@endphp
@vite("resources/css/document.css")

<div class="shadow-card flex flex-col rounded-xl bg-clip-border {{$size}} document">
  <div class="mx-4 -mt-6 translate-y-0 h-2/3 overflow-hidden w-full min-h-96">
    <div class="h-full w-full" blur-shadow-image="true">
      <img
        class="h-full w-full duration-300 hover:scale-110 object-cover"
        src="{{asset($document["thumbnail"])}}"
        alt="{{$document["title"]}}"
      />
    </div>
  </div>
  <div class="text-secondary flex-1 p-6">
    <div >
      <h4 class="font-medium dark:text-white text-md sm:text-sm">
        {{limitString($document["title"],50)}}
      </h4>
    </div>
    <small class="text-gray-700 dark:text-gray-500">
      Créé à {{$document["created_at"]}}
    </small>
    @isset($category_name)
      <div class="py-4 text-gray-800 dark:text-gray-400">
        <small>Catégorie:</small>
        <div class="text-yellow-700  dark:text-yellow-500 text-sm flex">
            {{ limitString($category_name, 30)}}
        </div>
      </div>
    @endisset
    <button
      class="text-blue-500 middle none center block"
      data-ripple-light="true"
    >
    <i class="fa-solid fa-arrow-down mr-3"></i>
      <a download href={{ env("APP_URL") . "/" . $document->file }}>
        Télécharger
      </a>
    </button>
  </div>
</div>