<title>Register Surat</title>
<style>
.wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state="current"] .wizard-icon i {
    color: #ffa800 !important;
}
</style>

<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">List Register Surat
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
											<a href="<?php echo site_url('Registrasi/add_register_surat')?>" class="btn btn-primary font-weight-bolder">
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
                    <label for="register_no_urut">No Urut</label>
                    <input type="text" name="id" class="form-control id"></input>
                </div>
                <div class="form-group">
                    <label for="register_tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" name="tanggal" class="form-control tanggal"></input>
                </div>
                <div class="form-group">
                    <label for="register_asal_surat">Asal Surat</label>
                    <input type="text" name="asal" class="form-control asal"></input>
                </div>
                <div class="form-group">
                    <label for="register_tanggal_surat">Tanggal Surat</label>
                    <input type="date" name="tanggalsurat" class="form-control tanggalsurat"></input>
                <div class="form-group">
                    <label for="register_jenis_surat">Jenis Surat</label>
                    <select class="form-control jenis" name="jenis">
                        <?php foreach ($register_surat as $val) { ?>
                        <option value="<?php echo $val->jenisreg_jenis_surat ?>"><?php echo $val->jenisreg_jenis_surat ?></option>
                        <?php } ?>
                    </select>
                    
                </div>
                </div>
                <div class="form-group">
                    <label for="register_perihal">Perihal</label>
                    <input type="text" name="perihal" class="form-control perihal"></input>
                </div>
                <div class="form-group">
                    <label for="register_kode">Kode</label>
                    <input type="text" name="kode" class="form-control kode"></input>
                </div>
                <div class="form-group">
                    <label for="register_keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control keterangan"></input>
                </div>
                <div class="form-group">
                    <label for="register_upload_dokumen">Upload Dokumen</label>
                    <input type="file" name="upload" class="form-control upload"></input>
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
                            url: '<?php echo base_url()."/registrasi/ambildata" ?>',
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
                    field: 'register_no_urut',
                    title: 'No'
                },{
                    field: 'register_tanggal_masuk',
                    title: 'Tgl Masuk',
                },{
                    field: 'register_asal_surat',
                    title: 'Asal Surat',
				},{
                    field: 'register_tanggal_surat',
                    title: 'Tgl Surat',
				}, {
                    field: 'register_jenis_surat',
                    title: 'Jenis Surat',
				},{
                    field: 'register_perihal',
                    title: 'Perihal',
				},{
                    field: 'register_kode',
                    title: 'Kode',
                },{
                    field: 'register_keterangan',
                    title: 'Keterangan',
                },{
                    field: 'register_upload_dokumen',
                    title: 'Dokumen',
                    template: function(row) {
                        return '<a href="<?php echo base_url()?>/assets/uploads/konten/register/'+row.register_upload_dokumen+'" " class="btn btn-sm btn-clean btn-icon" title="Download"><i class="fa fa-download"></i></a>'
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
							<a href="javascript:;"  data-id="' + row.register_no_urut + '" data-tanggal="' + row.register_tanggal_masuk + '" data-asal="' + row.register_asal_surat + '" data-tanggalsurat="' + row.register_tanggal_surat + '" data-jenis="' + row.register_jenis_surat + '" data-perihal="' + row.register_perihal + '" data-kode="' + row.register_kode + '" data-keterangan="' + row.register_keterangan + '" data-upload="' + row.register_upload_dokumen + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
								<i class="la la-edit" ></i>\
							</a>\
							<a href="javascript:;" data-id="' + row.register_no_urut + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],

            });

    
			// $(document).on("click", ".btnEdit", function(){
                // let id = $(this).data('id');
                // let tanggal = $(this).data("tanggal");
                // let asal = $(this).data("asal");
                // let tanggalsurat = $(this).data("tanggalsurat");
                // let jenis = $(this).data("jenis");
                // let perihal = $(this).data("perihal");
                // let kode = $(this).data("kode");
                // let keterangan = $(this).data("keterangan");
                // let upload= $(this).data("upload");

            //     $('#register_no_urut').val(id);
            //     $('.register_tanggal_masuk').val(tanggal);
            //     $('.register_asal_surat').val(asal);
            //     $('.register_tanggal_surat').val(tanggalsurat);
            //     $('.register_jenis_surat').val(jenis);
            //     $('.register_perihal').val(perihal);
            //     $('.register_kode').val(kode);
            //     $('.register_keterangan').val(keterangan);
            //     $('.register_upload_dokumen').val(upload);

            //     $.ajax({
            //         type: 'POST',
            //         url: '<?php echo base_url("registrasi/editdata")?>',
            //         dataType: 'json',
            //         data: {
            //             register_no_urut: id
            //         },
            //         success: function(data){
                        // $('input[name="id"]').val("");
                        // $('input[name="tanggal').val("");
                        // $('input[name="asal').val("");
                        // $('input[name="tanggalsurat"]').val("");
                        // $('input[name="jenis"]').val("");
                        // $('input[name="perihal"]').val("");
                        // $('input[name="kode').val("");
                        // $('input[name="keterangan').val("");
                        // $('input[name="upload"]').val("");
                        // $('#editModal').Modal('show');


            //         }
            //         })
            //     });  

            $(document).on('click','.btnEdit',function(){
                let id = $(this).data('id');
                let tanggal = $(this).data("tanggal");
                let asal = $(this).data("asal");
                let tanggalsurat = $(this).data("tanggalsurat");
                let jenis = $(this).data("jenis");
                let perihal = $(this).data("perihal");
                let kode = $(this).data("kode");
                let keterangan = $(this).data("keterangan");
                let upload= $(this).data("upload");
            $.ajax({
                url: '<?php echo base_url()."/registrasi/editdata" ?>',
                type: 'POST',
                data: {
                        register_no_urut: id,
                        register_tanggal_masuk: tanggal,
                        register_asal_surat: asal,
                        register_tanggal_surat: tanggalsurat,
                        register_jenis_surat: jenis,
                        register_perihal: perihal,
                        register_kode: kode,
                        register_keterangan: keterangan,
                        register_upload_dokumen: upload,
                },
                dataType: 'json',
                success: function(response){
                        $("#editModal").modal('show');
                        $('.id').val(id);
                        $('.tanggal').val(tanggal);
                        $('.asal').val(asal);
                        $('.tanggalsurat').val(tanggalsurat);
                        $('.jenis').val(jenis);
                        $('.perihal').val(perihal);
                        $('.kode').val(kode);
                        $('.keterangan').val(keterangan);
                        $('.upload').val(upload);
                }
            })
        });
 
        //Meng-Update Data
        $("#btnEdit").on('click',function(){
            let id = $('.id').val();
            let tanggal = $('.tanggal').val();
            let asal = $('.asal').val();
            let tanggalsurat = $('.tanggalsurat').val();
            let jenis = $('.jenis').val();
            let perihal = $('.perihal').val();
            let kode = $('.kode').val();
            let keterangan = $('.keterangan').val();
            let upload= $('.upload').val();
            $.ajax({
                url: '<?php echo base_url(). "/registrasi/editdata" ?>',
                type: 'POST',
                data: {register_no_urut: id,
                        register_tanggal_masuk: tanggal,
                        register_asal_surat: asal,
                        register_tanggal_surat: tanggalsurat,
                        register_jenis_surat: jenis,
                        register_perihal: perihal,
                        register_kode: kode,
                        register_keterangan: keterangan,
                        register_upload_dokumen: upload,
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
                                url: '<?php echo base_url('/registrasi/hapusdata') ?>',
                                data: {
                                    register_no_urut : id,
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