<div class="md:fixed w-full top-0 md:z-[100] bg-white/80 backdrop-blur-md dark:bg-gray-800/80">
    <div
      id="spec_nav"
      class="max-w-screen-xl duration-200 flex flex-wrap justify-between items-center mx-auto md:px-6 px-4 py-3  my-2 bg-transparent"
    >
      <a
        href="/"
        class="flex flex-col md:flex-row items-center w-full md:auto md:w-1/4"
      >
        <img src={{asset("logo.png")}} class="h-14 md:mr-2" alt="La Ministère de
        la Justice" />
        <div class="">
          <h4 href="#" class="text-sm font-medium uppercase gold">
            Royaume du Maroc
          </h4>
          <h5
            href="#"
            class="text-sm md:font-small uppercase hidden md:flex font_playfaire text-gray-500 sm:mb-0 dark:text-gray-400"
          >
            La Ministère de la Justice

          </h5>
        </div>
      </a>
      <div
        class="flex items-center justify-center md:justify-left w-full md:w-auto"
      >
        <p class="flex text-gray-500 sm:mb-0 dark:text-gray-200" id="title"></p>
      </div>
      <div class="hidden md:flex justify-end md:w-1/4">
        <img src={{asset("centre-logo.png")}} class="h-16" alt="La Ministère de
        la Justice" />
      </div>
    </div>
  </div>



  @vite("resources/js/navbar.js")