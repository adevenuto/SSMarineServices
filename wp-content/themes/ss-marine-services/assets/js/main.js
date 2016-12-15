$(function() {
  $('#myCarousel').carousel({
  interval: 5500
  })

    $('#myCarousel').on('slid.bs.carousel', function() {
      //alert("slid");
  });
});
