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
      height: 300px;
      width: 300px;
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

<!-- CONTENT -->

<section>
  <div class="container-fluid" style="padding-top: 100px">
    <div class="row">
      <div class="md-form active-cyan mb-3 col-sm-3">
        <input class="form-control" type="text" placeholder="Search for playlists">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="row">
      <div class="md-form active-cyan mb-3 col-md-3">
        <input class="form-control" type="text" placeholder="+ New project">
      </div>
      <div class="col-sm-3">
        <a href="http://localhost/epidemic" style="color: #D7464B">Back</a>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div class="row" style="padding-bottom: 80px">
       <div class="panel-group col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <a class="text-dark" data-toggle="collapse" href="#collapse1">Private project</a>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">My Favourites</div>
              <div class="panel-footer">
                <div class="md-form active-cyan mb-3">
                  <input class="form-control" type="text" placeholder="+ New playlist">
                </div>
              </div>
            </div>
            </div>
          </div>
      <div class="col-sm-3">
        <img class="foto" src="<?php echo base_url('assets/img/bg.jpg') ?>">
      </div>
      <div class="col-sm-4">
        <h2 class="new-page-header" style="color: #D7464B">TAPE MACHINES - SYMPHONY HEARTBEAT</h2>
        <p>Categories: Electronica & Dance, Pop, Vocals</p>
        <p>New Single From Tape Machines</p>
        <p>This time it comes with hopeful vibes and powerful vocals by NeiNei. A true pop-ballad with all the ingredients that will put that extra feel to your project.</p>
      </div>
    </div>
    <div class="row" style="padding-bottom: 80px">
      <div class="col-md-3"></div>
      <div class="col-md-8">
        <table class="table">
          <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Title</th>
            <th scope="col">Genre</th>
            <th scope="col">Category</th>
            <th scope="col">BPM</th>
            <th scope="col">Energy</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row"><span class="dot"></span></th>
            <td style="color: #D7464B">Symphony Heartbeat</td>
            <td>2010s Pop</td>
            <td>Epic</td>
            <td>78</td>
            <td>Medium</td>
          </tr>
          <tr>
            <th scope="row"><span class="dot"></span></th>
            <td style="color: #D7464B">Symphony Heartbeat (Instrumental)</td>
            <td>2010s Pop</td>
            <td>Epic</td>
            <td>78</td>
            <td>Medium</td>
          </tr>
          </tbody>
    </table>
  </div>
</div>
</section>  

<!-- END OF CONTENT -->

<!-- FOOTER -->

<section style="background-color: black">
  <br>
  <div class="container-fluid" style="color: white; text-align: left;">
    <div class="row">
    <div class="col">
    <ul style="list-style: none;">
      <li><img src="<?php echo base_url('assets/img/logored.png') ?>"></li>
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