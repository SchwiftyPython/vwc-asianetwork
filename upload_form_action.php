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
          <li><a href="#">Wutai Shan</a></li>
          <li><a href="#">Yungang Grottoes</a></li>
          <li><a href="#">Datong</a></li>
          </ul>
        </li>
      </ul>
        </div>
      </div>
    </nav>

    <?php
       if(!isset($_FILES['userimg'])){
	         echo '<p>Please select a file</p>';
       }else{
         $location = $_POST['location'];
         $desc = $_POST['describe'];
	       $target_dir = "uploads/";
	       $target_file = $target_dir . basename($_FILES["userimg"]["name"]);
	       $myname = basename($_FILES['userimg']['name']); //store filename

	     //upload file to directory
	     move_uploaded_file($_FILES['userimg']['tmp_name'], $target_file);

	     print_r($_FILES);

	     /***connect to db -- update params as needed ***/
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

	       $sql = "insert into $location values ('$target_dir', '$myname', '$desc')";
	       //mysql_select_db($database);
         if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }

         $conn->close();

      }
      ?>

           <div class="jumbotron vertical-center">
		   	<div class="container">
		     <div class="row">
		       <!-- /.row -->
		    	<H2>Thank you for submitting! </H2>
		     </div>
		    <!-- /.container -->
		    </div>
		   </div>

		   <script type="text/javascript">
		   	setTimeout("location.href ='upload_form.php';",1500);
         </script>

 </body>
 </html>
