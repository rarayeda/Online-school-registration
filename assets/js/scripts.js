const navbar = document.querySelector('.navbar');
const links = navbar.querySelectorAll('a');

links.forEach(link => {
  link.addEventListener('mouseenter', function() {
    this.style.border = '1px solid white';
  });
  link.addEventListener('mouseleave', function() {
    this.style.border = '1px solid transparent';
  });
});
