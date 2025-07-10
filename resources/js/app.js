// resources/js/app.js

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('mobileMenuButton');
  const menu = document.getElementById('mobileMenu');

  if (btn && menu) {
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  }
});
