<title>Dashboard | Register Surat</title>

<!--begin::Subheader-->
<div class="subheader min-h-lg-175px pt-5 pb-3 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard Admin</h2>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard Register Surat</a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <!--end::Item-->
                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container"> 
        <div class="row">
            <div class="col-xl-4">
                <!--begin::Tiles Widget 12-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="index8">
                            <img width="40" src="<?php echo base_url('assets/img/spdp_register.png')?>">
                        </div>
                        <div class="text-dark font-weight-bolder font-size-h2 mt-3"><?= $tot_surat?></div>
                        <a href="<?php echo site_url('registrasi/register_surat')?>" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total Surat Masuk</a>
                    </div>
                </div>
                <!--end::Tiles Widget 12-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tiles Widget 11-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="index7">
                            <img width="40" src="<?php echo base_url('assets/img/spdp_proses.png')?>">
                        </div>
                        <div class="text-dark font-weight-bolder font-size-h2 mt-3" ><?= $tot_undangan?></div>
                        <a href="<?php echo site_url('registrasi/undangan_surat')?>" class="text-muted font-weight-bold font-size-lg mt-1">Total Undangan</a>
                    </div>
                </div>
                <!--end::Tiles Widget 11-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tiles Widget 12-->
                <div class="card card-custom gutter-b" >
                    <div class="card-body">
                        <div class="index6">
                            <img width="40" src="<?php echo base_url('assets/img/skor.png')?>">
                        </div>
                        <div class="text-dark font-weight-bolder font-size-h2 mt-3"><?= $tot_tembusan?></div>
                        <a href="<?php echo site_url('registrasi/tembusan_sekda')?>" class="text-muted text-hover-success font-weight-bold font-size-lg mt-1">Tembusan Sekda</a>
                    </div>
                </div>
                <!--end::Tiles Widget 12-->
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-xl-1">
            </div> -->
            <div class="col">
                <!--begin::Tiles Widget 12-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="index8">
                            <img width="40" src="<?php echo base_url('assets/img/responden.png')?>">
                        </div>
                        <div class="text-dark font-weight-bolder font-size-h2 mt-3" ><?= $tot_user?></div>
                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">User</a>
                    </div>
                </div>
                <!--end::Tiles Widget 12-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->