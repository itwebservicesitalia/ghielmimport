// Sidebar
var sidebar = document.querySelector(".sidebar");
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
