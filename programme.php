<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Programme</title>
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

        <section style="margin-left:11%;margin-right:10%;">
            <h2 id="bottomContent">Programme</h2>
            <div class="tab">
                <button class="tablinks" onmouseover="openDesc(event, 'bs')">Business</button>
                <button class="tablinks" onmouseover="openDesc(event, 'ca')">Communication & Creative Arts</button>
                <button class="tablinks" onmouseover="openDesc(event, 'cm')">Computing & Creative Media</button>
                <button class="tablinks" onmouseover="openDesc(event, 'hp')">Hospitality, Tourism & Culinary Arts</button>
                <button class="tablinks" onmouseover="openDesc(event, 'pu')">Pre-University Studies</button>
            </div>

            <div id="bs" class="progcontent">
                <h4>Undergraduate</h4>
                <ul class="ulProg">
                    <li>Diploma in Business Administration</li>
                    <li>Diploma in Business</li>
                    <li>Diploma in Accounting</li>
                    <li>Bachelor of Business (Hons)</li>
                    <li>Bachelor of Arts (Hons) in Banking & Finance</li>
                    <li>Bachelor of Accounting (Hons) </li>
                </ul>

                <h4>Postgraduate</h4>
                <ul class="ulProg">
                    <li>Postgraduate Diploma in Enterprise Risk Management</li>
                    <li>Postgraduate Certificate in Business Administration</li>
                    <li>Master of Business</li>
                    <li>Master of Arts (By Research)</li>
                </ul>
            </div>

            <div id="ca" class="progcontent">
                <h4>Undergraduate</h4>
                <ul class="ulProg">
                    <li>Diploma in Mass Communication</li>
                    <li>Diploma in Entrepreneurial Design</li>
                    <li>Diploma in Entertainment Arts</li>
                    <li>Bachelor of Creative Industry Management (Hons)</li>
                    <li>Bachelor of Communication in Media Productions (Hons)</li>
                    <li>Bachelor of Arts (Hons) in Public Relations</li>
                </ul>

                <h4>Postgraduate</h4>
                <ul class="ulProg">
                    <li>Master of Design (Innovation)</li>
                    <li>Master of Arts (Communication Management)</li>
                </ul>
            </div>

            <div id="cm" class="progcontent">
                <h4>Undergraduate</h4>
                <ul class="ulProg">
                    <li>Diploma in Sequential Art</li>
                    <li>Diploma in Information Technology</li>
                    <li>Diploma in Digital Animation</li>
                    <li>Bachelor of Software Engineering (Hons)</li>
                    <li>Bachelor of Information Systems (Hons)</li>
                    <li>Bachelor of Computer Science (Hons)</li>
                </ul>

                <h4>Postgraduate</h4>
                <ul class="ulProg">
                    <li>Master in Computer Science</li>
                    <li>Doctor of Philosophy (Computer Science)</li>
                </ul>
            </div>

            <div id="hp" class="progcontent">
                <h4>Undergraduate</h4>
                <ul class="ulProg">
                    <li>Diploma in Professional Chef Training</li>
                    <li>Diploma in International Hotel Management</li>
                    <li>Diploma in Culinary Arts</li>
                    <li>Bachelor of Hospitality Management (Hons)</li>
                    <li>Bachelor of Culinary Management (Hons)</li>
                    <li>Bachelor of Arts (Hons) in International Hotel & Tourism Management</li>
                </ul>

                <h4>Postgraduate</h4>
                <ul class="ulProg">
                    <li>Master of Science in Hospitality and Tourism</li>
                    <li>Master of Business Administration in Tourism Management</li>
                    <li>Doctor of Philosophy (Hospitality and Tourism)</li>
                </ul>
            </div>

            <div id="pu" class="progcontent">
                <h4>Undergraduate</h4>
                <ul class="ulProg">
                    <li>Foundation Studies (Art and Technology)</li>
                    <li>Foundation in Science</li>
                    <li>Foundation in Engineering</li>
                    <li>Foundation in Arts</li>
                    <li>Cambridge A Level</li>
                </ul>
            </div>

            <div class="clearfix"></div>

            <div>
                <h2>Study Route</h2>
                <img style="display: block; margin: auto;" src="img/study_route.png"/>
            </div>
        </section>


    </body>

    <script>
        //HoverTab Function
        function openDesc(evt, divID) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("progcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(divID).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>
</html>