<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
  <!--begin::Menu wrapper-->
  <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
  <?php 
            if($user->getAvatar()!==NULL){
              ?>
                <img alt="Logo" src="<?=$user->getAvatar()?>"  alt="user"/>
              <?php
            }
            else{
          ?>
          <img src="../../assets/media/avatars/blank.png" alt="user" />
          <?php } ?>
  </div>
  <!--begin::User account menu-->
  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
      <div class="menu-content d-flex align-items-center px-3">
        <!--begin::Avatar-->
        <div class="symbol symbol-50px me-5">
          <?php 
            if($user->getAvatar()!==NULL){
              ?>
                <img alt="Logo" src="<?=$user->getAvatar()?>" />
              <?php
            }
            else{
          ?>
          <img alt="Logo" src="../../assets/media/avatars/blank.png" />
          <?php } ?>
        </div>
        <!--end::Avatar-->
        <!--begin::Username-->
        <div class="d-flex flex-column">
          <div class="fw-bold d-flex align-items-center fs-5"><?=$user->getFirstName()?>, <?=$user->getLastName()?>
          <!-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>-->
          </div> 
          <a href="mailto:<?=$user->getEmail()?>" class="fw-semibold text-muted text-hover-primary fs-7"><?=$user->getEmail()?></a>
        </div>
        <!--end::Username-->
      </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
      <a href="../../app/profile/" class="menu-link px-5">My Profile</a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
      <a href="#" class="menu-link px-5">
        <span class="menu-title position-relative">Language
        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
        <img class="w-15px h-15px rounded-1 ms-2" src="../../assets/media/flags/united-states.svg" alt="" /></span></span>
      </a>
      <!--begin::Menu sub-->
      <div class="menu-sub menu-sub-dropdown w-175px py-4">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
          <span class="symbol symbol-20px me-4">
            <img class="rounded-1" src="../../assets/media/flags/united-states.svg" alt="" />
          </span>English</a>
        </div>
        <!--end::Menu item-->
      </div>
      <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
      <a href="../../app/account/settings.php" class="menu-link px-5">Account Settings</a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
      <a href="../../app/login/" class="menu-link px-5">Sign Out</a>
    </div>
    <!--end::Menu item-->
  </div>
  <!--end::User account menu-->
  <!--end::Menu wrapper-->
</div>