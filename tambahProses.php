<?php
    include "myconnection.php";

    $kode = $_POST["kode"];
    $merk = $_POST["merk"];
    $jenis = $_POST["jenis"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $foto = $_FILES['foto']['name'];
    $tempSementara = $_FILES['foto']['tmp_name'];

    $lokasiUpload = "produk/";

    move_uploaded_file($tempSementara, $lokasiUpload . $foto);

    $query = "INSERT INTO produk(kode, merk, jenis, ukuran, warna, harga, stok, foto)
        VALUE('$kode', '$merk', '$jenis', '$ukuran', '$warna', '$harga', '$stok', '$foto')";
    
    if(mysqli_query($connect, $query)){
        header('Location:CRUDadmin.php');
    }
    else{
        mysqli_error($connect);
    }

    mysqli_close($connect);
?>