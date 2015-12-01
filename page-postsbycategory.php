<?php get_header(); 
/*
Template Name: Posts By Category
*/
?>


<?php 

  $args = array('post_type' => 'photo',
                'posts_per_page'=>'3',
                'category_name'=> 'landmarks'
  );

  $landmarks = new WP_Query( $args );

if ($landmarks -> have_posts()) : while ($landmarks -> have_posts()) : $landmarks -> the_post(); 

  

  ?>

  <a href="<?php the_permalink() ?>">
          <img class="img-responsive" src="<?php the_field('image');?>" alt="">
          <br>
          <?php the_title();?>
          <?php the_category(', '); ?>
        </a>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>






<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>


<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>