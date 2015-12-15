<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
<<<<<<< HEAD
<<<<<<< HEAD
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder= " Search..." />
=======
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder= " Search... For Cats Perhaps?..." />
>>>>>>> parent of 4b61243... changed search results page back to single column
=======
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder= " Search... Into the Past..." />
>>>>>>> parent of e3f1cfa... contact
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( '         ', 'submit button' ); ?>" />
	</div>
</form>