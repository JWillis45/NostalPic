	<div id="footer">
		<?php wp_footer(); ?>
	</div>

<div class="banner6">
  <div class="container-fluid footer">
    <div class="col-xs-2">
      <p>2015 NostalPic</p>
    </div>
    <div class="col-xs-8 bottom-nav">
    	<?php
        $defaults = array(
          'menu_class' => 'nav nav-pills',
				);
			  wp_nav_menu( $defaults );
			?>
    </div>
    <div class="col-xs-2 social-media">
      <a href="https://www.instagram.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/instagram.png" alt=""></a>
      <a href="https://www.facebook.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/facebook.png" alt=""></a>
      <a href="https://www.twitter.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/twitter.png" alt=""></a>
    </div>
  </div> <!-- end container -->
	</div><!-- banner6 -->
	<script src="<?php bloginfo('template_directory'); ?>/js/script.js" charset="utf-8"></script>
</body>
</html>
