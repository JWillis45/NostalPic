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
  <div class="all-home-thumbs">
    
      <div class="col-xs-12 col-sm-8 home-thumbs-left">
        <div class="row">
          <div class="col-xs-12 col-sm-6 h-thumbs-col2">
            <div class= "home-thumbs">
            <a href="<?php bloginfo('url'); ?>/business">
              <img class="img-responsive one" src="" alt="">
            </a>
            <h4 class="home-thumb-titles">Business</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 h-thumbs-col">
            <div class= "home-thumbs2">
              <a href="<?php bloginfo('url'); ?>/transportation">
              <img class="img-responsive three" src="" alt="">
            </a>
            <h4 class="home-thumb-titles">Transportation</h4>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 h-thumbs-col2">
            <div class= "home-thumbs">
            <a href="<?php bloginfo('url'); ?>/food">
              <img class="img-responsive two" src="" alt="">
            </a>
            <h4 class="home-thumb-titles">Food</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 h-thumbs-col">
            <div class= "home-thumbs2">
              <a href="<?php bloginfo('url'); ?>/urban">
              <img class="img-responsive four" src="" alt="">
            </a>
            <h4 class="home-thumb-titles">Urban</h4>
            </div>
          </div>
        </div>
      </div>

    <div class="col-xs-12 col-sm-4">
      <div class="home-thumbs-lg">
      <a href="<?php bloginfo('url'); ?>/typography">
          <img class="img-responsive" src="" alt="">
        </a>
        <h4 class="home-thumb-titles">Typography</h4>
      </div>
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
    <ul><a href="<?php bloginfo('url'); ?>/communications">Communications</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/Buildings">Buildings</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/industrial">Industrial</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/nature">Nature</a></ul>
    
  </div>
  <div class="col-xs-3 cat-lists">
    <ul><a href="<?php bloginfo('url'); ?>/business">Business</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/typography">Typography</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/travel">Travel</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/editorial">Editorial</a></ul>
    <ul><a href="<?php bloginfo('url'); ?>/urban">Urban</a></ul>

    
  </div>
</div><!-- end of row home-categories -->
</div>
</div>

<div class="banner4">
  <div class="container">
    <div class="row">
      <div class="col-xs-3"></div>
      <div class="col-xs-3 great-images">
        <img src="<?php bloginfo ('template_directory') ?>/images/great-images.png" alt="">
      </div>
      <div class="col-xs-6 home-signup">
        <?php the_field('signup_form', 'options'); ?>

      </div>
    </div>
  </div>
</div>

<div class="banner5">
  <div class="container">
  <div class="row home-bottom">
    <div class="col-xs-5 app">
      <h2>Access NostalPic Instantly!</h2>
      <h4>Access the Nostalpic page instantly using the Nostalpic phone app, available on the android market atnd the iPhone</h4>
    </div>
    <div class="col-xs-7"></div>
  </div>
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


      <!-- <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?> -->
  
</div>

<?php get_footer(); ?>