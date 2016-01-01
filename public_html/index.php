<?php

require_once('../templates/header.php');
headerindex("Shadow Worlds");

?>

<div class="container-fluid">
	<div class="jumbotron">
		<h2>Shadow Worlds</h2>
		<h4>Some see what others do not</h4>
	</div>
  	<div class="row">
	  	<div class="col-md-1"></div>
	  	<div class="col-md-4">
	  		<p style="font-size:18px">
	  			It’s amazing what people can do with just a little bit of information. When people are told only part of what they want to know, their ability to guess and rationalize the rest is truly incredible.
<br><br>
What’s even more incredible is the radically different way people see the same worlds. When two people read the same book or see the same movie, they fill in the gaps differently. Though they may have read the same sentence, they did not see the same world.
<br><br>
If you have ever seen a movie or read a book, you realized that the world that is shown in the story is not quite the whole world the characters live in. They might have a backstory or friends who never appear in the story. These all have a large impact on how the character acts. They define who the character is. So when each reader creates their own unique world from the template that the author of the book, movie or video game provides, they see something nobody else truly has. 
<br><br>
Students should be able to recognize what makes their own world unique and what common features are. The only way to see different perspectives in a realistic sense is to hear from people who have different perspectives. A class where students begin with the same base material but bring different perspectives will accentuate what students assume and what they might only believe with evidence from others.

	  		</p>
	  	</div>
	  	<div class="col-md-6">
	  		Click the pictures to check out the worlds
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
			      <a href="works/endersshadow.php"><img src="images/endersgame.jpg"></a>
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
