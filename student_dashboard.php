<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Dashboard</title>
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
            </strong>Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;
            Name: <?php echo $_SESSION['name'];?> 
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
         <input type="submit" name="view_holiday" value="View Holiday">

          </td>
            </tr>
             <tr>
          <td>
         <input type="submit" name="view_schedule" value="View Schedule">

          </td>
            </tr>
       </table>
      
       </form>
	</div>
         <div id="right_side"><br><br>
               <div id="demo">
                 <?php
                 if (isset($_POST['view_schedule'])) 
                 {
                   ?>
                    <center>
                      <h5>View Schedule</h5><br><br>
                    <table style="border-collapse: collapse;border:1px solid black">
                       <tr>
                         <td id="td"><b>Subject</b></td>
                         <td id="td"><b>Name of Faculty</b></td>
                         <td id="td"><b>Day</b></td>
                         <td id="td"><b>Time</b></td>
                       </tr>
                    </table>
                    </center> 
                    <?php 
                    $connection =mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"cms");
                    $query ="select * from timetable";
                    $query_run= mysqli_query($connection,$query);
                    while ($row =mysqli_fetch_assoc($query_run)) {
                       ?>
                       <center>
                        <table style="border-collapse: collapse;border:1px solid black">
                        <tr>
                                <td id="td"><?php echo $row['enter_subject'];?></td>
                                <td id="td"><?php echo $row['name_faculty'];?></td>
                                <td id="td"><?php echo $row['day'];?></td>
                                <td id="td"><?php echo $row['time'];?></td>
                        </tr>
                        </table>
                       </center>
                       <?php
                     } 
                 }
               ?>
                  <?php
                 if (isset($_POST['view_holiday'])) 
                 {
                   ?>
                    <center>
                      <h5>Event Details</h5><br><br>
                    <table>
                       <tr>
                         <td id="td"><b>Event Name</b></td>
                         <td id="td"><b>Description</b></td>
                         <td id="td"><b>Date</b></td>
                       </tr>
                    </table>
                    </center> 
                    <?php 
                    $connection =mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"cms");
                    $query ="select * from add_holiday";
                    $query_run= mysqli_query($connection,$query);
                    while ($row =mysqli_fetch_assoc($query_run)) {
                       ?>
                       <center>
                        <table style="border-collapse: collapse;border:1px solid black">
                        <tr>
                                <td id="td"><?php echo $row['event_name'];?></td>
                                <td id="td"><?php echo $row['description'];?></td>
                                <td id="td"><?php echo $row['date'];?></td>
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