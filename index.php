<?php get_header(); ?>
<!-- 
<?php

if (have_posts()) : while (have_posts()) : the_post();
?>

<h2>
      	<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
      	</a>
      </h2>

 <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>

 --><?php 

$args = array ('post_type' => 'photo',
         'posts_per_page' => '1',
         'orderby' => 'rand'
);

$photo = new WP_Query( $args );
$count = 0;


if ($photo -> have_posts()) : while ($photo -> have_posts()) : $photo -> the_post(); 

?>



<div class="banner">
<!-- Search Form -->
<div class="container">
  <div class="row hd-image">
    <div class="col-xs-12">
      <div class="hd-search">
        <?php get_search_form();?>
      </div>
    </div>
  </div>
<!-- End Search Form -->
</div>
</div>
<hr>



<div class="banner2">
<div class="container TEMP">
<div class="row concrete">
  
    
      <div class="col-xs-12 col-sm-8 home-thumbs-left">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class= "home-thumbs">
            <a href="<?php the_permalink() ?>">
              <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/typewriter.png" alt="">
            </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class= "home-thumbs2">
              <a href="<?php the_permalink() ?>">
              <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/truck.png" alt="">
            </a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6">
            <div class= "home-thumbs">
            <a href="<?php the_permalink() ?>">
              <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/coke.png" alt="">
            </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class= "home-thumbs2">
              <a href="<?php the_permalink() ?>">
              <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/bike.png" alt="">
            </a>
            </div>
          </div>
        </div>
      </div>

    <div class="col-xs-12 col-sm-4">
      <div class="home-thumbs-lg">
      <a href="<?php bloginfo('url'); ?>/people">
          <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/diner.png" alt="">
        </a>
      </div>
     </div>
  
  </div>
</div><!-- end of row concrete -->
</div>
<hr>

<div class="banner3">
<div class="container">
<div class="row home-categories">
  <div class="col-xs-12 categories-title">
    <h1>Browse By Category</h1>
  </div>
  
  
  <div class="col-xs-3 cat-lists">
    <ul><a href="<?php bloginfo('url'); ?>/animals">Animals</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/people-2">People</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/food">Food</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/illustrations">Illustrations</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/music">Music</a></ul>
    
  </div>
  <div class="col-xs-3 cat-lists">
    <ul><a href="<?php bloginfo('url'); ?>/people">Landmarks</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/accessories">Accessories</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/transportation">Transportation</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/entertainment">Entertainment</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/toys">Toys</a></ul>
    
  </div>
  <div class="col-xs-3 cat-lists">
    <ul><a href="<?php bloginfo('url'); ?>/stationery">Stationery</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/travel">Travel</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/Buildings">Buildings</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/industrial">Industrial</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/nature">Nature</a></ul>
    
  </div>
  <div class="col-xs-3 cat-lists">
    <ul><a href="<?php bloginfo('url'); ?>/business">Business</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/typography">Typography</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/communications">Communications</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/editorial">Editorial</a></ul>
    
    
  </div>
</div><!-- end of row home-categories -->
</div>
</div>


<!--
<div class="row concrete">
        
          <div id="box-wrap">
           
          <div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
           
          <a href="<?php the_permalink() ?>">
                    <img class="img-responsive" src="<?php the_field('image');?>" alt="">
                    <br>
                    <?php the_title();?>
                    <?php the_category(', '); ?>
                  </a>
          <!-and other output of the loop ->
           
          </div>
           
          <?php endwhile; ?>
          </div><!-end box-wrap->
          </div>end of column

-->


<!-- <div class="row">

<?php
        $defaults = array(
          'menu_class'      => 'nav nav-pills',
);
        wp_nav_menu( $defaults );
?>


  <div class="col-xs-12 categories-title">
    <h2>Categories</h2>
    <a href="<?php bloginfo('url'); ?>/people">Landmarks</a>
  </div>
  <div class="col-xs-4 categories">



  </div>
  
</div>
 -->







<!-- 
<div class="row">
  <div class="col-xs-12 lower-stuff">
      
      	<a href="<?php the_permalink() ?>">
      		<img class="img-responsive" src="<?php the_field('image');?>" alt="">
      		<br>
      		<?php the_title();?>
      	</a>
        </div>
   </div>  
 		
 	 -->


      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>
  
</div>

<?php get_footer(); ?>