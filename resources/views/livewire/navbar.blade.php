<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Unbounded&display=swap"
  rel="stylesheet"
/>

<div class="nav md:py-2 bg-gradient-to-b dark:from-gray-700/30" id="navigation">
 
  @livewire("nav-fixed")

  <div class="">
    <div class="mx-auto md:mt-24 max-w-screen-xl md:px-6 px-4 py-3">
      <button
        data-collapse-toggle="navbar-default"
        type="button"
        class="inline-flex items-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <svg
          class="w-6 h-6"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>

      <div class="md:flex justify-between items-center " id="navbar-default">
        <ul
          class="flex flex-col mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0"
        >
          <li>
            <a
              href="#"
              class="block py-2 pl-3 pr-4text-gray-500 sm:mb-0 dark:text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Accuei</a
            >
          </li>
          <li
            class="py-2 pr-4text-gray-500 sm:mb-0 dark:text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
          >
            <button
              id="dropdownDefaultButton1"
              data-dropdown-toggle="dropdown1"
              class="pl-3 flex items-center hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              type="button"
            >
              Direction
              <svg
                class="w-4 h-4 ml-2"
                aria-hidden="true"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                ></path>
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div
              id="dropdown1"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44"
            >
              <ul
                class="p-2 text-smtext-gray-500 sm:mb-0 dark:text-gray-400 dark:bg-gray-900 rounded-md "
                aria-labelledby="dropdownDefaultButton1"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-500 dark:text-while hover:text-white hover:bg-slate-800 rounded-md"
                    >EXM</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li
            class="py-2 pr-4text-gray-500 sm:mb-0 dark:text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
          >
            <button
              id="dropdownDefaultButton2"
              data-dropdown-toggle="dropdown2"
              class="pl-3 flex items-center hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              type="button"
            >
              Centre
              <svg
                class="w-4 h-4 ml-2"
                aria-hidden="true"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                ></path>
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div
              id="dropdown2"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44"
            >
              <ul
                class="p-2 text-smtext-gray-500 sm:mb-0 dark:text-gray-400 dark:bg-gray-900 rounded-md "
                aria-labelledby="dropdownDefaultButton1"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-500 dark:text-while hover:text-white hover:bg-slate-800 rounded-md"
                    >EXM</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a
              href="#"
              class="block py-2 pl-3 pr-4text-gray-500 sm:mb-0 dark:text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Statistics</a
            >
          </li>
          <li class="flex">
            <a
              href="#"
              class="flex py-2 pl-3 pr-4text-gray-500 sm:mb-0 dark:text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Rapports et réalisations</a
            >
          </li>
          <li
            class="flex md:float-right text-sm font-medium text-blue-600"
          ></li>

        </ul>
        <div class="flex items-center">

          <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <span id="theme-toggle-dark-icon" class=" w-5 h-5 hidden" >
              <i class="fa-solid fa-sun "></i>
            </span>
            <span id="theme-toggle-light-icon" class="w-5 h-5 hidden" >
              <i class="fa-solid fa-moon"></i>
            </svg>
        </button>


            @if(!Auth::user()) 
            <a href="{{route("login")}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                  <i class="fa-solid fa-right-to-bracket"></i>  
                  Connexion
                </button> 
            </a>    
        
            @else

                                
                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-dark dark:text-white focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                  <i class="fa-regular fa-user pr-2"></i>
                  {{ Auth::user()->name }}
                  <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDivider" class="z-10 hidden">

                        <form method="POST" class="flex items-center justify-center " action="{{route("logout")}}" aria-labelledby="dropdownDividerButton">
                          @csrf
                          <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="submit" class="font-lg bg-red-500 text-white   rounded-md px-3 py-2.5">
                            <i class="fa-solid fa-right-from-bracket duration-150 hover:pr-4"></i>  
                            Deconnecter
                          </button> 

                          <div data-popover id="popover-bottom" role="tooltip" class="absolute z-[100] invisible flex text-sm transition-opacity duration-300 border-gray-200 rounded-lg shadow-sm opacity-0 w-72 ">
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 h-full" role="alert">
                              En cliquant sur ce bouton, vous serez <b class="font-medium">déconnecté!</b>
                            </div>
                          </div>





                      </form>  

                </div>


            @endif

            
        </div>
      </div>
      

    </div>
  

    <script
      src="https://kit.fontawesome.com/ba496a122f.js"
      crossorigin="anonymous"
    ></script>
  </div>
</div>