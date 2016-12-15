<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package S&S_Marine_Services
 */

?>
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 m-bottom-20 recent-blogs">
        <h4>In The News</h4>
        <ul>
          <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=6');
          ?>
          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
              <li class="featured-post-links">
                <i class="fa fa-arrow-right"></i> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_limit(60, '...'); ?></a>
              </li>

          <?php endwhile; ?>
        </ul>
      </div>
      <div class="col-sm-4 m-bottom-20">
        <div class="col-xl-4" id="social">
          <i class="fa fa-fw fa-facebook-square"></i>
          <i class="fa fa-fw fa-twitter-square"></i>
          <i class="fa fa-fw fa-google-plus-square"></i>
          <i class="fa fa-fw fa-yelp"></i>
        </div>
        <div class="col-xl-4 payments">
          <h4>Payments Accepted</h4>
          <img alt="<br />
          <b>Notice</b>:  Undefined variable: alt_tag in <b>/home/ccl606/public_html/index.html</b> on line <b>79</b><br />
          " title="<br />
          <b>Notice</b>:  Undefined variable: alt_tag in <b>/home/ccl606/public_html/index.html</b> on line <b>79</b><br />
          " src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-1/credit_card_logos_16.gif" width="150" border="0" />
        </div>
        <div class="col-xl-4 yelp" id="yelp-biz-badge-rrc-Yh0kDMY4NW0ph_3JuKeV5g">
          <h4>Yelp Reviews</h4>
          <a href="https://www.yelp.com/biz/s-and-s-marine-services-tarpon-springs">
            <img alt="S&amp;S Marine Services" src="https://dyn.yelpcdn.com/extimg/en_US/rrc/Yh0kDMY4NW0ph_3JuKeV5g.png" height="55" width="125">
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <h4 id="map-header">Find Us Here <i class="fa fa-angle-double-down" aria-hidden="true"></i></i></h4>
        <div id="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.2096139438863!2d-82.76903668505108!3d28.170539982602417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c28dba7ec7aea1%3A0xf122cb423f10cf48!2sS%26S+Marine+Services!5e0!3m2!1sen!2sus!4v1481252143612" frameborder="0" style="border:0" id="map1" allowfullscreen></iframe>
        </div>
        <div id="address">
          <h4>S&amp;S Marine Services</h4>
          <p>716 Wesley Ave #18</p>
          <p>Tarpon Springs, FL 34683</p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-base">
    <div class="footer-base-left">
      <span id="copyright">Copyright </span><a href="/">S&amp;S Marine Services</a> <span id="date"><?php echo date("Y"); ?></span>
    </div>
    <div class="footer-base-right">
      <img src="http://localhost:8888/wp-content/uploads/2016/12/logo.png" alt="Company Logo" id="logo"/>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</script>
</body>
</html>
