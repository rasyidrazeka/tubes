<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
            .error {color: #ff0000;}
        </style>
        <title>Daftar | FR Shoes Store ID</title>
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
            </nav>
        </div>

        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">DAFTAR AKUN</h2><br>
                                    <?php
                                        if(isset($_GET['error'])){
                                            $error=$_GET['error'];
                                        }
                                        else{
                                            $error="";
                                        }

                                        $pesan="";
                                        if($error=="nama_kosong"){
                                            $pesan="Nama harus diisi";
                                        }
                                        else if($error=="nama_invalid"){
                                            $pesan="Nama harus diisi huruf dan spasi";
                                        }
                                        else if($error=="email_kosong"){
                                            $pesan="Email harus diisi";
                                        }
                                        else if($error=="email_invalid"){
                                            $pesan="Email tidak sesuai";
                                        }
                                        else if($error=="nohp_kosong"){
                                            $pesan="No Hp harus diisi";
                                        }
                                        else if($error=="nohp_invalid"){
                                            $pesan="No Hp harus diisi angka";
                                        }
                                        else if($error=="username_kosong"){
                                            $pesan="Username harus diisi";
                                        }
                                        else if($error=="password_kosong"){
                                            $pesan="Password harus diisi";
                                        }
                                        
                                        

                                        if(isset($_GET['nama']) AND isset($_GET['email']) AND isset($_GET['nohp']) AND isset($_GET['username']) AND isset($_GET['password'])){
                                            $nama=$_GET['nama'];
                                            $email=$_GET['email'];
                                            $nohp=$_GET['nohp'];
                                            $username=$_GET['username'];
                                            $password=$_GET['password'];
                                        }
                                        else{
                                            $nama="";
                                            $email="";
                                            $nohp="";
                                            $username="";
                                            $password="";
                                        }
                                    ?>
                                    <span class="error"><?php echo $pesan;?></span>
                                    <br>
                                    <p class="text-white-50 mb-5">Silahkan masukkan data diri anda!</p>
                                    <form action="daftarProses.php" method="get">
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">Email</label>
                                            <input type="email" name="email" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">No Hp</label>
                                            <input type="text" name="nohp" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">Username</label>
                                            <input type="text" name="username" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typePasswordX">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg" />
                                        </div>
                                        <br>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Data sudah sesuai dengan data diri saya.</label>
                                        </div>
                                        <br>
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="kirim">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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