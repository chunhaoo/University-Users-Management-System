<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "uowkdu");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $id = $_POST['staffID'];
    $password = $_POST['password'];

    //login validation
    $query = "Select staffID, password from staff where staffID = '$id' AND password = '$password';";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    
    if ($num==1){
        $_SESSION['staffID'] = $id;
        header('Location:home.php');
    }
    else{
        header('Location:login.php?login=false');
    }
 ?>