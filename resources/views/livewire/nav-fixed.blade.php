<div id="nav" class="md:fixed w-full top-0 md:z-[100] bg-white/80 backdrop-blur-md dark:bg-gray-800/80  border-white/20">
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

const nav = document.querySelector("#nav");
const spec_nav = document.querySelector("#spec_nav");
const navTop = nav.offsetTop + 5;
var shown = true, scrollCounter = 0;
window.addEventListener("scroll", function (e) {
  if (window.scrollY >= navTop) {
    spec_nav.classList.add("drop-shadow-md");
    nav.classList.add("border-b")
  } else {
    spec_nav.classList.remove("drop-shadow-md");
    nav.classList.remove("border-b")

  }


  // scrollCounter += e;
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