<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700">
        <link rel="stylesheet" href="css/style.css?version=53">
    </head>
    
    <body>
    <div class="top">
        <ul>
            <li><a href="home.php" class="left">UOW Malaysia KDU</a></li>
            <?php
                if(isset($_SESSION['staffID']) || isset($_SESSION['adminID'])){
                    echo "<li><a class='top' style='color: #ffb0bf;' href='logout.php'>Logout</a></li>";
                }else{
                    echo "<li><a class='top' href='login.php'>Login</a></li>";
                }
            ?>
            <li><a class="top" href="aboutUS.php">About Us</a></li>
            <li><a class="top" href="programme.php">Programme</a></li>
            <li><a class="top" href="research.php">Research</a></li>
            <li><a class="top" href="staff.php">Academic Staff</a></li>
            <li><a class="top" href="awards.php">Awards</a></li>
            <li><a class="top" href="alumni.php">Alumni</a></li>
            <?php
                if(isset($_SESSION['staffID'])){
                    echo "<li><a class='top' href='editDetails.php'>Edit Profile</a></li>";
                }
                if(isset($_SESSION['adminID'])){
                    echo "<li><a class='top' href='adminMain.php'>Change Request</a></li>";
                }
            ?>
        </ul>
    </div>
        <h2>Academic Staff</h2>
        <br>
        <div class="grid-containerstaff">
            <div class="grid-itemsstaff">
                <img src="img/hao.jpg" class="staffpic">
                <h4><a href="hao.php">Chin Chun Hao</a></h4>
                <p>Head of School – Computing & Creative Media</p>
            </div>
            <div class="grid-itemsstaff">
                <img src="img/Teacher2.jpg" class="staffpic">
                <h4><a href="john.php">John Doe</a></h4>
                <p>Head of School – Pre-University Studies</p>
            </div>
        </div>
    <body>
</html>