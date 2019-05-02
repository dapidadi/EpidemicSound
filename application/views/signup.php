<!DOCTYPE html>
<html>
<head>
    <title>Epidemic Sound - Sign Up</title>
</head>
<?php
  $bg = array('background_standalone4.jpg','background_standalone5.jpg','background_standalone6.jpg','background_standalone7.jpg','background_standalone8.jpg');

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<body style="background: url(assets/img/<?php echo $selectedBg; ?>) no-repeat; background-size: cover; width: 100%; height: 100%;">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
        <div class="background_signup">
        <div class="block_signup">
            <div class="span12 center-text" style="text-align: center;">
                <a href="<?php echo site_url('welcome/index') ?>">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>">
                </a>
            </div>
            <div class="form_signup">
                <h4 class="headingform_signup">
                    Sign Up
                </h4>
                <div class="blockform_signup">
                    <form  method="post" class="form_horizontal" action="<?php echo site_url().'/Signupp/register';?>">
                        <input class="full-width-input" name="nama" type="text" id="nama" placeholder="First Name" autocomplete="off">
                        <input class="full-width-input" name="username" type="text" id="username" placeholder="Username" autocomplete="off">
                        <input class="full-width-input" name="company" type="text" id="inputCompanyName" placeholder="Company Name" autocomplete="off">
                        <br><br>
                        <select class="business-type-select" name="business_type" id="selectBusiness">
                            <option value="">Type of Business *</option>
                            <option value="Broadcaster">Broadcaster</option>
                            <option value="Radio Channel">Radio Channel</option>
                            <option value="Media Company">Media Company</option>
                            <option value="Production Company">Production Company</option>
                            <option value="Post Production Company">Post Production Company</option>
                            <option value="Freelancer">Freelancer</option>
                            <option value="Advertising/Communication Agency">Advertising/Communication Agency</option>
                            <option value="Game Developer">Game Developer</option>
                            <option value="Corporate Company">Corporate Company</option>
                            <option value="Online Platform (e.g YouTube or similar)">Online Platform (e.g YouTube or similar)</option>
                            <option value="Charity Organisation">Charity Organisation</option>
                            <option value="School">School</option>
                            <option value="Restaurant/Hotel/Store">Restaurant/Hotel/Store</option>
                            <option value="Other">Other</option>
                        </select>
                        <br><br>
                        <input name="email" type="text" id="email" class="error-ok full-width-input" placeholder="Email *" autocomplete="off">
                        <input class="full-width-input" name="password" type="password" id="password" placeholder="Password *" autocomplete="off">
                        <div id="license-text-div"></div>
                        <label class="checkbox" for="endUserAgreementSigned">
                            <input id="generalTnCPrivacyPolicySigned" class="agreement-checkbox" type="checkbox" name="generalTnCPrivacyPolicySigned" value="agreed">
                            I have read and agree to the <a class="blue-text" href="/policy/privacy-policy" target="_blank" alt="Link to Privacy Policy" title="Link to Privacy Policy">Privacy Policy</a> &amp; <a class="blue-text" href="/policy/general-terms-and-conditions" target="_blank" alt="Link to General Terms and Conditions" title="Link to End User Agreement">General Terms</a>
                        </label>
                        <label class="checkbox" for="ageAssuranceSigned">
                            <input id="ageAssuranceSigned" class="agreement-checkbox" type="checkbox" name="ageAssuranceSigned" value="agreed">
                             I hereby certify that I am over the age of 16 years old.
                        </label>
                        <button id="signup-btn" name="btnsubmit" class="blue-button" type="submit"><span class="loading-indicator">Sign Up</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>