<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Apartment Visitor Management System in CodeIgniter">
    <meta name="author" content="Anuj Kumar">
    <meta name="keywords" content="PHPGurukul | Programming Blog">

    <!-- Title Page-->
    <title>AVMS CodeIgniter | Login</title>

    <!-- Fontfaces CSS-->
<?php echo link_tag('assets/css/font-face.css'); ?>
<?php echo link_tag('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>
<?php echo link_tag('assets/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>
<?php echo link_tag('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>
<!-- Bootstrap CSS-->
<?php echo link_tag('assets/vendor/bootstrap-4.1/bootstrap.min.css'); ?>
<!-- Vendor CSS-->
<?php echo link_tag('assets/vendor/animsition/animsition.min.css'); ?>
<?php echo link_tag('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>
<?php echo link_tag('assets/vendor/wow/animate.css'); ?>
<?php echo link_tag('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>
<?php echo link_tag('assets/vendor/select2/select2.min.css'); ?>
<?php echo link_tag('assets/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>
<!-- Main CSS-->
<?php echo link_tag('assets/css/theme.css'); ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php echo site_url('Login'); ?>" style="font-size:24px;">
                               Apartment Visitor Management System (AVMS)
                               Developed in CodeIgniter
                            </a>
                        </div>


                        <div class="login-form">
 <?php echo form_open('Login');?>

<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>
<?php } ?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
<?php } ?>

                                <div class="form-group">
                                    <label>User Name</label>
<?php echo form_input(['name'=>'username','id'=>'username','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('username')]);?>
<?php echo form_error('username',"<div style='color:red'>","</div>");?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="<?php echo site_url('PasswordRecovery'); ?>" style="color:blue">Forgotten Password?</a>
                                    </label>
                                </div>
 <?php echo form_submit(['name'=>'login','value'=>'Login','class'=>'au-btn au-btn--block au-btn--green m-b-20']); ?>
<?php echo form_close(); ?>

                                <div class="social-login-content">
                                    
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/vendor/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js'); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/vendor/slick/slick.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/animsition/animsition.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.counterup.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/circle-progress/circle-progress.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartjs/Chart.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>">
    </script>
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>
<!-- end document-->