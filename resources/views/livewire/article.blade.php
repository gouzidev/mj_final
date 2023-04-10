
<div class="glide__slide h-full relative rounded-lg">
      <div id="img" class="">
        <img src="{{$data["thumbnail"]}}" class=" h-full object-cover duration-200 
      w-full " />
      </div>
      <div
        class="absolute p-6 w-full bg-gradient-to-b from-transparent via-black/50 to-black/70 bottom-0 duration-300"
        id="description"
        >
        <a >
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-white"
          >
            {{ $data["title"] }}
          </h5>
        </a>
        <p
          class="mb-3 font-normal text-gray-300 flex h-24 overflow-hidden"
        >
          {{ $data["content"] }}
        </p>
      </div>

  </div>
  