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

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $bio = $_POST['biography'];
    $aq = $_POST['aq'];
    $prof = $_POST['prof'];
    $ad = $_POST['ad'];
    $ae = $_POST['ae'];
    $pub = $_POST['pub'];
    $ar = $_POST['ar'];
    $cp = $_POST['cp'];
    $awards = $_POST['awards'];
    $pr = $_POST['pr'];
    $el = $_POST['el'];
    $etc = $_POST['etc'];
    $ea = $_POST['ea'];
    $cs = $_POST['cs'];
    $ipr = $_POST['ipr'];
    $sp = $_POST['sp'];
    $tch = $_POST['tch'];

    $update = "insert into changes values($id, '$name', $age, '$gender', '$email', '$bio', '$aq', '$prof', '$ad', '$ae', '$pub', 
    '$ar', '$cp', '$awards', '$pr', '$el', '$etc', '$ea', '$cs', '$ipr', '$sp', '$tch', 'false');";

    $exec = mysqli_query($conn, $update);
    
    if($exec == TRUE){
        header('Location: editDetails.php?edit=true');
    } else{
        header('Location: editDetails.php?edit=false');
    }
?>

UPDATE staff
INNER JOIN changes ON staff.staffID = changes.staffID
SET staff.name = changes.name, staff.age = changes.age, staff.gender = changes.gender, staff.email = changes.email, 
staff.biography = changes.biography, staff.aq = changes.aq, staff.prof = changes.prof, staff.ad = changes.ad, 
staff.ae = changes.ae, staff.pub = changes.pub, staff.ar = changes.ar, staff.cp = changes.cp, staff.awards = changes.awards, 
staff.pr = changes.pr, staff.el = changes.el, staff.etc = changes.etc, staff.ea = changes.ea, staff.cs = changes.cs, 
staff.ipr = changes.ipr, staff.sp = changes.sp, staff.tch = changes.tch
WHERE changes.staffID = 123;

$update = "insert into changes values( name = '$name', age = $age, gender = '$gender', email = '$email', biography = '$bio',
    aq = '$aq', prof = '$prof', ad = '$ad', ae = '$ae', pub = '$pub', ar = '$ar', cp = '$cp', awards = '$awards', pr = '$pr',
    el = '$el', etc = '$etc', ea = '$ea', cs = '$cs', ipr = '$ipr', sp = '$sp', tch = '$tch', approval = 'false'  
    where staffID = $id; ";