<?php

session_start();

if(!isset($_SESSION['id'])){
    // echo "session id not set";
    header('Location: ../login');
    exit;
}

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');

$user = new USER;
$user->setID($_SESSION['id']);
$user->getUser();
?>

<?php include_once '../../assets/php_includes/modules/__header__global.php'; ?>

<?php include_once '../../assets/php_includes/modules/__header__end.php'; ?>

<?php include_once '../../assets/php_includes/modules/__body__begin.php'; ?>

<?php include_once '../../assets/php_includes/modules/__theme__mode__setup.php'; ?>
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<?php include_once '../../assets/php_includes/modules/__sidebar_mobile_toggle.php'; ?>
						<?php include_once '../../assets/php_includes/modules/__mobile_logo.php'; ?>
						<?php include_once '../../assets/php_includes/modules/__navbar.php'; ?>
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
				<?php include_once '../../assets/php_includes/modules/__sidebar.php';?>

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../app/dashboard/" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboard</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<?php include_once '../../assets/php_includes/widgets/__active__pathways.php'; ?>
											<?php include_once '../../assets/php_includes/widgets/__members.php'; ?>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<?php include_once '../../assets/php_includes/widgets/__speech__requests.php'; ?>
											<?php include_once '../../assets/php_includes/widgets/__external__links.php'; ?>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-6">
											<?php include_once '../../assets/php_includes/widgets/__next__meeting.php'; ?>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<div class="col-xl-3">
											<?php include '../../assets/php_includes/widgets/__info__club.php'; ?>
										</div>
										<div class="col-xl-3">
											<?php include '../../assets/php_includes/widgets/__info__area.php'; ?>
										</div>
										<div class="col-xl-3">
											<?php include '../../assets/php_includes/widgets/__info__division.php'; ?>
										</div>
										<div class="col-xl-3">
											<?php include '../../assets/php_includes/widgets/__info__district.php'; ?>
										</div>
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<?php include_once '../../assets/php_includes/modules/__footer.php'; ?>
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<?php include_once '../../assets/php_includes/drawers/__drawers__.php';?>
		<!--begin::Engage modals-->
		<!--end::Engage modals-->
		<?php include_once '../../assets/php_includes/modules/__engage__toolbar.php';?>
		<?php include_once '../../assets/php_includes/modules/__scrolltop__.php';?>
		
		<!--begin::Modals-->
		<?php include_once '../../assets/php_includes/modals/__modals__.php';?>
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "../../assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="../../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<?php include_once 'includes/__page__js.php';?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>