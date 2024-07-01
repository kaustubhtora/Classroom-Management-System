<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login  Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.0.1/js/juquery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.min.js"></script>
</head>
<body>
<center><br><br>
<h3>Student Login Page</h3><br>

<form action="" method="post">
	Email:<input type="text" name="email" ><br><br>
	Password:<input type="password" name="password" ><br><br>
	<input type="submit" name="submit">
  
</form>
<?php
session_start();
if (isset($_POST['submit'])) {
$connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="select * from student where email = '$_POST[email]'" ;
$query_run = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($query_run)) {
	if ($row['email'] == $_POST['email']) {
		 if ($row['password'] == $_POST['password']) {
		 	$_SESSION['email'] = $row['email'];
		 	$_SESSION['name'] = $row['name_student'];
		 	header("Location: student_dashboard.php");
		 }
		 else{
		 	echo "Wrong ID";
		 }
	}
}
}

?>
</center>
</body>
</html>