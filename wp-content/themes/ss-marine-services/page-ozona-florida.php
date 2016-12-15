<?php
/*
Template Name: ozona-florida-Page
*/
get_header(); ?>
  <?php if (have_posts()) {
        while (have_posts()) {
        the_post();
  ?>
<div class="service-areas pages">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="service-area-page-map">
          <div id="map"></div>
          <script>
            var cityLocation = {lat: 28.065551, lng: -82.775162};
            var ssMarine = {lat: 28.170540, lng: -82.769170};
              function initMap() {
                // var bounds = new google.maps.LatLngBounds(cityLocation,ssMarine);
                var map = new google.maps.Map(document.getElementById('map'), {
                  center: cityLocation,
                  zoom: 12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
                });
                var marker = new google.maps.Marker({
                  position: cityLocation,
                  map: map,
                  title: 'Ozona Florida'
                });
                // var marker = new google.maps.Marker({
                //   position: ssMarine,
                //   map: map,
                //   title: 'S&s Marine Services'
                // });
                // map.fitBounds(bounds);
            }
          </script>
          <div id="service-areas-content">
            <?php
            the_content();
              }
            } ?>
          </div>
          <div class="service-area-page-img">
            <?php the_post_thumbnail() ?>
          </div>
          <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBh6nbQHs2LEwcBwwgZg613Cmglwp5_hek&callback=initMap'
          async defer></script>
        </div>

      </div>
      <div class="col-md-4 sidebar"><?php get_sidebar() ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
