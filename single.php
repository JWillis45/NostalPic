<?php get_header(); ?>
	<?php
	if (have_posts()) : while (have_posts()) : the_post();
	?>

	<div class="container margBtm">
		<div class="row">
			<div class="col-md-6">
				<h1><?php the_title();?></h1>
				<img src="<?php the_field('image'); ?>" alt="">
			</div><!-- /col -->
			<div class="col-md-3 padTop">
				<p>$9.99</p>
				<div class="options_wrapper">
					<div class="sm_check" tabindex="1">
						<strong>S</strong>
					</div><!--option -->
					<div class="md_check" tabindex="2">
						<strong>M</strong>
					</div><!--option -->
				</div>
				<br>

				<div class="margBtm">
					<a href="#" class="btn btn-primary">Download</a>
				</div>
				<p>
					Categories:
					<br>
					<?php
						foreach((get_the_category()) as $category) {
						    echo "<a href='".bloginfo('url')."'>".$category->cat_name."</a>";
						}
					?>
				</p>
			</div><!-- /col -->
			<div class="col-md-3">
				<h3>Similar Photos</h3>
				<?php
					$args = array(
						'post_type' => 'photo',
						'posts_per_page' => '2',
						'orderby' => 'rand'
					);
					$similar = new WP_Query($args);
				?>
				<?php if ($similar -> have_posts() ) : while ($similar -> have_posts() ) : $similar -> the_post(); ?>
				<div class="similarOne">
					<a href="<?php the_permalink(); ?>">
						<img class="img-responsive" src="<?php the_field('image'); ?>" alt="">
					</a>
				</div><!-- similarOne -->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div><!--/col--->
		</div><!-- /row -->
	</div><!-- /container -->

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; wp_reset_postdata();?>
<?php get_footer(); ?>
