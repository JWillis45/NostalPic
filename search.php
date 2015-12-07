<?php get_header(); ?>






<div class="banner8">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class = "search-results-headline">Results For: <?php the_search_query();?></h1>
			</div>
			<div class="col-xs-12">
				<div id="column-wrap">

					<?php $count = 0;
					$args = array ('post_type' => 'photo',
			        'posts_per_page' => '20',
			        'orderby' => 'rand'
);

$photo = new WP_Query( $args );
					 
					while($photo -> have_posts()) : $photo -> the_post(); ?>
					 
					<div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
					 
					<a href="<?php the_permalink() ?>">
				      <img src="<?php the_field('image');?>" alt="">
				      
			  	  </a>
					<!--and other output of the loop -->
					 
					</div>
					 
					<?php endwhile; ?>
				</div><!--end column-wrap-->
			</div>
			

		</div>
	</div>
</div>





  
  <br> 


    <p>Sorry, no posts matched your criteria.</p>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>