<?php
session_start();
?>

<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="index.php"></a>
        </li>
        <?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
            <li><a href="index.php?page=dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li><a href="index.php"><i class="glyphicon glyphicon-calendar"></i> Take Attendance</a></li>
            <li><a href="index.php?page=studentinfo"><i class="glyphicon glyphicon-user"></i> Students List</a></li>
            <li><a href="index.php?page=reports"><i class="glyphicon glyphicon-duplicate"></i> Reports</a></li>
            <li><a href="index.php?page=logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            <li><a href="index.php?page=add_student.html"><i class="glyphicon glyphicon-off"></i> add new student</a></li>
        <?php else: ?>
            <li><a href="index.php">Login</a></li>
            <li><a href="index.php">Teacher's Section</a></li>
            <li><a href="index.php">Student's Section</a></li>
        <?php endif; ?>
    </ul>
</nav>

