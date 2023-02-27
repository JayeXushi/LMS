
// <-- Carousel --> Used in Index page
$(document).ready(function () {
  $("#myCarousel").slidesjs({
    play: {
      active: true,
      auto: true,
      interval: 500,
      swap: true,
    },
  });
});

// <-- Sticky Navbar --> Used on the Index page
$(document).ready(function () {
  $(window).bind("scroll", function () {
    if ($(window).scrollTop() > 0) {
      $("#nav").addClass("scroll-active");
    } else {
      $("#nav").removeClass("scroll-active");
    }
  });
});

// <-- Owl Carousel --> Used in Things to do Page
// input.setAttribute("size", input.getAttribute("placeholder").length);
$(document).ready(function () {
  $("#owl-one").owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      768: {
        items: 3,
      },
      1100: {
        items: 5,
      },
      1400: {
        items: 7,
        loop: false,
      },
    },
  });
  $("#owl-two").owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1100: {
        items: 3,
      },
      1400: {
        items: 3,
        loop: false,
      },
    },
  });
});


// // <-- Modal --> 
// const myModal = document.getElementById("myModal");
// const myInput = document.getElementById("myInput");

// myModal.addEventListener("shown.bs.modal", () => {
//   myInput.focus();
// });