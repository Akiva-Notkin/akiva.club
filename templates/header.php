<!DOCTYPE html>

<html>
  <head>
      	<meta charset="utf-8">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title><?php echo htmlspecialchars($title) ?></title>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      	<script src="js/bootstrap.min.js"></script>
      	<link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  		<body>
  	  <nav class="navbar navbar-default" background="#808080">
    		<div class="container-fluid">
    		  <div class="navbar-header">
        		<a class="navbar-brand" href="#">WebSiteName</a>
      		</div>
      	  <div>
        		<ul class="nav navbar-nav">
            
          		<?php
              if($navbar != 'Home') {
                echo '<li><a href="#">Home</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Home</a></li>';
              }
              if($navbar != 'Page1') {
                echo '<li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="works/endersshadow.php">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>';
              }
              else {
                echo '<li class="dropdown-active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>';
              }
              if($navbar != 'Page2') {
                echo '<li><a href="#">Page 2</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Page 2</a></li>';
              }
              if($navbar != 'Page3') {
                echo '<li><a href="#">Page 3</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Page 3</a></li>';
              }
              ?>
        			</ul>
     	 	  </div>
     	</nav>

