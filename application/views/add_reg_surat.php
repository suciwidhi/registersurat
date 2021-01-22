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
												<h3 class="card-title">Register Surat</h3>
												<div class="card-toolbar">	
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" enctype="multipart/form-data" action="<?php echo base_url('registrasi/tambahRegister') ?>" method="post">
												<div class="card-body"> 
													<div class="form-group">
														<label>Tanggal Masuk</label>
														<input type="date" class="form-control form-control-lg" placeholder="" name="tambah_register_tanggal_masuk" required>
													</div>
													<div class="form-group">
														<label>Asal Surat</label>
														<input type="text" class="form-control" placeholder="Asal Surat" name="tambah_register_asal_surat" required>
													</div>
													<div class="form-group">
														<label>Nomor Surat</label>
														<input type="text" class="form-control" placeholder="Nomor Surat" name="tambah_register_no_surat" required>
													</div>
													<div class="form-group">
														<label>Tanggal Surat</label>
														<input type="date" class="form-control" placeholder="Tanggal Surat" name="tambah_register_tanggal_surat" required>
													</div>
													<div class="form-group">
														<label for="exampleSelectd">Jenis Surat</label>
														<select class="form-control" id="exampleSelectd" name="tambah_register_jenis_surat" required>
															<option>Surat Masuk</option>
															<option>Surat Bupati</option>
															<option>Surat Wakil</option>
															<option>Surat Sekda</option>
														</select>
													</div>
													<div class="form-group">
														<label>Perihal</label>
														<input type="text" class="form-control form-control-sm" placeholder="Perihal" name="tambah_register_perihal" required>
													</div>
													<div class="form-group">
														<label>Kode</label>
														<input type="text" class="form-control form-control-sm" placeholder="Kode" name="tambah_register_kode" required>
													</div>
													<div class="form-group">
														<label>Keterangan</label>
														<input type="text" class="form-control form-control-sm" placeholder="Keterangan" name="tambah_register_keterangan" required>
													</div>
													<div class="form-group">
														<label>Upload Dokumen</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile" name="tambah_register_upload" required>
															<label class="custom-file-label" for="customFile">Pilih File</label>
														</div>
													</div>
													
													<div class="card-footer">
													<button type="submit" class="btn btn-success mr-2">Submit</button>
		
													<!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
													<a href="<?php echo site_url('registrasi/register_surat') ?>" class="btn btn-default">Cancel</a>
												</div>
												
                                                </div>
                                            </form>
</div>