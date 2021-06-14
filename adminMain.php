<?php
    session_start();
    if(!isset($_SESSION['adminID'])){
        header('Location: admin.php?login=false');
    } else{
        $adminID = $_SESSION['adminID'];
    }

    $conn = mysqli_connect('localhost', 'root', '', 'uowkdu');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!Doctype html>
<html>
    <head>
        <title>Approval of Changes</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
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

        <h2>Change Requests</h2>
        <?php
            $select = "Select * from changes where approval = 'false';";
            $exec = mysqli_query($conn, $select);

            if ($exec->num_rows > 0) {
                // output data of each row
                while($row = $exec->fetch_assoc()) {

                        echo "<table class='table table-hover'>
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>".$row['name']."</td>
                        </tr>
                        <tr>
                            <td><strong>Age</strong></td>
                            <td>".$row['age']."</td>
                        </tr>
                        <tr>
                            <td><strong>Gender</strong></td>
                            <td>".$row['gender']."</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>".$row['email']."</td>
                        </tr>
                        <tr>
                            <td><strong>Biography</strong></td>
                            <td>".$row['biography']."</td>
                        </tr>
                        <tr>
                            <td><strong>Academic Qualification</strong></td>
                            <td>".$row['email']."</td>
                        </tr>
                        <tr>
                            <td><strong>Professional</strong></td>
                            <td>".$row['prof']."</td>
                        </tr>
                        <tr>
                            <td><strong>Administrative Duties</strong></td>
                            <td>".$row['ad']."</td>
                        </tr>
                        <tr>
                            <td><strong>Areas of Expertise</strong></td>
                            <td>".$row['ae']."</td>
                        </tr>
                        <tr>
                            <td><strong>Publication</strong></td>
                            <td>".$row['pub']."</td>
                        </tr>
                        <tr>
                            <td><strong>Areas of Research</strong></td>
                            <td>".$row['ar']."</td>
                        </tr>
                        <tr>
                            <td><strong>Consultation Project/Consultancy</strong></td>
                            <td>".$row['cp']."</td>
                        </tr>
                        <tr>
                            <td><strong>Awards and Recognition</strong></td>
                            <td>".$row['awards']."</td>
                        </tr>
                        <tr>
                            <td><strong>Presentations</strong></td>
                            <td>".$row['pr']."</td>
                        </tr>
                        <tr>
                            <td><strong>Expert Linkages</strong></td>
                            <td>".$row['el']."</td>
                        </tr>
                        <tr>
                            <td><strong>Expert/Technical Contributions</strong></td>
                            <td>".$row['etc']."</td>
                        </tr>
                        <tr>
                            <td><strong>Evaluation Activities</strong></td>
                            <td>".$row['ea']."</td>
                        </tr>
                        <tr>
                            <td><strong>Contribute to Society</strong></td>
                            <td>".$row['cs']."</td>
                        </tr>
                        <tr>
                            <td><strong>Intellectual Property Rights</strong></td>
                            <td>".$row['ipr']."</td>
                        </tr>
                        <tr>
                            <td><strong>Supervision</strong></td>
                            <td>".$row['sp']."</td>
                        </tr>
                        <tr>
                            <td><strong>Teaching</strong></td>
                            <td>".$row['tch']."</td>
                        </tr>
                        </table>";

                       
                        echo "<form action='' class='style2' method='POST'>
                        <p>Approve Changes?</p>
                            <input type='submit' name='btn' value='Yes'/>
                            <input type='submit' name='btn' value='No'/>
                        </form>";

                        $update = "UPDATE staff
                                INNER JOIN changes ON staff.staffID = changes.staffID
                                SET staff.name = changes.name, staff.age = changes.age, staff.gender = changes.gender, staff.email = changes.email, 
                                staff.biography = changes.biography, staff.aq = changes.aq, staff.prof = changes.prof, staff.ad = changes.ad, 
                                staff.ae = changes.ae, staff.pub = changes.pub, staff.ar = changes.ar, staff.cp = changes.cp, staff.awards = changes.awards, 
                                staff.pr = changes.pr, staff.el = changes.el, staff.etc = changes.etc, staff.ea = changes.ea, staff.cs = changes.cs, 
                                staff.ipr = changes.ipr, staff.sp = changes.sp, staff.tch = changes.tch
                                WHERE changes.staffID = ".$row['staffID'].";";
                                
                        if(!isset($_POST['btn'])){
                            exit();
                        } else{
                            $val = $_POST['btn'];
                            if ($val == "Yes"){
                                $exec2 = mysqli_query($conn, $update);
                                $delete = mysqli_query($conn, "delete from changes where staffID = ".$row['staffID']);
                            } else{
                                $delete = mysqli_query($conn, "delete from changes where staffID = ".$row['staffID']);
                            }
                        }
                }
            } else {
                echo "<p style='text-align: center;'>0 results</p>";
            }
        ?>
    </body>

</html>



<!--echo "<p><strong>Staff ID: </strong>". $row['staffID'].
                        " requested to change: <br><br>Name: ".$row["name"].
                        "<br>Age: ".$row["age"].
                        "<br>Gender: ".$row["gender"].
                        "<br>Email: ".$row['email'].
                        "<br>Biography".$row['biography'].
                        "<br>Academic Qualification: ".$row['aq'].
                        "<br>Professional: ".$row['prof'].
                        "<br>Administrative Duties: ".$row['ad'].
                        "<br>Areas of Expertise: ".$row['ae'].
                        "<br>Publication: ".$row['pub'].
                        "<br>areas of Research: ".$row['ar'].
                        "<br>Consultation Project/Consultancy: ".$row['cp'].
                        "<br>Awards and Recognition: ".$row['awards'].
                        "<br>Presentations: ".$row['pr'].
                        "<br>Expert Linkages: ".$row['el'].
                        "<br>Expert/Technical Contributions: ".$row['etc'].
                        "<br>Evaluation Activities: ".$row['ea'].
                        "<br>Contribute to Society: ".$row['cs'].
                        "<br>Intellectual Property Rights: ".$row['ipr'].
                        "<br>Supervision: ".$row['sp'].
                        "<br>Teaching: ".$row['tch'].
                        "</p><br>";-->