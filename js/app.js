(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
  });
  window.addEventListener("scroll", function() {
    let header = document.querySelector(".header");
    if (window.scrollY > 250) {
      header.classList.add("fixeds");
    } else {
      header.classList.remove("fixeds");
    }
  });
})();
