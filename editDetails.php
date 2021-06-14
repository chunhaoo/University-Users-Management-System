<?php
    session_start();
    if(!isset($_SESSION['staffID'])){
        header('Location: login.php?login=false');
    } else{
        $id = $_SESSION['staffID'];
    }

    $conn = mysqli_connect('localhost', 'root', '', 'uowkdu');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Details</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700" rel="stylesheet">
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
        <h2>Edit Profile</h2>
        <form action='changes.php' method='POST'>
        <?php
            $select = "SELECT * from staff where staffID = $id;";
            $exec = mysqli_query($conn, $select);
            if ($exec->num_rows > 0){
                while($row = $exec->fetch_assoc()){
                    echo "Name: <input type='text' name='name' value = '".$row['name']."'><br><br>";
                    echo "Age: <input type='number' name='age' value = '".$row['age']."'><br><br>";
                    echo "Gender: <input type='text' name='gender' value = '".$row['gender']."'><br><br>";
                    echo "Email: <input type='text' name='email' value = '".$row['email']."'><br><br>";
                    echo "Biography: <input type='text' name='biography' value = '".$row['biography']."'><br><br>";
                    echo "Academic Qualification: <input type='text' name='aq' value = '".$row['aq']."'><br><br>";
                    echo "Professional: <input type='text' name='prof' value = '".$row['prof']."'><br><br>";
                    echo "Administrative Duties: <input type='text' name='ad' value = '".$row['ad']."'><br><br>";
                    echo "Areas of Expertise: <input type='text' name='ae' value = '".$row['ae']."'><br><br>";
                    echo "Publication: <input type='text' name='pub' value = '".$row['pub']."'><br><br>";
                    echo "Areas of Research: <input type='text' name='ar' value = '".$row['ar']."'><br><br>";
                    echo "Consultation Project / Consultancy: <input type='text' name='cp' value = '".$row['cp']."'><br><br>";
                    echo "Awards and Recognition: <input type='text' name='awards' value = '".$row['awards']."'><br><br>";
                    echo "Presentations: <input type='text' name='pr' value = '".$row['pr']."'><br><br>";
                    echo "Expert Linkages: <input type='text' name='el' value = '".$row['el']."'><br><br>";
                    echo "Expert / Technical Contributions: <input type='text' name='etc' value = '".$row['etc']."'><br><br>";
                    echo "Evaluation Activities: <input type='text' name='ea' value = '".$row['ea']."'><br><br>";
                    echo "Contribute to Society: <input type='text' name='cs' value = '".$row['cs']."'><br><br>";
                    echo "Intellectual Property Rights: <input type='text' name='ipr' value = '".$row['ipr']."'><br><br>";
                    echo "Supervision: <input type='text' name='sp' value = '".$row['sp']."'><br><br>";
                    echo "Teaching: <input type='text' name='tch' value = '".$row['tch']."'><br><br>";
                }
            }
        ?>
            <input class='login' type='submit' value='Submit'>
        </form>

        <?php
        if(!isset($_GET['edit'])){
            exit();
        } elseif($_GET['edit'] == "true") {
            echo "<p style='text-align: center;'>Change Request Submitted!</p>";
        }
        elseif($_GET['edit'] == "false"){
            echo "<p style='text-align: center;'>Oops, something went wrong. Please try again.</p>";
        }
    ?>
    </body>
</html>