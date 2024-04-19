<?php
error_reporting(0);

    session_start();

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="inc_db";

    $conn=new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['email'] = $email;

    $sql="SELECT * FROM studentsCredential WHERE email='$email' AND pswrd='$password'";
    $result=$conn->query($sql);
    if($result->num_rows==1){
        header("Location: student-page.php");
    }else{
        header("Location: login-page.php?error=true");
    }

    $conn->close();

?>