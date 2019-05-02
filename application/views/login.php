 <!DOCTYPE html>
<html>
<head>
  <title>Epidemic Sound</title>
</head>
<body style="background-image: url(<?php echo base_url('assets/img/bg.jpg') ?>); background-size: cover;" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->


 <div style="text-align: center; padding-top: 50px;">
<<<<<<< HEAD
  <img src="<?php echo base_url('assets/img/logo.png') ?>">
=======
>>>>>>> 20065f18707060add7dce18807d7b2c17aa74dc1
</div>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div >
      <br>
      <h3 style="color: skyblue">Log in</h3>
    </div>

    <!-- Login Form -->
    <form action="<?= site_url('login') ?>" method="post">
        <div style="text-align : center;">
            <?php if(isset($_SESSION)) {
                echo $this->session->flashdata('flash_data');
            } ?>
        </div>
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
<<<<<<< HEAD
      <p>Don't have an account yet?</p> <a style="color: skyblue" href="<?= site_url('signupp') ?>"> Sign up here</a>
=======
>>>>>>> 20065f18707060add7dce18807d7b2c17aa74dc1
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

</body>
</html>