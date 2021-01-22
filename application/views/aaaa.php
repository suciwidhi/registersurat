<title><?php echo $title; ?></title>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahTitle">Tambah Jaspel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Dokter</label><br>
                            <select style="width:100%;" class="form-control dokter_list">

                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Bulan</label><br>
                                <select style="width:100%;" class="form-control bulan_list">
                                    <option value="">Pilih Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Tahun</label><br>
                                <input type="number" class="form-control tahun" value="<?php echo date('Y') ?>" disabled>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div id="kt_repeater_1" class="list_repeat">
                            <div class="form-group row">
                                <div data-repeater-list="" class="col-lg-12 data_list">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2 btn_add">

                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group">
                            <label>Potongan Pajak</label><br>
                            <input type="number" class="form-control pajak text-right" value="0">
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group">
                            <label>Keterangan</label><br>
                            <textarea class="form-control ket" placeholder="Keterangan jaspel" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSave">Simpan</button>
                <!-- <button type="button" class="btn btn-primary btnSaveScan" style="display:none;">Save</button>
        <button type="button" class="btn btn-primary btnUpdate" style="display:none;">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditTitle">Edit Jaspel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:block;">
                    <span aria-hidden="true" style="display:block;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form_add">
                    <div class="card-body">
                        <input type="hidden" class="form-control" id="jaspel_id">
                        <div class="form-group">
                            <label>Dokter</label><br>
                            <select style="width:100%;" class="form-control dokter_list_edit">

                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Bulan</label><br>
                                <select style="width:100%;" class="form-control bulan_list_edit">
                                    <option value="">Pilih Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Tahun</label><br>
                                <input type="number" class="form-control tahun_edit" disabled>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div id="kt_repeater_11">
                            <div class="form-group row">
                                <div data-repeater-list="" class="col-lg-12 data_list_edit">

                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- <label class="col-lg-10 col-form-label text-right"></label> -->
                                <div class="col-lg-2 btn_add_edit">

                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group">
                            <label>Potongan Pajak</label><br>
                            <input type="number" class="form-control pajak_edit text-right" value="0">
                        </div>
                        <div class="separator separator-dashed my-8"></div>
                        <div class="form-group">
                            <label>Keterangan</label><br>
                            <textarea class="form-control ket_edit" placeholder="Keterangan jaspel" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnUpdate">Update</button>
            </div>
        </div>
    </div>
</div>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Jaspel Dokter</h5>
            <!--end::Page Title-->
            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Daterange-->
            <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Tanggal hari ini" data-placement="left">
                <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Hari ini</span>
                <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date"></span>
            </a>
            <!--end::Daterange-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="card card-custom col-xl-12">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Jaspel Dokter
                            <span class="d-block text-muted pt-2 font-size-sm">Data jaspel yang pernah dibuat</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-success font-weight-bolder btnTambah mr-3">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:../../../../../../../../metronic/themes/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Tambah Jaspel</a>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Bulan:</label>
                                            <select class="form-control" id="kt_datatable_search_bulan">
                                                <option value="">Semua Bulan</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Tahun:</label>
                                            <select class="form-control" id="kt_datatable_search_tahun">
                                                <option value="">Semua Tahun</option>
                                                <option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                                                <option value="<?php echo date('Y') - 1 ?>"><?php echo date('Y') - 1 ?></option>
                                                <option value="<?php echo date('Y') - 2 ?>"><?php echo date('Y') - 2 ?></option>
                                                <option value="<?php echo date('Y') - 3 ?>"><?php echo date('Y') - 3 ?></option>
                                                <option value="<?php echo date('Y') - 4 ?>"><?php echo date('Y') - 4 ?></option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script>
    $('.dokter_list').select2();
    $('.bulan_list').select2();
    $('.dokter_list_edit').select2();
    $('.bulan_list_edit').select2();
    getDokter();

    $('.btnTambah').click(function() {
        $(".form_add").trigger('reset');
        $('.bulan_list').val("").trigger("change");
        $('.dokter_list').val("").trigger("change");
        $('#modalTambah').modal();
        let d = 0;
        $('.data_list').html('');
        $('.btn_add').html('<a href="javascript:;" data-repeater-create class="btn btn-sm font-weight-bolder btn-light-primary add"><i class="la la-plus"></i>Add</a>');
        $('.data_list').html('<div data-repeater-item="" class="form-group row align-items-center indikator_list" style="">' +
            '<div class="col-md-5">' +
            '<label>Indikator:</label><br>' +
            '<select class="form-control indikator" style="width:100%;" ><option value="">Pilih indikator jaspel</option><?php foreach ($data_indikator as $indikator) { ?><option value="<?php echo $indikator->indikator_jaspel_id ?>"><?php echo $indikator->indikator_jaspel_nama ?></option><?php } ?></select>' +
            // '<input type="text" class="form-control indikator" placeholder="Indikator">' +
            '<div class="d-md-none mb-2"></div>' +
            '</div>' +
            '<div class="col-md-5">' +
            '<label>Biaya (Rp.):</label>' +
            '<input type="number" class="form-control biaya text-right" >' +
            '<div class="d-md-none mb-2"></div>' +
            '</div>' +
            '<div class="col-md-2">' +
            '<a href="javascript:;" id="del' + d + '" data-repeater-delete class="btn btn-sm font-weight-bolder btn-light-danger delete">' +
            '<i class="la la-trash-o"></i>Delete</a>' +
            '</div>' +
            '</div>');


        $('.add').click(function() {
            html = '<div data-repeater-item="" class="form-group row align-items-center indikator_list" style="">' +
                '<div class="col-md-5">' +
                '<label>Indikator:</label><br>' +
                '<select class="form-control indikator" style="width:100%;" ><option value="">Pilih indikator jaspel</option><?php foreach ($data_indikator as $indikator) { ?><option value="<?php echo $indikator->indikator_jaspel_id ?>"><?php echo $indikator->indikator_jaspel_nama ?></option><?php } ?></select>' +
                // '<input type="text" class="form-control indikator" placeholder="Indikator">' +
                '<div class="d-md-none mb-2"></div>' +
                '</div>' +
                '<div class="col-md-5">' +
                '<label>Biaya (Rp.):</label>' +
                '<input type="number" class="form-control biaya text-right" >' +
                '<div class="d-md-none mb-2"></div>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<a href="javascript:;" data-repeater-delete id="del' + d + 1 + '" data-repeater-delete class="btn btn-sm font-weight-bolder btn-light-danger delete">' +
                '<i class="la la-trash-o"></i>Delete</a>' +
                '</div>' +
                '</div>';
            $('.data_list').append(html);
            $('.indikator').select2();
        })
        $('.indikator').select2();

        $('#modalTambahTitle').html('Tambah Jaspel');
        $('#modalTambah').modal();
    });

    var items = []

    function userExists(username) {
        return items.some(function(el) {
            return el.indikator === username;
        });
    }

    $('.btnSave').click(function() {
        if ($('.dokter_list').val() == '') {
            bootbox.alert({
                message: "Pilih dokter",
                backdrop: true,
                size: 'small'
            });
        } else if ($('.bulan_list').val() == '') {
            bootbox.alert({
                message: "Pilih bulan",
                backdrop: true,
                size: 'small'
            });
        } else {
            items = [];
            var stts = true;
            $('.indikator_list').each(function() {
                var key = $(this).find('.indikator').val()
                var value = $(this).find('.biaya').val()
                if (key == '' || value == '') {
                    bootbox.alert({
                        message: "Data Indikator tidak boleh kosong",
                        backdrop: true,
                        size: 'small'
                    });
                    stts = false;
                } else {
                    if (userExists(key)) {} else {
                        items.push({
                            indikator: key,
                            biaya: value
                        });
                    }
                }
            })
            if (stts) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('jaspel/add') ?>',
                    dataType: 'json',
                    data: {
                        dokter: $('.dokter_list').val(),
                        bulan: $('.bulan_list').val(),
                        tahun: $('.tahun').val(),
                        pajak: $('.pajak').val(),
                        ket: $('.ket').val(),
                        indikator: items
                    },
                    success: function(data) {
                        if (data.stts) {
                            bootbox.alert({
                                message: "" + data.msg,
                                backdrop: true,
                                size: 'small',
                                callback: function() {
                                    location.reload();
                                }
                            });
                        } else {
                            bootbox.alert({
                                message: "" + data.msg,
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

    $('.btnUpdate').click(function() {
        if ($('.dokter_list_edit').val() == '') {
            bootbox.alert({
                message: "Pilih dokter",
                backdrop: true,
                size: 'small'
            });
        } else if ($('.bulan_list_edit').val() == '') {
            bootbox.alert({
                message: "Pilih bulan",
                backdrop: true,
                size: 'small'
            });
        } else {
            items = [];
            var stts = true;
            $('.data_list_edit').children().each(function() {
                var key = $(this).find('.indikator_edit').val()
                var value = $(this).find('.biaya_edit').val()
                if (key == '' || value == '') {
                    bootbox.alert({
                        message: "Data Indikator tidak boleh kosong",
                        backdrop: true,
                        size: 'small'
                    });
                    stts = false;
                } else {
                    if (userExists(key)) {} else {

                    }
                    items.push({
                        indikator: key,
                        biaya: value
                    });
                }
            })

            console.log(items);
            if (stts) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('jaspel/update_jaspel') ?>',
                    dataType: 'json',
                    data: {
                        jaspel_id: $('#jaspel_id').val(),
                        dokter: $('.dokter_list_edit').val(),
                        bulan: $('.bulan_list_edit').val(),
                        tahun: $('.tahun_edit').val(),
                        pajak: $('.pajak_edit').val(),
                        ket: $('.ket_edit').val(),
                        indikator: items
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.stts) {
                            bootbox.alert({
                                message: "" + data.msg,
                                backdrop: true,
                                size: 'small',
                                callback: function() {
                                    location.reload();
                                }
                            });
                        } else {
                            bootbox.alert({
                                message: "" + data.msg,
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

    function getDokter() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('jaspel/get_dokter') ?>',
            dataType: 'json',
            success: function(data) {
                let html = "<option value=''>Pilih Dokter</option>";
                for (let i = 0; i < data.length; i++) {
                    html += "<option value=" + data[i].nakes_kode + ">" + data[i].nakes_kode + ' - ' + data[i].nakes_nama + "</option>";
                }
                $('.dokter_list').html(html);
                $('.dokter_list_edit').html(html);
                // $('.rack_code_item').html(html2);
                // $('#kt_datatable_search_rack').html(html);
                // console.log(data)
            },
            error: function(xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
    }

    // Class definition
    var KTFormRepeater = function() {

        // Private functions
        var demo1 = function() {
            $('#kt_repeater_1').repeater({
                initEmpty: true,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });

            $('#kt_repeater_11').repeater({
                initEmpty: true,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        }
        return {
            // public functions
            init: function() {
                demo1();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTFormRepeater.init();
    });

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
                            url: '<?php echo base_url('jaspel/get_list') ?>',
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
                    field: 'nakes_kode',
                    title: 'Kode'
                }, {
                    field: 'nakes_nama',
                    title: 'Nama',
                }, {
                    field: 'jaspel_total',
                    title: 'Total',
                    template: function(row) {
                        if (row.jaspel_total == null) {
                            return 'Rp. 0';
                        } else {
                            var reverse = row.jaspel_total.toString().split('').reverse().join(''),
                                ribuan = reverse.match(/\d{1,3}/g);
                            ribuan = ribuan.join('.').split('').reverse().join('');
                            return 'Rp. ' + ribuan;
                        }
                    }
                }, {
                    field: 'jaspel_bulan',
                    title: 'Bulan',
                    template: function(row) {
                        if (row.jaspel_bulan == 1) {
                            return '<span class="label label-primary label-pill label-inline">Januari</span>';
                        } else if (row.jaspel_bulan == 2) {
                            return '<span class="label label-primary label-pill label-inline">Februari</span>';
                        } else if (row.jaspel_bulan == 3) {
                            return '<span class="label label-primary label-pill label-inline">Maret</span>';
                        } else if (row.jaspel_bulan == 4) {
                            return '<span class="label label-primary label-pill label-inline">April</span>';
                        } else if (row.jaspel_bulan == 5) {
                            return '<span class="label label-primary label-pill label-inline">Mei</span>';
                        } else if (row.jaspel_bulan == 6) {
                            return '<span class="label label-primary label-pill label-inline">Juni</span>';
                        } else if (row.jaspel_bulan == 7) {
                            return '<span class="label label-primary label-pill label-inline">Juli</span>';
                        } else if (row.jaspel_bulan == 8) {
                            return '<span class="label label-primary label-pill label-inline">Agustus</span>';
                        } else if (row.jaspel_bulan == 9) {
                            return '<span class="label label-primary label-pill label-inline">September</span>';
                        } else if (row.jaspel_bulan == 10) {
                            return '<span class="label label-primary label-pill label-inline">Oktober</span>';
                        } else if (row.jaspel_bulan == 11) {
                            return '<span class="label label-primary label-pill label-inline">November</span>';
                        } else if (row.jaspel_bulan == 12) {
                            return '<span class="label label-primary label-pill label-inline">Desember</span>';
                        }


                    }
                }, {
                    field: 'jaspel_tahun',
                    title: 'Tahun',
                    template: function(row) {
                        return '<span class="label label-success label-pill label-inline">' + row.jaspel_tahun + '</span>';
                    }
                }, {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
							<a href="javascript:;" data-id="' + row.jaspel_id + '" data-bulan="' + row.jaspel_bulan + '" data-tahun="' + row.jaspel_tahun + '" data-dokter="' + row.nakes_kode + '" data-pajak="' + row.jaspel_pajak + '" data-ket="' + row.jaspel_ket + '" class="btn btn-sm btn-clean btn-icon btnEdit" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" data-id="' + row.jaspel_id + '" class="btn btn-sm btn-clean btn-icon btnDelete" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
                    },
                }],

            });

            $('#kt_datatable_search_bulan').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'jaspel_bulan');
            });

            $('#kt_datatable_search_tahun').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'jaspel_tahun');
            });

            $('#kt_datatable_search_bulan').select2();
            $('#kt_datatable_search_tahun').select2();

            $(document).on("click", ".btnDelete", function() {
                let id = $(this).data("id");
                bootbox.confirm({
                    title: "Hapus jaspel?",
                    message: "Data yang telah dihapus tidak dapat dikembalikan",
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
                                url: '<?php echo base_url('jaspel/delete_jaspel') ?>',
                                data: {
                                    jaspel_id: id,
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

            $(document).on("click", ".btnEdit", function() {

                let id = $(this).data("id");
                let bulan = $(this).data("bulan");
                let kode = $(this).data("dokter");
                let tahun = $(this).data("tahun");
                let pajak = $(this).data("pajak");
                let ket = $(this).data("ket");

                $('#jaspel_id').val(id);
                $('.tahun_edit').val(tahun);
                $('.bulan_list_edit').val(bulan).trigger("change");
                $('.dokter_list_edit').val(kode).trigger("change");
                $('.pajak_edit').val(pajak);
                $('.ket_edit').val(ket);

                $('.btn_add_edit').html('<a href="javascript:;" data-repeater-create class="btn btn-sm font-weight-bolder btn-light-primary add_edit">' +
                    '<i class="la la-plus"></i>Add</a>');

                let html = '';
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('jaspel/get_detail') ?>',
                    dataType: 'json',
                    data: {
                        jaspel_id: id
                    },
                    success: function(data) {
                        $('.data_list_edit').html('')
                        for (let i = 0; i < data.length; i++) {
                            html += '<div data-repeater-item="" class="form-group row align-items-center indikator_list_edit" style="">' +
                                '<div class="col-md-5">' +
                                '<label>Indikator:</label><br>' +
                                '<select class="form-control indikator_edit" style="width:100%;" id="indikator_edit_' + i + '" ><option value="">Pilih indikator jaspel</option><?php foreach ($data_indikator as $indikator) { ?><option value="<?php echo $indikator->indikator_jaspel_id ?>" <?php if ($indikator->indikator_jaspel_id) ?>><?php echo $indikator->indikator_jaspel_nama ?></option><?php } ?></select>' +
                                // '<input type="text" class="form-control indikator_edit" placeholder="Indikator" value="' + data[i].jaspel_detail_indikator + '">' +
                                '<div class="d-md-none mb-2"></div>' +
                                '</div>' +
                                '<div class="col-md-5">' +
                                '<label>Biaya (Rp.):</label>' +
                                '<input type="number" class="form-control biaya_edit text-right"  value="' + data[i].jaspel_detail_biaya + '">' +
                                '<div class="d-md-none mb-2"></div>' +
                                '</div>' +
                                '<div class="col-md-2">' +
                                '<a href="javascript:;" data-repeater-delete class="btn btn-sm font-weight-bolder btn-light-danger delete_edit">' +
                                '<i class="la la-trash-o"></i>Delete</a>' +
                                '</div>' +
                                '</div>';
                        }
                        $('.data_list_edit').html(html);
                        for (let i = 0; i < data.length; i++) {
                            $('#indikator_edit_' + i).val(data[i].jaspel_detail_indikator_jaspel_id).trigger("change");
                        }
                        $(".indikator_edit").removeAttr("id");
                        $('.add_edit').click(function() {
                            html = '<div data-repeater-item="" class="form-group row align-items-center indikator_list_edit" style="">' +
                                '<div class="col-md-5">' +
                                '<label>Indikator:</label><br>' +
                                '<select class="form-control indikator_edit" style="width:100%;" ><option value="">Pilih indikator jaspel</option><?php foreach ($data_indikator as $indikator) { ?><option value="<?php echo $indikator->indikator_jaspel_id ?>"><?php echo $indikator->indikator_jaspel_nama ?></option><?php } ?></select>' +
                                // '<input type="text" class="form-control indikator_edit" placeholder="Indikator">' +
                                '<div class="d-md-none mb-2"></div>' +
                                '</div>' +
                                '<div class="col-md-5">' +
                                '<label>Biaya (Rp.):</label>' +
                                '<input type="number" class="form-control biaya_edit text-right" >' +
                                '<div class="d-md-none mb-2"></div>' +
                                '</div>' +
                                '<div class="col-md-2">' +
                                '<a href="javascript:;" data-repeater-delete class="btn btn-sm font-weight-bolder btn-light-danger">' +
                                '<i class="la la-trash-o"></i>Delete</a>' +
                                '</div>' +
                                '</div>';
                            $('.data_list_edit').append(html);
                            $('.indikator_edit').select2();
                        })
                        $('.indikator_edit').select2();
                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr.responseText);
                    }
                });

                $('#modalEdit').modal();
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