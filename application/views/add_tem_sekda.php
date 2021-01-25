<title>Tembusan Sekda</title>
<style>
.wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state="current"] .wizard-icon i {
    color: #ffa800 !important;
}
</style>

<!--end::Subheader-->
<!--begin::Entry-->

<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Tembusan Sekda</h3>
												<div class="card-toolbar">
													
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" enctype="multipart/form-data" action="<?php echo base_url('registrasi/tambahTembusan') ?>" method="post">
												<div class="card-body .col-lg-8">
													<div class="form-group">
														<label>Asal Surat</label>
														<input type="text" name="tambah_tembusan_asal_surat" class="form-control" placeholder="Asal Surat" required>
													</div>
													<div class="form-group">
														<label>Tanggal</label>
														<input type="date" name="tambah_tembusan_tanggal_surat" class="form-control" placeholder="Nomor Surat"required>
													</div>
													<div class="form-group">
														<label>No Surat</label>
														<input type="text" name="tambah_tembusan_no_surat" class="form-control" placeholder="No Surat" required>
													</div>
													<div class="form-group">
														<label>Keterangan</label>
														<input type="text" name="tambah_tembusan_keterangan" class="form-control" placeholder="Keterangan" required>
													</div>
												
													
													<div class="card-footer">
													<button type="submit" class="btn btn-success mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
												
                                                </div>
                                            </form>
</div>