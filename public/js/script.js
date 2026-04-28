/** @format */

const toggleBtn = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");

toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("d-none");
});
