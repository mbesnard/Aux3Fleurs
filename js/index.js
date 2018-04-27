'use strict';

var navBar = $('.navbar'),
    data = navBar.data();


var scrolling = false,
    scrolledPast = false;

function switchInto() {
  scrolledPast = true;
  navBar.removeClass(data.startcolor);
  navBar.removeClass(data.startsize);
  navBar.addClass(data.intocolor);
  navBar.addClass(data.intosize);
  console.log('into transition triggered!');
};


function switchStart() {
  scrolledPast = false;
  navBar.addClass(data.startcolor);
  navBar.addClass(data.startsize);
  navBar.removeClass(data.intocolor);
  navBar.removeClass(data.intosize);
  console.log('start transition triggered!');
}

$(window).scroll(function () {
  return scrolling = true;
});

setInterval(function () {
  if (scrolling) {
    scrolling = false;
    if ($(window).scrollTop() > 100) {
      if (!scrolledPast) {
        switchInto();
      }
    } else {
      if (scrolledPast) {
        switchStart();
      }
    }
  }
}, 100);