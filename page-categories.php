<?php get_header();
/*
Template Name: Categories Page
*/
?>
<div class="banner9">
	
	<div class="banner8 ">
		<div class="container sr-bg">
			<div class="row">
				<h1 class = "search-results-headline"><?php wp_title(''); ?></h1>
			</div>
			<div class="row search-images">
			<div class="col-xs-12 search-images-col">
				<?php 
	$title = get_the_title();
	$args = array('post_type' => 'photo',
				  'category_name'=> $title
                
  );

  $photo = new WP_Query( $args );

if ($photo -> have_posts()) : while ($photo -> have_posts()) : $photo -> the_post(); 

 ?>

	<?php query_posts('category_name'.get_the_title().'&post_status=publish,future'); ?>

	
				<div class="sr-image">
					<div class="sr2">
					  	<a href="<?php the_permalink(); ?>">
					      <img class="img-responsive" src="<?php the_field('image');?>" alt="">
					    </a>
				    </div>
				 </div>
				
				<?php endwhile; else: ?>
				    <p>Sorry, no posts matched your criteria.</p>
				<?php endif; wp_reset_postdata();?>
			</div><!-- end row search images -->
		</div><!-- end container -->
	</div><!-- end banner 8 -->
</div>
</div><!-- end banner 9 -->



<div class="row cat-title">

<h1><?php wp_title(''); ?></h1>

<?php 
	$title = get_the_title();
	$args = array('post_type' => 'photo',
				  'category_name'=> $title
                
  );

  $photo = new WP_Query( $args );

if ($photo -> have_posts()) : while ($photo -> have_posts()) : $photo -> the_post(); 

 ?>

	<?php query_posts('category_name'.get_the_title().'&post_status=publish,future'); ?>
	



</div>

 
 <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_field('image');?>" alt="">
	<div class="col-sm-12"><?= $title; ?></div>
 </a>
<?php endwhile; else: endif; ?>

</div>



<?php get_footer(); ?>