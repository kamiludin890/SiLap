/** @format */
$(document).ready(function () {
  $.post("view/dashboard.php", function (data) {
    $("#main-content").html(data);
  });
});
const toggleBtn = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");

toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("d-none");
});
