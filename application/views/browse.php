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
  
</head>
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



    <div class = "container-fluid" style="text-align:left;">
    <div class="container-fluid">
    <div class="row">
    
    <!-- kiri -->
    <div class="col-sm-2" style="background-color:white;"> 
      <input type="text" style="border-radius: 0px; " placeholder="Search for playlists" name="search">
      <input type="text" style="border-radius: 0px; " placeholder="+ New project" name="add"> 
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="border: 0px;">Private Project</button>
          <ul class="dropdown-menu">
          <li><a href="#">My Favorite</a></li> 
          <input class="form-control" type="text" style="border-radius: 0px; border: 0px; "placeholder="+ New playlists">
          </ul>
          <button type="button" class="btn btn-default" style="border: 0px; ">Archived project</button>
          <p>Read more about our product!</p>
      </div>
    </div>

    <!-- tengah -->
    <div class="col-sm-6;">
     <div class="container" style="width: 100%;">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#Genres">Genres</a></li>
        <li><a data-toggle="tab" href="#Modds">Moods</a></li>
        <li><a data-toggle="tab" href="#Movement">Movement</a></li>
        <li><a data-toggle="tab" href="#Places">Places</a></li>
      </ul>
        <!-- Genres -->
        <div class="tab-content">
        <div id="Genres" class="tab-pane fade in active">
          <a href="#" class="btn btn-info btn-xs" role="button">Acoustic</a>
          <a href="#" class="btn btn-info btn-xs" role="button">Electronica & Dance</a>

          
        </div>

        <!-- Moods -->
        <div id="Modds" class="tab-pane fade">
          <a href="#" class="btn btn-info btn-xs" role="button">Happy</a>
          <a href="#" class="btn btn-info btn-xs" role="button">Relaxing</a>
        </div>

         <!-- Movement -->
         <div id="Movement" class="tab-pane fade">
          <a href="#" class="btn btn-info btn-xs" role="button">Elegant</a>
          <a href="#" class="btn btn-info btn-xs" role="button">Floating</a>
        </div>

        <!-- Places -->
        <div id="Places" class="tab-pane fade">
          <a href="#" class="btn btn-info btn-xs" role="button">Water</a>
          <a href="#" class="btn btn-info btn-xs" role="button">Industry</a>
        </div>
      </div>
    </div>
 
    

    <!-- kanan 
    <div class="col-sm-3" style="background-color:maroon;">
     <div class="container" style="width: 50%;">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#Energy">Energy</a></li>
        <li><a data-toggle="tab" href="#Tempo">Tempo</a></li>
        <li><a data-toggle="tab" href="#Length">Length</a></li>
      </ul>
-->
      <!-- Energy 
      <div id="Energy" class="tab-pane fade in active">
          <a href="#" class="btn btn-info btn-xs" role="button">Low</a>
      </div>
      <div id="Tempo" class="tab-pane fade in active">
          <a href="#" class="btn btn-info btn-xs" role="button">Low</a>
      </div>
      <div id="Length" class="tab-pane fade in active">
          <a href="#" class="btn btn-info btn-xs" role="button">Low</a>
      </div>
    </div>
  </div> 
-->
<!-- FOOTER 

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
-->

<!-- == JS FILE == -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
	

</html>