<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	 <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'> 
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/script.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head();?>
</head>
<body>


  <div class="container-fluid">
      <div class="row hd-nav">
    		<div class="col-xs-4 left-side">
            <button type="button" class="btn btn-default dropdown-toggle visible-sm visible-xs left-menu" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="people-2">Photos</a></li>
              <li><a href="illustrations">Illustrations</a></li>
            </ul>
    		  <p class="hidden-sm hidden-xs"> <a href="<?php bloginfo('url'); ?>/photos">Photos</a> |
              <a href="<?php bloginfo('url'); ?>/illustrations">Illustrations</a>
          </p>
    		</div>
    		<div class="col-xs-4 logo">
    			<a href="<?php bloginfo('url'); ?>/"><img class="img-responsive hidden-xs" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
    		  <a href="<?php bloginfo('url'); ?>/"><img class="visible-xs" src="<?php bloginfo('template_directory'); ?>/images/logo-xs.png"/></a>

        </div>
    		

        <div class="col-xs-4 right-side">
            <button type="button" class="btn btn-default dropdown-toggle visible-sm visible-xs right-menu" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
              <li><a href="#">Signup</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
    		
          

<div class="right-nav-lg">

          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm right-nav" data-toggle="modal" data-target="#signup">
  Signup
</button>

<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create an Account</h4>
      </div>
      <div class="modal-body">
        <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">
        <div class="glyphicon glyphicon-user"></div>
      </div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group middle-input-padding">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">
        <div class="glyphicon glyphicon-envelope"></div>
      </div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Email Address">
    </div>
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">
        <div class="glyphicon glyphicon-lock"></div>
      </div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Password">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-button" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary signup-button">Sign Up</button>
      </div>
    </div>
  </div>
</div>

<p class="right-nav-p">|</p>

<div class="dropdown login-drop right-nav">
  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
   <!--  <?php the_field('signup_form', 'options'); ?> -->
  </ul>
</div>

<p class="right-nav-p">|</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm right-nav" data-toggle="modal" data-target="#pricing">
  Pricing
</button>

<!-- Modal -->
<div class="modal fade" id="pricing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pricing</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>



    		</div>
  	</div><!-- end hd-nav -->
  </div>

<div class="row white">
<div class="container header-long-search">
  <div class="row">
    
        <?php
          
          if(( is_home() )){
}
          else{
              get_search_form();
               echo  '<div class="dropdown cat-drop">
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
                        <li><a href="people">Landmarks</a></li>
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
</div>
 	

 	