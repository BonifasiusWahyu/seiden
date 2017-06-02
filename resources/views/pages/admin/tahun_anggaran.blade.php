@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
@endpush

@section('title', 'Tahun Anggaran')

@section('sidebar')
    @include('sidebar.admin')
@endsection

@section('content')
  {{-- AWAL MAIN CONTENT --}}
<div class="main-content">
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumb">
            <li><a href=""><i class="fa fa-home fa-fw"></i></a></li>
            <li class="active-bread">Tahun Anggaran</li>
        </ul>
    </div>
    {{-- End Breadcrumb --}} 

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                {{-- awal tabel tahun anggaran --}}
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tahun Anggaran</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <button class="btn btn-primary" data-toggle="modal" href='#modal-tambah'><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                        <br> 
                        {{-- awal pembungkus tabel tahun anggaran --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed table-striped" id="myTable">

                            </table>
                        </div> {{-- akhir pembungkus tabel tahun anggaran --}}
                    </div> {{-- akhir panel body --}}
                </div> {{-- akhir tabel tahun anggaran --}}
            </div>
        </div>
    </div>
</div>
  {{-- AKHIR MAIN CONTENT --}}

  {{-- AWAL MODAL TAMBAH TAHUN ANGGARAN --}}
  <div class="modal fade" id="modal-tambah">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Tambah Tahun Anggaran</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="POST" class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="col-sm-3 control-label">Tahun Anggaran</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="tambah_tahun_anggaran" name="tambah_tahun_anggaran" placeholder="Contoh : 2010">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="tambah()">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              </div>
          </div>
      </div>
  </div>
  {{-- AKHIR MODAL TAMBAH TAHUN ANGGARAN --}}

  {{-- AWAL MODAL UBAH TAHUN ANGGARAN --}}
  <div class="modal fade" id="modal-ubah">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Ubah Tahun Anggaran</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="POST" class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="col-sm-3 control-label">Tahun Anggaran</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="ubah_tahun_anggaran" name="ubah_tahun_anggaran">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="ubah()">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              </div>
          </div>
      </div>
  </div>
  {{-- AKHIR MODAL UBAH TAHUN ANGGARAN --}}
@endsection

@push('script')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap-datepicker.js') }}" charset="UTF-8"></script>

<script>
$(function(){
  'use strict';
  var data = [
      [
          "1",
          "2015",
          `<div class="switch">
                <input type="radio" class="switch-input switch-input-off" name="radio1" value="nonaktif" id="radio1" onclick="radioNonAktif(this)" checked>
                <label for="radio1" class="switch-label switch-label-off">NON-AKTIF</label>
                <input type="radio" class="switch-input switch-input-on" name="radio1" value="aktif" id="radio2" onclick="radioAktif(this)">
                <label for="radio2" class="switch-label switch-label-on">AKTIF</label>
                <span class="switch-selection"></span>
            </div>`,
          `<button class="btn btn-warning btn-sm" data-toggle="modal" href='#modal-ubah'> UBAH</button>`
      ],
      [
          "2",
          "2016",
          `<div class="switch">
                <input type="radio" class="switch-input switch-input-off" name="radio2" value="nonaktif" id="radio3" onclick="radioNonAktif(this)">
                <label for="radio3" class="switch-label switch-label-off">NON-AKTIF</label>
                <input type="radio" class="switch-input switch-input-on" name="radio2" value="aktif" id="radio4" onclick="radioAktif(this)" checked>
                <label for="radio4" class="switch-label switch-label-on">AKTIF</label>
                <span class="switch-selection"></span>
            </div>`,
          `<button class="btn btn-warning btn-sm" data-toggle="modal" href='#modal-ubah'> UBAH</button>`
      ],
      [
          "3",
          "2017",
          `<div class="switch">
                <input type="radio" class="switch-input switch-input-off" name="radio3" value="nonaktif" id="radio5" onclick="radioNonAktif(this)" checked>
                <label for="radio5" class="switch-label switch-label-off">NON-AKTIF</label>
                <input type="radio" class="switch-input switch-input-on" name="radio3" value="aktif" id="radio6" onclick="radioAktif(this)">
                <label for="radio6" class="switch-label switch-label-on">AKTIF</label>
                <span class="switch-selection"></span>
            </div>`,
          `<button class="btn btn-warning btn-sm" data-toggle="modal" href='#modal-ubah'> UBAH</button>` // YANG MEMILIKI STATUS AKTIF, MAKA BUTTON AKTIF TIDAK DIMUNCULKAN
      ],
    ];

    $('#myTable').DataTable({
        "data" : data,
        "columns" : [
            { "title" : "#", "width" : "2%" },
            { "title" : "TAHUN ANGGARAN" },
            { "title" : "STATUS", sClass: 'text-center'},
            { "title" : "AKSI","width" : "1%", "orderable": false }
        ]
    });
});

function tambah(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Data Tahun Anggaran Ini Akan Disimpan ",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#00a65a",
    confirmButtonText: "Ya, Yakin !",
    cancelButtonText: "Tidak, Batalkan !",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Berhasil!", "Data Tahun Anggaran Berhasil Simpan", "success");
      $('#modal-tambah').modal('hide');
    } else {
      swal('Dibatalkan', 'Data Tahun Anggaran Batal Simpan :)', 'error');
      $('#modal-tambah').modal('hide');
    }
  });
}

function ubah(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Data Tahun Anggaran Ini Akan Diubah ",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#00a65a",
    confirmButtonText: "Ya, Yakin !",
    cancelButtonText: "Tidak, Batalkan !",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Berhasil!", "Data Tahun Anggaran Berhasil Diubah", "success");
      $('#modal-ubah').modal('hide');
    } else {
      swal('Dibatalkan', 'Data Tahun Anggaran Batal Diubah :)', 'error');
      $('#modal-ubah').modal('hide');
    }
  });
}

function aktif(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Tahun Anggaran Ini Akan Diaktifkan ",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#00a65a",
    confirmButtonText: "Ya, Yakin !",
    cancelButtonText: "Tidak, Batalkan !",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Berhasil!", "Tahun Anggaran Berhasil Diaktifkan", "success");
      $('#modal-aktif').modal('hide');
    } else {
      swal('Dibatalkan', 'Tahun Anggaran Batal Diaktifkan :)', 'error');
      $('#modal-aktif').modal('hide');
    }
  });
}

function radioAktif(tes){
    var elem = $(tes);

    if($(tes).val() == 'aktif'){
        
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Tahun Anggaran Ini Akan Diaktifkan ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#00a65a",
            confirmButtonText: "Ya, Yakin !",
            cancelButtonText: "Tidak, Batalkan !",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Berhasil!", "Data Tahun Anggaran Berhasil Simpan", "success");
                $('#modal-tambah').modal('hide');
                elem.parents('tr').siblings().find('.switch-input-off').prop('checked', true);
                //elem.parents('tr').siblings().find('.switch-input-on').prop('checked', false);
            } 
            else {
                swal('Dibatalkan', 'Data Tahun Anggaran Batal Simpan :)', 'error');
                $('#modal-tambah').modal('hide');
                //elem.attr('checked', false);
                elem.siblings('.switch-input-off').prop('checked', true);
            }
        });
    }
}

function radioNonAktif(tes){
    var elem = $(tes);

    if($(tes).val() == 'nonaktif'){
        
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Tahun Anggaran Ini Akan Dinonaktifkan ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#00a65a",
            confirmButtonText: "Ya, Yakin !",
            cancelButtonText: "Tidak, Batalkan !",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Berhasil!", "Data Tahun Anggaran Berhasil Simpan", "success");
                $('#modal-tambah').modal('hide');
            } 
            else {
                swal('Dibatalkan', 'Data Tahun Anggaran Batal Simpan :)', 'error');
                $('#modal-tambah').modal('hide');
                elem.siblings('.switch-input-on').prop('checked', true);
            }
        });
    }
}
</script>
@endpush
