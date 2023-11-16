<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Faculties</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="report.php" style="text-decoration:none;">Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>

<div class="row">

  <div class="content">
    <h3>Individual Report</h3>

    <form method="post" action="">

    <label>Select Subject</label>
    <select name="whichcourse">
    <option  value="INPRO">INTERNET PROGRAMMING</option>
         <option  value="AI">INTRO TO A.I</option>
        <option  value="COMARC">ADVANCED COMPUTER ARCHITECTURE</option>
        <option  value="NOS">ADVANCED NETWORK OPERATING SYSTEM</option>
        <option  value="ISF">IT SECURITY FUNDAMENTALS</option>
        <option  value="PLC">PROGRAMMING LANGUAGE CONCEPTS</option>
        <option  value="CE">COMPUTER ETHICS</option>
        <option  value="SAD">SOFTWARE ARCHITECTURE DESIGN</option>
        
    </select>

      <p>  </p>
      <label>Student Reg. No.</label>
      <input type="text" name="sr_id">
      <input type="submit" name="sr_btn" value="Go!" >

    </form>

    <h3>Mass Report</h3>

    <form method="post" action="">

    <label>Select Subject</label>
    <select name="course">
    <option  value="INPRO">INTERNET PROGRAMMING</option>
         <option  value="AI">INTRO TO A.I</option>
        <option  value="COMARC">ADVANCED COMPUTER ARCHITECTURE</option>
        <option  value="NOS">ADVANCED NETWORK OPERATING SYSTEM</option>
        <option  value="ISF">IT SECURITY FUNDAMENTALS</option>
        <option  value="PLC">PROGRAMMING LANGUAGE CONCEPTS</option>
        <option  value="CE">COMPUTER ETHICS</option>
        <option  value="SAD">SOFTWARE ARCHITECTURE DESIGN</option>
        
    </select>
    <p>  </p>
      <label>Date ( yyyy-mm-dd )</label>
      <input type="text" name="date">
      <input type="submit" name="sr_date" value="Go!" >
    </form>

    <br>

    <br>

    <?php
// ... (previous code remains unchanged)


?>
