$(document).ready(function () {
  // Khôi phục trạng thái "active" của thẻ a khi tải lại trang
  var lastClickedLink = sessionStorage.getItem("lastClickedLink");
  if (lastClickedLink) {
    $(".navbar").find(".active").removeClass("active");
    $(".navbar")
      .find('a[href="' + lastClickedLink + '"]')
      .addClass("active");
  }

  // Thêm sự kiện "click" cho các thẻ a
  $(".navbar .nav-link").on("click", function () {
    // Xóa trạng thái "active" của tất cả các thẻ a
    $(".navbar").find(".active").removeClass("active");

    // Thêm trạng thái "active" cho thẻ a được nhấp vào
    $(this).addClass("active");

    // Lưu trữ thông tin về thẻ a được nhấp vào trong sessionStorage
    sessionStorage.setItem("lastClickedLink", $(this).attr("href"));
  });
});
