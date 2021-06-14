<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "uowkdu");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $id = $_POST['adminID'];
    $password = $_POST['password'];

    //login validation
    $query = "Select adminID, password from admin where adminID = '$id' AND password = '$password';";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    
    if ($num==1){
        $_SESSION['adminID'] = $id;
        header('Location:home.php');
    }
    else{
        header('Location:admin.php?login=false');
    }
 ?>