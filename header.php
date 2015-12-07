<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>


  <div class="container-fluid">
      <div class="row hd-nav">
    		<div class="col-xs-3 left-side">
    			<p> <a href="<?php bloginfo('url'); ?>/photos">Photos</a> |
              <a href="<?php bloginfo('url'); ?>/illustrations">Illustrations</a>
          </p>
    		</div>
    		<div class="col-xs-6 logo">
    			<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
    		</div>
    		<div class="col-xs-3 right-side">
    			<p>Sign Up | Login | Pricing</p>
    		</div>
  	</div><!-- end hd-nav -->
  </div>


<div class="container header-long-search">
  <div class="row">
    
        <?php
          
          if(( is_home() )){
}
          else{
              get_search_form();
               echo  '<div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        | Categories
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="animals">Animals</a></li>
                        <li><a href="people-2">People</a></li>
                        <li><a href="food">Food</a></li>
                        <li><a href="illustrations">Illustrations</a></li>
                        <li><a href="music">Music</a></li>
                        <li><a href="landmarks">Landmarks</a></li>
                        <li><a href="accessories">Accessories</a></li>
                        <li><a href="transportation">Transportation</a></li>
                        <li><a href="entertainment">Entertainment</a></li>
                        <li><a href="toys">Toys</a></li>
                        <li><a href="stationery">Stationery</a></li>
                        <li><a href="communications">Communications</a></li>
                        <li><a href="buildings">Buildings</a></li>
                        <li><a href="industrial">Industrial</a></li>
                        <li><a href="nature">Nature</a></li>
                        <li><a href="business">Business</a></li>
                        <li><a href="typography">Typography</a></li>
                        <li><a href="travel">Travel</a></li>
                        <li><a href="editorial">Editorial</a></li>
                        <li><a href="urban">Urban</a></li>
                        
                      </ul>
                    </div>';
              echo '<hr class="search-hr">';
             

}
?>
   

    
    
  </div>

</div>

 	

 	