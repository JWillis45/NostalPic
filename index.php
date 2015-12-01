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

 -->

<div class="row hd-image">
    <div class="col-xs-12">
      <div class="hd-search">
          <?php get_search_form();?>
        </div>
    </div>
  </div>



<hr>

<div class="row concrete">
  <div class="col-xs-12">


<?php 

$args = array ('post_type' => 'photo',
			   'posts_per_page' => '3'
);

$photo = new WP_Query( $args );
$count = 0;


if ($photo -> have_posts()) : while ($photo -> have_posts()) : $photo -> the_post(); 

?>

<div id="box-wrap">
 
<div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
 
<a href="<?php the_permalink() ?>">
          <img class="img-responsive" src="<?php the_field('image');?>" alt="">
          <br>
          <?php the_title();?>
          <?php the_category(', '); ?>
        </a>
<!--and other output of the loop -->
 
</div>
 
<?php endwhile; ?>
</div><!--end box-wrap-->
</div><!-- end of column -->
</div> <!-- end of row concrete -->



<div class="row">

<?php
        $defaults = array(
          'menu_class'      => 'nav nav-pills',
);
        wp_nav_menu( $defaults );
?>


  <div class="col-xs-12 categories-title">
    <h2>Categories</h2>
  </div>
  <div class="col-xs-4 categories">



  </div>
  
</div>









<div class="row">
  <div class="col-xs-12 lower-stuff">
      
      	<a href="<?php the_permalink() ?>">
      		<img class="img-responsive" src="<?php the_field('image');?>" alt="">
      		<br>
      		<?php the_title();?>
      	</a>
        </div>
   </div>  
 		
 	


      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>
  
</div>

<?php get_footer(); ?>