<?php
   session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'uowkdu') or die('Connection lost.');
    $select = "select * from staff where name = 'Chin Chun Hao';";
    $exec = mysqli_query($conn, $select);
?>
<!DOCTYPE html>
<html>
    <title>Chin Chun Hao</title>
    <head>
        <link rel="icon" href="kdu.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <style>
            html{
                scroll-behavior: smooth;
            }
            div.float{
                text-align: left;
                -webkit-flex: 3;
                -ms-flex: 3;
                flex: 3;
                padding: 10px
            }
            body{
                background: fixed;
                background-color: white;
                margin: 0%;
            }
            header{
                font-size: 40px;
                font-family: 'Times New Roman', Times, serif;
                color: #333333;
                padding: 40px;
                background: #cccccc;
            }
            h2.staff{
                font-family: 'Times New Roman', Times, serif;
                font-size: 25px;
                color: #CC0000;
                font-weight: lighter;
            }
            h3{
                font-family: 'Montserrat', sans-serif;
                font-size: 15px;
                font-weight: lighter;
            }
            section.staff{
                display: -webkit-flex;
                display: flex;
            }
            nav.staff{
                float: left;
                width: auto;
                background: #eeeeee;
                padding: 5px;
            }

            nav ul.staff{
                list-style: none;
                padding: 0;
                line-height: 2;
            }
            a.staff{
                font-size: 20px;
                color: #0c2340;
                text-decoration: none;
                text-align: left;
            }
            a.staff:hover{
                color: #CC0000;
            }
            p{
                font-family: 'Montserrat', sans-serif;
                font-size: 14px;
                line-height: 2;

            }
            ul.staff{
                list-style-type: square;
                font-family: 'Montserrat', sans-serif;
                line-height: 2;
                margin-left: 20px;
            }
            .collapsible{
                cursor: pointer;
                background-color: #f5f8fc;
                font-family: 'Times New Roman', Times, serif;
                text-align: left;
                font-size: 25px;
                color: #CC0000;
                font-weight: lighter;
                border: none;
                outline: none;
                width: 100%;
                padding: 20px;
            }
            .active, .collapsible:hover{
                background-color: #ebf3ff;
            }
            .content{
                padding: 0px 18px;
                display: none;
                overflow: hidden;
            }
            @media(max-width: 600px){
            nav, div{
                width: 100%;
                height: auto;
            }
        }
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
    <header>Academic Staff</header>
        <section class="staff">
            <nav class="staff">
                <ul class="staff">
                    <li><a class="staff" href="#pd">Personal Details</a></li>
                    <li><a class="staff" href="#bio">Biography</a></li>
                    <li><a class="staff" href="#aq">Academic Qualification</a></li>
                    <li><a class="staff" href="#prof">Professional</a></li>
                    <li><a class="staff" href="#ad">Administrative Duties</a></li>
                    <li><a class="staff" href="#ae">Areas of Expertise</a></li>
                    <li><a class="staff" href="#pub">Publication</a></li>
                    <li><a class="staff" href="#ar">Areas of Research</a></li>
                    <li><a class="staff" href="#cp">Consultation Project/Consultancy</a></li>
                    <li><a class="staff" href="#aw">Awards and Recognition</a></li>
                    <li><a class="staff" href="#ps">Presentations</a></li>
                    <li><a class="staff" href="#el">Expert Linkages</a></li>
                    <li><a class="staff" href="#tc">Expert/Technical Contributions</a></li>
                    <li><a class="staff" href="#ev">Evaluation Activities</a></li>
                    <li><a class="staff" href="#cs">Contribute to Society</a></li>
                    <li><a class="staff" href="#ipr">Intellectual Property Rights</a></li>
                    <li><a class="staff" href="#sp">Supervision</a></li>
                    <li><a class="staff" href="#tch">Teaching</a></li>
                </ul>
            </nav>
            
            <div class="float">
                <h2 class="staff" id="pd">Personal Details</h2>
                <img style="display: block; margin: auto;" src="img/hao.jpg" height="360" width="auto">

                <?php
                    if($exec->num_rows > 0){
                        while($row = $exec->fetch_assoc()){
                            echo "<h3><strong>Name: </strong>".$row['name']."</h3>
                            <h3><strong>Age: </strong>".$row['age']."</h3>                
                            <h3><strong>Gender: </strong>".$row['gender']."</h3>
                            <h3><strong>Email: </strong>".$row['email']."</h3></a>
            
                            <br>
            
                            <h2 class='staff' id='bio'>Biography</h2>
                            <p>".$row['biography']."</p><br>
            
                            <button type='button' class='collapsible' id='aq'>Academic Qualification</button>
                            <p class='content'>".$row['aq']."</p><br>
            
                            <button type='button' class='collapsible' id='prof'>Professional</button>
                            <p class='content'>
                                ".$row['prof']."
                            </p><br>
            
                            <button type='button' class='collapsible' id='ad'>Administrative Duties</button>
                            <p class='content'>
                                ".$row['ad']."
                            </p><br>
            
                            <button type='button' class='collapsible' id='ae'>Areas of Expertise</button>
                            <p class='content'>
                                ".$row['ae']."
                            </p><br>
            
                            <button type='button' class='collapsible' id='pub'>Publication</button>
                            <p class='content'>
                                ".$row['pub']."
                            </p>
                            <br>
            
                            <button type='button' class='collapsible' id='ar'>Areas of Research</button>
                            <p class='content'>".$row['ar']."</p><br>
            
                            <button type='button' class='collapsible' id='cp'>Consultation Project / Consultancy</button>
                            <p class='content'>
                                ".$row['cp']."
                            </p><br>
            
                            <button type='button' class='collapsible' id='aw'>Awards and Recognition</button>
                            <p class='content'>".$row['awards']."</p>
            
                            <button type='button' class='collapsible' id='ps'>Presentations</button>
                            <p class='content'>".$row['pr']."</p>
            
                            <button type='button' class='collapsible' id='el'>Expert Linkages</button>
                            <p class='content'>".$row['el']."</p>
            
                            <button type='button' class='collapsible' id='tc'>Expert / Technical Contributions</button>
                            <p class='content'>".$row['etc']."</p>
            
                            <button type='button' class='collapsible' id='ev'>Evaluation Activities</button>
                            <p class='content'>".$row['ea']."</p>
            
                            <button type='button' class='collapsible' id='cs'>Contribute to Society</button>
                            <p class='content'>".$row['cs']."</p>
            
                            <button type='button' class='collapsible' id='ipr'>Intellectual Property Rights</button>
                            <p class='content'>".$row['ipr']."</p><br>
            
                            <button type='button' class='collapsible' id='sp'>Supervision</button>
                                <p class = 'content'>".$row['sp']."</p>
                            <br>
            
                            <button type='button' class='collapsible' id='tch'>Teaching</button>
                            <p class='content'>".$row['tch']."</p>";
                        }
                    }
                ?>

            </div>
        </section>

        <script>
            var coll = document.getElementsByClassName('collapsible');
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
            </script>
    </body>
</html>