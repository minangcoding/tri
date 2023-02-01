<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <br>
            <br>
            <center>
                <div class="img"> <img src="tri.sapphire.jpeg.jpg" alt="logo-register"></div>
            </center>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel body">
                        <form class="form-horizontal" method="post">
                            <h3>Create a new account</h3>
                            <br>
                            <div class="col-sm-4">
                            <p>
                                <label for="nama_depan" >Nama depan</label>
                                <br>
                                <input type="text" id="nama_depan" name="nama_depan">
                                <hr>
                            </p>
                            </div><!-- col-sm-4 -->
                            <div class="col-sm-8">
                                <label for="nama_belakang" >Nama Belakang</label>
                                <br>
                                <input type="text" id="nama_belakang" name="nama_belakang">
                                <hr>

                            </div><!-- col-8 -->
                            <p>
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email">
                                <hr>
                            </p>
                            <p>
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password">
                                <hr>
                            </p>

                            <p>
                                Already have an account?  <a href="login.php">Login here</a>
                            </p>

                            <div class="button">
                                <button type="submit" name="daftar" class="btn btn-dark">Daftar</button>
                            </div>

                        </form>

                        <!-- PHP-->
                        <?php
                            include "koneksi.php";
                            if (isset($_POST['daftar'])) {
                            //ambil data dari form   
                                $nama_depan=$_POST['nama_depan'];
                                $nama_belakang=$_POST['nama_belakang'];
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                //buat token
                                $token=hash('sha256', md5(date('Y-m-d'))) ;
                                //cek user terdaftar
                                $sql_cek=mysqli_query($koneksi,"SELECT * FROM user WHERE email='".$email."'");
                                $r_cek=mysqli_num_rows($sql_cek);
                                if ($r_cek>0) {
                                    echo '<div class="alert alert-warning">
                                    Email anda sudah pernah terdaftar!
                                    </div>';
                                }else{
                                    //jika data kosong maka insert ke tabel;
                                    //aktif =0 user belum aktif
                                    $insert=mysqli_query($koneksi,"INSERT INTO user(nama_depan,nama_belakang,email,password,token,aktif) VALUES('".$nama_depan."','".$nama_belakang."','".$email."','".$password."','".$token."','0')");
                                    //include kirim email
                                    include("mail.php");

                                    if ($insert) {
                                        echo '<div class="alert alert-success">
                                        Pendaftaran anda berhasil, silahkan cek email anda untuk aktifasi. 
                                        <a href="login.php">Login</a>
                                        </div>';
                                    }

                                }                  
                            }

                        ?>
    
                        <!-- PHP-->

                    </div><!-- panel Body-->

                </div><!--panel panel-default-->
            </div><!--col-md-4 -->
        </div><!--row  -->
    </div><!--Container -->
    
</body>
</html>