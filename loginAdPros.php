<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0){
        session_start();
        $_SESSION["username"] = $username;
        header("Location:CRUDadmin.php");
    }else{
        header("Location:loginAdmin.php?error=gagal");
    }
?>