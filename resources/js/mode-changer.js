
if(!localStorage.getItem('color-theme')){
  localStorage.setItem('color-theme', 'light');
}

var themeToggleBtn = document.getElementById('theme-toggle');

// Change the icons inside the button based on previous settings

 function handleIcons(){
  if (localStorage.getItem('color-theme') == 'dark') {
      themeToggleBtn.innerHTML = "<span id='theme-toggle-dark-icon' ><i class='fa-solid fa-sun'></i></span>"
  } else {
    themeToggleBtn.innerHTML = "<span id='theme-toggle-dark-icon' ><i class='fa-solid fa-moon'></i></span>"
  }

 }
handleIcons()

themeToggleBtn.addEventListener('click', function() {

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

  handleIcons();
  
});