$(function () {
  /* Toggle dropdown hamburger menu
  -------------------------------------------------- */
  $(".dropdown-menu").hide();

  $(".dropdown-trigger").click(function () {
    $(".dropdown-menu").toggle();
  });

  $("#download-csv").on("click", "tap", function () {
    $.ajax({
      url: "sql/create_csv_file.php",
      success: function (result) {
        $("#div1").html(result);
      },
    });
  });

  /* Get screen width and height
  -------------------------------------------------- */
  /* var screenWidth = screen.width;
  var screenHeight = screen.height;

  console.log("Width: " + screenWidth);
  console.log("Height: " + screenHeight); */
});
