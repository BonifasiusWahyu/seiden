@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
@endpush

@section('title', 'DIPA Sub Komponen')

@section('sidebar')
    @include('sidebar.satker')
@endsection

@section('content')
  {{-- AWAL MAIN CONTENT --}}
<div class="main-content">
    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrapper">
        <ul class="breadcrumb">
            <li><a href=""><i class="fa fa-home fa-fw"></i></a></li>
            <li><a href="{{ url('/dipa/dipa-program') }}">DIPA</a></li>
            <li><a href="{{ url('/dipa/dipa-kegiatan') }}">PRG0001</a></li>
            <li><a href="{{ url('/dipa/dipa-output') }}">KGT0001</a></li>
            <li><a href="{{ url('/dipa/dipa-suboutput') }}">OP0001</a></li>
            <li><a href="{{ url('/dipa/dipa-komponen') }}">SOP0001</a></li>
            <li class="active-bread">KP0001</li>
        </ul>
    </div>
    {{-- End Breadcrumb --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                {{-- awal tabel DIPA --}}
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">DIPA Sub Komponen</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="row detail-box">
                          <div class="col-md-6">
                              <table class="table table-borderless detail-table no-margin">
                                  <tbody>
                                      <tr>
                                          <td>KODE / SATUAN KERJA</td>
                                          <td>:</td>
                                          <td>SAT0001 / SATUAN KERJA-1</td>
                                      </tr>
                                      <tr>
                                          <td>KODE / NAMA PROGRAM</td>
                                          <td>:</td>
                                          <td>PRG0001 / PROGRAM1</td>
                                      </tr>
                                      <tr>
                                          <td>KODE / NAMA KEGIATAN</td>
                                          <td>:</td>
                                          <td>KGT0001 / KEGIATAN1</td>
                                      </tr>
                                      <tr>
                                          <td>KODE / NAMA OUTPUT</td>
                                          <td>:</td>
                                          <td>OP0001 / OUTPUT1.1</td>
                                      </tr>
                                      <tr>
                                          <td>KODE / NAMA SUB OUTPUT</td>
                                          <td>:</td>
                                          <td>SOP0001 / SUBOUTPUT1.1</td>
                                      </tr>
                                      <tr>
                                          <td>KODE / NAMA KOMPONEN</td>
                                          <td>:</td>
                                          <td>KP0001 / KOMPONEN1.1</td>
                                      </tr>
                                      <tr>
                                          <td>TAHUN ANGGARAN</td>
                                          <td>:</td>
                                          <td>2017</td>
                                      </tr>
                                      <tr>
                                          <td>NILAI</td>
                                          <td>:</td>
                                          <td>RP. 12.500.000</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary" data-toggle="modal" href='#modal-tambah'><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span class="btn-detail-open-text"></span> &nbsp;
                                <div class="btn-detail btn-active"><i class="fa fa-chevron-up"></i></div>
                            </div>
                        </div>
                        <br>

                        {{-- awal pembungkus tabel DIPA --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed table-striped" id="myTable">

                            </table>
                        </div> {{-- akhir pembungkus tabel DIPA --}}
                        <div class="text-left">
                            <a href="{{ url('/dipa/dipa-komponen') }}" class="btn btn-warning" role="button"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </div> {{-- akhir panel body --}}
                </div> {{-- akhir tabel DIPA --}}
            </div>
        </div>
    </div>
</div>
  {{-- AKHIR MAIN CONTENT --}}

  {{-- AWAL MODAL TAMBAH SUB KOMPONEN --}}
  <div class="modal fade" id="modal-tambah">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Tambah Sub Komponen</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="POST" class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Kode Sub Komponen</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="tambah_kode_subkomponen" name="tambah_kode_subkomponen" placeholder="Contoh : SKP00001">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Nama Sub Komponen</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="tambah_nama_subkomponen" name="tambah_nama_subkomponen" placeholder="Contoh : SubKomponen-1.1">
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
  {{-- AKHIR MODAL TAMBAH SUB KOMPONEN --}}

  {{-- AWAL MODAL UBAH SUB KOMPONEN --}}
  <div class="modal fade" id="modal-ubah">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Ubah Sub Komponen</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="POST" class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Kode Sub Komponen</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="ubah_kode_subkomponent" name="ubah_kode_subkomponen">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Nama Sub Komponen</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="ubah_nama_subkomponent" name="ubah_nama_subkomponen">
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
  {{-- AKHIR MODAL UBAH SUB KOMPONEN --}}
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
        "SKP00001",
        "SubKomponen-1.1",
        "Rp. 12.500.000",
        `<button class="btn btn-warning btn-sm" data-toggle="modal" href='#modal-ubah'> UBAH</button>
        <button class="btn btn-danger btn-sm" data-toggle="modal" onclick="hapus()"> HAPUS</button>
        <a href="{{ url('/dipa/dipa-akun') }}" class="btn btn-success" role="button"> Pilih</a>`
        ],
        [
        "2",
        "SKP00002",
        "SubKomponen-1.2",
        "Rp. 0",
        `<button class="btn btn-warning btn-sm" data-toggle="modal" href='#modal-ubah'> UBAH</button>
        <button class="btn btn-danger btn-sm" data-toggle="modal" onclick="hapus()"> HAPUS</button>
        <a href="{{ url('/dipa/dipa-akun') }}" class="btn btn-success" role="button"> Pilih</a>`
        ],
    ];

    $('#myTable').DataTable({
        "data" : data,
        "columns" : [
            { "title" : "#", "width" : "2%" },
            { "title" : "KODE SUB KOMPONEN" },
            { "title" : "NAMA SUB KOMPONEN" },
            { "title" : "NILAI" },
            { "title" : "AKSI","width" : "16%", "orderable": false }
        ]
    });

    //btn detail box
    $('.btn-detail').click(function(){
        $('.detail-box').slideToggle(200);
        $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        $(this).siblings('span').toggleClass('btn-detail-open-text btn-detail-close-text')
        $(this).toggleClass('btn-active');
    });

});

function tambah(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Data Sub Komponen Ini Akan Disimpan ",
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
      swal("Berhasil!", "Data Sub Komponen Berhasil Simpan", "success");
      $('#modal-tambah').modal('hide');
    } else {
      swal('Dibatalkan', 'Data Sub Komponen Batal Simpan :)', 'error');
      $('#modal-tambah').modal('hide');
    }
  });
}

function ubah(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Data Sub Komponen Ini Akan Diubah ",
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
      swal("Berhasil!", "Data Sub Komponen Berhasil Diubah", "success");
      $('#modal-ubah').modal('hide');
    } else {
      swal('Dibatalkan', 'Data Sub Komponen Batal Diubah :)', 'error');
      $('#modal-ubah').modal('hide');
    }
  });
}

function hapus(){
    swal({
    title: "Apakah Anda Yakin ?",
    text: "Sub Komponen Ini Akan Dihapus",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Yakin !",
    cancelButtonText: "Tidak, Batalkan !",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Berhasil!", "Sub Komponen Berhasil Dihapus", "success");
    } else {
      swal('Dibatalkan', 'Sub Komponen Batal Dihapus :)', 'error');
    }
  });
}
</script>
@endpush