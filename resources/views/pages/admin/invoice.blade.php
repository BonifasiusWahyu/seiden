@extends('layouts.layout')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endpush

@section('title', 'Invoice')

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
            <li class="active-bread">Invoice</li>
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
                        <h3 class="panel-title">Invoice</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <a class="btn btn-primary" href="{{ url('/invoice/tambah') }}"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                        <br>
                        {{-- awal pembungkus tabel user --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed table-striped" id="myTable">

                            </table>
                        </div> {{-- akhir pembungkus tabel user --}}
                    </div> {{-- akhir panel body --}}
                </div> {{-- akhir tabel user --}}

            </div> {{-- akhir col-md-12 --}}
        </div> {{-- akhir row --}}
    </div> {{-- akhir container fluid --}}

</div>
{{-- AKHIR MAIN CONTENT --}}

  <!-- {{-- AWAL MODAL TAMBAH INVOICE --}}
  <div class="modal fade" id="modal-tambah">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Tambah Data Invoice</h4>
              </div>
              <div class="modal-body">
                  <form action="" method="POST" class="form-horizontal" role="form" id="formTambah">
                      <div class="row">
                          <div class="col-sm-12"> -->

                            <!-- awal wizard -->

                              <!-- <div id="demo-wizard" class="wizard">
                                <div class="steps-container">
                                  <ul class="steps">
                                    <li data-step="1" class="active"><span class="badge badge-info">1</span>HEADER<span class="chevron"></span></li>
                                    <li data-step="2"><span class="badge">2</span>FOOTER<span class="chevron"></span></li>
                                    <li data-step="3"><span class="badge">3</span>PACKING LIST<span class="chevron"></span></li>
                                    <li data-step="4" class="last"><span class="badge">4</span>FINISH</li>
                                  </ul>
                                </div>

                                <div class="step-content">
                                  <div class="step-pane active" data-step="1">
                                    <form id="form1" data-parsley-validate novalidate> -->

                                      <!-- <p>Header</p> -->

                                      <!-- <div class="form-group">
                                          <label class="col-sm-3 control-label">Consignee</label>
                                          <div class="col-sm-8">
                                              <textarea type="text" class="form-control" id="consignee" name="consignee" placeholder="PT Seidensticker Indonesia"></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Shipped Per</label>
                                          <div class="col-sm-8">
                                              <input type="text" class="form-control" id="shipped_per" name="shipped_per" placeholder="-">
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Form</label>
                                          <div class="col-sm-8">

                                            <select id="select-placeholder-single" style="width: 100%;">
                                              <option></option>
                                                <option value="AD">Andorra</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AG">Antigua And Barbuda</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AL">Albania</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="AO">Angola</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AT">Austria</option>
                                                <option value="AU">Australia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BA">Bosnia And Herzegovina</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BI">Burundi</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BR">Brazil</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BZ">Belize</option>
                                                <option value="CA">Canada</option>
                                                <option value="CC">Cocos (keeling) Islands</option>
                                                <option value="CD">Congo, The Democratic Republic Of The</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="CG">Congo</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="CI">Cote D'ivoire</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CL">Chile</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CN">China</option>
                                                <option value="CO">Colombia</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EE">Estonia</option>
                                                <option value="EG">Egypt</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="ES">Spain</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FI">Finland</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FK">Falkland Islands (malvinas)</option>
                                                <option value="FM">Micronesia, Federated States Of</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FR">France</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GE">Georgia</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="GR">Greece</option>
                                                <option value="GS">South Georgia And The South Sandwich Isl</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GU">Guam</option>
                                                <option value="GW">Guinea-bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HM">Heard Island And Mcdonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HR">Croatia</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HU">Hungary</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IN">India</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IR">Iran, Islamic Republic Of</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JO">Jordan</option>
                                                <option value="JP">Japan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KM">Comoros</option>
                                                <option value="KN">Saint Kitts And Nevis</option>
                                                <option value="KP">Korea, Democratic People's Republic Of</option>
                                                <option value="KR">Korea, Republic Of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="KZ">Kazakstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MD">Moldova, Republic Of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic</option>
                                                <option value="ML">Mali</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MO">Macau</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MT">Malta</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="MW">Maldives</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MX">Mexico</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NE">Niger</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NO">Norway</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NU">Niue</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="OM">Oman</option>
                                                <option value="PA">Panama</option>
                                                <option value="PE">Peru</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PL">Poland</option>
                                                <option value="PM">Saint Pierre And Miquelon</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PW">Palau</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SE">Sweden</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SJ">Svalbard And Jan Mayen</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SO">Somalia</option>
                                                <option value="SR">Suriname</option>
                                                <option value="ST">Sao Tome And Principe</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="TC">Turks And Caicos Islands</option>
                                                <option value="TD">Chad</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="TG">Togo</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TP">East Timor</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TT">Trinidad And Tobago</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="TW">Taiwan, Province Of China</option>
                                                <option value="TZ">Tanzania, United Republic Of</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="US">United States</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VA">Holy See (vatican City State)</option>
                                                <option value="VC">Saint Vincent And The Grenadines</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.s.</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="WF">Wallis And Futuna</option>
                                                <option value="WS">Samoa</option>
                                                <option value="YE">Yemen</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="YU">Yugoslavia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">INVOICE NO</label>
                                          <div class="col-sm-8">
                                              <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">DATE</label>
                                          <div class="col-sm-8">
                                              <input type="date" class="form-control" id="date" name="date" placeholder="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Payment Term</label>
                                          <div class="col-sm-8">
                                              <input type="text" class="form-control" id="payment_term" name="payment_term" placeholder="-">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Sailing Date</label>
                                          <div class="col-sm-8">
                                              <input type="date" class="form-control" id="sailing_date" name="sailing_date" placeholder="-">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-3 control-label">Shipped Per</label>
                                          <div class="col-sm-8">
                                              <input type="text" class="form-control" id="shipped_per" name="shipped_per" placeholder="-">
                                          </div>
                                      </div>
                                    </form>
                                  </div>


                                  <div class="step-pane" data-step="2">
                                    <form id="form2" data-parsley-validate novalidate>
                                      <div class="row">
                                        <div class="col-sm-12"> -->

                                    <!-- REPEATER -->

                                        <!-- <div class="col-sm-12"> -->

                                            <!-- Repeater Html Start -->

                                            <!-- <div id="repeater"> -->

                                                <!-- Repeater Heading -->

                                                <!-- <div class="repeater-heading">
                                                    <button class="btn btn-primary pt-5 pull-right repeater-add-btn">
                                                        Add
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div> -->
                                                
                                                <!-- Repeater Items -->

                                                <!-- <div class="items" data-group="test"> -->

                                                    <!-- Repeater Content -->

                                                <!-- <table id="datatable-column-reorder" class="table table-hover table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th>Cotton Fabric</th>
                                                        <th>ART NO./COL NO.</th>
                                                        <th>Quantity (M)</th>
                                                        <th>UNITE PRICE (USD/M)</th>
                                                        <th>Amount (USD)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                      </tr>
                                                    </tbody>
                                                </table> -->                  

                                                    <!-- Repeater Remove Btn -->

                                                    <!-- <div class="pull-right repeater-remove-btn">
                                                        <button class="btn btn-danger remove-btn">
                                                            Remove
                                                        </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="items" data-group="test"> -->

                                                    <!-- Repeater Content -->

                                                <!-- <table id="datatable-column-reorder" class="table table-hover table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th>Cotton Fabric</th>
                                                        <th>ART NO./COL NO.</th>
                                                        <th>Quantity (M)</th>
                                                        <th>UNITE PRICE (USD/M)</th>
                                                        <th>Amount (USD)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                      </tr>
                                                    </tbody>
                                                </table>      -->   

                                                    <!-- Repeater Remove Btn -->

                                                    <!-- <div class="pull-right repeater-remove-btn">
                                                        <button class="btn btn-danger remove-btn">
                                                            Remove
                                                        </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="items" data-group="test"> -->

                                                    <!-- Repeater Content -->

                                                <!-- <table id="datatable-column-reorder" class="table table-hover table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th>Cotton Fabric</th>
                                                        <th>ART NO./COL NO.</th>
                                                        <th>Quantity (M)</th>
                                                        <th>UNITE PRICE (USD/M)</th>
                                                        <th>Amount (USD)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                        <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="-"></td>
                                                      </tr>
                                                    </tbody>
                                                </table>   -->        

                                                    <!-- Repeater Remove Btn -->

                                                    <!-- <div class="pull-right repeater-remove-btn">
                                                        <button class="btn btn-danger remove-btn">
                                                            Remove
                                                        </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div> -->

                                            <!-- </div> -->

                                            <!-- Repeater End -->

                                        <!-- </div> -->

                                    <!-- AKHIR REPEATER -->

                                        <!-- </div>
                                      </div>
                                    </form>
                                  </div>

                                  <div class="step-pane" data-step="3">
                                    <form id="form3" data-parsley-validate novalidate>
                                      <div class="fancy-checkbox">
                                        <label><input type="checkbox" name="newsletter"><span>Subscribe to monthly newsletter</span></label>
                                      </div>
                                      <div class="fancy-checkbox">
                                        <label><input type="checkbox" name="terms"><span>I accept the <a href="#">Terms &amp; Agreements</a></span></label>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="step-pane" data-step="4">
                                    <p class="lead"><i class="fa fa-check-circle text-success"></i> All is well! Click "Create My Account" to complete.</p>
                                  </div>
                                </div>
                                <div class="actions">
                                  <button type="button" class="btn btn-default btn-prev"><i class="fa fa-arrow-left"></i> Prev</button>
                                  <button type="button" class="btn btn-primary btn-next">Next <i class="fa fa-arrow-right"></i></button>
                                </div>
                              </div> -->

                            <!-- akhir wizard -->

                          <!-- </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  {{-- AKHIR MODAL TAMBAH INVOICE --}} -->

@endsection

@push('script')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>

<script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
</script>

<script>
var satker = "";
$(function(){
    'use strict';
     var table = $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
            type : "GET",
            url : "/user/show"
        },
        "columns": [
            {
                title: "No",
                data: "DT_Row_Index",
                name: "DT_Row_Index",
                orderable: false,
                searchable: false,
                width: "1%"
            },
            {
                title: 'SHIPPED PER',
                data: 'username',
                defaultContent: "-",
                name: 'username'
            },
            {
                title: 'FROM',
                data: 'dipa_nama_pengguna',
                defaultContent: "-",
                name: 'dipa_nama_pengguna'
            },
            {
                title: 'INVOICE NO',
                data: null,
                defaultContent: "-",
                name: 'dipa_jenis_pengguna',
                render: function (data) {
                    var status = '';
                    if (data['dipa_jenis_pengguna'] == 1) {
                        status = '<div class="text-center">ADMIN</div>';
                    } else if (data['dipa_jenis_pengguna'] == 2) {
                        status = '<div class="text-center">KPA</div>';
                    } else if (data['dipa_jenis_pengguna'] == 3) {
                        status = '<div class="text-center">PPK</div>';
                    } else if (data['dipa_jenis_pengguna'] == 4) {
                        status = '<div class="text-center">STAF (SATKER)</div>';
                    } else if (data['dipa_jenis_pengguna'] == 5) {
                        status = '<div class="text-center">PPSPM</div>';
                    } else if (data['dipa_jenis_pengguna'] == 6) {
                        status = '<div class="text-center">OP. SIMAK</div>';
                    } else if (data['dipa_jenis_pengguna'] == 7) {
                        status = '<div class="text-center">OP. SAIBA</div>';
                    } else if (data['dipa_jenis_pengguna'] == 8) {
                        status = '<div class="text-center">OP. Perlengkapan</div>';
                    } else {
                        status = '<div class="text-center">Bendahara</div>';
                    }
                    return status.replace();
                },
                width: "10%",
                orderable: false
            },

            {
                title: 'DATE',
                data: 'satuan_kerja.dipa_satuan_kerja',
                defaultContent: "-",
                name: 'satuanKerja.dipa_satuan_kerja',
                orderable: false
            },
            {
                title: 'SAILING DATE',
                data: null,
                defaultContent: "-",
                name: 'dipa_pengguna_status',
                render: function (data) {
                    var status = '';
                    if(data['dipa_pengguna_status'] == 1) {
                        status = "<div class='text-center'><span class='label label-success' style='font-size:12px'>Aktif</span></div>";
                    } else {
                        status = "<div class='text-center'><span class='label label-danger' style='font-size:12px'>Tidak Aktif</span></div>";
                    }
                    return status.replace();
                },
                width: "12%",
                orderable: false,
                searchable: false
            },
            {
                title: '<div class="text-center">ACTION</div>',
                data: null,
                name: 'action',
                render: function (data) {
                    var actions = '';
                    var param = '';
                    if (data['dipa_jenis_pengguna'] == 1) {
                        param = 'disabled';
                    }
                    actions = `<button class='btn btn-warning btn-sm ubah-user' data-toggle='modal' data-id='${data['dipa_id_pengguna']}' href='#modal-ubah'><i class='fa fa-pencil'></i> Ubah</button>
                                <button class='btn btn-danger btn-sm hapus-user' data-toggle='modal' data-id='${data['dipa_id_pengguna']}' ${param}><i class='fa fa-trash'></i> Hapus</button>`;
                    return actions.replace();
                },
                width: "13%",
                orderable: false,
                searchable: false
            }


        ],
    });
    //APABILA PPK DAN STAFF
    $("#tambah_jenis_user").change(function(){
        if($(this).val() == 3 || $(this).val() == 4) {
            $('#label_satker').show(200);
            $('#tambah_satker_user').show(200);
            if(satker == ""){
                loadSatker($('#tambah_satker_user', null));
            }
        } else {
            $('#label_satker').hide(200);
            $('#tambah_satker_user').hide(200);
            $('#tambah_satker_user').val(null);
        }
    });
    $("#ubah_jenis_user").change(function(){
        if($(this).val() == 3 || $(this).val() == 4) {
            $('#ubah_label_satker').show(200);
            $('#ubah_satker_user').show(200);
            if(satker == ""){
                loadSatker($('#ubah_satker_user'), null);
            }
        } else {
            $('#ubah_label_satker').hide(200);
            $('#ubah_satker_user').hide(200);
            $('#ubah_satker_user').val(null);
        }
    });
    //SWEET TAMBAH
     $("#btn-simpan").click(function(){
            swal({
            title: "Apakah Anda Yakin ?",
            text: "Data Satuan Kerja Ini Akan Disimpan ",
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
                    url : "/user/store",
                    type : "POST",
                    data : {
                        "_token": "{{ csrf_token() }}",
                        "username" : $("#tambah_username").val(),
                        "nama_user" : $("#tambah_nama_lengkap").val(),
                        "password" : $("#tambah_password").val(),
                        "status" : $('input[name=tambah_status]:checked', '#formTambah').val(),
                        "jenis" : $("#tambah_jenis_user").val(),
                        "satker_user" : $('#tambah_satker_user').val()
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
                        $('#modal-tambah input select').val('');
                        $('#modal-tambah').modal('hide');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        setTimeout(function(){
                            swal("Gagal", "Data Gagal Disimpan", "error");
                        }, 1000);
                    }
                });
            } else {
            swal('Dibatalkan', 'Data Satuan Kerja Batal Simpan :)', 'error');
            $('#modal-tambah').modal('hide');
            }
        });
    });

    // UBAH
    $("#myTable").on('click','.ubah-user', function(){
        $.get("/user/get/"+$(this).data('id'), function(data, status){
            if(status == 'success'){
                $("#ubah_username").val(data['username']);
                $("#ubah_nama_lengkap").val(data['dipa_nama_pengguna']);
                $("#ubah_jenis_user").val(data['dipa_jenis_pengguna']);
                if(data['dipa_pengguna_status'] == 1) {
                    $('#ubah_tidak_aktif').prop('checked', false);
                    $("#ubah_aktif").prop('checked', true);
                } else {
                    $('#ubah_aktif').prop('checked', false);
                    $("#ubah_tidak_aktif").prop('checked', true);
                }
                if(data['dipa_jenis_pengguna'] == 1) {
                    $('#ubah_tidak_aktif').prop('disabled', true);
                    $("#ubah_aktif").prop('disabled', true);
                }
                $("#id_binding").val(data['dipa_id_pengguna']);
                if(data['dipa_jenis_pengguna'] == 3 || data['dipa_jenis_pengguna'] == 4) {
                    $('#ubah_label_satker').show(200);
                    $('#ubah_satker_user').show(200);
                    loadSatker($('#ubah_satker_user'),data['dipa_id_satuan_kerja']);
                    //$("#ubah_satker_user").append('<option value="'+data['dipa_id_satuan_kerja']+'" selected>'+data['satuan_kerja']['dipa_kode_satuan_kerja']+' - '+data['satuan_kerja']['dipa_satuan_kerja']+'</option>');
                } else {
                    $('#ubah_label_satker').hide(200);
                    $('#ubah_satker_user').hide(200);
                    $('#ubah_satker_user').val('');
                }

            }
        });
    });

    $("#btn-ubah-simpan").click(function(){
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Data Satuan Kerja Ini Akan Diubah ",
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
                    url : "/user/update/"+$("#id_binding").val(),
                    type : "PUT",
                    data : {
                        "_token": "{{ csrf_token() }}",
                        "username" : $("#ubah_username").val(),
                        "nama_user" : $("#ubah_nama_lengkap").val(),
                        "status" : $('input[name=ubah_status]:checked', '#ubahForm').val(),
                        "jenis" : $("#ubah_jenis_user").val(),
                        "satker_user" : $('#ubah_satker_user').val()
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
                        $('#modal-ubah').modal('hide');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        setTimeout(function(){
                            swal("Gagal", "Data Gagal Diubah", "error");
                        }, 1000);
                    }
                });
            } else {
            swal('Dibatalkan', 'Data Satuan Kerja Batal Simpan :)', 'error');
                $('#modal-tambah').modal('hide');
            }
        });
    });

//HAPUS
$("#myTable").on('click','.hapus-user', function(){
    var data = $(this).data('id');
    swal({
            title: "Apakah Anda Yakin ?",
            text: "Data user akan di hapus PERMANEN ! ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "red",
            confirmButtonText: "Ya, Yakin !",
            cancelButtonText: "Tidak, Batalkan !",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    url : "/user/delete/"+data,
                    type : "delete",
                    data : {
                        "_token": "{{ csrf_token() }}"
                    },
                    success : function(data, status){
                        if(status=="success"){
                            setTimeout(function(){
                                swal({
                                    title: "Sukses",
                                    text: "Data Terhapus!",
                                    type: "success"
                                    },
                                    function(){
                                        table.ajax.reload();
                                    });
                                }, 1000);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        setTimeout(function(){
                            swal("Error deleting!", "Please try again", "error");
                        }, 1000);
                    }
                });
            } else {
            swal('Dibatalkan', 'Data tidak dihapus :)', 'error');
            }
        });
});

    $('#modal-tambah').on('hidden.bs.modal', function (e) {
      $(this)
        .find("input[type='text'], select")
        .val('')
        .end()
    });

});

function loadSatker(e,f){
    $.get("/satuan-kerja/get", function(data, status){
        if(status == 'success') {
            if(f == null){
                satker += "<option selected>- Pilih Satuan Kerja -</option>";
                for(var i = 0; i < data.length; i++) {
                    satker += '<option value="'+data[i]['dipa_id_satuan_kerja']+'">'+data[i]['dipa_kode_satuan_kerja']+' - '+data[i]['dipa_satuan_kerja']+'</option>';
                }
                e.append(satker);
            } else {
                var satker2;
                for(var i = 0; i < data.length; i++) {
                    if(data[i]['dipa_id_satuan_kerja']==f){
                        satker2 += '<option value="'+data[i]['dipa_id_satuan_kerja']+'" selected>'+data[i]['dipa_kode_satuan_kerja']+' - '+data[i]['dipa_satuan_kerja']+'</option>';
                    } else {
                        satker2 += '<option value="'+data[i]['dipa_id_satuan_kerja']+'">'+data[i]['dipa_kode_satuan_kerja']+' - '+data[i]['dipa_satuan_kerja']+'</option>';
                    }
                }
                e.empty();
                e.append(satker2);
            }
        }
    });
}
</script>
@endpush
