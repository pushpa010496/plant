@extends('../layouts/pages')

@section('style')

@endsection

@section('content')

<div role="main" id="company-profile">

    <div class="container" style="margin-top:80px;">

        <div class="pt-2">

            <h1 class="text-center main-title"><span class="font-weight-bold"

                    style='color: #92278f;font-size:24px;'>{{$product_landingpages->title}}</span></h1>



       <p>{!! $product_landingpages->description !!}</p>

            <h2 class="text-center main-title"><span class="font-weight-bold"

                    style='color: #92278f;font-size:24px;'>Find our exclusive {{$product_landingpages->title}}

                </span></h2>



        </div>

    </div>

    <div class="container">

    <div class="row pb-2" id="products-load">

               @foreach($products as $product)

               @php

               $profile = App\CompanyProfile::where('id',$product->company_profile_id)->first();

              

               @endphp

                          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-4 px-3">

                                <div class="container border p-0" style="box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; ">

                                    <a href="{{url('products/'.$profile->url.'/'.$product->url)}}" target="_blank">

                                       <img class="img-fluid w-100" style="border-radius: 0.6rem 0.6rem 0 0;" src="{{config('app.url').'suppliers/'.str_slug(@$profile->company->comp_name).'/products/'.$product->small_image}}" alt="{{$product->title}}">

                                    </a>

                                    

                                  <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 62px;max-height: 62px;overflow: hidden;">

                                    <h2 class="small text-center">

                                      <a href="{{url('products/'.$profile->url.'/'.$product->url)}}" class="text-secondary font-weight-bold" style="font-size: 15px;" target="_blank">

                                        {{$product->title}}</a>

                                    </h2>

                                  </div>

                                                    

                                  <div class="text-center d-flex pb-3">

                                    <button type="button" class="btn mx-3 w-100 bg-white font-weight-bold rounded" style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal" data-target="#enquiry" data-company_name="{{@$profile->company->comp_name}}" data-company_id="{{$product->company_id}}" data-prod_name="{{$product->title}}" data-product_id="{{$product->id}}" data-subject_client="{{$product->title}} - Enquiry Submitted | Plantautomation Technology" data-subject_admin="Landing Page  Plantautomation Technology" data-page="product landing page">

                                      <img src="https://industry.plantautomation-technology.com/img/enquiry.png" alt="" srcset="">

                                      Contact Supplier</button>

                                  </div>

                              

                                  

                                   <div class="justify-content-end d-flex px-3 pb-3">

                                    <a href="{{url('products/'.$profile->url.'/'.$product->url)}}" target="_blank" style='color:#92278f;'>more details</a>

                                  </div>

                                </div>

                              </div>

            @endforeach

                      </div>

    </div>

</div>

 

<!-- Modal -->

<div id="product_for_review" class="modal fade show" role="dialog" style="padding-right: 17px; display: none;">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title text-success">success</h4>

                <button type="button" class="close" data-dismiss="modal">×</button>



            </div>

            <div class="modal-body">

                <p class="" id="success"></p>

                <br> Happy Surfing!

                <p>Sincerely Plantautomation Technology</p>

                <p class="mb-0">Regards,</p>

                <p class="mb-0">Client Success Team (CRM),</p>

                <img src="https://industry.plantautomation-technology.com/img/main-logo.png" width="150px">

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

 <!--End Modal -->



<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header m-auto">

        <h5 class="modal-title text-center" id="enquiryLabel">

        Contact Supplier </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true" style="position: absolute;top: 7px;left: 9px;">×</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="pt-2"></div> 

          <form id="productForm">

                <input type="hidden" name="company_name" value="Shako Co. Ltd.">

                <input type="hidden" name="page" value="product search">  

                <input type="hidden" name="company_id" value="14">

                <input type="hidden" name="prod_name" value="Solenoid Valves">

                <input type="hidden" name="product_id" value="58">

                <input type="hidden" name="subject_client" value="Solenoid Valves - Enquiry Submitted | Plantautomation Technology">

                <input type="hidden" name="subject_admin" value="Enquiry  Plantautomation Technology">

                <div class="form-group">

                  <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">

                </div>



                <div class="form-group">

                  <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">

                </div>



                 <div class="form-group">

                  <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">

                </div>



                 <div class="form-group">

                  <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">

                </div>



                 <div class="form-group">

                    <select required="required" class="form-control" name="country"><option value="" selected="selected">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guernsey">Guernsey</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Isle of Man">Isle of Man</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jersey">Jersey</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States minor outlying islands">United States minor outlying islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>

                  </div>



                 <div class="form-group">

                  <input type="text" name="email" class="form-control" placeholder="Email*" required="">

                </div>



                <div class="form-group">

                  <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">

                </div>



                 <div class="form-group">

                   <textarea name="message" class="form-control" rows="5" placeholder="Write Message..." required=""></textarea>

                </div>



                <button type="submit" class="btn btn-block post" style='background:#92278f;color:#fff;'>Submit</button>

          </form>

        <img src="https://industry.plantautomation-technology.com/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1">

      </div>

    </div>

  </div>

</div>

@endsection


<!-- @section('scripts')

<script type="text/javascript" src="{{ config('app.url')}}js/slick/slick.min.js"></script>

<script type="text/javascript">

$('header form').remove();

$('.panel-title a').on('click', function() {

    $('.accordion-toggle').not($(this)).addClass('collapsed');

    $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');



});

</script>

@endsection -->