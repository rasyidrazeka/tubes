<?php
    include "myconnection.php";

    $kode = $_GET["kode"];

    $query = "DELETE FROM produk WHERE kode='$kode'";

    if(mysqli_query($connect, $query)){
        header('Location:CRUDadmin.php');
    }
    else{
        mysqli_error($connect);
    }

    mysqli_close();
?>