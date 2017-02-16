<?php require_once('includes/connect.php'); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Brian Hanna-Sauro">
    <title>Post Picture</title>
    <link rel="stylesheet" type="text/css" href="gallery_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </script>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>

</head>
<body>

<div id="wrapper">

	<?php include('stylesheets/navbar.php'); ?>
	<h2>Add a Picture</h2>

	<?php

// ------ ACTION ------

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );
		extract($_POST);

		//very basic validation
		if($title ==''){
			$error[] = 'Please enter the title.';
		}
		if(!isset($_POST['location'])){
			$error[] = 'Please enter the location..';
		}
		if($description ==''){
			$error[] = 'Please enter the description..';
		}
		if(!isset($_FILES['userimg'])){
	         $error[] = '<p>Please select a file</p>';
	         $fileerror = '<p>Please select a file</p>';
	         }

		if(!isset($error)){
			try {
				//insert into database
				$image_path = "uploads/";
				$target_file = $image_path . basename($_FILES["userimg"]["name"]);
				$image_name = basename($_FILES['userimg']['name']); //store filename

				//upload file to directory
	    		move_uploaded_file($_FILES['userimg']['tmp_name'], $target_file);
	    		print_r($_FILES);

				$stmt = $conn->prepare('INSERT INTO UPLOAD (image_path, image_name, title, description, location, postDate) VALUES
					(:image_path, :image_name,:title, :description, :location, :postDate)');

				$stmt->execute(array(
					':image_path' => $image_path,
					':image_name' => $image_name,
					':title' => $title,
					':description' => $description,
					':location' => $location,
					':postDate' => date('Y-m-d H:i:s')
				));
				header('Location: home.php?action=added');
				exit;
			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		}
	}
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}


// ------ ACTION ------
	?>


	<div class="jumbotron">
					<div class="container">
				   	<div class="row">
					        <!-- /.row -->

							<center><H2>Upload Media </H2></center><hr>
							<?php if(isset($error)){ echo $_POST['userimg'];}?>
							<?php if(isset($error)){ echo $_POST['title'];}?>
							<?php if(isset($error)){ echo $filerror;}?>
							<form enctype="multipart/form-data" action="" method=post>
								<input type="text" name=title size="40" placeholder="Enter Title"></textarea>
								<input name="userimg" type="file"  accept=media_type class="btn btn-default btn-block"></button>
									<div class="form-group">

										<textarea class="form-control" rows="5" name=description placeholder="Enter Description"></textarea>
										<label class="control-label" for="comment">Location:</label>
										  <select name="location">
										  <option value="TAIYUAN">Taiyuan</option>
										  <option value="WUTAI">Wutai Shan</option>
										  <option value="DATONG">Datong</option>
										  <option value="YUNGANG">Yungang Grottoes</option>
										  <option value="BEIJING">Beijing</option>
	                                    </select>
									</div>
							<button type=submit name='submit' value='Submit' class="btn btn-default btn-block">Submit</button>
							</form>
					     <hr>
					 </div>
					 <!-- /.container -->
			    </div>


</div>