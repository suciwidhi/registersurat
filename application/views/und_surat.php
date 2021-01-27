<title>Undangan</title>
<style>
.wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state="current"] .wizard-icon i {
    color: #ffa800 !important;
}
</style>

<!--end::Subheader-->
<!--begin::Entry-->
<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">List Undangan
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="<?php echo site_url('Registrasi/add_undangan_surat')?>" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="9" cy="15" r="6"></circle>
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Add Data</a>
											<!--end::Button-->
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
										<!--begin: Datatable-->
                                        <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style=""><table class="datatable-table" style="display: block;">
                                        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                                        <thead class="datatable-head">
                                        <tr class="datatable-row" style="left: 0px;">
                                        <th class="datatable-cell datatable-toggle-detail">
                                        <span></span>
										<th class="pr-0">No Urut</th>
                                        <th>Asal Undangan</th>
                                        <th>No Undangan</th>
                                        <th>Tgl Undangan</th>
                                        <th>Jenis Undangan</th>
                                        <th>Uraian</th>
                                        <th>Keterangan</th>
										<th>Upload Dokumen</th>
										<th class="pr-0 text-center">action</th>
                                        
									</tr>
                                        </thead>
                                       
                                        </table>
                                        </div>
                                    </div>
                                    </div>
									</div>
									</div>
									<!--end::Body-->
								</div>

<!-- Modal Edit-->
<div id="editModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
 
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Edit Data</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="undangan_no_urut">No Urut</label>
                    <input type="text" name="id" class="form-control id"></input>
                </div>
                <div class="form-group">
                    <label for="undangan_dari">Dari</label>
                    <input type="text" name="dari" class="form-control dari"></input>
                </div>
                <div class="form-group">
                    <label for="undangan_no_surat">No Undangan</label>
                    <input type="text" name="noSurat" class="form-control noSurat"></input>
                </div>
                <div class="form-group">
                    <label for="undangan_tanggal">Tanggal</label>
                    <input type="date" name="tanggalUndangan" class="form-control tanggalUndangan"></input>
                </div>
                <div class="form-group">
                    <label for="undangan_jenis_undangan">Jenis Undangan</label>
					<select class="form-control jenis" name="jenis">
                        <?php foreach ($register_surat as $val) { ?>
                        <option value="<?php echo $val->jenisreg_jenis_surat ?>"><?php echo $val->jenisreg_jenis_surat ?></option>
                        <?php } ?>
                    </select>
                <div class="form-group">
                    <label for="undangan_uraian">Uraian</label>
                    <input type="text" name="uraian" class="form-control uraian"></input>
                </div>
                <div class="form-group">
                    <label for="undangan_keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control keterangan"></input>
                </div>
				<div class="form-group">
                    <label for="undangan_upload_dokumen">Upload Dokumen</label>
                    <input type="file" name="uploadDokumen" class="form-control uploadDokumen"></input>
                </div>
            </form>
            <div class="modal-footer">
           <button type="button" class="btn btn-success" id="btnEdit">Update</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
<script type="text/javascript">

var KTDatatableRemoteAjaxDemo = function() {
	// Private functions

	// basic demo
	var demo = function() {

		var datatable = $('#kt_datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: '<?php echo base_url()."/registrasi/ambildata3" ?>',
						// sample custom headers
						// headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
						map: function(raw) {
							// sample data mapping
							var dataSet = raw;
							if (typeof raw.data !== 'undefined') {
								dataSet = raw.data;
							}
							return dataSet;
						},
					},
				},
				pageSize: 10,
				serverPaging: true,
				// serverFiltering: true,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: false,
				footer: false,
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},

			// columns definition
			columns: [{
				field: 'undangan_no_urut',
				title: 'No'
			},{
				field: 'undangan_dari',
				title: 'Dari',
			},{
				field: 'undangan_no_surat',
				title: 'No Undangan',
			},{
				field: 'undangan_tanggal',
				title: 'Tgl Undangan',
			}, {
				field: 'undangan_jenis_undangan',
				title: 'Jenis Undangan',
			},{
				field: 'undangan_uraian',
				title: 'Uraian',
			},{
				field: 'undangan_keterangan',
				title: 'Keterangan',
			},{
				field: 'undangan_upload_dokumen',
				title: 'Dokumen',
				template: function(row) {
                        return '<a href="<?php echo base_url()?>/assets/uploads/konten/register/'+row.undangan_upload_dokumen+'" " class="btn btn-sm btn-clean btn-icon" title="Download"><i class="fa fa-download"></i></a>'
                            // return row.register_upload_dokumen + 'test';
                    }
				},
			
			// {
			//     field: 'jaspel_total',
			//     title: 'Total',
			//     template: function(row) {
			//         if (row.jaspel_total == null) {
			//             return 'Rp. 0';
			//         } else {
			//             var reverse = row.jaspel_total.toString().split('').reverse().join(''),
			//                 ribuan = reverse.match(/\d{1,3}/g);
			//             ribuan = ribuan.join('.').split('').reverse().join('');
			//             return 'Rp. ' + ribuan;
			//         }
			//     }
			// },{
			//     field: 'jaspel_bulan',
			//     title: 'Bulan',
			//     template: function(row) {
			//         if (row.jaspel_bulan == 1) {
			//             return '<span class="label label-primary label-pill label-inline">Januari</span>';
			//         } else if (row.jaspel_bulan == 2) {
			//             return '<span class="label label-primary label-pill label-inline">Februari</span>';
			//         } else if (row.jaspel_bulan == 3) {
			//             return '<span class="label label-primary label-pill label-inline">Maret</span>';
			//         } else if (row.jaspel_bulan == 4) {
			//             return '<span class="label label-primary label-pill label-inline">April</span>';
			//         } else if (row.jaspel_bulan == 5) {
			//             return '<span class="label label-primary label-pill label-inline">Mei</span>';
			//         } else if (row.jaspel_bulan == 6) {
			//             return '<span class="label label-primary label-pill label-inline">Juni</span>';
			//         } else if (row.jaspel_bulan == 7) {
			//             return '<span class="label label-primary label-pill label-inline">Juli</span>';
			//         } else if (row.jaspel_bulan == 8) {
			//             return '<span class="label label-primary label-pill label-inline">Agustus</span>';
			//         } else if (row.jaspel_bulan == 9) {
			//             return '<span class="label label-primary label-pill label-inline">September</span>';
			//         } else if (row.jaspel_bulan == 10) {
			//             return '<span class="label label-primary label-pill label-inline">Oktober</span>';
			//         } else if (row.jaspel_bulan == 11) {
			//             return '<span class="label label-primary label-pill label-inline">November</span>';
			//         } else if (row.jaspel_bulan == 12) {
			//             return '<span class="label label-primary label-pill label-inline">Desember</span>';
			//         }


			//     }
			// }, {
			//     field: 'jaspel_tahun',
			//     title: 'Tahun',
			//     template: function(row) {
			//         return '<span class="label label-success label-pill label-inline">' + row.jaspel_tahun + '</span>';
			//     }
			// }, 
			{
				field: 'Actions',
				title: 'Actions',
				sortable: false,
				width: 125,
				overflow: 'visible',
				autoHide: false,
				template: function(row) {
					return '\
						<a href="javascript:;"  data-id="' + row.undangan_no_urut + '" data-dari="' + row.undangan_dari + '" data-noSurat="' + row.undangan_no_surat + '" data-tanggalUndangan="' + row.undangan_tanggal + '" data-jenisUndangan="' + row.undangan_jenis_undangan + '" data-uraian="' + row.undangan_uraian + '" data-keterangan="' + row.undangan_keterangan + '" data-uploadDokumen="' + row.undangan_upload_dokumen + '"  class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
							<i class="la la-edit" ></i>\
						</a>\
						<a href="javascript:;" data-id="' + row.undangan_no_urut + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
				},
			}],

		});


		

		$(document).on('click','.btnEdit',function(){
			let id = $(this).data('id');
			let dari = $(this).data("dari");
			let noSurat = $(this).data("noSurat");
			let tanggalUndangan = $(this).data("tanggalUndangan");
			let jenisUndangan = $(this).data("jenisUndangan");
			let uraian = $(this).data("uraian");
			let keterangan = $(this).data("keterangan");
			let uploadDokumen = $(this).data("uploadDokumen");
		$.ajax({
			url: '<?php echo base_url()."/registrasi/editdata3" ?>',
			type: 'POST',
			data: {
					undangan_no_urut : id,
					undangan_dari: dari,
					undangan_no_surat : noSurat,
					undangan_tanggal : tanggalUndangan,
					undangan_jenis_undangan : jenisUndangan,
					undangan_uraian : uraian,
					undangan_keterangan : keterangan,
					undangan_upload_dokumen : uploadDokumen,
			},
			dataType: 'json',
			success: function(response){
					$("#editModal").modal('show');
					$('.id').val(id);
					$('.dari').val(dari);
					$('.noSurat').val(noSurat);
					$('.tanggalUndangan').val(tanggalUndangan);
					$('.jenisUndangan').val(jenisUndangan);
					$('.uraian').val(uraian);
					$('.keterangan').val(keterangan);
					$('.uploadDokumen').val(uploadDokumen);
			}
		})
	});

	//Meng-Update Data
	$("#btnEdit").on('click',function(){
		let id = $('.id').val();
		let dari = $('.dari').val();
		let noSurat = $('.noSurat').val();
		let tanggalUndangan = $('.tanggalUndangan').val();
		let jenisUndangan = $('.jenisUndangan').val();
		let uraian = $('.uraian').val();
		let keterangan = $('.keterangan').val();
		let uploadDokumen = $('.uploadDokumen').val();
		$.ajax({
			url: '<?php echo base_url(). "/registrasi/editdata3" ?>',
			type: 'POST',
			data: {undangan_no_urut : id,
					undangan_dari: dari,
					undangan_no_surat : noSurat,
					undangan_tanggal : tanggalUndangan,
					undangan_jenis_undangan : jenisUndangan,
					undangan_uraian : uraian,
					undangan_keterangan : keterangan,
					undangan_upload_dokumen : uploadDokumen,
					},
			success: function(response){
					location.reload();
			}
		})

	});

			  

		$(document).on("click", ".btnDelete", function(){
			let id = $(this).data('id');
			bootbox.confirm({
				title: "Hapus Data?",
				message: "Data yang dihapus tidak bisa dikembalikan",
				buttons: {
					cancel: {
						label: 'Batal'
					},
					confirm: {
						label: 'OK',
						className: 'btn btn-primary'
					}
				},
				callback: function(result) {
					if (result) {
						$.ajax({
							type: 'POST',
							url: '<?php echo base_url('/registrasi/hapusdata3') ?>',
							data: {
								register_no_urut : id,
							},
							dataType: 'json',
							success: function(data) {
								if (data) {
									location.reload();
								} else {
									bootbox.alert({
										message: "Oops! Something wrong",
										backdrop: true,
										size: 'small'
									});
								}
							},
							error: function(xhr, desc, err) {
								console.log(xhr.responseText);
							}
						});
					}
				}
			});
		});



	};

	return {
		// public functions
		init: function() {
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableRemoteAjaxDemo.init();
});

</script>