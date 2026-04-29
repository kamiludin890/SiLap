/** @format */
$(document).ready(function () {
  $.post("view/dashboard.php", function (data) {
    $("#main-content").html(data);
  });
});
$("#toggleSidebar").on("click", function () {
  $("#sidebar").toggle();
  $(this).find("i").toggleClass("bi-x-lg bi-list");
});
function setActive(el) {
  $(".nav-link").removeClass("active"); // hapus semua
  el.classList.add("active"); // aktifkan yang diklik
}

$("#dashboard").click(function () {
  $.post("view/dashboard.php", function (data) {
    $("#main-content").html(data);
  });
  setActive(this);
});

$("#data").click(function () {
  $.post("view/data.php", function (data) {
    $("#main-content").html(data);
  });
  setActive(this);
});

$("#laporan").click(function () {
  $.post("view/laporan.php", function (data) {
    $("#main-content").html(data);
  });
  setActive(this);
});

$("#pengaturan").click(function () {
  $.post("view/pengaturan.php", function (data) {
    $("#main-content").html(data);
  });
  setActive(this);
});
