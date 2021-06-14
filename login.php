<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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


    <div>
        <form name="loginF" action="staffValidation.php" method="POST">
            User ID: <input type="number" name="staffID" class="box" placeholder="UserID">
            <br>
            Password: <input type="password" name="password" class="box" placeholder="Password">
            <br>
            <input type="submit" name="login" class="login" value="Login">
            <br>
            <a href="admin.php">Admin Login?</a>

        </form>
    </div>

    <?php
        if(!isset($_GET['login'])){
            exit();
        } elseif($_GET['login'] == "false"){
            echo "<p style='text-align: center;'>You are logged out. Please log in again.</p>";
        }
    ?>
</body>

</html>