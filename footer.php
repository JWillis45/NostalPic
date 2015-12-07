	<div id="footer">
		<?php wp_footer(); ?>
	</div>
      
<div class="banner6">
  <div class="container footer">
    <div class="col-xs-3">
      <p>2015 NostalPic</p>
    </div>
    <div class="col-xs-6 bottom-nav">

    	<?php
        $defaults = array(
          'menu_class'      => 'nav nav-pills',
);
        wp_nav_menu( $defaults );
?>

    </div>
    <div class="col-xs-3 social-media">
      <a href="https://www.instagram.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/instagram.png" alt=""></a>
            <a href="https://www.facebook.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/facebook.png" alt=""></a>
            <a href="https://www.twitter.com/"><img src="<?php bloginfo ('template_directory'); ?>/images/twitter.png" alt=""></a>

    </div>
  </div>
</div>





</div>
</body>
</html>