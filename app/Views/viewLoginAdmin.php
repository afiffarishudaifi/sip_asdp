<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Klinik Maryam</title>

  <link rel="shortcut icon" href="<?= base_url() ?>/docs/adminlte/dist/img/AdminLTELogo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/docs/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/docs/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/docs/adminlte/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url() ?>/docs/adminlte/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('LandingPage'); ?>" class="h1"><b>SIP ASDP</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login untuk dapat akses ke sistem</p>
      <?= $session->get('nama_login'); ?>

      <form action="<?= base_url('Login/loginSistemAdmin'); ?>" method="POST" autocomplete="off">
        <div class="input-group mb-3">
          <input type="email" required=""  name="email" id="email" class="form-control" placeholder="Email" autofocus="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" required="" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="social-auth-links text-center mt-2 mb-3">
          <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-sign-in-alt"></i> Sign In</button>
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        Lupa password ? <a href="<?= base_url('Login/resetPasien') ?>"> klik </a>untuk reset password
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/docs/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/docs/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/docs/adminlte/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url() ?>/docs/adminlte/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      if ('<?= $session->getFlashdata('msg'); ?>' != '') {
          toastr.error('<?= $session->getFlashdata('msg'); ?>')
      }
  });
</script>
</body>
</html>
