
<?php require_once('includes/connect.php'); ?>

<?php

function select(){
		$result = $conn->query($sql);
	    $row = $result->fetch( PDO::FETCH_ASSOC );
	    $path = $row['image_path'];
	    $path .= $row['image_name'];
	    $description = $row['description'];
}

?>
