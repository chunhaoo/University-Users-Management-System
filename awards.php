<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>Awards</title>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700">
        <link rel="stylesheet" href="css/style.css?version=52">
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

        <h3 style="text-align:center;color:red;">Awards</h3>
        <table>
            <tr>
                <td style="padding:10px">
                    <div class="awardPicContainer">
                        <img src="img/cert.jpeg" class="awardPic" >
                        <p>The 2-Diamond SEDA LCB Certificate awarded to UOW Malaysia KDU University College.</p>
                    </div>
                </td>
                <td style="text-align:left;padding:10px;color:#0c2340;">
                    <h4 class="awardTitle">First Private IHL Awarded The SEDA Low Carbon Building Certification</h4>
                    UOW Malaysia KDU University College (Glenmarie, Shah Alam campus) has been officially awarded the Low Carbon Building (LCB) 2-Diamond rating under Voluntary 
                    Sustainable Energy Low Carbon Building Assessment GreenPASS Operation by Sustainable Energy Development Authority (SEDA) Malaysia on 23rd June 2020. This is the 
                    first ever Low Carbon Building recognition awarded to a private institute of higher learning (IHL) in Malaysia.
                    <br>
                    <br>
                    SEDA Low Carbon Building (LCB) assessment program is a platform to appreciate the sustainable energy low carbon building initiatives, using UNEP-SBCI Common 
                    Carbon Metric/CIDB’s CIS20-GreenPASS. By embracing the culture of  energy conservation, UOW Malaysia KDU University College has successfully achieved carbon 
                    emission reduction of 11.32% equivalent to 488.20 tonne CO2 /year or 703,458 kWh/year with building energy index (BEI) of 136.13 kWh/m2/year. It is noteworthy 
                    to mentioned that energy conservation effort by UOW Malaysia KDU University College was accelerated when granted with Energy Audit Conditional Grant under RMK11 
                    on 13th August 2018.
                    <br>
                    <br>
                    UOW Malaysia KDU University College energy audit and energy conservation implementation team was led by Ts. Nagentrau Muniandy (Energy Manager & lecturer) 
                    from School of Engineering (SOE) and Mr. Jagjeet Singh Ajmir Singh (Facilities & Maintenance Manager) under guidance of Ir. Dr. Thirumalaichelvam Subramaniam 
                    (Energy Expert). Energy audit findings and strong support from the top management, have intensified the implementation of energy conservation effort to drive 
                    UOW Malaysia KDU University College as low carbon campus building. UOW Malaysia KDU University College is committed toward continuously implementing and more 
                    importantly sustaining energy conservation culture to support government target to reduce 40-45% CO2 intensity by 2030.
                </td>
                <td style="padding:10px">
                    <div class="awardPicContainer">
                        <img src="img/present.jpeg" class="awardPic">
                        <p>From left: Mr. Jagjeet Singh Ajmir Singh (Facilities & Maintenance Manager), Ts.Nagentrau Muniandy (Energy Manager & lecturer) and 
                            Mr. Mohd Shah Hambali Arifin (SEDA)</p>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding:10px">
                    <div class="awardPicContainer">
                        <img src="img/Carbon1.jpg" class="awardPic" >
                        <p>Mitchell Liong Chee Chiun (2nd from right), Senior Manager of Student and Alumni Centre (SAC), UOW Malaysia KDU University College and Mayor of Shah Alam Dato’ Ahmad Zaharin Mohd Saad (2nd from left)</p>
                    </div>
                </td>
                <td style="text-align:left;padding:10px;color:#0c2340;">
                    <h4 class="awardTitle">UOW Malaysia KDU Go Green Campus Won The Shah Alam Low Carbon Building Award 2017</h4>
                    With the implementation of UOW Malaysia KDU Sustainability Empowerment Initiative under UOW Malaysia KDU Empowerment Plan, and the adoption of 17 important 
                    characteristics of being a Green Campus since it moved to its flagship campus at Utropolis Glenmarie in 2015, UOW Malaysia KDU University College today 
                    proudly proved that they are on the right track in creating a green eco-system by receiving the Low Carbon Building Award 2017 from the Shah Alam City 
                    Council (MBSA).
                    <br>
                    <br>
                    At the prize giving ceremony held in MBSA headquarter here, UOW Malaysia KDU was bestowed the First-Runner-Up of Low Carbon Building, under the category of 
                    Commercial and Institution for the general title of Shah Alam Low Carbon Awards 2017. The award with a cash prize of RM2000 was presented by the Mayor of 
                    Shah Alam Dato’ Ahmad Zaharin Mohd Saad, to Mr Mitchell Liong Chee Chiun, Senior Manager of Student and Alumni Centre (SAC), UOW Malaysia KDU University 
                    College.
                    <br>
                    <br>
                    “This accolade is to reward organisations and individuals with excellent green footprint, in order to encourage the community in improving the quality of 
                    low-carbon lives with continuous implementation of go green programmes using low carbon elements,” said the Mayor. According to Dato’ Ahmad Zaharin, 
                    there were 53 institutions in total that competed for the awards. The assessment period spanned from 18 May to 15 October 2017 was based on the data 
                    collected for the whole year of 2016. The competitors were graded on the establishment of Low-Carbon-Committee, the initiative of programme implementation, 
                    the efforts on reducing energy and saving water, the management of solid waste and the arrangement of transportation, just to name a few.
                    <br>
                    The core objectives of this award are parallel with the goal set by MBSA in achieving Carbon Dioxide Release Rate of 30 by 2030.
                    <br>
                    Commenting on the award-winning, Liong enthused, “In our UOW Malaysia KDU Empowerment Plan, UOW Malaysia KDU Sustainability aims to protect the environment 
                    by planning, organising and introducing numerous campus-wide programmes and sustainability efforts that will reach out to all students. By winning this 
                    award, it shows that we are on the right track to further create and educate our community to have a green ecosystem.”
                </td>
                <td style="padding:10px">
                    <div class="awardPicContainer">
                        <img src="img/Carbon2.jpg" class="awardPic">
                        <p>A group photo of the winners of Shah Alam Low Carbon Awards 2017 with the Mayor of Shah Alam Dato’ Ahmad Zaharin Mohd Saad (standing in the centre).</p>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>