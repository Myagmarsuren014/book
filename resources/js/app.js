import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const menuToggleButton = document.querySelector('[data-collapse-toggle="ecommerce-navbar-menu-1"]');
    const menu = document.getElementById("ecommerce-navbar-menu-1");
  
    menuToggleButton.addEventListener("click", function () {
      const isMenuOpen = menu.classList.contains("hidden");
      
      if (isMenuOpen) {
        menu.classList.remove("hidden");
        menu.classList.add("block");
      } else {
        menu.classList.remove("block");
        menu.classList.add("hidden");
      }
    });
  });
  