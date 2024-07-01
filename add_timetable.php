<?php
$connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="insert into timetable values ('','$_POST[enter_subject]','$_POST[name_faculty]','$_POST[day]','$_POST[time]')" ;
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Timetable added successfully!!!!");
window.location.href ="admin_dashboard.php";  
</script>