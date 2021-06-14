<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>About Us</title>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900%7CUbuntu:400,500,700">
    <link rel="stylesheet" href="css/style.css?version=52">
</head>

<body>
    <!--Nav Bar-->
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

    <section>
        <h3 style="text-align:center;">About Us</h3>
        <h4 style="text-align:center;">Mission & Vision</h4>
        <div class="grid-container">
            <div class="grid-item">
                <h4 class="h4black">Mission</h4>
                <p>We collaborate with local and global communities to deliver quality teaching, learning, and research, nurturing global leaders with a truly 
                    international outlook.</p>
            </div>
            <div class="grid-item">
                <h4 class="h4black">Vision</h4>
                <p>To be a leading global education provider delivering transformative student experiences in Malaysia and the region.</p>
            </div>
        </div>
    </section>

    <br>
    <section class="center">
        <h3 style="text-align:center;">UOW Malaysia KDU Management</h3>
        <table class="table table-striped">
            <tr>
               <th>Title</th>
               <th>Lecturer</th>
            </tr>
            <tr>
                <td>Head of School - Computing & Creative Media</td>
                <td>Associate Professor Ts Tan Chin Ike</td>
            </tr>
            <tr>
                <td>Head of Academic - Computing & Creative Media</td>
                <td>Phua Yeong Tsann</td>
            </tr>
            <tr>
                <td>Program Leader – Computing & Creative Media</td>
                <td>Sujata Navaratnam</td>
            </tr>
            <tr>
                <td>Senior Lecturer - Computing & Creative Media</td>
                <td>Dr Law Foong Li</td>
            </tr>
            <tr>
                <td>Senior Lecturer - Computing & Creative Media</td>
                <td>Jason Wong Yoke Seng</td>
            </tr>
            <tr>
                <td>Senior Lecturer - Computing & Creative Media</td>
                <td>Siti Fazilah Shamsudin</td>
            </tr>
            <tr>
                <td>Lecturer - Computing & Creative Media</td>
                <td>Khoo Li Jing</td>
            </tr>
        </table>
    </section>

    <br>
    <section>
        <h3 style="text-align:center;">Departments</h3>
        <div class="grid-container">
            <div class="grid-item">
                <h4 class="h4black">School of Computing & Creative Media</h4>
                <p>Associate Professor Ts Tan Chin Ike</p>
            </div>
            <div class="grid-item">
                <h4 class="h4black">School of Business</h4>
                <p>Associate Professor Dr Brian Wong Kee Mun</p>
            </div>
            <div class="grid-item">
                <h4 class="h4black">School of Pre-University Studies</h4>
                <p>Dr Wong Sook Khuan (Jenny)</p>
            </div>
        </div>
    </section>

    <!--Non Academic Staff(Grid)-->
    <section>
        <h3 style="text-align:center;">Non-academic Staff</h3>
        <div class="grid-container">
            <div class="grid-item2">
                <img src="img/cleaning.jpg" style="padding:15px;width:200px;height:200px;">
                <p>Cleaning Staff</p>
            </div>
            <div class="grid-item2">
                <img src="img/secretary.jpg" style="padding:15px;width:200px;height:200px;">
                <p>Secretary</p>
            </div>
            <div class="grid-item2">
                <img src="img/clerk.jpg" style="padding:15px;width:200px;height:200px;">
                <p>Clerk</p>
            </div>
        </div>
    </section>

    <!--Facilities and Services-->
    <section>
        <div>
            <h3 style="text-align:center;">Facilities & Services</h3>
            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="img/aperture.jpg" style="width:100%">
                        <div class="text">Aperture Lab</div>
                </div>

                <div class="mySlides">
                    <img src="img/gamelab.jpg" style="width:100%">
                        <div class="text">Game Room</div>
                </div>

                <div class="mySlides">
                    <img src="img/comicstudio.jpg" style="width:100%">
                        <div class="text">Kadokawa Content Academy Comic Studio</div>
                </div>

                <div class="mySlides">
                    <img src="img/msilab.jpg" style="width:100%">
                        <div class="text">MSI Mobile Lab</div>
                </div>

                <div class="mySlides">
                    <img src="img/msi.jpg" style="width:100%">
                        <div class="text">Arkham Vault</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </section>

    <br>
    <!--Contact Us-->
    <section class="bot">
        <h3>Contact Us</h3>
        <br>
        <table>
            <tr>
                <td style="color:red; font-size:16px">Utropolis, Glenmarie & Damansara Jaya</td>
                <td style="color:red; font-size:16px">Utropolis, Glenmarie & Damansara Jaya</td>
                <td style="color:red; font-size:16px">Utropolis, Glenmarie & Damansara Jaya</td>
            </tr>
            <tr>
                <td class="contact">Sharifah Azura binti Tuan Muda</td>
                <td class="contact">Wilson Chee Chan Weng</td>
                <td class="contact">Anna Lim</td>
            </tr>
            <tr>
                <td class="contact">Assistant Manager – Student & Alumni Centre</td>
                <td class="contact">Senior Executive – Student & Alumni Centre</td>
                <td class="contact">Manager – Career and Placement Centre</td>
            </tr>
            <tr>
                <td class="contact">Tel : +603 5565 0457</td>
                <td class="contact">Tel : +603 5565 0459</td>
                <td class="contact">Tel : +604 238 6254</td>
            </tr>
            <tr>
                <td class="contact">Email : tmsharifah@kdu.edu.my</td>
                <td class="contact">Email : cw.chee@kdu.edu.my</td>
                <td class="contact">Email : kdu.alumni@kdupg.edu.my</td>
            </tr>
        </table>
    </section>
    <script>
    var slideIndex = 1;
        showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }    
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
    </script>
</body>

</html>