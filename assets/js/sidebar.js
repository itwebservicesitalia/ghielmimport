"use strict";

// Sidebar
var sidebar = document.querySelector(".sidebar");
sidebar.innerHTML =
  '\n<div class="logo">\n  <a href="#"><img src="assets/logo.png" alt=""/></a>\n</div>\n<div class="sidebar-heading">\n  <span class="h4">Richiesta d\'offerta</span>\n</div>\n<ul class="sidebar-menu">\n  <a href="ferro"><li>Ferro</li></a>\n  <a href="accessoriferro"><li>Accessori Ferro</li></a>\n <a href="accessoriferrospeciali"><li>Accessori Ferro (speciali)</li></a>\n <a href="cemento"><li>Cemento</li></a>\n</ul>\n';
var overlay = document.querySelector(".overlay");
var sidebartoggle = document.querySelector("#sidebar-toggle");
sidebartoggle.addEventListener("click", function(e) {
  e.preventDefault();

  if (sidebar.classList.contains("active")) {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
  } else {
    sidebar.classList.add("active");
    overlay.classList.add("active");
  }
});
overlay.addEventListener("click", function(e) {
  sidebar.classList.remove("active");
  overlay.classList.remove("active");
}); // End Sidebar
