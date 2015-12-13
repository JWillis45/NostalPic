<?php get_header(); ?>
<div class="banner9">
<?php $accord = 0; ?>
<div class="banner8 ">
	<div class="container sr-bg">
		<div class="row">

		<h1 class = "search-results-headline">Search Results For: <?php the_search_query();?></h1>
		</div>
	

		
		<div class="row search-images">
		

			
		
			<?php 
		  if (have_posts()) : while (have_posts()) : the_post(); 
		?>	
				
			  	


<div class="col-xs-4">

		  <div class="panel-group testing" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
		
		
		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $accord; ?>" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
       

    <div class="sr-image">
				<div class="sr2">
				  	
				  	<img class="img-responsive" src="<?php the_field('image');?>" alt="">
				    
			    </div>
			 </div>
		</a>


      <h4 class="panel-title">
        
      </h4>
    </div>
    <div id="<?php echo $accord; $accord++; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	This image is ready in standard definition and 4k resolution. 
      </div>
    </div>
  </div>
  
</div>


		
		 
		  
		  </div>

		
		  <?php endwhile; else: ?>
		    <p>Sorry, no posts matched your criteria.</p>
		<?php endif; wp_reset_postdata();?>
		
	</div>
</div>

</div>

</div>


<?php get_footer(); ?>