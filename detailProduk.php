<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <title>Produk | FR Shoes Store ID</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <div class="sticky-top">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand  justify-content-let" href="index.php">
                    <img src="logotoko.png" width="60" height="30" class="d-inline-block align-top" alt="">&nbsp;FR Shoes Store ID
                </a>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="profil.php" style="color:black">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CRUDdetail.php" style="color:black">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pilihLogin.php" style="color:black">Login</a>
                    </li>
                </ul>
                <form class="form-inline" action="prosesCari.php" method="get">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Search" name="carinama">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </nav>
        </div>

        <div class="isiTtg">
            <h1 style="font-family: 'Yellowtail', cursive; text-align: center;">Detail Produk</h1><br>
        </div>
        <table>
            <?php
                include "myconnection.php";
                $kode = $_GET['kode'];
                $query = "SELECT * FROM produk WHERE kode='$kode'";
                $result = mysqli_query($connect, $query);

                while($row=mysqli_fetch_array($result)){ 
            ?>
            <tr>
                <td><img src="produk/<?php echo $row["foto"];?>" width=200 height=200></td>
            </tr>
            <tr>
                <td>Kode Sepatu : </td>
                <td><?php echo $row["kode"];?></td>
            </tr>
            <tr>
                <td>Merk Sepatu : </td>
                <td><?php echo $row["merk"];?></td>
            </tr>
            <tr>
                <td>Jenis Sepatu : </td>
                <td><?php echo $row["jenis"];?></td>
            </tr>
            <tr>
                <td>Ukuran Sepatu : </td>
                <td><?php echo $row["ukuran"];?></td>
            </tr>
            <tr>
                <td>Warna Sepatu : </td>
                <td><?php echo $row["warna"];?></td>
            </tr>
            <tr>
                <td>Harga Sepatu : </td>
                <td><?php echo $row["harga"];?></td>
            </tr>
            <tr>
                <td>Sisa Stok : </td>
                <td><?php echo $row["stok"];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br>

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="profil.php">Profil Toko</a></li>
                                <li><a href="CRUDdetail.php">Detail Produk</a></li>
                                <li><a href="pilihLogin.php">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="profil.php">Company</a></li>
                                <li><a href="ourTeam.php">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>FR Shoes Store ID</h3>
                            <p>Selamat Datang di " FR Shoes Store ID ". FR Shoes Store ID adalah salah satu toko brand Fashion yang memiliki kualitas terbaik dan design yang menarik untuk dipakai sehari-hari.</p>
                        </div>
                    </div>
                    <p class="copyright">FR Shoes Store ID ?? 2022</p>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>