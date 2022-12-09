<?php

if(!isset($_SESSION['id'])){
    echo "session id not set";
    header('Location: ../login');
    exit;
}

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');
require_once('../../assets/php_includes/classes/Log.class.php');


$user = new USER;
$user->setID($_SESSION['id']);
$user->getUser();
?>

<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '320px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<?php
								$userLog = new Log();
								$userLog->setUserID($user->getID());
								$userLogs = $userLog->getUserLogsLast30Days();
								if(count($userLogs) >0){
									// foreach($userLogs as $mylog){
									// 	echo '- '.$mylog['operation'];
									// }
									foreach($userLogs as $logLine){
										?>
										<!--begin::Timeline item-->
										<div class="timeline-item">
											<!--begin::Timeline line-->
											<div class="timeline-line w-40px"></div>
											<!--end::Timeline line-->
											<!--begin::Timeline icon-->
											<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
												<div class="symbol-label bg-light">
													<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
													<!-- <span class="svg-icon svg-icon-2 svg-icon-gray-500">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
															<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
														</svg>
													</span> -->
													<!--end::Svg Icon-->
													<span class="fa fa-<?=$logLine['labelicon']?>"></span>
												</div>
											</div>
											<!--end::Timeline icon-->
											<!--begin::Timeline content-->
											<div class="timeline-content mb-10 mt-n1">
												<!--begin::Timeline heading-->
												<div class="pe-3 mb-5">
													<!--begin::Title-->
													<div class="fs-5 fw-semibold mb-2 badge badge-light-<?=$logLine['labeltype']?>"><?= $logLine['operation'] ?></div>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="d-flex align-items-center mt-1 fs-6">
														<!--begin::Info-->
														<div class="text-muted me-2 fs-7">Time: <?=$logLine['timestamp']?></div>
														<!--end::Info-->
													</div>
													<!--end::Description-->
												</div>
												<!--end::Timeline heading-->
												
											</div>
											<!--end::Timeline content-->
										</div>
										<!--end::Timeline item-->
									<?php
									}
								}
							?>
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<!-- <div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities -->
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<!--<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span> -->
					<!--end::Svg Icon--></a>
				<!-- </div> -->
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->