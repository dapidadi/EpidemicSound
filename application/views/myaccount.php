<!DOCTYPE html>
<html>
<head>
	<title>Epidemic Sound</title>
</head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
<body>

<style>
  .navbar {
    background-color: #dcdcdc;
  }

  .samping {
    font-family: azoSans;
    font-size: 14px;
  }

  .sidebar a.active {
    color: #D7464B;
  }

  .sidebar a {
    color: black;
  }

  .tombol {
    box-sizing: border-box;
    border-radius: 28px;
    background-color: #D7464B;
    color: white;
    font-style: italic;
    font-size: 14px;
    width: 220px;
  }

  hr.style1{
    border-top: 1px solid #8c8b8b;
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



<!-- BEGIN OF CONTENT -->
<section>
	<div class="container" style="padding-top: 80px">
     <div class="row">
		  <div class="col-md-3">
        <h3>My Account</h3>  
        <br>
        <div class="nav nav-tabs-fixed-left bg-light">
          <ul class="navbar-nav sidebar">
          <li class="active"><a data-toggle="tab" href="#prof">Profile</a></li>
          <li><a data-toggle="tab" href="#sub">Subscriptions</a></li>
          <li><a data-toggle="tab" href="#lic">Licenses and Receipts</a></li>
          <li><a data-toggle="tab" href="#set">Settings</a></li>
          </ul>
        </div>
      </div>

		  <div class="col-md-8" style="padding-left: 100px;">
      <br>
      <br>

        <div class="tab-content">
          <div id="prof" class="tab-pane fade">
            <h5 >Profile</h5>
            <hr class="style1">
            <h5>Change Password</h5> 
            <form action="<?php echo site_url('/Signupp/update')?>" method="post">
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Current password" name="password" id="c_pass" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="New password" name="newpass" id="n_pass" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Confirm new password" name="newpasss" id="con_pass" required>
              </div>
              <button type="submit" class="btn btn-default tombol">Change password</button>
            </form> 
          </div>

          <div id="sub" class="tab-pane fade">
            <h5>Subscriptions</h5>
            <hr class="style1">
            <h5>You are currently not subscribed to any plan.</h5>
          </div>

          <div id="lic" class="tab-pane fade">
            <h5>Licenses and Receipts</h5>  
            <hr class="style1">
            <h5>Subscription Receipts</h5>
            <h6>Here you'll find receipts for all payment charges made for your subscription.</h6>
            <table class="table" style="color: gray;font-size: 12px;">
              <thead>
              <th>Subscription</th>
              <th>Subscription ID</th>
              <th>Start Date</th>
              <th>Status</th>
              </thead>
              <tbody></tbody>
            </table>
            <h5>Single Track Licensing</h5>
            <h6>Every single track license you purchase results in a license document and receipt that you'll find listed below.</h6>
            <table class="table" style="color: gray;font-size: 12px;">
              <thead>
              <th>Name & Description</th>
              <th>Completion Date</th>
              <th>Amount</th>
              <th>Payment Method</th>
              </thead>
              <tbody></tbody>
            </table>
          </div>

          <div id="set" class="tab-pane fade">
            <h5>Settings</h5>  
            <hr class="style1">
            <h6>Format to download tracks in</h6>
            <form>
              <input type="radio" id="mp3"><label>.wav</label>
              <input type="radio" id="mp3"><label>.mp3</label>
              <br>
              <button type="submit" class="btn btn-default tombol">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>	







<!-- == JS FILE == -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>