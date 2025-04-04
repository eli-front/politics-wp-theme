document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header");
  const offset = 20;

  const isHomePath =
    window.location.pathname === "/" && window.location.search === "";

  if (!isHomePath) {
    header.classList.add("scrolled");
    return;
  }

  const handleScroll = () => {
    if (!isHomePath) return;
    if (window.scrollY > offset) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };

  handleScroll(); // check on load
  window.addEventListener("scroll", handleScroll);
});
