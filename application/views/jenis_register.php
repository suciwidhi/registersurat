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
											<h3 class="card-label">List Jenis Surat Register
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
										
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="<?php echo site_url('Registrasi/add_jenis_register')?>" class="btn btn-primary font-weight-bolder">
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
										<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
								
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
                    <label for="jenisreg_id">No Urut</label>
                    <input type="text" name="id" class="form-control id"></input>
                </div>
                <div class="form-group">
                    <label for="jenisreg_jenis_surat">Jenis Register</label>
                    <input type="text" name="jenissurat" class="form-control jenissurat"></input>
                </div>
            </form>
            <div class="modal-footer">
           <button type="button" class="btn btn-success" id="btnEdit">Update</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
						url: '<?php echo base_url()."/registrasi/ambildata4" ?>',
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
				field: 'jenisreg_id',
				title: 'No'
			},{
				field: 'jenisreg_jenis_surat',
				title: 'Jenis Register',
            },
			// },{
			// 	field: 'undangan_no_surat',
			// 	title: 'No Undangan',
			// },{
			// 	field: 'undangan_tanggal',
			// 	title: 'Tgl Undangan',
			// }, {
			// 	field: 'undangan_jenis_undangan',
			// 	title: 'Jenis Undangan',
			// },{
			// 	field: 'undangan_uraian',
			// 	title: 'Uraian',
			// },{
			// 	field: 'undangan_keterangan',
			// 	title: 'Keterangan',
			// },{
			// 	field: 'undangan_upload_dokumen',
			// 	title: 'Dokumen',
			// 	template: function(row) {
                        // return '<a href="<?php echo base_url()?>/assets/uploads/konten/undangan/'+row.undangan_upload_dokumen+'" " class="btn btn-sm btn-clean btn-icon" title="Download"><i class="fa fa-download"></i></a>'
                        //     // return row.register_upload_dokumen + 'test';
            //         }
			// 	},
			
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
						<a href="javascript:;"  data-id="' + row.jenisreg_id + '" data-jenissurat="' + row.jenisreg_jenis_surat + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
							<i class="la la-edit" ></i>\
						</a>\
						<a href="javascript:;" data-id="' + row.jenisreg_id + '"data-jenissurat="' + row.jenisreg_jenis_surat + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
				},
			}],

		});


		$(document).on('click','.btnEdit',function(){
			let id = $(this).data('id');
			let jenissurat = $(this).data("jenissurat");
		$.ajax({
			url: '<?php echo base_url()."/registrasi/editdata4" ?>',
			type: 'POST',
			data: {
					jenisreg_id : id,
					jenisreg_jenis_surat: jenissurat,
			},
			dataType: 'json',
			success: function(response){
					$("#editModal").modal('show');
					$('.id').val(id);
					$('.jenissurat').val(jenissurat);
			}
		})
	});

	//Meng-Update Data
	$("#btnEdit").on('click',function(){
		let id = $('.id').val();
		let jenissurat = $('.jenissurat').val();
		$.ajax({
			url: '<?php echo base_url(). "/registrasi/editdata4" ?>',
			type: 'POST',
			data: {jenisreg_id : id,
					jenisreg_jenis_surat: jenissurat,
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
							url: '<?php echo base_url('/registrasi/hapusdata4') ?>',
							data: {
								jenisreg_id : id,
							},
							dataType: 'json',
							success: function(data) {
								console.log(data);
								location.reload();
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