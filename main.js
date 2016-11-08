$( document ).ready(function() {

  var bgImg = 'url(assets/img/bg.png)';
  document.body.style.backgroundImage = bgImg;

  // set header & mock div height on load & window resize
  $(window).on("resize", function () {
    var height = $(window).height();
    $('#header').css('height', height + 'px');
    $('.border').css('height', (height - 70) + 'px');
    $('#main').css('height', height + 'px');
    $("#mock-div").css('height', height);
  }).resize();

  // fade to reveal, then hide so that <a> links are clickable
  $("#mock-div").delay(300).animate({"opacity": "0"}, 1000, function() {
    $("#mock-div").hide();
  });

});