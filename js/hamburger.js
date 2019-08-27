const menu = document.querySelector('.hamburger');
const menuUl = document.getElementById('mobile-menu');
menu.addEventListener(
  'click',
  function() {
    this.classList.toggle('hamburger--active');

    menuUl.classList.toggle('show-mobile');
  },
  false
);
