<html>
<body>
<?php
$servername = 'localhost';
$username = 'vnlaughlin';
$password = 'cs480';
$database = 'vnlaughlin';
$connect = mysql_connect($host, $user, $passwd);

$desc = $_POST['description'];
echo $desc;

//Define the query
$query = "DELETE FROM BEIJING WHERE description=$desc LIMIT 1";


//sends the query to delete the entry
mysql_select_db($database);
if(!mysql_query($query, $connect)){
    print "<P>Delete fail.<p>";
}

mysql_close($connect);
?>
<script type="text/javascript">
		   	setTimeout("location.href ='beijing_gallery.php';",1500);
</script>
</body>
</html>