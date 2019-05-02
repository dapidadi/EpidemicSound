<!DOCTYPE html>
<html>
<head>
    <title>Epidemic Sound</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
<body>
  <style>
    .dot{
      height: 25px;
  width: 25px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
    }

    .warnanavbar{
      background-color: #d3d3d3;
    }

    
    .foto{
        width: 250px;
        height: 250px;
        border: 3px solid transparent;
        border-radius: 2px;
        padding: 5px;
    }
    .foto:hover{
        width: 250px;
        height: 250px;
        border: 3px solid #ddd;
        border-radius: 2px;
        padding: 5px;
    }

  </style>
<!-- Navigation Bar -->

<nav class="navbar fixed-top navbar-light warnanavbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home') ?>">
          <img src="<?php echo base_url('assets/img/logored.png') ?>">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ">
        <li>
          <a class="nav-link" href="<?php echo site_url('welcome/browse') ?>">Browse
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('welcome/album') ?>">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('sfx2') ?>">SFX</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Latest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('welcome/myaccount') ?>">My Account</a>
            <a class="dropdown-item" href="#">My Music</a>
            <a class="dropdown-item" href="<?php echo site_url('welcome/logout') ?>">Log Out</a>
          </div>
      </ul>
    </div>
  </div>
</nav>

<!-- END OF Navigation Bar -->

<!-- daftar album -->

<div class="container">
  <h3 style="padding-top: 100px">Album</h3>
  <div class="row">
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="<?php echo site_url('Welcome/detailalbum') ?>">TAPE MACHINES - SYMPHONY HEARTBEAT</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    <figure class="figure">
      <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      <figcaption class="figure-caption text-center"><a style="color: #373737" href="#">Judul Lagu</a></figcaption>
    </figure>
    
  </div>
</div>

<br>
<div class="row-fluid">
  <div class="pagination justify-content-center">
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item">
    <a class="page-link" href="#" arial-label="next">
      <span arial-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
  </li>
</div>
</div>

<!-- END OF daftar album -->





<!-- FOOTER -->

<section style="background-color: black">
  <br>
  <div class="container-fluid" style="color: white; text-align: left;">
    <div class="row">
    <div class="col">
    <ul style="list-style: none;">
      <li><img src="assets/img/logo.png"></li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>Browse</li>
      <li>Album</li>
      <li>Latest Track</li>
      <li>SFX</li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>Newsletter</li>
      <li>Careers</li>
      <li>Press</li>
      <li>Contact</li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>In-Store Music</li>
      <li>Pricing</li>
      <li>Blog</li>
      <li>Composers</li>
      <li>Supports</li>
    </ul>
    </div>
    </div>
  </div>
</section>


<section style="background-color: black">
  <br>
  <div class="container-fluid" style="color: white;">
    <div class="row">
      <div class="col">
        <ul style="list-style: none;">
          logo
          logo 
          logo
        </ul>
      </div>
      <div class="col">
        <ul>
          Copyright &copy Epidemic Sound 2019<br>
          <a href="#">Privact Policy</a>
          <a href="#">General Terms</a>
          <a href="#">Cookie Policy</a>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- == JS FILE == -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</head>
</html>