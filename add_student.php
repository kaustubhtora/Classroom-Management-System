<?php
$connection =mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"cms");
$query ="insert into student values ('','$_POST[roll_no]','$_POST[name_student]',$_POST[mobile],'$_POST[class]','$_POST[email]','$_POST[password]')" ;
   $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Student added successfully!!!!");
window.location.href ="admin_dashboard.php";  
</script>