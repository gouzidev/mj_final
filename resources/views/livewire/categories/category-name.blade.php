@php
    require_once(resource_path("imports/limitString.php"))
@endphp

<li data-popover-target={{"popover-right".$category->id}} data-popover-placement="right">
    <a href="{{ route("category.show", $category->id) }}" class="flex items-center p-3 text-base text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
        <span class="flex-1 ml-3 whitespace-nowrap">{{limitString( $category->category_name, 30 )}}</span>
        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
            0
        </span>
    </a>
</li>

  
<div data-popover id={{"popover-right".$category->id}} role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2">
        <p>{{$category->category_name}}</p>
    </div>
    <div data-popper-arrow></div>
</div>