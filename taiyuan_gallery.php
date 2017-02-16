<?php require_once('includes/connect.php'); ?>

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
    <script src="stylesheets/jquery.bsPhotoGallery.js"></script>
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

    <?php require_once('stylesheets/navbar.php'); ?>

    <div class="container">
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <br><br><br>
                <p>Taiyuan</p>
            </h3>
        </div>
        <ul class="row first">

        <?php
        $sql = "select * from UPLOAD where location='TAIYUAN'";
        $result = $conn->query($sql);

        while($row = $result->fetch( PDO::FETCH_ASSOC )){
          $path = $row['image_path'];
          $path .= $row['image_name'];
          $title = $row['title'];
          $description = $row['description'];

		?>


           <?php echo '<li><a href="viewpost.php?id='.$row['picID'].'">'; ?>
           		<img alt=""  src="<?php echo $path ?>"></a>
                <div class="text"><?php echo $title ?></div>
           </li>

        <?php
        }
        ?>
          </ul>


            </div> <!-- /container -->


          </body>


        </html>
