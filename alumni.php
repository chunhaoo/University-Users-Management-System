<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>Alumni</title>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700">
        <link rel="stylesheet" href="css/style.css?version=52">

        <style>

        </style>
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

        <h3 style="padding:20px;">Alumni Stories</h3>

        <section class="student">
            <div>
                <img src="img/Alumni-jackOng.jpg" class="stud" style="float:right;">
                <h4 class="studentright">Jack Ong Wei Liang, UOW Malaysia KDU University College</h4>
                <div style="text-align:right;">
                    <p>Without the efforts of my lecturers who guided me and provided opportunities to meet up with other game developers in Malaysia, 
                        I would not have gotten the chance of laying my first game programming job in Passion Republic, a reputable game development company in Malaysia. 
                        I feel very grateful for how UOW Malaysia KDU Game Development Programme prepared me for my career in terms of both my technical and soft skills. 
                        The learning experiences I gained from this programme have reflected heavily on my working experience, and I have adapted well with the company since my 
                        employment. Because of this programme, I have had a pleasant experience working as a competent game developer who gets to express my passion in making games. 
                        Passion Republic was involved in the development of Sucker Punch’s Ghost of Tsushima. The studio has previously worked on other major titles in the past, 
                        including The Last Of Us Part 2, Gears 5, Marvel’s Spider-Man, Uncharted 4 and more.</p>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>  
        <section class="student">
            <div>
                <img src="img/Alumni-JessicaLai.jpg" class="stud" style="float:left;">
                <h4 class="studentleft">Jessica Lai, UOW Malaysia KDU Penang University College</h4>
                <div>
                    <p>“Deciding to pursue my tertiary education at UOW Malaysia KDU University College was definitely a choice well-made. Just like most people, 
                        I had no idea what I am going to do after graduating high school, I was introduced to UOW Malaysia KDU by my brother who was studying in the institution 
                        back then. It was a time of exploration and discovery for me, both on a personal and intellectual level.”</p> 
                    <p>“The competent lecturers and great systems within campus provided me with a platform for proper guidance. Graduating from UOW Malaysia KDU not only equipped me with knowledge and communication skills to 
                    carry forward in both my career and life today, but it also gave me memorable memories with my classmates as we would study, eat, and being mischievous 
                    together. I will always remember the UOW Malaysia KDU Cafeteria where we would hang out between classes.”</p> 
                    <p>Jessica has been instrumental to the growth of Aspen Group, Penang-based property development and real estate investment group, where she now serves as the Divisional Director, Group Human Resource & 
                    Administration Division. “The role of Human Resource in planning and driving the strategic growth of an organization is as important as technology or 
                    business leadership. In my role, I am required to assist the company in paving the way for strategic growth across decisions and sustain the right 
                    conversations with other leaders to carve out an intelligent path for a promising future for co-workers. A HR professional adds value to the business, 
                    not only through sourcing and recruiting the best talent, but by supporting co-workers, creating a great co-worker culture, and looking at ways to make a 
                    positive difference in the workplace. That is why I love working HR"</p>
                </div>
            </div>
        </section>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                content.style.maxHeight = null;
                } else {
                content.style.maxHeight = content.scrollHeight + "px";
                }
            });
            }
        </script>
    </body>
</html>