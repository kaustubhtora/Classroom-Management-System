<?php
  $connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="update timetable set time='$_POST[time]'";
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Timetable edited successfully!!!!");
window.location.href ="admin_dashboard.php";
</script>