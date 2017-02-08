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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="jquery.bsPhotoGallery.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="jquery.bsPhotoGallery.js"></script>
    </script>
    <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true,
          // "fullHeight" : false
        });
      });
    </script>
  </head>

  <body>

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

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">VWC ASIANetwork Project</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Photo Galleries
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="taiyuan_gallery.php">Taiyuan</a></li>
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

    <div class="container">
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <br><br><br>
                <p>Wutai Shan</p>
            </h3>
        </div>
        <ul class="row first">

        <?php
            $sql = "select * from WUTAI";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
              $path = $row['image_path'];
              $path .= $row['image_name'];
              $description = $row['description'];

		?>


            <li>
                <img alt=""  src="<?php echo $path ?>">
                <div class="text"><?php echo $description ?></div>
           </li>

        <?php
        }
        ?>
          </ul>


            </div> <!-- /container -->


          </body>


        </html>
