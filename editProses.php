<?php
    include "myconnection.php";

    $kode = $_GET["kode"];
    $merk = $_GET["merk"];
    $jenis = $_GET["jenis"];
    $ukuran = $_GET["ukuran"];
    $warna = $_GET["warna"];
    $harga = $_GET["harga"];
    $stok = $_GET["stok"];

    $query = "UPDATE produk SET merk='$merk', jenis='$jenis', ukuran='$ukuran', warna='$warna', harga='$harga', stok='$stok' WHERE kode='$kode'";

    if(mysqli_query($connect, $query)){
        header('Location:CRUDadmin.php');
    }

    mysqli_close($connect);
?>