<?php
    include "myconnection.php";

    $kode = $_GET["kode"];
    $jmlbrg = $_GET["jmlbrg"];
    $stok = $_GET["stok"];
    $sisa = $stok-$jmlbrg;

    $query = "UPDATE produk SET stok='$sisa' WHERE kode='$kode'";

    if(mysqli_query($connect, $query)){
        header('Location:homeUser.php');
    }

    mysqli_close($connect);
?>