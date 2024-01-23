@extends('../layouts/pages')

@section('style')

<link rel="stylesheet" type="text/css" href="{{config('app.url') }}css/sharethis.css">

<script type="text/javascript"

    src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons">

</script>



@endsection

@section('content')



<div class="clearfix"></div>



@php     
       $page = getPageId(Request::segment(2));     
       $page_all = getPage(Request::segment(1));     
     @endphp
      <!-- Leader Board Banner -->
      <div class="container">
        <div class="row">
          @php
          $count =0;
          @endphp
          @foreach($banner1314 as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
                @php $count++;  @endphp
              @endif  
            @endforeach
          @endforeach
          @if($count == 1)
          <?php $column=12 ?>             
          @else
          <?php $column=6 ?>
          @endif
          @foreach($banner1314 as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
          </div>
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
      </div>
<div class="container">





    <div class="row">



        <div class="col-lg-9">

            @php

            $upcoming_flag = false;

            $completed_flag = false;



            @endphp

            @foreach($upcome as $val)









            @if($upcoming_flag == false)

            <div class="pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                    <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>

                </div>

            </div>

            @endif



            @php $upcoming_flag = true @endphp



            <div class="mb-3">

                @if($val->is_series)

                <span

                    class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20">{{$val->series_title}}</span>

                @endif

                <div class="p-2 bg-light border">

                    <div class="row">

                        <div class="col-lg-3 col-12 text-center align-self-center">

                            <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}"

                                title="{{$val->alt_tag}}" class="img-fluid" />

                        </div>

                        <div class="col-lg-9 col-12">

                            <h2 class="mt-1 font-18">

                                <a href="{{url($val->url)}}" title="{!! $val->title_tag !!}" class="PF-TXTRED"

                                    target="_blank">{!! $val->title !!}</a>

                            </h2>

                            <p class="font-16 mb-2"> {!!$val->date!!}</p>

                            <p class="font-16 font-weight-bold mb-0">{{$val->speaker}}</p>

                            <p class="text-muted small mb-2">{!!$val->speaker_designation!!}</p>



                            <p class="font-16 font-weight-bold mb-0">{{@$val->speaker2}}</p>

                            <p class="text-muted small mb-2">{!!@$val->speaker2_designation!!}</p>



                            <p class="font-16 font-weight-bold mb-0">{{@$val->speaker3}}</p>

                            <p class="text-muted small mb-2">{!!@$val->speaker3_designation!!}</p>



                            <div class="text-left">

                                @if($val->is_series)

                                <a href="{{$val->china_url}}" target="_blank"

                                    class="btn btn-sm btn-danger">{{ @$val->china_title }}</a>

                                <span class="p-1"></span>

                                <a href="{{$val->korea_url}}" target="_blank"

                                    class="btn btn-sm btn-danger">{{ @$val->korea_title }}</a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>





            @endforeach



            @foreach($complete as $val)

            @if($val->webinar_date <= Carbon\Carbon::today()) @if($completed_flag==false) 

            <div class="mt-4">

            <h1 class="main-title font-weight-bold mt-0 text-center" style='padding:0;font-size:1.8em;color:#7a0e77;margin:20px 0 20px;'><span style='padding:0px 20px;'>B2B Industrial Webinars </span></h1>

            <h1 class="main-title  mt-0 text-left" style='padding:0px;border:0;font-size:1.4em;color:#7a0e77;margin:20px 0 20px;font-weight:600;'><span style='padding:0px;'>Insights on Manufacturing Automation, Process & R&D</span></h1>

              <p>Industrial automation webinars deliver a truly interactive, engaging, and live experience as real-time

events. These webinars for manufacturing industry showcases the latest insights and ideas from world-

class innovators, experts, and visionaries. Plant Automation Technology offers free webinars on factory

automation, webinars on process automation, IoT webinars, applications and many more. Our webinars

are outlined to help you learn to streamline your manufacturing process. The industrial automation

webinars explores new industrial application areas for asset management and how IoT technologies can

be used to reduce downtime, and maximize efficiencies.</p>

<p>Watch our automation industry webinars for free where experts from around the global industrial

manufacturing industry discuss industrial manufacturing applications and industry trends.</p>

<p>Nail your webinars every time – automize the whole process while keeping the vibes of a live event and

let the magic begin!</p>

<p>Check on our website in the webinars section, where you can find the upcoming Industrial automation

webinars and the completed webinars for manufacturing industry. You’ll also get the opportunity to

participate in a Q&amp;A session when you tune in to the live webinars. If you can&#39;t attend live but are

interested in a particular topic, then please register and we&#39;ll send you a link to the recorded event.</p>

            </div>



<!-- <div class='col-lg-3 mt-4'>

<img src='https://industry.plantautomation-technology.com/webinars/pat-seal-img.png' class='img-fluid'  style='margin-left:10px;'/>

<img src='https://industry.plantautomation-technology.com/webinars/pat-webinars-square-banner.jpg' class='img-fluid  mt-4'  style='cursor:pointer;margin-left:10px;' data-toggle="modal" data-target="#enquiry"/>

</div>  -->







<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1"

    aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header m-auto">

                <h5 class="modal-title text-center" id="enquiryLabel">

                    Ask Now </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true" style="position: absolute;top: 7px;left: 9px;">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="pt-2"></div>

                <form id="productForm">

                    <input type="hidden" name="company_name" value="">

                    <input type="hidden" name="page" value="">

                    <input type="hidden" name="company_id" value="">

                    <input type="hidden" name="prod_name" value="">

                    <input type="hidden" name="product_id" value="">

                    <input type="hidden" name="subject_client" value="">

                    <input type="hidden" name="subject_admin" value="">

                    <div class="form-group">

                        <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="email" class="form-control" placeholder="Email*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">

                    </div>



                    <div class="form-group">

                        <select required="required" class="custom-select" name="country"><option value="" selected="selected">Select Country*</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guernsey">Guernsey</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Isle of Man">Isle of Man</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jersey">Jersey</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States minor outlying islands">United States minor outlying islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>

                    </div>



                    <div class="form-group">

                    <select class="form-control custom-select" name="whom" required="">

                      <option value="">How did you hear about us?*</option>

                      <option value="Internet Search">Internet Search</option>

                      <option value="Social Media">Social Media</option>

                      <option value="Email">Email</option>

                      <option value="Other">Other</option>

                    </select>

                    </div>



                   



                    



                    <div class="form-group">

                        <textarea name="message" class="form-control" rows="5" placeholder="Write Message..."

                            required=""></textarea>

                    </div>



                    <div class="mt-4"></div>

                    <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input type="checkbox" required="" value="Yes" name="newsletter" id="newsletter" checked=""> &nbsp;<small>Plant Automation Technology e-Newsletters</small>

                    </label> 

                  </div>

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input value="Yes" name="agree" id="agree" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms &amp; Conditions &amp; Disclaimer' : '');" type="checkbox" required="" checked=""> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>

                    </label> 

                  </div>

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input type="checkbox" required="" value="Yes" name="promotions" id="promotions" checked=""> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>

                    </label> 

                  </div>

                    <button type="submit" class="btn btn-primary btn-block post">Submit</button>

                </form>

                <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection"

                    width="100" class="img-fluid pull-right mt-1 mb-1">

            </div>

        </div>

    </div>

</div>



<div class="modal fade" id="formEnquiry" data-backdrop="static" data-keyboard="false" tabindex="-1"

    aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header m-auto">

                <h5 class="modal-title text-center" id="enquiryLabel">

                On-Demand Expertise </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true" style="position: absolute;top: 7px;left: 9px;">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="pt-2"></div>

                <form id="productForm">

                    <input type="hidden" name="company_name" value="">

                    <input type="hidden" name="page" value="">

                    <input type="hidden" name="company_id" value="">

                    <input type="hidden" name="prod_name" value="">

                    <input type="hidden" name="product_id" value="">

                    <input type="hidden" name="subject_client" value="">

                    <input type="hidden" name="subject_admin" value="">

                    <div class="form-group">

                        <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="email" class="form-control" placeholder="Email*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">

                    </div>



                    <div class="form-group">

                        <select required="required" class="custom-select" name="country"><option value="" selected="selected">Select Country*</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guernsey">Guernsey</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Isle of Man">Isle of Man</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jersey">Jersey</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States minor outlying islands">United States minor outlying islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>

                    </div>



                    <div class="form-group">

                    <select class="form-control custom-select" name="whom" required="">

                      <option value="">How did you hear about us?*</option>

                      <option value="Internet Search">Internet Search</option>

                      <option value="Social Media">Social Media</option>

                      <option value="Email">Email</option>

                      <option value="Other">Other</option>

                    </select>

                    </div>



                   



                    



                    <div class="form-group">

                        <textarea name="message" class="form-control" rows="5" placeholder="Write Message..."

                            required=""></textarea>

                    </div>



                    <div class="mt-4"></div>

                    <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input type="checkbox" required="" value="Yes" name="newsletter" id="newsletter" checked=""> &nbsp;<small>Plant Automation Technology e-Newsletters</small>

                    </label> 

                  </div>

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input value="Yes" name="agree" id="agree" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms &amp; Conditions &amp; Disclaimer' : '');" type="checkbox" required="" checked=""> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>

                    </label> 

                  </div>

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-black"> 

                    <input type="checkbox" required="" value="Yes" name="promotions" id="promotions" checked=""> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>

                    </label> 

                  </div>

                    <button type="submit" class="btn btn-primary btn-block post">Submit</button>

                </form>

                <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection"

                    width="100" class="img-fluid pull-right mt-1 mb-1">

            </div>

        </div>

    </div>

</div>







    



            <div class="text-center pt-2">

                <h2 class="main-title mt-0"><span>Completed Webinars</span></h2>

        </div>

        @endif



        @php $completed_flag = true @endphp



        <div class="mb-3">

            @if($val->is_series)

            <span

                class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20">{{$val->series_title}}</span>

            @endif

            <div class="p-2 bg-light border">

                <div class="row">

                    <div class="col-lg-3 col-12 text-center align-self-center">

                        <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}"

                            title="{{$val->alt_tag}}" class="img-fluid" />



                    </div>

                    <div class="col-lg-9 col-12">

                        <h2 class="mt-1 font-18">

                            <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED"

                                target="_blank">{{$val->title}}</a>

                        </h2>

                        <!-- <p class="font-16 mb-2"> {!!$val->date!!}</p> -->

                        <p class="font-16 font-weight-bold mb-0">{{$val->speaker}}</p>

                        <p class="text-muted small mb-2">{!!$val->speaker_designation!!}</p>

                        <p class="font-16 font-weight-bold mb-0">{{@$val->speaker2}}</p>

                        <p class="text-muted small mb-2">{!!@$val->speaker2_designation!!}</p>

                        <div class="text-left">

                            @if($val->is_series)

                            <a href="{{$val->china_url}}" target="_blank"

                                class="btn btn-sm btn-danger">{{ @$val->china_title }}</a>

                            <span class="p-1"></span>

                            <a href="{{$val->korea_url}}" target="_blank"

                                class="btn btn-sm btn-danger">{{ @$val->korea_title }}</a>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>



        @endif





        @endforeach









    </div>



    <div class='col-lg-3 mt-4 mb-3' style='position:relative;'>

        <div  id='sticky' style='position:sticky;position:-webkit-sticky;top:110px;'>

     <img src='https://industry.plantautomation-technology.com/webinars/pat-seal-img.png' class='img-fluid' /> 

   

  

    <img src='https://industry.plantautomation-technology.com/webinars/pat-webinars-square-banner.jpg' class='img-fluid  mt-4'  style='cursor:pointer;' data-toggle="modal" data-target="#enquiry"/>



    <img src='https://industry.plantautomation-technology.com/webinars/pat-webinars-square-banner2.jpg' class='img-fluid mt-4' style='cursor:pointer;' data-toggle="modal" data-target="#formEnquiry"/>

    

    </div>

     </div>



 



</div>

</div>















@endsection

@section('scripts')





@endsection