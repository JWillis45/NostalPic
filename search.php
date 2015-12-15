<?php get_header(); ?>
<div class="banner9">
	
	<div class="banner8 ">
		<div class="container sr-bg">
			<div class="row">
				<h1 class = "search-results-headline">Search Results For: <?php the_search_query();?></h1>
			</div>
			<div class="row search-images">
			<div class="col-xs-12 search-images-col">
				<?php
				  if (have_posts()) : while (have_posts()) : the_post();
				?>
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

<?php get_footer(); ?>
