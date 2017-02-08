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
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">VWC ASIANetwork Project</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Photo Galleries
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="taiyuan_gallery.php">Taiyuan</a></li>
          <li><a href="wutai_gallery.php">Wutai Shan</a></li>
		      <li><a href="yungang_gallery.php">Yungang Grottoes</a></li>
          <li><a href="datong_gallery.php">Datong</a></li>
          <li><a href="beijing_gallery.php">Beijing</a></li>
        </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="upload_form.php"><span class="glyphicon glyphicon-user"></span> Submit Media</a></li>
      </ul>
      </div>
    </nav>

    <?php
    $servername = 'localhost';
    $username = 'vnlaughlin';
    $password = 'cs480';
    $database = 'vnlaughlin';
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    ?>

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
	    $sql = "select * from BEIJING ORDER BY RAND()";
	  	$result = $conn->query($sql);
	    $row = $result->fetch_assoc();
	       $path = $row['image_path'];
	       $path .= $row['image_name'];
	       $description = $row['description'];

	  ?>
	    <div class="item active">
	      <img src="<?php echo $path ?>" alt="Beijing">
	    </div>

	    <?php
			    $sql = "select * from TAIYUAN ORDER BY RAND()";
			  	$result = $conn->query($sql);
			    $row = $result->fetch_assoc();
			       $path = $row['image_path'];
			       $path .= $row['image_name'];
			       $description = $row['description'];

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Taiyuan">
	    </div>

	    <?php
			    $sql = "select * from WUTAI ORDER BY RAND()";
			  	$result = $conn->query($sql);
			    $row = $result->fetch_assoc();
			       $path = $row['image_path'];
			       $path .= $row['image_name'];
			       $description = $row['description'];

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Wutai">
	    </div>

	    <?php
			    $sql = "select * from YUNGANG ORDER BY RAND()";
			  	$result = $conn->query($sql);
			    $row = $result->fetch_assoc();
			    $path = $row['image_path'];
			    $path .= $row['image_name'];
			    $description = $row['description'];

	  ?>

	    <div class="item">
	      <img src="<?php echo $path ?>" alt="Yungang">
	    </div>

	    <?php
			    $sql = "select * from DATONG ORDER BY RAND()";
			  	$result = $conn->query($sql);
			    $row = $result->fetch_assoc();
			    $path = $row['image_path'];
			    $path .= $row['image_name'];
			    $description = $row['description'];

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
