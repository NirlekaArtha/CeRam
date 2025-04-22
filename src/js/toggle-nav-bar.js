const hamburgerMenu = document.getElementById("hamburger-menu");
const navbar = document.getElementById("nav-bar");
const closenav = document.getElementById("close-nav");

document.addEventListener("click", e => {
  if (!navbar.contains(e.target) && !hamburgerMenu.contains(e.target)) {
  {
    navbar.classList.replace("translate-x-0", "-translate-x-full");
  }
  }
});

hamburgerMenu.addEventListener("click", () => {
  navbar.classList.toggle("translate-x-0");
  navbar.classList.toggle("-translate-x-full");
});

closenav.addEventListener("click", () => {
  navbar.classList.replace("translate-x-0", "-translate-x-full");
});
