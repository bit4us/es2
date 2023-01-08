<?php 
require_once('../../assets/php_includes/classes/Meeting.class.php');

$meeting = new Meeting();
// $meeting->getMeetingById(1);
$nextLastMeeting = "";

try{
  if($meeting->getNextMeeting()){
    $nextLastMeeting = "Next Meeting";

  } else if ($meeting->getLastMeeting()){
    $nextLastMeeting = "Last Meeting";
  }
  else {
    $nextLastMeeting = "No meeting found";
  }
}
catch(Exception $e){
  $nextLastMeeting = "Error: ". $e.getMessage();
}

if($nextLastMeeting !== "No meeting found" && substr($nextLastMeeting, 0, 7)  !==  "Error "){
?>

<!--begin::Card widget 18-->
<div class="card card-flush h-xl-100">
  <!--begin::Body-->
  <div class="card-body py-9">
    <!--begin::Row-->
    <div class="row gx-9 h-100">
      <!--begin::Col-->
      <div class="col-sm-6 mb-10 mb-sm-0">
        <!--begin::Image-->
        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('<?=$meeting->getImage()?>')"></div>
        <!--end::Image-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-sm-6">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column h-100">
          <!--begin::Header-->
          <div class="mb-7">
            <!--begin::Headin-->
            <div class="d-flex flex-stack mb-6">
              <!--begin::Title-->
              <div class="flex-shrink-0 me-5">
                <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1"><?=$nextLastMeeting?></span>
                <span class="text-gray-800 fs-1 fw-bold"><?=$meeting->getTitle()?></span>
              </div>
              <!--end::Title-->
              <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">Ready</span>
            </div>
            <!--end::Heading-->
            <!--begin::Items-->
            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
              <!--begin::Item-->
              <div class="d-flex align-items-center me-5 me-xl-13">
                <!--begin::Symbol-->
                <div class="symbol symbol-30px symbol-circle me-3">
                  <img src="../../assets/media/avatars/300-3.jpg" class="" alt="" />
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="m-0">
                  <span class="fw-semibold text-gray-400 d-block fs-8">Speaker 1</span>
                  <a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
              <!--begin::Item-->
              <div class="d-flex align-items-center me-5 me-xl-13">
                <!--begin::Symbol-->
                <div class="symbol symbol-30px symbol-circle me-3">
                  <img src="../../assets/media/avatars/300-2.jpg" class="" alt="" />
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="m-0">
                  <span class="fw-semibold text-gray-400 d-block fs-8">Speaker 2</span>
                  <a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Melody Macy</a>
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
            </div>
            <!--end::Items-->
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="mb-6">
            <!--begin::Text-->
            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block"><?=$meeting->getDescription()?> </span>
            <!--end::Text-->
            <!--begin::Stats-->
            <div class="d-flex">
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                <!--begin::Date-->
                <span class="fs-6 text-gray-700 fw-bold"><?=date("F j, Y", strtotime($meeting->getDate()))?></span>
                <!--end::Date-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Meeting Date</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                <!--begin::Number-->
                <span class="fs-6 text-gray-700 fw-bold">
                <span class="ms-n1"><?=date("H:i", strtotime($meeting->getDate()))?></span></span>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Time</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
            </div>
            <div class="d-flex">
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                <!--begin::Number-->
                <span class="fs-6 text-gray-700 fw-bold">
                <span class="ms-n1"><a href="<?=$meeting->getLocationMap()?>" target="_blank"><?=$meeting->getLocation()?></a></span></span>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Location</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
            </div>
            <!--end::Stats-->
          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="d-flex flex-stack mt-auto bd-highlight">
            <!--begin::Users group-->
            <div class="symbol-group symbol-hover flex-nowrap">
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                <img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                <img alt="Pic" src="../../assets/media/avatars/300-3.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden - Club President">
                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon - Vice President Education">
                <img alt="Pic" src="../../assets/media/avatars/300-11.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter - Secretary">
                <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
              </div>
              <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+16</span>
              </a>
            </div>
            <!--end::Users group-->
            <!--begin::Actions-->
            <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">View Meeting
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
            <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
                <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
                <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon--></a>
            <!--end::Actions-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
  <!--end::Body-->
</div>
<!--end::Card widget 18-->


<?php } else { ?>


<!--begin::Card widget 18-->
<div class="card card-flush h-xl-100">
  <!--begin::Body-->
  <div class="card-body py-9">
    <!--begin::Row-->
    <div class="row gx-9 h-100">
      <!--begin::Col-->
      <div class="col-sm-6 mb-10 mb-sm-0">
        <!--begin::Image-->
        <!-- <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('')"></div> -->
        <!--end::Image-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-sm-6">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column h-100">
          <!--begin::Header-->
          <div class="mb-7">
            <!--begin::Headin-->
            <div class="d-flex flex-stack mb-6">
              <!--begin::Title-->
              <div class="flex-shrink-0 me-5">
                <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1"><?=$nextLastMeeting?></span>
                <span class="text-gray-800 fs-1 fw-bold">No Title</span>
              </div>
              <!--end::Title-->
              <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">Ready</span>
            </div>
            <!--end::Heading-->
            <!--begin::Items-->
            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
              <!--begin::Item-->
              <div class="d-flex align-items-center me-5 me-xl-13">
                <!--begin::Symbol-->
                <div class="symbol symbol-30px symbol-circle me-3">
                  <img src="../../assets/media/avatars/300-3.jpg" class="" alt="" />
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="m-0">
                  <span class="fw-semibold text-gray-400 d-block fs-8">Speaker 1</span>
                  <a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
              <!--begin::Item-->
              <div class="d-flex align-items-center me-5 me-xl-13">
                <!--begin::Symbol-->
                <div class="symbol symbol-30px symbol-circle me-3">
                  <img src="../../assets/media/avatars/300-2.jpg" class="" alt="" />
                </div>
                <!--end::Symbol-->
                <!--begin::Info-->
                <div class="m-0">
                  <span class="fw-semibold text-gray-400 d-block fs-8">Speaker 2</span>
                  <a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Melody Macy</a>
                </div>
                <!--end::Info-->
              </div>
              <!--end::Item-->
            </div>
            <!--end::Items-->
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="mb-6">
            <!--begin::Text-->
            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">It is said that life can be represented with a circle, and during our life we're just traveling the circle to the full. This meeting's topic represents our interpretation of the 9th degree of our lives. </span>
            <!--end::Text-->
            <!--begin::Stats-->
            <div class="d-flex">
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                <!--begin::Date-->
                <span class="fs-6 text-gray-700 fw-bold">No Date</span>
                <!--end::Date-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Meeting Date</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                <!--begin::Number-->
                <span class="fs-6 text-gray-700 fw-bold">
                <span class="ms-n1">No Time</span></span>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Time</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
            </div>
            <div class="d-flex">
              <!--begin::Stat-->
              <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                <!--begin::Number-->
                <span class="fs-6 text-gray-700 fw-bold">
                <span class="ms-n1">No Location</span></span>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold text-gray-400">Location</div>
                <!--end::Label-->
              </div>
              <!--end::Stat-->
            </div>
            <!--end::Stats-->
          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="d-flex flex-stack mt-auto bd-highlight">
            <!--begin::Users group-->
            <div class="symbol-group symbol-hover flex-nowrap">
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                <img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                <img alt="Pic" src="../../assets/media/avatars/300-3.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden - Club President">
                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon - Vice President Education">
                <img alt="Pic" src="../../assets/media/avatars/300-11.jpg" />
              </div>
              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter - Secretary">
                <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
              </div>
              <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+16</span>
              </a>
            </div>
            <!--end::Users group-->
            <!--begin::Actions-->
            <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">View Meeting
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
            <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
                <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
                <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon--></a>
            <!--end::Actions-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
  <!--end::Body-->
</div>
<!--end::Card widget 18-->
<?php }?>