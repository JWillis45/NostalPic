<?php get_header();
/*
Template Name: Categories Page
*/
?>

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





<?php get_footer(); ?>