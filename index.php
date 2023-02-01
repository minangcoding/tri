<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="navbar-brand">About us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="navbar-brand">Recycle</a>
        </li>
        <li class="nav-item">
          <a href="#" class="navbar-brand">Shop</a>
        </li>
      </ul><!--nav -->

      <ul class="navbar justify-content-center">
        <li class="nav-item">
          <a href="#" class="navbar-brand">
            <img src="tri_logo.jpg" class="logo">
          </a>
        </li>
      </ul><!--justify-content-center -->

      <ul class="navbar justify-content-end">
        <li class="nav-item">
          <a href="#" class="navbar-brand">
            <img src="keranjang.png" class="logo">
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="navbar-brand">
            <img src="account.png" class="logo">
          </a>
        </li>
      </ul><!--nav justify-content-end -->
    </div><!--container -->
  </nav>
 <!-- carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active">
      </button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1">
      </button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2">
      </button>
    </div><!--carousel-indicators -->

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="cantik.jpg" alt="foto" class="d-block" style="width: 100%;height: 80%;">
      </div><!--carousel-item active -->
      <div class="carousel-item">
        <img src="cantik1.jpg" alt="foto" class="d-block" style="width: 100%;height:80%">
      </div><!--carousel-item active -->
      <div class="carousel-item">
        <img src="cantik2.jpg" alt="foto" class="d-block" style="width: 100%;height:80%">
      </div><!--carousel-item active -->
    </div><!--carousel-inner -->
    
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div><!-- carousel -->
  
</body>
</html>