@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endpush

@section('title', 'Bukti Terima Barang')

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
            <li class="active-bread">Bukti Terima Barang</li>
        </ul>
    </div>
    {{-- End Breadcrumb --}}

    {{-- awal container fluid --}}
    <div class="container-fluid">
        <div class="row"> {{-- awal row --}}
            <div class="col-md-12"> {{-- awal col-md-12 --}}

                {{-- awal tabel user --}}
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bukti Terima Barang Tambah</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <a class="btn btn-danger" href="{{ url('/bukti_terima_barang') }}"><i class="fa fa-home"></i> Kembali</a>
                        </div>
                        <br>

                            <div class="form-horizontal">

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label">Supplier</label>
                                                <input type="text" class="form-control" id="supplier" name="supplier" placeholder="Supplier">
                                                
                                                <label class="control-label">Status</label>
                                                <br>
                                                <label class="fancy-radio custom-color-blue"><input name="status" value="import" type="radio" checked><span><i></i>Import</span></label>
                                                <label class="fancy-radio custom-color-blue"><input name="status" value="export" type="radio"><span><i></i>Export</span></label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label">Nomor</label>
                                                <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor BTB">
                                                
                                                <label class="control-label">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REPEATER -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <!-- <form name="add_name" id="add_name"> -->
                                        <br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                    <thead>
                                                        <tr>
                                                            <th width="6%">No.</th>
                                                            <th>Kode Barang</th>
                                                            <th>Nama Barang</th>
                                                            <th>Kuantitas</th>
                                                            <th>Harga Satuan (Rp)</th>
                                                            <th>Jumlah (Rp)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" id="no" name="no" placeholder="No"></td>
                                                            <td><input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang"></td>
                                                            <td><input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang"></td>
                                                            <td><input type="text" class="form-control" id="kuantitas" name="kuantitas" placeholder="Kuantitas"></td>
                                                            <td><input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan"></td>
                                                            <td><input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah"></td>
                                                            <!-- <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td> -->
                                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input type="button" id="btn-simpan" class="btn btn-primary" value="Simpan" />
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <!-- AKHIR REPEATER -->

                    </div> {{-- akhir panel body --}}
                </div> {{-- akhir tabel user --}}

            </div> {{-- akhir col-md-12 --}}
        </div> {{-- akhir row --}}
    </div> {{-- akhir container fluid --}}

</div>
{{-- AKHIR MAIN CONTENT --}}
@endsection

@push('script')

<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="no" name="no" placeholder="No"></td><td><input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang"></td><td><input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang"></td><td><input type="text" class="form-control" id="kuantitas" name="kuantitas" placeholder="Kuantitas"></td><td><input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan"></td><td><input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){      
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
    
});
</script>

<script>
    // SIMPAN
    $("#btn-simpan").click(function(){
            swal({
            title: "Apakah Anda Yakin ?",
            text: "Data Bukti Terima Barang Ini Akan Disimpan ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#00a65a",
            confirmButtonText: "Ya, Yakin !",
            cancelButtonText: "Tidak, Batalkan !",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    url : "/",
                    type : "POST",
                    data : {
                        // "_token": "{{ csrf_token() }}",
                        // "kode_negara" : $("#tambah_kode_negara").val(),
                        // "nama_negara" : $("#tambah_nama_negara").val()
                    },
                    success : function(data, status){
                        if(status=="success"){
                            setTimeout(function(){
                                swal({
                                    title: "Sukses",
                                    text: "Data Tersimpan!",
                                    type: "success"
                                    },
                                    function(){
                                        table.ajax.reload();
                                    });
                                }, 1000);
                        }
                        // $('#modal-tambah').modal('hide');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        setTimeout(function(){
                            swal("Gagal", "Data Gagal Disimpan", "error");
                        }, 1000);
                    }
                });
            } else {
            swal('Dibatalkan', 'Data Bukti Terima Barang Batal Simpan', 'error');
            $('#modal-tambah').modal('hide');
            }
        });
    });
</script>

@endpush
