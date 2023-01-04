// Responsive Navbar Toggle
$("#nav").click(function(){
  $("#nav").toggleClass("responsive-nav");
});
// Owl Carousal
$("#owl-slider").owlCarousel({
  items: 1,
  nav: false,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayTimeout:6000,
  responsive: {
    0: {
      items: 1
    }
  }
});