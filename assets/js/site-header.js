document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header");
  const offset = 20;

  const handleScroll = () => {
    if (window.scrollY > offset) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };

  handleScroll(); // check on load
  window.addEventListener("scroll", handleScroll);
});
