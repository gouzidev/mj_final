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
  } else {
    spec_nav.classList.remove("scale-105");
    spec_nav.classList.remove("drop-shadow-md");
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