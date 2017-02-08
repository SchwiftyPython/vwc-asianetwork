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
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </script>
  </head>

<!--<?php	  session_start(); ?>-->

<body>
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
          <li><a href="wutai_gallery.php">Wutai Shan</a></li>
		      <li><a href="yungang_gallery.php">Yungang Grottoes</a></li>
          <li><a href="datong_gallery.php">Datong</a></li>
          <li><a href="beijing_gallery.php">Beijing</a></li>
          </ul>
        </li>
      </ul>
        </div>
      </div>
    </nav>

	<div class="jumbotron">
				<div class="container">
			   	<div class="row">
				        <!-- /.row -->

						<center><H2>Upload Media </H2></center><hr>
						<form enctype="multipart/form-data" action="upload_form_action.php" method=post>
							<input name="userimg" type="file"  accept=media_type class="btn btn-default btn-block"></button>
								<div class="form-group">
									<textarea class="form-control" rows="5" name=describe placeholder="Enter Description"></textarea>
									<label class="control-label" for="comment">Location:</label>
									  <select name="location">
									  <option value="TAIYUAN">Taiyuan</option>
									  <option value="WUTAI">Wutai Shan</option>
									  <option value="DATONG">Datong</option>
									  <option value="YUNGANG">Yungang Grottoes</option>
									  <option value="BEIJING">Beijing</option>
                                    </select>
								</div>
						<button type=submit class="btn btn-default btn-block">Submit</button>
						</form>
				     <hr>
				 </div>
				 <!-- /.container -->
			    </div>
		    <!-- /.jumbo -->

 </body>
 </html>
