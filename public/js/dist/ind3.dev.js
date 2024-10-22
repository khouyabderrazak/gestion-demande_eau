"use strict";

$(document).ready(function () {
  // var  windowElement =  $(window);
  // windowElement.on('beforeunload', function (event) {
  //     // do whatever you want in here before the page unloads.
  //     // the following line of code will prevent reload or navigating away.
  //     event.preventDefault();
  // });
  console.log("hhh");
  $(window).bind('beforeunload', function (event) {
    event.preventDefault();
  });
});