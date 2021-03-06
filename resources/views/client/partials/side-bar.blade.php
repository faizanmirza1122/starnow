 <!-- begin:: Aside -->
 <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
 <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

     <!-- begin:: Aside Menu -->
     <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
         <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
             <ul class="kt-menu__nav ">
                 <li class="kt-menu__section ">
                     <h4 class="kt-menu__section-text">Modules</h4>
                     <i class="kt-menu__section-icon flaticon-more-v2"></i>
                 </li>
                 <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon bi bi-person-lines-fill"></i><span class="kt-menu__link-text">Jobs </span><i class="kt-menu__ver-arrow bi bi-chevron-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Jobs</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route("client-jobs.index") }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Jobs</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route("client-jobs.create") }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create New</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon bi bi-person-lines-fill"></i><span class="kt-menu__link-text">Packages plans </span><i class="kt-menu__ver-arrow bi bi-chevron-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Package Plans</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route("client.package-plans.index") }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All plans</span></a></li>
                        </ul>
                    </div>
                </li>

                 <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon bi bi-person-lines-fill"></i><span class="kt-menu__link-text">Calendars</span></a></li>
             </ul>
         </div>
     </div>

     <!-- end:: Aside Menu -->
 </div>

 <!-- end:: Aside -->