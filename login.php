<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  
    <title>Login</title>

</head>
<body>
    <div class="container">
        <br><!--BR -->
        <br>
        <div class="row">
            <br>
            <br>
            <!--PHP-->
            <?php
                 session_start();
                            
                if (!empty($_SESSION['login'])) {
                    //header("Location:index.php");
                }                  
                include "koneksi.php";
                if (isset($_POST['login'])) {
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                                
                    $sql_cek=mysqli_query($koneksi,"SELECT * FROM user WHERE email='".$email."' AND password='".$password."' AND aktif='1'") or die(mysqli_error($koneksi));
                    $r_cek=mysqli_fetch_array($sql_cek);
                    $jml_data=mysqli_num_rows($sql_cek);
                    if ($jml_data>0) {
                                    
                        $_SESSION['login']=md5($r_cek['email']);
                        $_SESSION['email']=$r_cek['email'];
                        $_SESSION['nama_depan']=$r_cek['nama_depan'];
                        header("Location:index.php");
                    }else{
                                    
                        echo '<div class="alert alert-warning">
                        Username dan Password anda salah!
                        </div>';
                    }
                }

            ?>
                        <!--PHP-->
            <center>
                <div class="img"> <img src="tri.sapphire.jpeg.jpg" alt="logo-login"></div>
            </center>
            
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
                <br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST">
                            <h3>Login</h3>
                            <br>
                            <p>
                                <label for="email" >Email</label>
                                <br>
                                <input type="text" id="email" name="email">
                                <hr size="3">
                            </p>
                            <p>
                                <label for="password">Password</label>
                                <br>
                                <input type="text" id="password" name="password">
                                <hr size="3">
                            </p>
                            <div class="p">
                                <p><a href="#"> Forgot Password?</a></p>
                                <p> New Customer? <a href="register.php">Create your account</a></p>
                            </div><!--p -->

                            <div class="button">
                                <button type="submit" name="login" class="btn btn-dark">Login</button>

                            </div>


                        </form>

                        

                    </div><!-- panel-body-->
                </div><!-- panel panel-default -->

            </div><!--col-md-6 -->

        </div><!--row -->

    </div><!--container -->
</body>
</html>