<?php
    session_start();
?>
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
                        <a class="nav-link active" href="CRUDadmin.php" style="color:black">HOME CRUD</a>
                    </li>
                </ul>
                <a href="tambahProduk.php">
                    <button type="button" class="btn btn-secondary">Tambah Produk</button>
                </a>
                <?php
                    if(isset($_SESSION["username"])){
                        echo '<a href="logout.php"><button type="button" class="btn btn-secondary">Logout</button></a>';
                    }
                ?>
            </nav>
        </div>

        <div class="isiTtg">
            <h1 style="font-family: 'Yellowtail', cursive; text-align: center;">CRUD Produk</h1><br>
        </div>
        <table>
            <tr>
                <th>Foto</th>
                <th>Kode</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM produk";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){ 
            ?>
            <tr>
                <td><img src="produk/<?php echo $row["foto"];?>" width=200 height=200></td>
                <td><?php echo $row["kode"];?></td>
                <td><?php echo $row["merk"];?></td>
                <td><?php echo $row["jenis"];?></td>
                <td><?php echo $row["ukuran"];?></td>
                <td><?php echo $row["warna"];?></td>
                <td><?php echo $row["harga"];?></td>
                <td><?php echo $row["stok"];?></td>
                <td>
                    <a href="editProduk.php?kode=<?php echo $row["kode"];?>">
                        <button type="button" class="btn btn-secondary">Edit</button>
                    </a>
                    <a href="deleteProduk.php?kode=<?php echo $row["kode"];?>">
                        <button type="button" class="btn btn-secondary">Delete</button>
                    </a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 result";
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
                    <p class="copyright">FR Shoes Store ID © 2022</p>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>