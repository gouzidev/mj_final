<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Unbounded&display=swap"
  rel="stylesheet"
/>

<div class="nav py-4  dark:bg-gray-900" id="navigation">
  <div class="md:fixed w-full top-0 md:z-[100]">
    <div
      id="spec_nav"
      class="max-w-screen-xl duration-200 sticky flex flex-wrap justify-between items-center mx-auto md:px-6 px-4 py-3 rounded-xl mt-4"
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
            @if(!Auth::user()) 
            <a href="{{route("login")}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
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
                          <button type="submit" class="font-lg bg-red-500 text-white   rounded-md px-3 py-2.5">
                            <i class="fa-solid fa-right-from-bracket duration-150 hover:pr-4"></i>  
                            Deconnecter
                          </button> 
                      </form>  

                </div>


            @endif

            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <span id="theme-toggle-dark-icon" class=" w-5 h-5 hidden" >
                <i class="fa-solid fa-sun "></i>
              </span>
              <span id="theme-toggle-light-icon" class="w-5 h-5 hidden" >
                <i class="fa-solid fa-moon"></i>
              </svg>
          </button>

        </div>
      </div>
    </div>

    <script>
      const removeIfExistsOrAdd = (target, className) => {
        if (target.classList.contains(className)) {
          target.classList.remove(className);
        } else {
          target.classList.add(className);
        }
      };

      const titleTarget = document.querySelector("#title");

      const titles = [
        "Le site de l'Observatoire national de la délinquance",
        "للإجرام الوطني المرصد موقع",
      ];

      const titleAnimate = () => {
        titles.map((title, i) => {
          setTimeout(() => {
            titleTarget.innerHTML = "";

            const titleArr = title.split(" ");

            titleArr.map((titleEl) => {
              let el = document.createElement("span");
              el.innerText = titleEl;
              if (i == 0) {
                el.classList.add("font_playfair", "font-lg", "md:text-xl");
              } else {
                el.classList.add("arabic", "text-lg", "md:text-4xl");
              }
              titleTarget.appendChild(el);
            });
          }, 8000 * i);
        });
      };

      titleAnimate();
      setInterval(titleAnimate, 16000);

      removeIfExistsOrAdd(titleTarget, "arabic");
      removeIfExistsOrAdd(titleTarget, "font_playfair");

      const nav = document.querySelector("#navigation");
      const spec_nav = document.querySelector("#spec_nav");
      const navTop = nav.offsetTop + 5;

      window.addEventListener("scroll", function () {
        if (window.scrollY >= navTop) {
          spec_nav.classList.add("scale-105");
          spec_nav.classList.add("drop-shadow-md");
          spec_nav.classList.add("bg-white","dark:bg-gray-800");
        } else {
          spec_nav.classList.remove("scale-105");
          spec_nav.classList.remove("drop-shadow-md");
          spec_nav.classList.remove("bg-white","dark:bg-gray-800");
        }
      });

      if(!localStorage.getItem('color-theme')){
        localStorage.setItem('color-theme', 'light');
      }

      var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      // Change the icons inside the button based on previous settings
      if (localStorage.getItem('color-theme') === 'dark') {
          themeToggleLightIcon.classList.remove('hidden');
          themeToggleDarkIcon.classList.add('hidden');
      } else {
          themeToggleDarkIcon.classList.remove('hidden');
          themeToggleLightIcon.classList.add('hidden');

      }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
        
    });

    </script>

    <script
      src="https://kit.fontawesome.com/ba496a122f.js"
      crossorigin="anonymous"
    ></script>
  </div>
</div>