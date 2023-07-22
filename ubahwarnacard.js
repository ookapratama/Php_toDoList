$("#checkbox_task").on("click", function () {
  if ($("#checkbox_task:checked").length > 0) {
    $("#card_task").addClass("bg-secondary");
  } else {
    $("#card_task").removeClass("bg-secondary");
  }
});
