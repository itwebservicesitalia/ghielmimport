// Sidebar
var sidebar = document.querySelector(".sidebar");
sidebar.innerHTML = `
<div class="logo">
  <a href="#"><img src="assets/logo.png" alt=""/></a>
</div>
<div class="sidebar-heading">
  <span class="h4">Richiesta d'offerta</span>
</div>
<ul class="sidebar-menu">
  <a href="ferro"><li>Ferro</li></a>
  <a href="accessoriferro"><li>Accessori Ferro</li></a>
  <a href="cemento"><li>Cemento</li></a>
</ul>
`;
var overlay = document.querySelector(".overlay");
var sidebartoggle = document.querySelector("#sidebar-toggle");

sidebartoggle.addEventListener("click", e => {
  e.preventDefault();

  if (sidebar.classList.contains("active")) {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
  } else {
    sidebar.classList.add("active");
    overlay.classList.add("active");
  }
});

overlay.addEventListener("click", e => {
  sidebar.classList.remove("active");
  overlay.classList.remove("active");
});
// End Sidebar
