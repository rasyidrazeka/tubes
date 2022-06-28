<?php
    include "myconnection.php";
    if(isset($_GET['nama']) AND isset($_GET['email']) AND isset($_GET['nohp']) AND isset($_GET['username']) AND isset($_GET['password'])){
        $nama=$_GET['nama'];
        $email=$_GET['email'];
        $nohp=$_GET['nohp'];
        $namauser=$_GET['username'];
        $pass=md5($_GET['password']);
        $isiform="&nama=$nama&email=$email&nohp=$nohp&username=$namauser&password=$pass";
    }

    if(empty($nama)){
        header("Location:daftarUser.php?error=nama_kosong".$isiform);
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$nama)){
        header("Location:daftarUser.php?error=nama_invalid".$isiform);
    }
    else if(empty($email)){
        header("Location:daftarUser.php?error=email_kosong").$isiform;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:daftarUser.php?error=email_invalid".$isiform);
    }
    else if(empty($nohp)){
        header("Location:daftarUser.php?error=nohp_kosong").$isiform;
    }
    else if(!preg_match("/^[0-9]*$/",$nohp)){
        header("Location:daftarUser.php?error=nohp_invalid".$isiform);
    }
    else if(empty($namauser)){
        header("Location:daftarUser.php?error=username_kosong").$isiform;
    }
    else if(empty($pass)){
        header("Location:daftarUser.php?error=password_kosong").$isiform;
    }
    else{
        $query = "INSERT INTO user(namalengkap, email, nohp, username, password)
        VALUE('$nama', '$email', '$nohp', '$namauser', '$pass')";

        if(mysqli_query($connect, $query)){
            header("Location:daftarBerhasil.php");
        }
        else{
            header("Location:daftarGagal.php");
        }
        mysqli_close($connect);
    }
?>