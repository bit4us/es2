<?php
require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');

session_start();


if(isset($_SESSION['id'])){
	$user = new USER;
	$user->setID($_SESSION['id']);
	$user->getUser();
	$user->signoutUser();
}

$_SESSION = array();
session_destroy();


require_once('./googleOauth2Config.php');
$message= "";


?>
<?php include_once '../../assets/php_includes/modules/__header__global.php'; ?>

<?php include_once '../../assets/php_includes/modules/__header__end.php'; ?>

<?php include_once '../../assets/php_includes/modules/__body__begin_sign-in-up.php';?>

		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('../../assets/media/auth/bg4.jpg'); } [data-theme="dark"] body { background-image: url('../../assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="/home/" class="mb-7">
							<img alt="Logo" src="assets/media/logos/ES-red-yellow.svg" style="height:120px"/>
							<h1>Easy Speak 2.0</h1>
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">The new Toastmasters club management experience</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/app/login/authenticate.php" action="/app/login/authenticate.php" method="post">
								<!--begin::Heading-->
								<?php
									if(isset($_GET['r'])){			
										switch($_GET['r']){
											case "pc": $message = 'Password confirmation error';
											break;
											case "rf": $message = 'Registration failed';
											break;
											case "ge": $message = 'You have registered with Google Login. Use Log in with Google';
											break;
											case "ae": $message = 'Email already registered';
											break;
											case "mp": $message = 'All fields are mandatory. One or more fields was not filled';
											break;
										}
									}
									if(isset($_GET['l'])){
										switch ($_GET['l']) {
											case "a": $message = 'email and / or password incorrect';
											break;
											case "ge": $message = 'You have registered with Google. <br/> Use <b>Log in with Google</b>';
											break;
											case "ep": $message = 'email and / or password not set';
											break;
										}
									}
									if($message ==! ""){
								?>
									<div style="text-align: center; color: red;"><?=$message?></div>
								<?php
									}
								?>
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-3 mb-9">
									<!--begin::Col-->
									<div class="col-md-12">
										<!--begin::Google link=-->
										<a href="<?= $login_url ?>" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="../../assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div>
								<!--end::Separator-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Password" name="password" id="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
								<a href="/app/login/sign-up.php" class="link-primary">Sign up</a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<!--<script>var hostUrl = "../../assets/";</script>-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="../../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<!--<script src="../../assets/js/custom/authentication/sign-in/general.js"></script>-->
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>