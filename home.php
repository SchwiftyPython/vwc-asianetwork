<?php require_once('includes/connect.php'); ?>
<?php require_once('includes/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Brian Hanna-Sauro">
    <title>VWC ASIANetwork Project</title>
    <link rel="stylesheet" type="text/css" href="gallery_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </script>
  </head>

<body>

	<!-- NavBar -->
	<?php require_once('stylesheets/navbar.php'); ?>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">

	  <?php
	    $sql = "select * from UPLOAD where location='BEIJING' ORDER BY RAND()";
	  	select();

	  ?>
	    <div class="item active">
	      <img src="<?php echo $path ?>" alt="Beijing">
	    </div>

	    <?php
			    $sql = "select * from UPLOAD where location='TAIYUAN' ORDER BY RAND()";
			  	select();
	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Taiyuan">
	    </div>

	    <?php
			    $sql = "select * from UPLOAD where location='WUTAI' ORDER BY RAND()";
			  	select();

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Wutai">
	    </div>

	    <?php
			    $sql = "select * from UPLOAD where location='YUNGANG' ORDER BY RAND()";
			  	select();

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Yungang">
	    </div>

	    <?php
			    $sql = "select * from UPLOAD where location='DATONG' ORDER BY RAND()";
			  	select();

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Datong">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
</div>


 </body>
 </html>
