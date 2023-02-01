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
  <nav class="navbar navbar-expand-lg navbar-white bg-white">
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

      <div>
        <img src="foto/tri_logo.jpg" class="idx">
      </div>
      <div>
        <img src="foto/keranjang.png" class="krj">
        <img src="foto/account.png" class="krj">
      </div>
    </div>
  </nav>

  <!--Carousel nih do-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="foto/cantik.jpg" class="w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="foto/cantik1.jpg" class="w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="foto/cantik2.jpg" class="w-100" alt="...">
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</body>
</html>