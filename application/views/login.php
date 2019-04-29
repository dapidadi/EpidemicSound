 <!DOCTYPE html>
<html>
<head>
  <title>Epidemic Sound</title>
</head>
<body style="background-image: url(assets/img/bg.jpg); background-size: cover;" >
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->


 <div style="text-align: center; padding-top: 50px;">
  <img src="assets/img/logo.png">
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
      <p>Don't have an account yet?</p> <a style="color: skyblue" href="<?= site_url('login/signup') ?>"> Sign up here</a>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

</body>
</html>