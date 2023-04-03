
<div class="glide__slide h-full relative rounded-lg">

      <div id="img" class="">
        <img src="{{$data["image"]}}" class=" h-full object-cover duration-200 
      w-full " />
      </div>
      <div
        class="absolute p-6 w-full bg-gradient-to-b from-transparent via-black/50 to-black/70 opacity-0 "
        id="description"
        >
        <a href="#">
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
          >
            {{ $data["title"] }}
          </h5>
        </a>
        <p
          class="mb-3 font-normal text-gray-700 dark:text-gray-300 flex h-24 overflow-hidden"
        >
          {{ $data["discription"] }}
        </p>
      </div>

  </div>
  