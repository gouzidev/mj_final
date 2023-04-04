<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Unbounded&display=swap"
  rel="stylesheet"
/>

<div class="nav py-4 " id="navigation">
  <div class="md:fixed w-full top-0 md:z-[100]">
    <div
      id="spec_nav"
      class="max-w-screen-xl duration-200 sticky flex flex-wrap justify-between items-center mx-auto md:px-6 px-4 py-3 bg-white rounded-lg mt-4"
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
            class="text-sm md:font-small uppercase hidden md:flex font_playfaire"
          >
            La Ministère de la Justice

          </h5>
        </div>
      </a>
      <div
        class="flex items-center justify-center md:justify-left w-full md:w-auto"
      >
        <p class="flex" id="title"></p>
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

      <div class="md:flex justify-between items-center" id="navbar-default">
        <ul
          class="flex flex-col mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0"
        >
          <li>
            <a
              href="#"
              class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Accuei</a
            >
          </li>
          <li
            class="py-2 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
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
                class="p-2 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownDefaultButton1"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-600 hover:text-white hover:bg-slate-700 rounded-md"
                    >EXM</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li
            class="py-2 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
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
                class="p-2 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownDefaultButton2"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-600 hover:text-white hover:bg-slate-700 rounded-md"
                    >EXM</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a
              href="#"
              class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Statistics</a
            >
          </li>
          <li class="flex">
            <a
              href="#"
              class="flex py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
              >Rapports et réalisations</a
            >
          </li>
          <li
            class="flex md:float-right text-sm font-medium text-blue-600"
          ></li>
        </ul>
        <div>
            @if(!Auth::user()) 
            <a href="{{route("login")}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Connexion
                </button> 
            </a>    
        
            @else
                {{ Auth::user()->name }}
                <form method="POST" action="{{route("logout")}}">
                    @csrf
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Logout
                    </button> 
                </form>  
            @endif
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
                el.classList.add("font_playfair", "font-lg", "text-2xl");
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
          scrolled = true;
          spec_nav.classList.add("scale-105");
          spec_nav.classList.add("drop-shadow-md");
        } else {
          scrolled = false;
          spec_nav.classList.remove("scale-105");
          spec_nav.classList.remove("drop-shadow-md");
        }
      });
    </script>

    <script
      src="https://kit.fontawesome.com/ba496a122f.js"
      crossorigin="anonymous"
    ></script>
  </div>
</div>