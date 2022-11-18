<?php

session_start();

$_SESSION = array();
session_destroy();


// require_once('./googleOauth2Config.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="../../assets/global/plugins/fontawesome/css/all.css" rel="stylesheet">
	<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- <link href="../../assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/> -->
	<!-- <link href="../../assets/global/plugins/select2/select2-metronic.css" rel="stylesheet" type="text/css"/> -->
	<link href="../../assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	<link href="../../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link id="style_color" href="../../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>

</head>
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<a href="../../home" style="text-decoration: none;">
			<h2>Easy<font color="red">Speak</font> 2.0</h2>
		</a>
	</div>
	<!-- BEGIN LOGIN FORM -->
    <div class="content">
		<?php
			if($_GET['r'] || $_GET['l']){
			$message = "";
			switch($_GET['r']){
				case "pc": $message = 'Password confirmation error';
				break;
				case "rf": $message = 'Registration failed';
				break;
				case "ae": $message = 'Email already registered';
				break;
				case "mp": $message = 'All fields are mandatory. One or more fields was not filled';
				break;
			}
			switch ($_GET['l']) {
				case "a": $message = 'email and / or password incorrect';
				break;
				case "ep": $message = 'email and / or password not set';
				break;
			}
		?>
			<div style="text-align: center; color: red;"><?=$message?></div>
		<?php
			}
		?>
		<!-- BEGIN LOGIN FORM -->
		<form class="login-form" action="./authenticate.php" method="post" autocomplete="off" id="login">
			<h3 class="form-title">Login</h3>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="E-mail" name="email"  id="email"/>
				</div>
			</div>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password"/>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-success" style="width: 100%">
					Login
				</button>
				<br><br>
				<a href="javascript:;" id="register-btn" class="btn btn-danger" style="width: 100%">Register</a>
				<br><br>
				<a href="javascript:;" id="forget-password" style="text-align: center;">Forgotten password?</a>
				<!-- <hr> -->
				<!-- <button onclick="window.location = '<?= $login_url ?>' " type="button" class="btn" style="background: white; color: black; width: 100%">
					<i class="fa-brands fa-google"></i> Log in with Google
				</button> -->				
			</div>
		</form>
		<!-- END LOGIN FORM -->
		<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="include/functions/login/resetPassword.php" method="post" id="preset">
		<h3>Forgotten password?</h3>
		
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="E-mail" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn green pull-right">
			Send <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form" action="./register.php" method="post" id="reg">
		<h3>Register</h3>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Given Name</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Given name" name="fname" id="firstName"/>
			</div>
		</div>
			<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Last Name</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Last name" name="lname" id="lastName"/>
			</div>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">E-mail</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="E-mail" name="email" id="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password" name="rpassword" id="rpassword"/>
				</div>
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" id="register-submit-btn" class="btn green pull-right">
				Register <i class="m-icon-swapright m-icon-white"></i>
			</button>
			<!-- <hr> -->
			<!-- <button onclick="window.location = '<?= $login_url ?>' " type="button" class="btn" style="background: white; color: black; width: 100%">
					<i class="fa-brands fa-google"></i> Sign in with Google
				</button> -->
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
	</div>
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2022 &copy; <font color="white">Easy</font><font color="red">Speak</font> 2.0 | Toastmasters Management
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="../../assets/global/plugins/respond.min.js"></script>
	<script src="../../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  //Metronic.init(); // init metronic core components
		  //Layout.init(); // init current layout
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>