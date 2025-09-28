<a href="" class=" w-full cursor-pointer flex flex-col items-center rounded-lg shadow md:flex-row md:max-w-xl ">
    <img class="ml-2 object-cover w-full h-96 md:h-auto md:w-48"
    src="{{$data["thumbnail"]}}"
    alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="cursor-pointer mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{$data["title"]}}
        </h5>
        <p class="cursor-pointer mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{$data["content"]}}
        </p>
    </div>
</a>




