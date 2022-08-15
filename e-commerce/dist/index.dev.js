"use strict";

$(document).ready(function () {
  //banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1
  }); //top sale owl carousel

  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  }); // isotype filter

  var grid = $(".grid").isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  }); //filters values on button click

  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr('data-filter');
    grid.isotope({
      filter: filterValue
    });
  });
});