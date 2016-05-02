<?php get_header();
/*
Template Name: Contact Page
*/
?>


<div class="contactUsBackground" style="font-family: 'Slabo 13px', serif;" >

	<div class="row">
		<div class="col-md-3 col-md-offset-2">
					<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 contactUsInfo" >
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 info1">
					<ul style="list-style-type:none; font-size:14px;">
						<li>742 Evergreen Terrace</li>
						<li>Springfield, CA</li>
						<li>91324</li>
						<li>(xxx)xxx-xxxx</li>

						
					</ul>
						</div>
		</div>
		</div>
			<div class="col-md-4 col-md-offset-1 ">
				<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-7 col-lg-offset-1 col-lg-10 contactUsInfo2">
					<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 info2">
				<div style="text-align:center;"><span style="font-size:20px; color:black;">Follow Us</span></div>
				<ul style="list-style-type:none">
					<li><span style="color:black;">Facebook:</span> www.facebook.com/Nostalpic</li>
					<li><span style="color:black;">Instagram:</span> @nostalpic</li>
					<li><span style="color:black;">Twitter:</span> @nostalpic</li>
				</ul>
					</div>
			</div>
			</div>
	</div>	
	<div class="row fifty">
		 
		<div class=" col-md-4 col-md-offset-4">
			<div class="col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-10 col-md-offset-1 contactUsForm" style-"color:black;" >
				
				<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-10 col-md-offset-1 info3">
			
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php the_content(); ?>


			  <?php endwhile; else: ?>
			    <p>Sorry, no pages matched your criteria.</p>
			<?php endif; ?>
				</div>
			
		</div>
		</div>
		 
	</div>
</div>

<?php get_footer(); ?>

