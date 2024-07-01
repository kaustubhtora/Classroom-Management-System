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
<h3>Admin Register Page</h3><br>

<form action="admin_register2.php" method="post">
    Name:<input type="text" name="Name" value="" required><br><br>
    Email:<input type="text" name="Email" value="" required><br><br>
    Password:<input type="password" name="Password" value="" required><br><br>
    Gender:<input type="radio" id="male" name="Gender" value="male" required>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br><br>
  <input type="submit" name="submit">
</form>

</center>
</body>
</html>