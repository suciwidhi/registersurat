<title>Register Surat</title>
<style>
.wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state="current"] .wizard-icon i {
    color: #ffa800 !important;
}
</style>

<!--end::Subheader-->
<!--begin::Entry-->
<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Jenis Undangan</h3>
												<div class="card-toolbar">	
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" enctype="multipart/form-data" action="<?php echo base_url('registrasi/tambahJenisUndangan') ?>" method="post">
												<div class="card-body"> 
													<div class="form-group">
														<label>Jenis Undangan Surat</label>
														<input type="text" class="form-control form-control-lg" placeholder="" name="tambah_jenisundangan_jenis_undangan" required>
													</div>
													
												
													
													<div class="card-footer">
													<button type="submit" class="btn btn-success mr-2">Submit</button>
		
													<!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
													<a href="<?php echo site_url('registrasi/jenis_undangan') ?>" class="btn btn-default">Cancel</a>
												</div>
												
                                                </div>
                                            </form>
</div>