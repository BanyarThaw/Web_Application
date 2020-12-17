$(document).ready(function() {
  $(".show").click(function () {
    if($(".user_info").first().is(":hidden")) {
      $(".user_info").slideDown("slow");
    }else {
      $(".user_info").slideUp("slow");
    }
  });
  $(".menu_icon").click(function () {
    if($(".wrap_sub_menu_mobile").first().is(":hidden")) {
      $(".wrap_sub_menu_mobile").slideDown("slow");
    }else {
      $(".wrap_sub_menu_mobile").slideUp("slow");
    }
  });
});
