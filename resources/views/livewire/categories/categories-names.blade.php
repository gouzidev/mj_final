
<div class="w-96 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
    <div  class="flex items-center ">
        <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
            Categories
            <small class="font-semibold text-yellow-400">{{count($categories)}}</small>
        </h5>
    </div>
  
    
    <ul class="my-4 space-y-3 ">
        @foreach ($categories as $category_index => $category)
            @livewire("categories.category-name", ["category" => $category , "category_index" => $category_index])
        @endforeach
    </ul>
   



</div>
