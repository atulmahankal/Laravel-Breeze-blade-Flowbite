import './bootstrap';

window.addEventListener("load", () => {
  // toggle dark mode
  var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
  var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
  var themeToggleBtn = document.getElementById('theme-toggle');

  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
    themeToggleDarkIcon.classList.toggle('hidden');
  } else {
    document.documentElement.classList.remove('dark')
    themeToggleLightIcon.classList.toggle('hidden');
  }

  themeToggleBtn.addEventListener('click', function () {
    if (localStorage.getItem('theme')) {
      localStorage.removeItem('theme');
      document.documentElement.classList.remove('dark')
    } else {
      localStorage.theme = 'dark';
      document.documentElement.classList.add('dark')
    }
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');
  });
});