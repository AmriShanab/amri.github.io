


document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger');
  const navLinks = document.querySelector('.main-nav');

  burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });

  const navbar = document.querySelector('.navbar-container');

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (scrollY >= 50) {
      navbar.classList.add('final');
      navbar.classList.remove('solid', 'hidden', 'show');
    } else {
      navbar.classList.remove('final');
    }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger');
  const navLinks = document.querySelector('.main-nav');

  burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });
});