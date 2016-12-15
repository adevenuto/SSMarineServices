<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<div id="main-body">
  <?php if (have_posts()) {
        while (have_posts()) {
        the_post();
  ?>
  <div id="hero-section">
    <div id="overlay"></div>
    <div id="hero-section-message">

      <h1>S&amp;S Marine Services</h1>
      <h3>Professional Marine Maintenance &amp; Repair</h3>
      <div id="cta">
        <a href="#">Request A Quote</a>
      </div>
    </div>
      <?php the_post_thumbnail("full"); ?>
  </div>
  <section id="services-info-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 services-info m-t-80">
          <i class="fa fa-anchor" aria-hidden="true"></i>
          <hr>
          <ul>
            <li>100 Hour Service</li>
            <li>Electronic Installation</li>
            <li>Diagnostic Checks</li>
            <li>Generator Services</li>
            <li>Re-powers</li>
            <li>Maintenance Programs</li>
            <li>Detailing</li>
            <li>Fiberglass Gel-Coat Repair</li>
            <li>Yacht Maintenance</li>
            <li>Mechanical Surveys</li>
          </ul>
          <div class="services-info-anchor">
            <a href="#">Services</a>
          </div>
        </div>
        <div class="col-sm-4 services-info">
          <!-- <img src="<#?php bloginfo('stylesheet_directory'); ?>/assets/images/helm.svg" id="helm" width="120" height="120"> -->
          <i class="fa fa-cog" aria-hidden="true"></i>
          <hr>
          <ul>
            <li>Annual Tune Ups</li>
            <li>I/O Tune Ups</li>
            <li>Outboard Tune Up</li>
            <li>Inboard Tune Up</li>
            <li>Diesel Boat Repair</li>
            <li>Mechanical Inspections</li>
            <li>Complete Rewires</li>
            <li>Bottom Paint</li>
            <li>Outboard Repairs</li>
            <li>Power-Head Rebuilding</li>
          </ul>
          <div class="services-info-anchor">
            <a href="#">Contact Us</a>
          </div>
        </div>
        <div class="col-sm-4 services-info m-t-80">
          <i class="fa fa-wrench" aria-hidden="true"></i>
          <hr>
          <ul>
            <li>Lower Unit Repair Service</li>
            <li>Lower Unit Rebuilds</li>
            <li>Ignition Ion/Fuel System </li>
            <li>Diagnostics Service</li>
            <li>Steering Systems Service</li>
            <li>Boat Maintenance</li>
            <li>Marine Electronics</li>
            <li>Boat Repair Service</li>
            <li>Boat Trailer Repair</li>
            <li>Mobile Repair Service</li>
          </ul>
          <div class="services-info-anchor">
            <a href="#">Service Area</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div id="carousel-container">
      <div class="container-fluid padding-0" id="theCarousel">
        <div class="col-xs-12 padding-0">
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel1.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel2.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel3.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel4.png" alt="Image" class="img-responsive">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel5.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel6.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel7.png" alt="Image" class="img-responsive">
                  </div>
                  <div class="col-xs-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/carousel8.png" alt="Image" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="carousel-bottom-img">
      <p>Fall in love with your boat</p>
      <p>All over again!</p>
      <div id="carousel-overlay"></div>
    </div>
  </section>
  <section id="company-statement">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <p>We pride ourselves on excellent customer service, and strive to offer the utmost in convenience for our clientele.
          Our home base is located in Tarpon Springs, Florida, but our mobile unit allows us to service the entire Tampa Bay Area
          We Serve Tarpon Springs, Palm Harbor, Dunedin, Crystal Beach, Countryside, Oldsmar, Tampa, Holiday, and New Port Richey.</p>
        </div>
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brands.png" alt="Ionmage" class="img-responsive">
        </div>
        <div class="col-sm-4">
          <p>Whether you are bringing your boat into our shop, or having us come to service you, S&S Marine Services provides the quality and proficiency you expect in a marine repair service.
          With an excellent reputation in customer service, and extensive experience, our dedicated team will keep your boat running smoothly.
          Don’t be stuck watching everyone else enjoy the fun!</p>
        </div>
      </div>
    </div>
  </section>
  <?php
      the_content();

    }
  } ?>
</div>
<?php get_footer(); ?>

