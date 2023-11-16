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
</style>

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
    <h3>Teacher List</h3>
    
    <table class="table table=stripped">
        <thead>  
          <tr>
            <th scope="col">Teacher ID</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
          </tr>
        </thead>

        <?php
// Assuming you have established a PDO connection named $pdo
$i = 0;

// Prepare and execute the query
$tcr_query = $pdo->prepare("SELECT * FROM teachers ORDER BY tc_id ASC");
$tcr_query->execute();

while ($tcr_data = $tcr_query->fetch(PDO::FETCH_ASSOC)) {
    $i++;
    // Your code logic here
    // For example:
    // $tcr_data['column_name'] to access columns of each row


?>

<tbody>
    <tr>
        <td><?php echo htmlspecialchars($tcr_data['tc_id']); ?></td>
        <td><?php echo htmlspecialchars($tcr_data['tc_name']); ?></td>
        <td><?php echo htmlspecialchars($tcr_data['tc_dept']); ?></td>
        <td><?php echo htmlspecialchars($tcr_data['tc_email']); ?></td>
        <td><?php echo htmlspecialchars($tcr_data['tc_course']); ?></td>
    </tr>
</tbody>

          <?php  }?>
          
    </table>

  </div>

</div>

</center>

</body>
</html>
