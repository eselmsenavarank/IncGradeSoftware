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
    $_SESSION['profEmail'] = $email;

    $sql="SELECT * FROM users WHERE email='$email' AND pwd='$password'";
    $result=$conn->query($sql);
    if($result->num_rows==1){
        header("Location: professor-page-your-students.php");
    }else{
        header("Location: professor-page-your-students.php?error=true");
    }

    $conn->close();

?>