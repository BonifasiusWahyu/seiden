@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endpush

@section('title', 'BC 2.0')

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
            <li class="active-bread">BC 2.0</li>
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
                        <h3 class="panel-title">BC 2.0 Tambah</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <a class="btn btn-danger" href="{{ url('/bc_20') }}"><i class="fa fa-home"></i> Kembali</a>
                        </div>
                        <br>

                            <div class="form-horizontal">

                        <!-- awal wizard -->
                              <div id="demo-wizard" class="wizard">

                                <div class="steps-container">
                                  <ul class="steps">
                                    <li data-step="1" class="active"><span class="badge badge-info">1</span>HEADER<span class="chevron"></span></li>
                                    <li data-step="2"><span class="badge">2</span>FOOTER<span class="chevron"></span></li>
                                    <li data-step="3" class="last"><span class="badge">3</span>FINISH</li>
                                  </ul>
                                </div>

                                <div class="step-content">
                                  <div class="step-pane active" data-step="1">
                                    <form id="form1" data-parsley-validate novalidate>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kantor Pabean</label>
                                            <div class="col-sm-5">
                                                  <input type="text" class="form-control" id="kantor_pabean" name="kantor_pabean" placeholder="Kantor Pabean">
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nomor Pengajuan</label>
                                            <div class="col-sm-5">
                                                  <input type="text" class="form-control" id="nomor_pengajuan" name="nomor_pengajuan" placeholder="Nomor Pengajuan">
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal Pengajuan</label>
                                            <div class="col-sm-5">
                                                  <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" placeholder="Tanggal Pengajuan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">A. Jenis PIB</label>
                                            <div class="col-sm-10">

                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="a_biasa"> 1.Biasa
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="a_berkala"> 2.Berkala
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">B. Jenis Impor</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="b_dipakai"> 1.Untuk Dipakai
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="b_sementara"> 2.Sementara
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="b_pelayanan"> 5.Pelayanan Segera
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="b_gabungan"> 9.Gabungan 1 & 2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">C. Cara Pembayaran</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="c_biasa"> 1.Biasa/Tunai
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="c_berkala"> 2.Berkala
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="c_jaminan"> 3.Dengan Jaminan
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="c_lainnya"> 9.Lainnya
                                                </label>
                                            </div>
                                        </div>
                                        <br>

                                        <h4><b>D. DATA PEMBERITAHUAN</b></h4>
                                        <h5><b>PENGIRIM</b></h5>
                                        <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <!-- <h5><b>PENGIRIM</b></h5> -->
                                                <div class="col-sm-12">
                                                    <label class="control-label">1. Nama, Alamat</label>
                                                    <textarea type="text" class="form-control" id="pengirim_nama" name="pengirim_nama" placeholder="Nama, Alamat"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <h5><b>PENJUAL</b></h5>
                                                <div class="col-sm-12">
                                                    <label class="control-label">1a. Nama, Alamat</label>
                                                    <textarea type="text" class="form-control" id="penjual_nama" name="penjual_nama" placeholder="Nama, Alamat"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <h5><b>IMPORTIR</b></h5>
                                                <div class="col-sm-12">
                                                    <label class="control-label">2. Identitas</label>
                                                    <input type="text" class="form-control" id="importir_identitas" name="importir_identitas" placeholder="Identitas">
                                                
                                                    <label class="control-label">3. Nama, Alamat</label>
                                                    <textarea type="text" class="form-control" id="importir_nama" name="importir_nama" placeholder="Nama, Alamat"></textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">4. Status</label>
                                                    <input type="text" class="form-control" id="importir_status" name="importir_status" placeholder="Status">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">5. APIP</label>
                                                    <input type="text" class="form-control" id="importir_apip" name="importir_apip" placeholder="APIP">
                                                </div>
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <h5><b>PEMILIK BARANG</b></h5>
                                                <div class="col-sm-12">
                                                    <label class="control-label">2a. Identitas</label>
                                                    <input type="text" class="form-control" id="pemilik_identitas" name="pemilik_identitas" placeholder="Identitas">
                                               
                                                    <label class="control-label">3a. Nama, Alamat</label>
                                                    <textarea type="textarea" class="form-control" id="pemilik_nama" name="pemilik_nama" placeholder="Nama, Alamat"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <h5><b>PPJK</b></h5>
                                                <div class="col-sm-12">
                                                    <label class="control-label">6. NPWP</label>
                                                    <input type="text" class="form-control" id="ppjk_npwp" name="ppjk_npwp" placeholder="NPWP">
                                                
                                                    <label class="control-label">7. Nama, Alamat</label>
                                                    <textarea type="text" class="form-control" id="ppjk_nama" name="ppjk_nama" placeholder="Nama, Alamat"></textarea>
                                                
                                                    <label class="control-label">8. NP-PPJK</label>
                                                    <input type="text" class="form-control" id="ppjk_np_ppjk" name="ppjk_np_ppjk" placeholder="NP-PPJK">
                                                </div>
                                            </div>

                                        </div>
                                        </div>

                                        <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <div class="col-sm-6">
                                                    <label class="control-label">G. No.</label>
                                                    <input type="text" class="form-control" id="no" name="no" placeholder="No.">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">Tgl. Pendaftaran</label>
                                                    <input type="date" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran" placeholder="">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="control-label">9. Cara Pengangkutan</label>
                                                    <input type="text" class="form-control" id="cara_pengangkut" name="cara_pengangkut" placeholder="Cara Pengangkutan">
                                                
                                                    <label class="control-label">10. Nama Sarana Pengangkut & No. Voxy/Flight dan Bendera</label>
                                                    <input type="text" class="form-control" id="sarana_pengangkut" name="sarana_pengangkut" placeholder="Nama Sarana Pengangkut & No. Voxy/Flight dan Bendera">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">11. Perkiraan Tgl Tiba</label>
                                                    <input type="date" class="form-control" id="perkiraan_tiba" name="perkiraan_tiba" placeholder="Perkiraan Tgl Tiba">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="control-label">12. Pelabuhan Muat</label>
                                                    <input type="text" class="form-control" id="pelabuhan_muat" name="pelabuhan_muat" placeholder="Pelabuhan Muat">
                                                
                                                    <label class="control-label">13. Pelabuhan Transit</label>
                                                    <input type="text" class="form-control" id="pelabuhan_transit" name="pelabuhan_transit" placeholder="Pelabuhan Transit">
                                               
                                                    <label class="control-label">14. Pelabuhan Tujuan</label>
                                                    <input type="text" class="form-control" id="pelabuhan_tujuan" name="pelabuhan_tujuan" placeholder="Pelabuhan Tujuan">
                                                
                                                    <label class="control-label">15. Invoive</label>
                                                    <input type="text" class="form-control" id="invoice" name="invoice" placeholder="Invoice">

                                                    <label class="control-label">16. Transaksi</label>
                                                    <input type="text" class="form-control" id="transaksi" name="transaksi" placeholder="Transaksi">

                                                    <label class="control-label">17. House-BL/AWB</label>
                                                    <input type="text" class="form-control" id="house_bl" name="house_bl" placeholder="House-BL/AWB">

                                                    <label class="control-label">Master-BL/AWB</label>
                                                    <input type="text" class="form-control" id="master_bl" name="master_bl" placeholder="Master-BL/AWB">

                                                    <label class="control-label">18. BCL1</label>
                                                    <input type="text" class="form-control" id="bcl1" name="bcl1" placeholder="BCL1">

                                                    <label class="control-label">19. Pemenuhan Persyaratan/Fasilitas Impor</label>
                                                    <input type="text" class="form-control" id="pemenuhan_persyaratan" name="pemenuhan_persyaratan" placeholder="Pemenuhan Persyaratan/Fasilitas Impor">
                                                
                                                    <label class="control-label">20. Tempat Penimbunan</label>
                                                    <input type="text" class="form-control" id="tempat_penimbunan" name="tempat_penimbunan" placeholder="Tempat Penimbunan">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">21. Valuta</label>
                                                    <input type="text" class="form-control" id="valuta" name="valuta" placeholder="Valuta">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">22. NDPBM</label>
                                                    <input type="text" class="form-control" id="ndpbm" name="ndpbm" placeholder="NDPBM">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="control-label">23. Nilai</label>
                                                    <input type="text" class="form-control" id="nilai" name="nilai" placeholder="nilai">

                                                    <label class="control-label">24. Asuransi LN/DN</label>
                                                    <input type="text" class="form-control" id="asuransi" name="asuransi" placeholder="Asuransi">

                                                    <label class="control-label">25. Freight</label>
                                                    <input type="text" class="form-control" id="freight" name="freight" placeholder="Freight">
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                    </form>
                                  </div>



                                  <div class="step-pane" data-step="2">
                                    <form id="form2" data-parsley-validate novalidate>
                                      <div class="row">
                                        <div class="col-sm-12">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kantor Pabean</label>
                                            <div class="col-sm-5">
                                                  <input type="text" class="form-control" id="kantor_pabean" name="kantor_pabean" placeholder="Kantor Pabean">
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nomor Pengajuan</label>
                                            <div class="col-sm-5">
                                                  <input type="text" class="form-control" id="nomor_pengajuan" name="nomor_pengajuan" placeholder="Nomor Pengajuan">
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nomor Pendaftaran</label>
                                            <div class="col-sm-5">
                                                  <input type="text" class="form-control" id="nomor_pendaftaran" name="nomor_pendaftaran" placeholder="Nomor Pendaftaran">
                                              </div>
                                        </div>

                                        <br>

                                        <!-- REPEATER -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <!-- <form name="add_name" id="add_name"> -->
                                                <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover" id="dynamic_field">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5%">31.No.</th>
                                                                    <th>32.-Pos Tarif/HS <br>-Uraian Jenis Barang, Merek, Type, spesifikasi wajib <br>-Negara Asal Barang</th>
                                                                    <th>33.Keterangan <br>-Fasilitas & No. Urut <br>-Persyaratan & No. Urut</th>
                                                                    <th>34.Tarif & Fasilitas</th>
                                                                    <th>35.-Jumlah % Jenis <br>-Berat bersih (kg) <br>Jumlah & Jenis Kemasan</th>
                                                                    <th>36.-Nilai Pabean <br>-Jenis <br>-Nilai yang ditambahkan <br>-Jatuh Tempo</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="text" class="form-control" id="31_no" name="31_no" placeholder="No"></td>
                                                                    <td><input type="text" class="form-control" id="32_pos_tarif" name="32_pos_tarif" placeholder="Pos Tarif"></td>
                                                                    <td><input type="text" class="form-control" id="33_keterangan" name="33_keterangan" placeholder="Keterangan"></td>
                                                                    <td><input type="text" class="form-control" id="34_tarif_fasilitas" name="34_tarif_fasilitas" placeholder="Tarif Fasilitas"></td>
                                                                    <td><input type="text" class="form-control" id="35_jumlah_jenis" name="35_jumlah_jenis" placeholder="Jumlah Jenis"></td>
                                                                    <td><input type="text" class="form-control" id="36_nilai_pabean" name="36_nilai_pabean" placeholder="Nilai Pabean"></td>
                                                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- <input type="button" name="submit" id="submit" class="btn btn-primary" value="Simpan" /> -->
                                                    </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                        <!-- AKHIR REPEATER -->

                                        </div>
                                      </div>
                                    </form>
                                  </div>

                                  <div class="step-pane" data-step="3">
                                    <p class="lead"><i class="fa fa-check-circle text-success"></i> Klik Next untuk menyimpan data.</p>
                                  </div>
                                </div>
                                <div class="actions">
                                  <button type="button" class="btn btn-default btn-prev"><i class="fa fa-arrow-left"></i> Prev</button>
                                  <button type="button" class="btn btn-primary btn-next">Next <i class="fa fa-arrow-right"></i></button>
                                </div>
                              </div>
                              <!-- akhir wizard -->

                            </div>

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
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="31_no" name="31_no" placeholder="No"></td><td><input type="text" class="form-control" id="32_pos_tarif" name="32_pos_tarif" placeholder="Pos Tarif"></td><td><input type="text" class="form-control" id="33_keterangan" name="33_keterangan" placeholder="Keterangan"></td><td><input type="text" class="form-control" id="34_tarif_fasilitas" name="34_tarif_fasilitas" placeholder="Tarif Fasilitas"></td><td><input type="text" class="form-control" id="35_jumlah_jenis" name="35_jumlah_jenis" placeholder="Jumlah Jenis"></td><td><input type="text" class="form-control" id="36_nilai_pabean" name="36_nilai_pabean" placeholder="Nilai Pabean"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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

@endpush
