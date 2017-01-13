<?php
/*
Template Name: location-template-page
*/
// Custom Fields
$latitude = get_post_meta(get_the_ID(), 'latitude', true);
$longitude = get_post_meta(get_the_ID(), 'longitude', true);
$title = get_post_meta(get_the_ID(), 'title', true);
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
          console.log(<?php echo $latitude; ?>)
            var cityLocation = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};
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
                  title: '<?php echo $title; ?>'
                });
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