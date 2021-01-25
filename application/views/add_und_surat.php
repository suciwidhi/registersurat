<title>Undangan</title>
<style>
.wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state="current"] .wizard-icon i {
    color: #ffa800 !important;
}
</style>

<!--end::Subheader-->
<!--begin::Entry-->
<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Undangan</h3>
												<div class="card-toolbar">
													
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" enctype="multipart/form-data" action="<?php echo base_url('registrasi/tambahUndangan') ?>" method="post">
												<div class="card-body .col-lg-8">
													<div class="form-group">
														<label>Asal Surat</label>
														<input type="text" name="tambah_undangan_dari" class="form-control" placeholder="Asal Surat" required>
													</div>
													<div class="form-group">
														<label>Nomor Surat</label>
														<input type="text" name="tambah_undangan_no_surat" class="form-control" placeholder="Nomor Surat" required>
													</div>
													<div class="form-group">
														<label>Tanggal Surat</label>
														<input type="date" name="tambah_undangan_tanggal_surat" class="form-control" placeholder="Tanggal Surat"required>
													</div>
													<div class="form-group">
														<label for="exampleSelectd">Jenis Undangan</label>
														<select class="form-control" name="tambah_register_jenis_surat" required>
															<option value="" selected>select..</option>
   														<?php foreach($cats as $cat) : ?>
    													<option value="<?php echo $cat->jenisundangan_jenis_undangan;?>"> <?php echo $cat->jenisundangan_jenis_undangan; ?></option>
														<?php endforeach; ?>
														</select>
														<!-- <select class="form-control" name="tambahundangan_jenis_undangan" id="exampleSelectd">
															<option>Undangan Sekda</option>
															<option>Undangan Wakil</option>
															<option>Undangan Bupati</option> -->
														
														</select>
													</div>
													<div class="form-group">
														<label>Uraian</label>
														<input type="text" name="undangan_uraian" class="form-control form-control-sm" placeholder="Perihal" required>
													</div>
													<div class="form-group">
														<label>Keterangan</label>
														<input type="text" name="undangan_keterangan" class="form-control form-control-sm" placeholder="Keterangan" required>
													</div>
													<div class="form-group">
														<label>Upload Dokumen</label>
														<div></div>
														<div class="custom-file">
															<input type="file" name="undangan_upload_dokumen" class="custom-file-input" id="customFile" required>
															<label class="custom-file-label" for="customFile">Pilih File</label>
														</div>
													</div>
													
													<div class="card-footer">
													<button type="submit" class="btn btn-success mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
												
                                                </div>
                                            </form>
</div>