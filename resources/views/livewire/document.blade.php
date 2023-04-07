


<div class="shadow-card flex flex-col rounded-xl bg-clip-border ">
  <div class="mx-4 -mt-6 translate-y-0">
    <div class="h-2/3 w-full" blur-shadow-image="true">
      <img
        class="h-full w-full rounded-lg duration-300 hover:scale-110"
        src="{{$data["image"]}}"
        alt="card image"
      />
    </div>
  </div>
  <div class="text-secondary flex-1 p-6">
    <a href="#">
      <h4 class="font-medium dark:text-white">{{$data["title"]}}</h4>
    </a>
    <button
      class="text-blue-500 middle none center "
      data-ripple-light="true"
    >
    <i class="fa-solid fa-arrow-down mr-3"></i>
    Télécharge
    </button>
  </div>
</div>