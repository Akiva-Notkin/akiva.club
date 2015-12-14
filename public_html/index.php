<?php

require_once('../templates/header.php');
headerindex("Shadow Worlds");

?>

<div class="container-fluid">
    <div class="jumbotron">
        <h1>Words create worlds.</h1>
        <p>        </p>
  	</div>
  	<div class="row">
	  	<div class="col-md-1"></div>
	  	<div class="col-md-4">
			<h1>Words create worlds</h1>
	  		<p>
	  			Language was established to explain the world around us. While it had a very utilitarian use at first, 
	  			language began to be used for everything. Words were used to tell grandiose stories about places both real
	  			and imagined. When one person saw, or even imagined a place, everyone else was able to see it. 
	  		</p>
	  	</div>
	  	<div class="col-md-6">
	  		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <a href="works/fallout.php"><img src="images/fallout.jpg"></a>
			    </div>
			    <div class="item">
			      <a href="works/bioshock.php"><img src="images/bioshock.jpg"></a>
			    </div>
			    <div class="item">
			      <a href="works/endersgame.php"><img src="images/endersgame.jpg"></a>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
	  	</div>
	  	<div class="col-md-1"></div>
	</div>
</div>

<?php require("../templates/footer.php"); ?>
