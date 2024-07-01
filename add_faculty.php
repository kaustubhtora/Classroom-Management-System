<?php
$connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="insert into teachers values ('','$_POST[name_faculty]','$_POST[subject]','$_POST[email]','$_POST[password]')" ;
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Faculty added successfully!!!!");
window.location.href ="admin_dashboard.php";  
</script>