<?php
$connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="insert into add_holiday values ('','$_POST[event_name]','$_POST[description]','$_POST[date]')" ;
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Holiday added successfully!!!!");
window.location.href ="admin_dashboard.php";  
</script>