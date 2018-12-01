<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php $this->load->view('admin/includes/success_error'); ?>
  </div>
</div>
<div class="login-box">
  <div class="login-logo"> <a href="#"><b>Easy Trip</b> Admin</b></a> </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php echo form_open(base_url('admin/login')); ?>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Email" name="email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span> <?php echo form_error('email'); ?> </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span> <?php echo form_error('password'); ?> </div>
    <div class="row">
      <!--        <div class="col-xs-8">
                              <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remeber"> Remember Me
                                </label>
                              </div>
                            </div>-->
      <!-- /.col -->
      <div class="col-xs-12">
        <button type="submit" class="btn bg-black btn-block btn-flat">Sign In</button>
        <button type="submit" class="btn bg-black btn-block btn-flat">Forget Password</button>
      </div>
      <!-- /.col -->
    </div>
    <?php echo form_close(); ?>
    <!--    <div class="social-auth-links text-center">
                      <p>- OR -</p>
                      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                    </div>-->
    <!-- /.social-auth-links -->
    <!--    <a href="#">I forgot my password</a><br>
                    <a href="register.html" class="text-center">Register a new membership</a>-->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
</body>
</html>
