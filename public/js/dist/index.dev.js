"use strict";

$(document).ready(function () {
  var winH = $(window).height(),
      wiW = $(window).width(),
      uph = $('.nv1').innerHeight(),
      navH = $('.navbar').innerHeight();
  $('.slide, .carousel,.carousel img').height(winH - (navH + uph));

  if (wiW < 700) {
    $('.slide, .carousel,.carousel img').height(winH - uph * 5);
  }

  $('#omar1').click(css({
    display: "none"
  })); // $( ".q2" ).click(function() {
  //     $( "aaa2" ).css({display:"none"});
  //   });
});