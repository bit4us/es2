<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <!--begin::Logo-->
  <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="../../app/dashboard/">
      <img alt="Logo" src="../../assets/media/logos/ES-red-yellow-long.svg" class="h-25px app-sidebar-logo-default" />
      <img alt="Logo" src="../../assets/media/logos/ES-red-yellow.svg" class="h-20px app-sidebar-logo-minimize" />
    </a>
    <!--end::Logo image-->
    <!--begin::Sidebar toggle-->
    <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
      <span class="svg-icon svg-icon-2 rotate-180">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
          <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Sidebar toggle-->
  </div>
  <!--end::Logo-->
  <!--begin::sidebar menu-->
  <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
      <!--begin::Menu-->
      <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Home</span>
            <span class="menu-arrow"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link active" href="../../app/dashboard/">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Dashboard</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/pathways/">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Pathways</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/meetings/">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Meetings</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/edit-Landing">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Edit Club Landing page</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
        <!--begin:Menu item-->
        <div class="menu-item pt-5">
          <!--begin:Menu content-->
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" />
                  <path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Social</span>
            <span class="menu-arrow"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/social/feed/">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Feeds</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/social/activity">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Activty</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/social/followers">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Followers</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/social/settings">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Settings</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <!--begin:Menu link-->
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/graphs/gra010.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021Z" fill="currentColor" />
                  <path opacity="0.3" d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z" fill="currentColor" />
                  <path opacity="0.3" d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">FAQ</span>
            <span class="menu-arrow"></span>
          </span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion menu-active-bg">
            <!--begin:Menu item-->
            <div class="menu-item">
              <!--begin:Menu link-->
              <a class="menu-link" href="../../app/faq/">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">FAQ</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
  </div>
  <!--end::sidebar menu-->
  <!--begin::Footer-->
  <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
      <span class="btn-label">Docs & Components</span>
      <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
      <span class="svg-icon btn-icon svg-icon-2 m-0">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
          <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
          <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
          <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
          <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </a>
  </div>
  <!--end::Footer-->
</div>
<!--end::Sidebar-->
</div>