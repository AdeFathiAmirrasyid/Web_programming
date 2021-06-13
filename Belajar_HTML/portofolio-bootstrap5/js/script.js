//Parallax

// About
$(window).on("load", function () {
  $(".pkiri").addClass("pTampil");
  $(".pkanan").addClass("pTampil");
});
// Scroll
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  $(".jumbotron img").css({
    transform: "translate(0px, " + wScroll / 6 + "%)",
  });
  $(".jumbotron h1").css({
    transform: "translate(0px, " + wScroll / 4 + "%)",
  });
  $(".jumbotron p").css({
    transform: "translate(0px, " + wScroll / 2 + "%)",
  });

  //   My Projects
  if (wScroll > $("#projects").offset().top - 300) {
    $("#projects .card").each(function (i) {
      setTimeout(function () {
        $("#projects .card").eq(i).addClass("tampil");
      }, 150 * (i + 1));
    });
  }
});
