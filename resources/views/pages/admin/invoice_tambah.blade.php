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
                        <h3 class="panel-title">Invoice Tambah</h3>
                    </div>
                    {{-- awal panel body --}}
                    <div class="panel-body">
                        <div class="text-right">
                            <a class="btn btn-danger" href="{{ url('/invoice') }}"><i class="fa fa-home"></i> Kembali</a>
                        </div>
                        <br>

                            <div class="form-horizontal">

                        <!-- awal wizard -->
                              <div id="demo-wizard" class="wizard">
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
                                    <form id="form1" data-parsley-validate novalidate>
                                      <!-- <p>Header</p> -->

                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Consignee</label>
                                          <div class="col-sm-5">
                                              <textarea type="text" class="form-control" id="consignee" name="consignee" placeholder="PT Seidensticker Indonesia"></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Shipped Per</label>
                                          <div class="col-sm-5">
                                              <input type="text" class="form-control" id="shipped_per" name="shipped_per" placeholder="Shipped Per">
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Form</label>
                                          <div class="col-sm-5">

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
                                          <label class="col-sm-2 control-label">INVOICE NO</label>
                                          <div class="col-sm-5">
                                              <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="INVOICE NO">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">DATE</label>
                                          <div class="col-sm-5">
                                              <input type="date" class="form-control" id="date" name="date" placeholder="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Payment Term</label>
                                          <div class="col-sm-5">
                                              <input type="text" class="form-control" id="payment_term" name="payment_term" placeholder="Payment Term">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">Sailing Date</label>
                                          <div class="col-sm-5">
                                              <input type="date" class="form-control" id="sailing_date" name="sailing_date" placeholder="">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label">TO</label>
                                          <div class="col-sm-5">
                                              <input type="text" class="form-control" id="to" name="to" placeholder="TO">
                                          </div>
                                      </div>
                                    </form>
                                  </div>


                                  <div class="step-pane" data-step="2">
                                    <form id="form2" data-parsley-validate novalidate>
                                      <!-- <div class="row">
                                        <div class="col-sm-12"> -->

                                        <!-- REPEATER -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <!-- <form name="add_name" id="add_name"> -->
                                                <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover" id="dynamic_field">
                                                            <thead>
                                                                <tr>
                                                                    <th>Cotton Fabric</th>
                                                                    <th>ART NO./COL NO.</th>
                                                                    <th>Quantity (M)</th>
                                                                    <th>UNITE PRICE (USD/M)</th>
                                                                    <th>Amount (USD)</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="text" class="form-control" id="fot_cotton" name="fot_cotton" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="fot_art" name="fot_art" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="fot_qty" name="fot_qty" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="fot_unite_price" name="fot_unite_price" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="fot_amount" name="fot_amount" placeholder="-"></td>
                                                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                        <!-- AKHIR REPEATER -->

                                        <!-- </div>
                                      </div> -->
                                    </form>
                                  </div>

                                  <div class="step-pane" data-step="3">
                                    <form id="form3" data-parsley-validate novalidate>

                                        <!-- REPEATER -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <!-- <form name="add_name" id="add_name"> -->
                                                <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover" id="dynamic_field1">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5%">CT/NO</th>
                                                                    <th>ORDER NO</th>
                                                                    <th>PATN</th>
                                                                    <th width="5%">COL.NO</th>
                                                                    <th width="5%">D/N</th>
                                                                    <th width="5%">RLS</th>
                                                                    <th>QTY (YDS)</th>
                                                                    <th width="8%">N.W. (KGS)</th>
                                                                    <th width="8%">G.W. (KGS)</th>
                                                                    <th width="8%">MEAS. (CBM)</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="text" class="form-control" id="pl_ct" name="pl_ct" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_order" name="pl_order" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_patn" name="pl_patn" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_col" name="pl_col" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_dn" name="pl_dn" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_rls" name="pl_rls" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_qty" name="pl_qty" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_nw" name="pl_nw" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_gw" name="pl_gw" placeholder="-"></td>
                                                                    <td><input type="text" class="form-control" id="pl_meas" name="pl_meas" placeholder="-"></td>
                                                                    <td><button type="button" name="add1" id="add1" class="btn btn-success">Add</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                        <!-- AKHIR REPEATER -->

                                    </form>
                                  </div>

                                  <div class="step-pane" data-step="4">
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
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="fot_cotton" name="fot_cotton" placeholder="-"></td><td><input type="text" class="form-control" id="fot_art" name="fot_art" placeholder="-"></td><td><input type="text" class="form-control" id="fot_qty" name="fot_qty" placeholder="-"></td><td><input type="text" class="form-control" id="fot_unite_price" name="fot_unite_price" placeholder="-"></td><td><input type="text" class="form-control" id="fot_amount" name="fot_amount" placeholder="-"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $('#add1').click(function(){
        i++;
        $('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="pl_ct" name="pl_ct" placeholder="-"></td><td><input type="text" class="form-control" id="pl_order" name="pl_order" placeholder="-"></td><td><input type="text" class="form-control" id="pl_patn" name="pl_patn" placeholder="-"></td><td><input type="text" class="form-control" id="pl_col" name="pl_col" placeholder="-"></td><td><input type="text" class="form-control" id="pl_dn" name="pl_dn" placeholder="-"></td><td><input type="text" class="form-control" id="pl_rls" name="pl_rls" placeholder="-"></td><td><input type="text" class="form-control" id="pl_qty" name="pl_qty" placeholder="-"></td><td><input type="text" class="form-control" id="pl_nw" name="pl_nw" placeholder="-"></td><td><input type="text" class="form-control" id="pl_gw" name="pl_gw" placeholder="-"></td><td><input type="text" class="form-control" id="pl_meas" name="pl_meas" placeholder="-"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    // $('#submit').click(function(){      
    //     $.ajax({
    //         url:"name.php",
    //         method:"POST",
    //         data:$('#add_name').serialize(),
    //         success:function(data)
    //         {
    //             alert(data);
    //             $('#add_name')[0].reset();
    //         }
    //     });
    // });
    
});
</script>

@endpush
