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
											<form class="form" enctype="multipart/form-data" action="<?php echo base_url('registrasi/tambahUndangan') ?>" method="post">">
												<div class="card-body .col-lg-8">
													<div class="form-group">
														<label>Asal Surat</label>
														<input type="text" name="tambah_undangan_dari" class="form-control" placeholder="Asal Surat">
													</div>
													<div class="form-group">
														<label>Nomor Surat</label>
														<input type="text" name="tambah_undangan_no_surat" class="form-control" placeholder="Nomor Surat">
													</div>
													<div class="form-group">
														<label>Tanggal Surat</label>
														<input type="date" name="tambah_undangan_tanggal" class="form-control" placeholder="">
													</div>
													<div class="form-group">
													<label>Jenis Surat</label>
													<select class="form-control" name='tambah_undangan_jenis_undangan' required>
														<option value="" selected>select..</option>
   														<?php foreach($cats as $cat) : ?>
    													<option value="<?php echo $cat->jenisundangan_jenis_undangan;?>"> <?php echo $cat->jenisundangan_jenis_undangan; ?></option>
   														<?php endforeach; ?>
 														</select>
													</div>
													<div class="form-group">
														<label>Uraian</label>
														<input type="text" name="tambah_undangan_uraian" class="form-control form-control-sm" placeholder="Perihal">
													</div>
													<div class="form-group">
														<label>Keterangan</label>
														<input type="text" name="tambah_undangan_keterangan" class="form-control form-control-sm" placeholder="Kode">
													</div>
													<div class="form-group">
														<label>Upload Dokumen</label>
														<div></div>
														<div class="custom-file">
															<input type="file" name="tambah_undangan_upload_dokumen" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile">Pilih File</label>
														</div>
													</div>
													
													<div class="card-footer">
													<button type="submit" class="btn btn-success mr-2">Submit</button>
													<a href="<?php echo site_url('registrasi/undangan_surat') ?>" class="btn btn-default">Cancel</a>
												</div>
												
                                                </div>
                                            </form>
</div>