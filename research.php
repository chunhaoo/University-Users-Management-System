<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Research</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
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

        <h2>Research</h2>

        <table class="rsT">
            <tr>
                <th>Area</th>
                <th>Partners</th>
                <th>Year</th>
            </tr>
            <tr>
                <td>Design and Develop a Cybersecurity Education Framework Using Capture the Flag</td>
                <td>Khoo, L.J.</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Linking the Elements of Learning, Assessment, and Play Experience in a Validation Framework</td>
                <td>Tan, C.I.</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Multi-criterion statistical model for online advertisement system</td>
                <td>BS, Khoo & HK, Khoo</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>A Deep Convolutional Neural Networks on Malaysian Food Classification</td>
                <td>J.Joshua Thomas, Naris Pillai</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>A Deep Learning Framework on Generation of Image Descriptions with Bidirectional 
                    Recurrent Neural Networks International Conference on Intelligent Computing and Optimization</td>
                <td>J.Joshua Thomas, Naris Pillai</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Parallel Coordinates Visualization Tool on the Air Pollution Data for Northern Malaysia</td>
                <td>Thomas J.J, Lokanathan R, Jothi J.A</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Array P Systems with Parallel Rewriting and Tables of Context-Free Rules</td>
                <td>L. Pan, B. Song, P. Isawasan, K.G. Subramanian</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>Array-rewriting P Systems with Basic Puzzle Grammar rules and Permitting Features</td>
                <td>P. Isawasan, R. C. Muniyandi, I. Venkat, K.G. Subramanian</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>On Prouhet Morphisms and Parikh Matrices</td>
                <td>K.G. Subramanian, I. Venkat, P. Isawasan, A. T. Khader, A. K. Nagar</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>Parallel Coordinates Visualization Tool on the Air Pollution Data for Northern Malaysia</td>
                <td>Raaj, Joshua Thomas, J., Justtina</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>Array P Systems with Parallel Rewriting and Tables of Context-Free Rules</td>
                <td>L. Pan, B. Song, P. Isawasan, K.G. Subramanian</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>Array-rewriting P Systems with Basic Puzzle Grammar rules and Permitting Features</td>
                <td>P. Isawasan, R. C. Muniyandi, I. Venkat, K.G. Subramanian</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>On Prouhet Morphisms and Parikh Matrices</td>
                <td>K.G. Subramanian, I. Venkat, P. Isawasan, A. T. Khader, A. K. Nagar</td>
                <td>2016</td>
            </tr>
    </body>
</html>