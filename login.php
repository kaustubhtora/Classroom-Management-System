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
<h3>Class Management System</h3><br>

<form action="" method="post">
<input type="submit" name="admin_login" value="Admin">
  <input type="submit" name="student_login" value="Student">
</form>
<?php
if (isset($_POST['admin_login'])) {
  header("Location: admin_login.php");
}

if (isset($_POST['student_login'])) {
  header("Location: student_login.php");
}
?>
</center>
</body>
</html>