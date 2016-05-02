<?php get_header();
/*
Template Name: About Page
*/
?>

<!--
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>
  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
-->

<!-- Banner Image -->
<div class="jumbotron text-center aboutBanner">
  <h1>About Us</h1>
  <div id="test"></div>
</div>

<!-- The Team -->
<div class="container minHeight stretchAcross">
  <div class="row">
    <!-- Heading of Section -->
    <div class="col-xs-12 text-center heading-team">
      <h2>Our Team</h2>
    </div>

    <!-- Carousel Start -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner tabletCarousel" role="listbox">
        <!-- Irvin / First slide-->
        <div class="item active">
          <!-- Picture -->
          <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-9 col-sm-offset-3 col-xs-12">
            <div class="imageBorder">
              <img src="<?php bloginfo('template_directory'); ?>/images/irvin.png" class="img-responsive" alt="Irvin Castillo" />
            </div>
          </div> <!-- end column -->
          <!-- spacing -->
          <!-- Bio -->
          <div class="col-lg-5 noLgMargin col-md-6 col-sm-10 col-sm-offset-2 col-xs-12">
            <div class="bio bababa">
              <h2>Irvin Castillo</h2>
              <small><em>Web Designer</em></small>
              <p>
                Irvin Castillo (Creator of award winning App Pick Me) is a Multi-Media production student. He has made such impacts on the internet like Mixer Grounds, and has partnered up with Anthony Gaona to make the epic game Williamson.
              </p>
            </div> <!-- end bio -->
          </div> <!-- end column -->
          <div class="col-lg-1">
          </div>
        </div> <!-- end of item/slide -->

        <!-- Joe -->
        <div class="item">
          <!-- Picture -->
          <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-9 col-sm-offset-3 col-xs-12">
            <div class="imageBorder">
              <img src="<?php bloginfo('template_directory'); ?>/images/joe.jpg" class="img-responsive" alt="Irvin Castillo" />
            </div>
          </div> <!-- end column -->
          <!-- spacing -->
          <!-- Bio -->
          <div class="col-lg-5 noLgMargin col-md-6 col-sm-10 col-sm-offset-2 col-xs-12">
            <div class="bio bababa">
              <h2>Joe Willis</h2>
              <small><em>Developer</em></small>
              <p>
                Joe Willis graduated from Cal State University, Northridge in 2020. He studed Graphic and Web Design under the apprentiship of Trevor Greenleaf.
              </p>
            </div> <!-- end bio -->
          </div> <!-- end column -->
          <div class="col-lg-1">
          </div>
        </div> <!-- end of item/slide -->

        <!-- Anthony -->
        <div class="item">
          <!-- Picture -->
          <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-9 col-sm-offset-3 col-xs-12">
            <div class="imageBorder">
              <img src="<?php bloginfo('template_directory'); ?>/images/anthony.jpg" class="img-responsive" alt="Irvin Castillo" />
            </div>
          </div> <!-- end column -->
          <!-- spacing -->
          <!-- Bio -->
          <div class="col-lg-5 noLgMargin col-md-6 col-sm-10 col-sm-offset-2 col-xs-12">
            <div class="bio bababa">
              <h2>Anthony Gaona</h2>
              <small><em>Developer</em></small>
              <p>
                Anthony Gaona is a orange salesman on the 405 who occasionaly does HTML and CSS in order to pay for college. He enjoys long walks on the beach and long island ice teas.
              </p>
            </div> <!-- end bio -->
          </div> <!-- end column -->
          <div class="col-lg-1">
          </div>
        </div> <!-- end of item/slide -->
      </div> <!-- end carousel inner -->

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- carousel end -->
  </div>
</div>

<!-- Purpose -->
<div class="purpose">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Our Purpose</h2>
            <p>
              Deliver high quality, old-fashioned, rural, rustic,  authentic content
              for use in web, print, and digital media.
            </p>
            <p>
              To contact us please visit our <a href="#">contact page</a>
            </p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
