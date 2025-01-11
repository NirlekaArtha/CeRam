document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("navbar"); 

  window.addEventListener("scroll", function () {

      const scrollPosition = window.scrollY; 
      const navbarHeight = navbar.offsetHeight;

      if (scrollPosition > navbarHeight) {
          navbar.classList.add("bg-accent_1_dark/65", "h-16", "backdrop-blur-md");
          navbar.classList.remove("bg-gradient-to-b", "from-accent_1/15", "from-30%", "h-32")
        } else {
          navbar.classList.remove("bg-accent_1_dark/65", "h-16", "backdrop-blur-md");
          navbar.classList.add("bg-gradient-to-b", "from-accent_1/15", "from-30%", "h-32")
      }
  });
});
