<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="index.html">
                    <img alt="Logo" src="<?php echo base_url('assets/img/icon.png')?>" class="logo-default max-h-40px" />
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu Wrapper-->
            <?php $this->load->view('layouts/partials/menu') ?>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                        <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?php echo $this->session->userdata('user_username');?></span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30"><?php echo substr($this->session->userdata('user_username'),0,1);?></span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                            <span class="symbol-label text-black font-size-h5 font-weight-bold bg-white-o-30"><?php echo substr($this->session->userdata('user_username'),0,1);?></span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $this->session->userdata('user_username');?></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Nav-->
                    <div class="navi navi-spacer-x-0 pt-5">
                        <!--begin::Item-->
                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer px-8 py-5">
                            <a href="<?php echo base_url('logout');?>" class="btn btn-light-primary font-weight-bold">Sign Out</a>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>