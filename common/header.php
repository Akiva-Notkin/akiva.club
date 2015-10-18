<?php function doctypemeta() {
echo '  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
';
}

function title($title) {
  echo '<title>$title</title>';
}

function scripts() {
echo '
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      </head>
';
}

function navbar($activelink) {
echo '
    <body>
  	  <nav class="navbar navbar-default" background="#808080">
    		<div class="container-fluid">
    		  <div class="navbar-header">
        		<a class="navbar-brand" href="#">WebSiteName</a>
      		</div>
      	  <div>
        		<ul class="nav navbar-nav">
            ';
          		<?php
              if($activelink != 1) {
                echo '<li><a href="#">Home</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Home</a></li>';
              }
              if($activelink != 2) {
                echo '<li><a href="#">Page 1</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Page 1</a></li>';
              }
              if($activelink != 3) {
                echo '<li><a href="#">Page 2</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Page 2</a></li>';
              }
              if($activelink != 4) {
                echo '<li><a href="#">Page 3</a></li>';
              }
              else {
                echo '<li class="active"><a href="#">Page 3</a></li>';
              }
              
echo '        		</ul>
     	 	  </div>
     	</nav>
      ';
} 


function headerfunction($title, $activelink) {
  doctypemeta();
  title($title);
  scripts();
  navbar($activelink);
}


?>

 