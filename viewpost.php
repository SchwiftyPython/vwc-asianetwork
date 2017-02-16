

 <?php require('stylesheets/navbar.php'); ?>

<?php require('includes/connect.php');

	$stmt = $conn->prepare('SELECT picID, image_path, image_name, title, description, location, postDate FROM UPLOAD WHERE picID = :picID');
	$stmt->execute(array(':picID' => $_GET['id']));
	$row = $stmt->fetch();
	$path = $row['image_path'];
    $path .= $row['image_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $row['title']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Header -->
 <!-- Body -->
 <body>
 <hr>
<div class="container">
	<h1> <?php echo $row['title']; ?> </h1>
 	<img alt=""  src="<?php echo $path; ?>">
 	<?php
 	echo '<p>Posted on '.date('M jS Y', strtotime($row['postDate'])).'</p>';
	echo '<p>'.$row['description'].'</p>';
	?>

</div>

 </body>
 </html>