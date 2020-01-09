@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endpush

@section('title', 'Purchase Order')

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
            <li class="active-bread">Purchase Order</li>
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
                        <h3 class="panel-title">Purchase Order Tambah</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <a class="btn btn-danger" href="{{ url('/purchase_order') }}"><i class="fa fa-home"></i> Kembali</a>
                        </div>
                        <br>

                            <div class="form-horizontal">

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label">No</label>
                                                <input type="text" class="form-control" id="no" name="no" placeholder="No">
                                                <label class="control-label">To</label>
                                                <textarea type="text" class="form-control" id="to" name="to" placeholder="To"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label">Date</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
                                                <label class="control-label">Due Date</label>
                                                <input type="date" class="form-control" id="due_date" name="due_date" placeholder="">
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
                                                            <th width="5%">No.</th>
                                                            <th>Type</th>
                                                            <th>Article</th>
                                                            <th width="8%">Quantity</th>
                                                            <th>Unit Price (IDR)</th>
                                                            <th>Amount</th>
                                                            <th>Note</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" id="no" name="no" placeholder="No"></td>
                                                            <td><input type="text" class="form-control" id="type" name="type" placeholder="Type"></td>
                                                            <td><input type="text" class="form-control" id="article" name="article" placeholder="Article"></td>
                                                            <td><input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"></td>
                                                            <td><input type="text" class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price"></td>
                                                            <td><input type="text" class="form-control" id="amount" name="amount" placeholder="Amount"></td>
                                                            <td><input type="text" class="form-control" id="note" name="note" placeholder="Note"></td>
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
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="no" name="no" placeholder="No"></td><td><input type="text" class="form-control" id="type" name="type" placeholder="Type"></td><td><input type="text" class="form-control" id="article" name="article" placeholder="Article"></td><td><input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"></td><td><input type="text" class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price"></td><td><input type="text" class="form-control" id="amount" name="amount" placeholder="Amount"></td><td><input type="text" class="form-control" id="note" name="note" placeholder="Note"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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
            text: "Data Purchase Order Ini Akan Disimpan ",
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
            swal('Dibatalkan', 'Data Purchase Batal Simpan', 'error');
            $('#modal-tambah').modal('hide');
            }
        });
    });
</script>

@endpush
