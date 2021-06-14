<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1">

<head>
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

    <br>

    <!--Slideshow-->
    <div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/kduevent.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/openday.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/graduation.jpg" style="width:100%">
                <div class="text">Graduation Day is nearing!!</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <br>

    <!--Our Story-->
    
    <section class="desc">
    <h2 id="bottomContent">Background</h2>
        <p>UOW Malaysia KDU is part of the University of Wollongong Australia’s global network, but has a long history of providing accessible, quality, 
            tertiary education to Malaysia, and the surrounding regions, as KDU college and university colleges. Established in 1983, KDU was Malaysia’s first purpose-built 
            private college that provided opportunities for Malaysian youth to pursue high-quality overseas tertiary education in a local setting. Riding on the success of the 
            Damansara Jaya campus, a second campus in Penang was established in 1991. In August 2010, KDU College Damansara Jaya was upgraded to University College status – a 
            reflection of its quality programs, excellent teaching facilities, and strong industry partnerships. KDU University College then moved to its new flagship campus at 
            Utropolis Glenmarie in January 2015. Also in 2015, KDU College Penang was upgraded to University College status. Both university colleges offer a full spectrum of 
            programs, within a contemporary learning environment utilizing state-of-the-art facilities, from Foundation through to bachelor degrees and postgraduate programs. 
            These include programs in hospitality, tourism and culinary arts, game development and computing, communications, creative arts, business, engineering and nursing.</p>

        <p>Through its global connections and real-world learning opportunities, KDU has nurtured many bright minds from different backgrounds, cultures and nationalities, 
            inspiring them to make positive contributions to society. It has provided a platform for practical, impactful ideas to grow and for students to reach their 
            potential.</p>

        <p>As the first institution to have a purpose-built campus within a larger sustainable ecosystem and being the first to offer twinning programs in the nation, 
            KDU has broadened opportunities for its 50,000 graduates, who have gone on to find success in a range of fields, including in careers as corporate leaders, 
            entrepreneurs and celebrities around the globe.</p>

        <p>In November 2018, KDU entered into a strategic partnership with UOW Global Enterprises, a wholly-owned subsidiary of University of Wollongong Australia. 
            Subsequently, in November 2019, the name of the college and university colleges were changed to reflect the stewardship of the University of Wollongong and 
            they are now known as UOW Malaysia KDU. The UOW Malaysia KDU college and university colleges now form an integral part of the University Wollongong Australia global 
            network. In addition to Malaysia, the University of Wollongong’s global network extends to campuses in Australia, Dubai and Hong Kong. 
            UOW plans to develop the UOW Malaysia KDU University Colleges at Glenmarie and Penang into universities within the next five to seven years. 
            In addition, from January 2020 UOW Malaysia KDU will offer undergraduate and postgraduate programs at the new Batu Kawan campus, to meet the emerging needs of 
            that region.</p>

        <p>The University of Wollongong is committed to becoming a pre-eminent provider of higher education in Malaysia. This commitment combines UOW’s internationally 
            recognised teaching programmes and personalised approach to students with KDU’s 36 years of experience in private tertiary education, modern campuses and vibrant, 
            industry-focused programs. UOW’s presence in Malaysia will benefit the wider region, by producing international student growth and industry-ready graduates.</p>
    </section>

    <section style="margin-left:11%;margin-right:10%;">
    <h2 id="bottomContent">Heritage</h2>
        <div class="tab">
            <button class="tablinks" onmouseover="openDesc(event, 'EL')">1983 - 1991</button>
            <button class="tablinks" onmouseover="openDesc(event, 'ET')">2010</button>
            <button class="tablinks" onmouseover="openDesc(event, 'EB')">2011 - 2015</button>
            <button class="tablinks" onmouseover="openDesc(event, 'EA')">2016 - 2019</button>
        </div>

        <div id="EL" class="tabcontent">
            <h4>1983</h4>
            <ul>
                <li class="heritage">Established in 1983, and a pioneer in Malaysian private education, KDU was one of the first private colleges in 
                Malaysia to have its own purpose-built campus that located in Damansara Jaya.</li>
            </ul>

            <h4>1984</h4>
            <ul>
                <li class="heritage">Pioneer batch of American Credit Transfer program students transfer to various universities across the United States</li>
                <li class="heritage">New schools within the college was formed and more programs were offered</li>
                <li class="heritage">First in the nation to run the Association of Chartered Certified Accountants (ACCA) course on a full-time basis</li>
                <li class="heritage">Introduced the first overseas twinning program in partnership with Middlesex Polytechnic (Middlesex University)</li>
            </ul>

            <h4>1991</h4>
            <ul>
                <li class="heritage">Second campus, KDU Penang began its chapter when it opened its door to first batch of students in 1991.</li>
            </ul>
        </div>

        <div id="ET" class="tabcontent">
            <h4>2010</h4>
            <ul>
                <li class="heritage">Awarded Silver for the Education & Learning category in the inaugural Putra Brand Awards 2010.</li>
            </ul>

            <h4>Awarded the ‘University College’ status</h4>
            <ul>
                <li class="heritage">KDU University College is an ISO 9001:2008 and MSC certified institution.</li>
                <li class="heritage">All programs offered are approved by the Ministry of Education and 88.1% of its programmes are MQA-accredited.</li>
            </ul>

            <h4>Recognition</h4>
            <ul>
                <li class="heritage">MQA-Accredited Programs</li>
                <li class="heritage">MSC Status Company</li>
                <li class="heritage">ISO Certified for Quality</li>
                <li class="heritage">China Embassy Accreditation</li>
                <li class="heritage">MOHE & Kementerian Dalam Negeri Permit For Foreign Students Enrolment</li>
                <li class="heritage">Government-Sponsored Students From</li>
                <ul>
                    <li style="list-style-type: disc;">Petronas</li>
                    <li style="list-style-type: disc;">JPA</li>
                    <li style="list-style-type: disc;">MARA</li>
                    <li style="list-style-type: disc;">Sime Darby</li>
                </ul>
            </ul>
        </div>

        <div id="EB" class="tabcontent">
            <h4>2011</h4>
            <h4>The Putra Brand Awards - The People's Choice</h4>
            <ul>
                <li class="heritage">Silver Award</li>
                <li class="heritage">Education & Learning Category</li>
            </ul>

            <h4>2013</h4>
            <ul>
                <li class="heritage">KDU Penang University College was also awarded the Penang MPSP Green Industry Award for the SME Education and Awareness category</li>
            </ul>

            <h4>2015</h4>
            <ul>
                <li class="heritage">Moved to its flagship campus in Utropolis, Glenmarie</li>
                <li class="heritage">CN 50 Students Choice Awards 2015</li>
                <ul>
                    <li class="heritage">Top 10 most popular universities and colleges in Malaysia</li>
                    <li class="heritage">Chosen by students and school leavers via nationwide study</li>
                </ul>
                <li class="heritage">KDU Penang was upgraded to a ‘University College’ status</li>
                <li class="heritage">KDU Penang University College was conferred an all-round 6-star College status by Ministry of Higher Education (MOHE_ MyQuest Audit 2014/2015)</li>
            </ul>
        </div>

        <div id="EA" class="tabcontent">
            <h4>2016</h4>
            <ul>
                <li class="heritage">2016 – 2017 BrandLaureate Most Sustainable Brand Award Education – Private University College Category</li>
            </ul>

            <h4>2017</h4>
            <ul>
                <li class="heritage">The Putra Brand Awards – The People’s Choice</li>
                <ul>
                    <li class="heritage">Bronze Award</li>
                    <li class="heritage">Education & Learning Category</li>
                </ul>
                <li class="heritage">The Edge Malaysia Pioneer Development Award 2017</li>
                <ul>
                    <li class="heritage">An accolade under a category of The Edge Malaysia Property Excellence Awards 2017</li>
                    <li class="heritage">Recognises KDU as a pioneer brand in the private education by a property developer</li>
                </ul>
                <li class="heritage">Shah Alam Low Carbon Building Award 2017</li>
                <ul>
                    <li class="heritage">Recognition by the Shah Alam City Council (MBSA)</li>
                    <li class="heritage">First Runner-up under the category of Commercial and Institution</li>
                </ul>
            </ul>

            <h4>2018</h4>
            <ul>
                <li class="heritage">The Putra Brand Awards – The People’s Choice</li>
                <ul>
                    <li class="heritage">Bronze Award</li>
                    <li class="heritage">Education & Learning Category</li>
                </ul>
                <li class="heritage">KDU entered into a strategic partnership with UOW Global Enterprises, a wholly-owned subsidiary of University of Wollongong Australia</li>
            </ul>

            <h4>2019</h4>
            <ul>
                <li class="heritage">KDU is now part of the University of Wollongong Australia Global Network and known as UOW Malaysia KDU</li>
                <li class="heritage">Sin Chew Education Awards (SCBEA)</li>
                <ul>
                    <li class="heritage">Education Business Sustainability</li>
                </ul>
            </ul>
        </div>

        <div class="clearfix"></div>
    </section>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 5000); // Change image every 5 seconds
        }

        //HoverTab Function
        function openDesc(evt, divID) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
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

</body>

</html>