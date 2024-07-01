<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.0.1/js/juquery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.min.js"></script>
	<style type="text/css">
       #header{
           height: 10%;
           width: 100%;
           top: 2%;
           background-color: black;
           position: fixed;
           color: white;
       }
       #left_side{
          height: 75%;
          width: 15%;
          top: 10%;
          position: fixed;
       }
       #right_side{
          height: 75%;
          width: 80%;
          background-color: whitesmoke;
          position: fixed;
          left: 17%;
          top: 21%;
          color: red;
            border: solid 1px black;
       }
       #top_span{
        top: 15%;
        width: 80%;
        left: 17%;
        position: fixed;
       }
       #td{
            border: solid 1px black;
            padding-left: 2px;
            text-align: left;
            width: 300px;
       }
</style>

<?php
      session_start();
       $connection =mysqli_connect("localhost","root","");
      $db =mysqli_select_db($connection,"cms");
?>
</head>
<body>
	<div id="header">
            <center><strong>Class Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	&nbsp;

            </strong>Email: <?php echo $_SESSION['email']; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
            Name: <?php echo $_SESSION['name']; ?> 
            <a href="logout.php">Logout</a></center>
	</div>
<span id="top_span">
<marquee>Welcome <?php echo $_SESSION['name']; ?>!!!!!!!</marquee>
</span>	
	<div id="left_side"><br><br>
       <form action="" method="post">
       <table>
         <tr>
          <td>
         <input type="submit" name="add_timetable" value="Add Timetable">

          </td>
            </tr>
            <tr>
          <td>
         <input type="submit" name="add_student" value="Add Student">
          </td>
            </tr>
            <tr>
          <td>
         <input type="submit" name="show_student" value="Show Student">

          </td>
            </tr>
             <tr>
          <td>
         <input type="submit" name="add_holiday" value="Add Holiday">

          </td>
            </tr>
             <tr>
          <td>
         <input type="submit" name="add_faculty" value="Add Faculty">

          </td>
            </tr>

            <tr>
          <td>
         <input type="submit" name="show_faculty" value="Show Faculty">

          </td>
            </tr>
       </table>
      
       </form>
	</div>
         <div id="right_side"><br><br>
               <div id="demo">
                 <?php
                 if (isset($_POST['add_timetable'])) 
                 {
                   ?>
                    <center>
                    <form action="add_timetable.php" method="post">
                      <h5>Add Timetable</h5><br><br>
                    	Enter Subject:<input type="text" name="enter_subject">
                        Name of Faculty:<input type="text" name="name_faculty">
                        Day:<input type="text" name="day">
                        Time:<input type="text" name="time">
                        <input type="submit" name="submit">
                    </form>
                    </center>	
                    <?php 
                 }
                 ?>
                  
                 <?php
                 if (isset($_POST['add_student'])) 
                 {
                   ?>
                    <table>
                    <tr>
                      <h5>Enter Details Of Student</h5><br><br>
                      <form action="add_student.php" method="post">
                        Roll No:<input type="text" name="roll_no"><br>
                        Name of Student:<input type="text" name="name_student"><br>
                        Mobile No:<input type="text" name="mobile"><br>
                        Class:<input type="text" name="class"><br>
                        Email:<input type="text" name="email"><br>
                        Password:<input type="password" name="password"><br>
                <input type="submit" name="submit">
                    <?php 
                 }
                 ?>
                  <?php
                 if (isset($_POST['add_holiday'])) 
                 {
                   ?>
                    <center>
                      <h5>Add Holidays</h5><br><br>
                    <form action="add_holiday.php" method="post">
                      Event Name:<input type="text" name="event_name">
                        Description:<input type="text" name="description">
                        Date:<input type="text" name="date">
                        <input type="submit" name="submit">
                    </form>
                    </center> 
                    <?php 
                 }
                 ?>
                 <?php
                 if (isset($_POST['add_faculty'])) 
                 {
                   ?>
                    <center>
                      <h5>Add Faculty</h5><br><br>
                    <form action="add_faculty.php" method="post">
                      Name of Faculty:<input type="text" name="name_faculty">
                        Subject:<input type="text" name="subject">
                        Email:<input type="text" name="email">
                        Password:<input type="password" name="password">
                        <input type="submit" name="submit">
                    </form>
                    </center> 
                    <?php 
                 }
                 ?>
                 <?php
                 if (isset($_POST['show_student'])) 
                 {
                   ?>
                    <center>
                      <h5>Student Details</h5><br><br>
                    <table>
                       <tr>
                         <td id="td"><b>Roll No</b></td>
                         <td id="td"><b>Name</b></td>
                         <td id="td"><b>Mobile</b></td>
                         <td id="td"><b>Class</b></td>
                         <td id="td"><b>Email</b></td>
                         <td id="td"><b>Password</b></td>
                       </tr>
                    </table>
                    </center> 
                    <?php 
                    $connection =mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"cms");
                    $query ="select * from student";
                    $query_run= mysqli_query($connection,$query);
                    while ($row =mysqli_fetch_assoc($query_run)) {
                       ?>
                        <table style="border-collapse: collapse;border:1px solid black">
                        <tr>
                                <td id="td"><?php echo $row['roll_no'];?></td>
                                <td id="td"><?php echo $row['name_student'];?></td>
                                <td id="td"><?php echo $row['Mobile'];?></td>
                                <td id="td"><?php echo $row['class'];?></td>
                                <td id="td"><?php echo $row['email'];?></td>
                                <td id="td"><?php echo $row['password'];?></td>
                        </tr>
                        </table>
                       <?php
                     } 
                 }
               ?>
                  <?php
                 if (isset($_POST['show_faculty'])) 
                 {
                   ?>
                    <center>
                      <h5>Faculty Details</h5><br><br>
                    <table>
                       <tr>
                         <td id="td"><b>Name</b></td>
                         <td id="td"><b>Subject</b></td>
                         <td id="td"><b>Email</b></td>
                         <td id="td"><b>Password</b></td>
                       </tr>
                    </table>
                    </center> 
                    <?php 
                    $connection =mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"cms");
                    $query ="select * from teachers";
                    $query_run= mysqli_query($connection,$query);
                    while ($row =mysqli_fetch_assoc($query_run)) {
                       ?>
                       <center>
                        <table style="border-collapse: collapse;border:1px solid black">
                        <tr>
                                <td id="td"><?php echo $row['name_faculty'];?></td>
                                <td id="td"><?php echo $row['subject'];?></td>
                                <td id="td"><?php echo $row['email'];?></td>
                                <td id="td"><?php echo $row['password'];?></td>
                  
                        </tr>
                        </table>
                       </center>
                       <?php
                     } 
                 }
               ?>
               </div>
         </div>
</body>
</html>