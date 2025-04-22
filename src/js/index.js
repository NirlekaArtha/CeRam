document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("nav-bar"); 
  const cardScroller = document.getElementById("card-scroller");

  window.addEventListener("scroll", function () {

      const scrollPosition = window.scrollY; 
      const navbarHeight = navbar.offsetHeight;

      if (scrollPosition > navbarHeight) {
          navbar.classList.add("bg-accent1dark/65", "h-16", "backdrop-blur-md");
          navbar.classList.remove("bg-linear-to-b", "from-accent1/15", "from-30%", "h-32")
        } else {
          navbar.classList.remove("bg-accent1dark/65", "h-16", "backdrop-blur-md");
          navbar.classList.add("bg-linear-to-b", "from-accent1/15", "from-30%", "h-32")
      }
  });

  // Menambahkan event listener untuk event resize
  window.addEventListener('resize', () => {
    const width = window.innerWidth;

    if (width >= 1024)
    {
      cardScroller.classList.remove("scrollbar-hidden");
      cardScroller.classList.add("custom-scrollbar");
    } else{
      cardScroller.classList.add("scrollbar-hidden");
      cardScroller.classList.remove("custom-scrollbar");
    }
  });

});
