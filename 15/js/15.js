
$(document).ready(function () {
  $("#des").click(function () {
    $("#footwear").css("visibility", "visible");
    $("#review").css("visibility", "hidden");
    $("#deliver").css("visibility", "hidden");
  });
  $("#rev").click(function () {
    $("#review").css("visibility", "visible");
    $("#footwear").css("visibility", "hidden");
    $("#deliver").css("visibility", "hidden");
  });
  $("#ship").click(function () {
    $("#deliver").css("visibility", "visible");
    $("#footwear").css("visibility", "hidden");
    $("#review").css("visibility", "hidden");
  });

});
