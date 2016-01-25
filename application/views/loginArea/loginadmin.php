<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	 <link rel="stylesheet" href="<?=site_url('asset/bootstrap/css/bootstrap.min.css')?>">
	 <link rel="stylesheet" href="<?=site_url('asset/bootstrap/css/animate.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=site_url('asset/dist/css/AdminLTE.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=site_url('asset/plugins/iCheck/square/blue.css')?>">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
      <div class="login-logo wow bounceIn">
        <a href=""><b>Login</b> Administrator</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?=site_url('')?>" method="post">
          <div class="form-group has-feedback wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback wow fadeInRight">
            <input type="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat wow fadeInUp">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?=site_url('asset/plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=site_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
     <script src="<?=site_url('asset/bootstrap/js/wow.js')?>"></script>
    <!-- iCheck -->
    <script src="<?=site_url('asset/plugins/iCheck/icheck.min.js')?>"></script>
    
    <script>
      new WOW().init();

      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>