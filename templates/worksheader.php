<?php function headerworks($title) {?>
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
      	  <div>
        		<ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="endersshadow.php">Ender's Shadow</a></li>
                  <li><a href="fallout.php">Fallout</a></li>
                  <li><a href="bioshock.php">Bioshock</a></li>
                </ul>
              </li>
              
              
        			</ul>
     	 	  </div>
     	</nav>

<?php 
}
?>
