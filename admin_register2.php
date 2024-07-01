<?php
   $connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="insert into admin_login values('','$_POST[Name]','$_POST[Email]','$_POST[Password]','$_POST[Gender]')";
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Admin added successfully!!!!");
window.location.href ="admin_login.php";  
</script>