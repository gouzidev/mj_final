
<div class="w-full p-4 border-r md:border-l md:border-gray-200 sm:p-6 dark:border-gray-700">
    <div  class="flex items-center ">
        <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
            Categories
            <small class="font-semibold text-yellow-400">{{count($categories)}}</small>
        </h5>
    </div>
  
    
    <ul class="my-4 space-y-3 ">
        {{-- @foreach ($categories as $category_index => $category)
            @livewire(
                "categories.category-name", 
                [
                "category" => $category,
                 "category_index" => $category_index
                ]
            )
        @endforeach --}}
        @if(count($categories))
            @foreach ($categories as $category_index => $category)
                @livewire("categories.category-name", 
                    [
                        "data" =>
                            [
                                "category" => $category,
                                "category_index" => $category_index,
                                "docs_count_per_cat" => count($category->documents) 
                            ]
                    ]
                )
            @endforeach
        @else
            <div class="text-2xl dark:text-white text-center flex justify-center items-center">
                <i class="fa-solid fa-bars-staggered mr-2"></i>
                <small class="text-sm text-gray-700 dark:text-gray-400">Aucune catégorie trouvée!</small>
            </div>
        @endif

    </ul>
   



</div>
