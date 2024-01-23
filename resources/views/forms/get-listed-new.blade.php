@extends('../layouts/pages')



@section('style')



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">



<style>

  @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,600&display=swap');



  body { font-family: 'Roboto', sans-serif; }

  .form-control, .custom-select { border-radius: 0px; }



  .BG-BLUE{ background-color: #23408f; }

  .BG-GREEN{ background-color: #008f4c; }

  .BG-ORNG{ background-color: #f5821f; }

  .BG-DARK-GRAY { background-color: #555658; }

  .BG-LIGHT-GRAY { background-color: #f1f3f4; }



  .TXT-SKY {color: #00aeef;}

  .TXT-GARY-555 { color: #555658; letter-spacing: 1px;}

  .TXT-GARY-777 { color: #777777;}



  .BTN-BLUE, .BTN-GREEN, .BTN-ORNG {

    color: #333 !important;

    background-color: #f8f9fa !important;    

    background-image: none;

    border-color: #f8f9fa;

    border-radius: 26px; 

    padding-left: 30px;

    padding-right: 30px;  

  }



  .BTN-BLUE:hover, .BTN-BLUE:not(:disabled):not(.disabled):active {

    background-color: #23408f !important;

    color: #fff !important;

  }

  .BTN-GREEN:hover, .BTN-GREEN:not(:disabled):not(.disabled):active {

    background-color: #008f4c !important;

    color: #fff !important;

  }

  .BTN-ORNG:hover, .BTN-ORNG:not(:disabled):not(.disabled):active {

    background-color: #f5821f !important;

    color: #fff !important;

  }



  .card-deck .card .card-body {height: auto; padding: 1.25rem;}



  .testm-bg {

    background-image: url("{{ config('app.url')}}images/gl-testm-bg.jpg");

    background-repeat: no-repeat;

    background-size: cover;

    /*background-attachment: fixed;*/

  }



  .testi-desc::before {

    content: "\f10d";

    font-family: FontAwesome;

    position: relative;

    color: #cecece;

    left: 0px;

    bottom: 0px;

    font-size: 30px;

    padding-right: 10px;

  }



  .testi-desc::after {

    content: "\f10e";

    font-family: FontAwesome;

    position: relative;

    color: #cecece;

    right: 0px;

    bottom: -10px;

    font-size: 30px;

    padding-left: 10px;

  }



  .btn:hover { background-color: #555658; }



  .btn-primary { background-color: #23408f; }

  .btn-light {

    padding: 30px 40px;

    color: #555658;

    background-color: #dbd9d9;

  }

  .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {

    background-color: #F1F3F4; 

    border-color: transparent; 

    box-shadow: 0 0 0 .2rem rgba(248,249,250,0);

  }

  .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {

    box-shadow: 0 0 0 .2rem rgba(248,249,250,0);

    border-color: transparent; 

  }

  .brd-radius {border-radius: 10px;}

  .Brdr-right {border-right: 3px solid #fff;}



  .RAD-TL-TR {

    border-top-left-radius: 20px !important;

    border-top-right-radius: 20px !important;

    padding: 20px 20px;

  }



  .form-prop {

    padding: 30px 40px 20px 40px;

    background-color: #f1f3f4;

    border-top-left-radius: 0px;

    border-top-right-radius: 20px;

    border-bottom-left-radius: 20px;

    border-bottom-right-radius: 20px;

  }



  .carousel-caption {}



  @media (max-width: 575.98px) { 

    .form-prop {padding: 10px 20px 10px 20px; border-top-right-radius: 0px;}



    .RAD-TL-TR {

      border-top-left-radius: 0px !important;  

      border-top-right-radius: 0px !important;

      padding: 10px;

      word-wrap: break-word;

      font-size: 14px;

    }

    .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {

      background-color: #555658; 

      border-color: transparent; 

      color: #fff;

    } 

  }



  @media (min-width: 576px) and (max-width: 767.98px) { 

    .form-prop {padding: 10px 20px 10px 20px; border-top-right-radius: 0px;}

    .RAD-TL-TR {

      font-size: 16px;

      border-top-left-radius: 0px !important;  

      border-top-right-radius: 0px !important;

      padding: 10px 20px;

    }

    .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {

      background-color: #555658; 

      border-color: transparent; 

      color: #fff;

    }

  }

</style>



<style>

    .gl-testimonial{

        background-color: rgba(255,255,255,0.95);

        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);

        padding: 20px 20px 20px 130px;

        margin: 0 15px 15px 15px;

        overflow: hidden;

        position: relative;

        min-height: 215px;

        /*border-right: 3px solid #0084B5;*/

    }    

    .gl-testimonial:before{

      content: "\f10d";

      font-family: FontAwesome;

      position: absolute;

      left: 10px;

      top: 0px;

      font-size: 36px;

      color: #ddd;

      text-shadow: 1px 1px 1px rgba(0,0,0,0.4);

    }

    .gl-testimonial:after{

      content: "\f10e";

      font-family: FontAwesome;

      position: absolute;

      right: 10px;

      bottom: 0px;

      font-size: 36px;

      color: #ddd;

      text-shadow: 1px 1px 1px rgba(0,0,0,0.4);

    }

    .gl-testimonial .pic{

        display: inline-block;

        width: 80px;

        height: 80px;

        border-radius: 50%;

        overflow: hidden;

        position: absolute;

        top: 60px;

        left: 20px;    

        -webkit-box-shadow: 0 0 5px 1px rgba(0,0,0,0.1);

        box-shadow: 0 0 5px 1px rgba(0,0,0,0.1);  

    }

    .gl-testimonial .pic img{

      width: 100%;

      height: auto;

    }

    .gl-testimonial .description{

        font-size: 15px;

        color: #6f6f6f;

        line-height: 22px;

        margin-bottom: 15px;

    }

    .gl-testimonial .testim-title{

        display: inline-block;

        font-size: 18px;

        font-weight: 500;

        color: #0084B5;

        margin: 0;

    }

    .gl-testimonial .post{

        display: inline-block;

        font-size: 16px;

        color: #777;

        font-style:italic;

    }

    .owl-theme .owl-controls .owl-page span{

        border: 2px solid #2A3D7D;

        background: #fff !important;

        border-radius:0 !important;

        opacity: 1;

    }

    .owl-theme .owl-controls .owl-page.active span,

    .owl-theme .owl-controls .owl-page:hover span{

        background: #0084B5 !important;

        border-color:#0084B5;

    }

    .owl-theme .owl-controls {margin-top: 0px;}



    @media only screen and (max-width: 767px){

      .gl-testimonial{

        padding: 20px;

        text-align: center;

      }

      .gl-testimonial .pic{

        display: block;

        position: static;

        margin: 0 auto 15px;

      } 

      .gl-testimonial:before{

        left: 10px;

        top: 0px;

        font-size: 20px;

        color: #ddd;



      }

      .gl-testimonial:after{

        right: 10px;

        bottom: 0px;

        font-size: 20px;

        color: #ddd;

      }

    }

</style>



@endsection



<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

  function checkform($id){

     if($id == 'manufacturer'){

          grecaptcha.ready(function() {

          grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'manufacturer'}).then(function(token) {

            document.getElementById("g-recaptcha-manufacturer-response").value=token

          });

        });

     }else if($id == 'distributor'){

          grecaptcha.ready(function() {

          grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'distributor'}).then(function(token) {

            document.getElementById("g-recaptcha-distributor-response").value=token

          });

        });

     }else{

         grecaptcha.ready(function() {

          grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'buyer'}).then(function(token) {

            document.getElementById("g-recaptcha-buyer-response").value=token

          });

        });

     }

  }

    

</script>

@section('content')

  <div class="mt-2 pt-4"></div>



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
  <div id="myModal" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title text-success success-title">Successfully submitted

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </h4>

        </div>

        <div class="modal-body">

          <p>Thank you. Your registration was successful. An acknowledging email with details has been sent to your registered email-id. If you did not received the email or have problems opening it, please get in touch with us at <strong>enquiry@plantautomation-technology.com</strong></p>

        </div>

        <div class="modal-footer">

          <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

          <a class="btn btn-seconadry" role="button" id="aa" name="aa"  href="{{url('get-listed')}}" aria-expanded="false">

            Close

          </a>          

        </div>

      </div>

    </div>

  </div>





  <div class="container-fluid text-center">

    <div class="row">

      <img src="{{ config('app.url')}}images/gl-banner-1.jpg" alt="Get Listed" class="img-fluid" />

    </div>

  </div>



<!--   <div class="carousel" data-ride="carousel">

    <div class="carousel-inner shadow">

      <div class="carousel-item active">

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-right">

            <img src="{{ config('app.url').'images/get-listed-banner-1.jpg' }}" class="img-fluid" alt="get-listed">

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-left">

            <img src="{{ config('app.url').'images/get-listed-banner-2.jpg' }}" class="img-fluid" alt="get-listed">

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-left">

            <img src="{{ config('app.url').'images/get-listed-banner-3.jpg' }}" class="img-fluid" alt="get-listed">

          </div>

        </div>

      </div>

    </div>

  </div> -->





  <div class="pt-4"></div> 

  <div class="pt-4 pb-2 d-none d-sm-block"></div> 



  <div class="container main">

    <h2 class="TXT-GARY-555 font-weight-light text-center font-26 pb-4">SELECT AS PER YOUR BUSINESS</h2>



    <div class="card-deck">



      <div class="card BG-DARK-GRAY text-center">

        <div class="BG-BLUE pt-4 pr-2 pb-4 pl-2 text-center">            

          <p class="text-light font-14 mb-1">Are you a</p>

          <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Manufacturer?</h2>

          <p class="text-light font-14 mb-0">Showcase your products</p>            

        </div>

        <div class="card-body mt-2">

          <h4 class="card-title text-white font-26 font-weight-normal pb-3">WHY US ?</h4>

          <div class="card-text">

            <p class="font-20 font-weight-light text-white mb-3">Brand Augmentation</p>

            <p class="font-20 font-weight-light text-white mb-3">Global Reach</p>

            <p class="font-20 font-weight-light text-white mb-3">B2B Leads</p>

            <p class="font-20 font-weight-light text-white mb-3">Distribution Network</p>

            <p class="font-20 font-weight-light text-white mb-3">Projects and Tenders</p>

            <p class="font-20 font-weight-light text-white mb-3">Industrial Events</p>

            <p class="font-18 font-weight-light text-white">Analytics</p>

          </div>

        </div>

        <div class="card-footer mb-4 border-0 text-center">

          <a class="btn btn-lg BTN-BLUE text-uppercase font-weight-bold get-manufacturer" onclick="return checkform('manufacturer')">GET NOW</a>

        </div>

      </div>





      <div class="card BG-DARK-GRAY text-center">

        <div class="BG-GREEN pt-4 pr-2 pb-4 pl-2 text-center">            

          <p class="text-light font-14 mb-1">Are you a</p>

          <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Distributor?</h2>

          <p class="text-light font-14 mb-0">Join our Distributor Network</p>            

        </div>

        <div class="card-body mt-2">

          <h4 class="card-title text-white font-26 font-weight-normal pb-3">WHY US ?</h4>

          <div class="card-text">

            <p class="font-20 font-weight-light text-white mb-3">Brand Augmentation</p>

            <p class="font-20 font-weight-light text-white mb-3">Global Reach</p>

            <p class="font-20 font-weight-light text-white mb-3">B2B Leads</p>

            <p class="font-20 font-weight-light text-white mb-3">Projects and Tenders</p>

            <p class="font-20 font-weight-light text-white mb-3">Industrial Events</p>

            <p class="font-18 font-weight-light text-white">Analytics</p>

          </div>

        </div>

        <div class="card-footer mb-4 border-0 text-center">

          <a class="btn btn-lg BTN-GREEN text-uppercase font-weight-bold get-distributor" onclick="return checkform('distributor')" >GET NOW</a>

        </div>

      </div>





      <div class="card BG-DARK-GRAY text-center">

        <div class="BG-ORNG pt-4 pr-2 pb-4 pl-2 text-center">            

          <p class="text-light font-14 mb-1">Are you a</p>

          <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Buyer?</h2>

          <p class="text-light font-14 mb-0">Post your requirement</p>           

        </div>

        <div class="card-body mt-2">

          <h4 class="card-title text-white font-26 font-weight-normal pb-3">WHY US ?</h4>

          <div class="card-text">

            <p class="font-20 font-weight-light text-white mb-3">Verified Manufacturers</p>

            <p class="font-20 font-weight-light text-white mb-3">Product Document</p>

            <p class="font-20 font-weight-light text-white mb-3">Fast Fulfillment</p>

            <p class="font-18 font-weight-light text-white">Priority Programs</p>

          </div>

        </div>

        <div class="card-footer mb-4 border-0 text-center">

          <a class="btn btn-lg BTN-ORNG text-uppercase font-weight-bold get-buyer" onclick="return checkform('buyer')">GET NOW</a>

        </div>

      </div>

    </div>

  </div>



  

  

<!-- // Manufacturer -->

  <div class="manufacturer"> 

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-12">

          <h2 class="TXT-GARY-555 font-weight-light text-uppercase text-center font-26 pb-4">Register Now</h2>

        </div>



        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-4">

          <div class="BG-DARK-GRAY">

            <div class="BG-BLUE pt-4 pr-2 pb-4 pl-2 text-center">            

              <!-- <p class="text-light font-14 mb-1">Are you a</p> -->

              <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Manufacturer?</h2>

              <p class="text-light font-14 mb-0">Showcase your products</p>            

            </div>



            <div class="mt-3 p-3 text-center">

              <h4 class="text-white font-26 font-weight-light  pb-3">WHY US ?</h4>

              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Brand Augmentation</h3>

                <p class="text-white font-weight-light">Quantifiable brand awareness and brand promotions.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Global Reach</h3>

                <p class="text-white font-weight-light">Business promotions in the region/s of your choice globally.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">B2B Leads</h3>

                <p class="text-white font-weight-light">Experience relevant and quality checked product leads on a steady basis.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Distribution Network</h3>

                <p class="text-white font-weight-light">Get engaged with relevant distributor network from the market of your choice.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Projects and Tenders</h3>

                <p class="text-white font-weight-light">Stay tuned with upcoming and relevant industrial projects/tenders.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Industrial Events</h3>

                <p class="text-white font-weight-light">Stay updated with upcoming industrial events in the regions of your choice.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Analytics</h3>

                <p class="text-white font-weight-light">Get regular product and profile page performance reports for future actions.</p>

              </div>

            </div>



          </div>

        </div>



        <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-4">

          <form method="post" action="{{ route('getlisted.post')}}">

            @csrf()              

            <input type="hidden" name="form_type" value="manufacture">

            <input type="hidden" id="thank_message" name="thank_message" value="Thank you. Your registration was successful. An acknowledging email with details has been sent to your registered email-id. If you did not received the email or have problems opening it, please get in touch with us at enquiry@plantautomation-technology.com.">  



           <!--  <div class="btn-group-toggle" data-toggle="buttons">

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR Brdr-right active">

                <input type="radio" id="manufacturer-1" name="type" autocomplete="off" checked value="free-inclusion">

                <span class="text-uppercase">Free Inclusion</span>

              </label>

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR Brdr-right active">

                <input type="hidden" id="manufacturer-2" name="type" autocomplete="off" value="premium-inclusion">

                <span class="text-uppercase">Premium Inclusion</span> <small class="font-weight-light font-14 ">(*Get Exclusive Services)</small>

              </label>

            </div> -->



            <div class="form-prop">

              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="firstname">First Name*</label>

                  <input type="text" class="form-control" name="firstname" id="firstname" required>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="lastname">Last Name*</label>

                  <input type="text" class="form-control" name="lastname" id="lastname" required>

                </div>

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="company">Company Name*</label>

                  <input type="text" class="form-control" name="company" id="company" required>

                </div>

              <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Job Title*</label>

                  <input type="text" class="form-control" name="job_title" id="job_title"  required>

                </div>

                  

                </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                    <label class="TXT-GARY-777 mb-1" for="company_type">Company Type*</label>                

                    <select class="form-control custom-select" name="company_type" required>

                      <option selected disabled></option>

                      <option value="Manufacturer">Manufacturer</option>

                      <option value="Custom Manufacturer">Custom Manufacturer</option>

                      <option value="Turnkey System Integrators">Turnkey System Integrators</option>

                      <option value="Service Company">Service Company</option>

                    </select>

                  </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="email">Email*</label>

                  <input type="email" class="form-control" name="email" id="email" required>

                </div>

               

              </div>



              <div class="form-row">

                 <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="website">Website URL*</label>

                  <input type="text" class="form-control" name="website" id="website" required>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="country">Select Country*</label>                

                  <select class="form-control custom-select manufacturercontry" id="country" name="country" required>

                    <option selected disabled></option>

                    @foreach($countries as $country)

                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 

                    @endforeach

                  </select>

                </div>

               



              </div>



               <div class="form-row">

                 <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="phone">Phone*</label>

                  <div class="input-group">

                    <div class="input-group-prepend">                      

                      <select class="custom-select manufacturer_country_code" id="country_code" name="country_code">

                        <option selected="" disabled="">Code *</option>

                        @foreach($countries as $country)

                        <option value="{{$country->country_code}}">{{$country->calling_code}}</option> 

                        @endforeach

                      </select> 

                    </div>

                    <input type="text" class="form-control" name="phone" id="phone" required>

                  </div>

                </div>

                 <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Postal Code*</label>

                  <input type="text" class="form-control" name="postal_code" id="postal_code" required>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="city">City*</label>

                  <input type="text" class="form-control" name="city" id="city" required>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="street_address">Street Address*</label>

                  <input type="text" class="form-control" name="street_address" id="street_address" required>

                </div>

                

              </div>



             



              <div class="form-row">



                <div class="col-md-12 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="whom">How did you hear about us?*</label>                

                  <select class="form-control custom-select" name="whom" required>

                    <option selected disabled>--- Select ---</option>

                    <option value="Internet Search">Internet Search</option>

                    <option value="Social Media">Social Media</option>

                    <option value="Email">Email</option>

                    <option value="Other">Other</option>

                  </select>

                </div>

              </div>



              <div class="form-row">

                <input type="hidden" id="g-recaptcha-manufacturer-response" name="g-recaptcha-manufacturer-response">

                <input type="hidden" name="manufacturer" value="{{ route('getlisted.post') }}">

                <!-- <div class="col-md-6 mt-2 mb-1">                      

                  <div class="form-group mb-0">

                    {!! Form::captcha() !!}

                    

                  </div>

                  <div class="text-danger verifi"></div>            

                </div> -->



                <div class="col-md-6 mt-2 mb-1">

                  <div class="col-md-6 offset-md-3 col-12 text-center">

                    <button type="submit" class="btn btn-lg BG-BLUE text-white brd-radius btn-block" id="sub">SUBMIT</button>

                  </div>

                </div>

              </div>

            </div>

          </form>



          <div class="pt-4 d-none d-sm-block"></div>



          <!-- // Relevent Buttons -->

          <div class="row">

            <div class="col-md-5 col-sm-6 col-12 offset-md-1 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-GREEN get-distributor" onclick="return checkform('distributor')">           

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Distributor?</h2>

                <p class="text-light font-14 mb-0">Join our Distributor Network</p>

              </button>

            </div>



            <div class="col-md-5 col-sm-6 col-12 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-ORNG get-buyer" onclick="return checkform('buyer')">           

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Buyer?</h2>

                <p class="text-light font-14 mb-0">Post your requirement</p>

              </button>

            </div>

          </div>

          <!-- Relevent Buttons // -->

        </div>



      </div>

    </div>

  </div>

  <!-- Manufacturer //-->





  <!-- // Distributor -->

  <div class="distributor"> 

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-12">

          <h2 class="TXT-GARY-555 font-weight-light text-uppercase text-center font-26 pb-4">Register Now</h2>

        </div>



        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-4">

          <div class="BG-DARK-GRAY">

            <div class="BG-GREEN pt-4 pr-2 pb-4 pl-2 text-center">            

              <!-- <p class="text-light font-14 mb-1">Are you a</p> -->

              <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Distributor?</h2>

              <p class="text-light font-14 mb-0">Join our Distributor Network</p>            

            </div>



            <div class="mt-3 p-3 text-center">

              <h4 class="text-white font-26 font-weight-light  pb-3">WHY US ?</h4>

              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Brand Augmentation</h3>

                <p class="text-white font-weight-light">Quantifiable brand awareness and brand promotions.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Global Reach</h3>

                <p class="text-white font-weight-light">Business promotions in the region/s of your choice globally.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">B2B Leads</h3>

                <p class="text-white font-weight-light">Experience relevant and quality checked product leads on a steady basis.</p>

              </div>



              <!-- <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Distribution Network</h3>

                <p class="text-white font-weight-light">Get engaged with relevant distributor network from the market of your choice.</p>

              </div> -->



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Projects and Tenders</h3>

                <p class="text-white font-weight-light">Stay tuned with upcoming and relevant industrial projects/tenders.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Industrial Events</h3>

                <p class="text-white font-weight-light">Stay updated with upcoming industrial events in the regions of your choice.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Analytics</h3>

                <p class="text-white font-weight-light">Get regular product and profile page performance reports for future actions.</p>

              </div>

            </div>



          </div>

        </div>





        <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-4">

          <form method="post" action="{{ route('getlisted.post')}}">

            @csrf()              

            <input type="hidden" name="form_type" value="distributor">       

            <input type="hidden" id="thank_message" name="thank_message" value="Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours. Sincerely">  



            <!-- <div class="btn-group-toggle" data-toggle="buttons">

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR Brdr-right active">

                <input type="radio" id="distributor-1" name="type" autocomplete="off" value="free-inclusion" checked>

                <span class="text-uppercase">Free Inclusion</span>

              </label>

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR Brdr-right active">

                <input type="hidden" id="distributor-2" name="type" autocomplete="off" value="premium-inclusion">

                <span class="text-uppercase">Premium Inclusion</span> <small class="font-weight-light font-14 ">(*Get Exclusive Services)</small>

              </label>

            </div> -->

            



            <div class="form-prop">



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="firstname">First Name*</label>

                  <input type="text" class="form-control" name="firstname" id="firstname" required>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="lastname">Last Name*</label>

                  <input type="text" class="form-control" name="lastname" id="lastname" required>

                </div>

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="distributorship">Distributorship Name*</label>

                  <input type="text" class="form-control" name="distributorship" id="distributorship" required>

                </div>

                 <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Job Title*</label>

                  <input type="text" class="form-control" name="job_title" id="job_title"  required>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="distributorship_type">Distributorship Type*</label>

                  <select class="form-control custom-select" name="distributorship_type" required>

                    <option selected disabled></option>

                    <option value="Multi Brand">Multi Brand</option>

                    <option value="Single Brand">Single Brand</option>

                  </select>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="email">Email*</label>

                  <input type="email" class="form-control" name="email" id="email" required>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="website">Website URL*</label>

                  <input type="text" class="form-control" name="website" id="website" required>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="country">Select Country*</label>                

                  <select class="form-control custom-select distributorcountry" id="country" name="country" required>

                    <option selected disabled></option>

                    @foreach($countries as $country)

                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 

                    @endforeach

                  </select>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="phone">Phone*</label>

                  <div class="input-group">

                    <div class="input-group-prepend">                      

                      <select class="custom-select distributor_country_code" id="country_code" name="country_code">

                        <option selected="" disabled="">Code *</option>

                        @foreach($countries as $country)

                        <option value="{{$country->country_code}}">{{$country->calling_code}}</option> 

                        @endforeach

                      </select> 

                    </div>

                    <input type="text" class="form-control" name="phone" id="phone" required>

                  </div>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="street_address">Street Address*</label>

                  <input type="text" class="form-control" name="street_address" id="street_address" required>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="city">City*</label>

                  <input type="text" class="form-control" name="city" id="city" required>

                </div>



               <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Postal Code*</label>

                  <input type="text" class="form-control" name="postal_code" id="postal_code" required>

                </div>

              </div>



              <div class="form-row">

                <div class="col-md-12 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="whom">How did you hear about us?*</label>                

                  <select class="form-control custom-select" name="whom" required>

                    <option selected disabled>--- Select ---</option>

                    <option value="Internet Search">Internet Search</option>

                    <option value="Social Media">Social Media</option>

                    <option value="Email">Email</option>

                    <option value="Other">Other</option>

                  </select>

                </div>

              </div>



              <div class="form-row">

                <input type="hidden" id="g-recaptcha-distributor-response" name="g-recaptcha-distributor-response">

                <input type="hidden" name="distributor" value="{{ route('getlisted.post') }}">

                <!-- <div class="col-md-6 mt-2 mb-1">                      

                  <div class="form-group mb-0">

                    {!! Form::captcha() !!}

                  </div>

                  <div class="text-danger verifidis"></div>            

                </div> -->



                <div class="col-md-6 mt-2 mb-1">

                  <div class="col-md-6 offset-md-3 col-12 text-center">

                    <button type="submit" class="btn btn-lg BG-GREEN text-white brd-radius btn-block" id="subdis">SUBMIT</button>

                  </div>

                </div>

              </div>

            </div>

          </form>



          <div class="pt-4 d-none d-sm-block"></div>



          <!-- // Relevent Buttons -->

          <div class="row">

            <div class="col-md-5 col-sm-6 col-12 offset-md-1 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-BLUE get-manufacturer" onclick="return checkform('manufacturer')">

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Manufacturer?</h2>

                <p class="text-light font-14 mb-0">Showcase your products</p>

              </button>

            </div>



            <div class="col-md-5 col-sm-6 col-12 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-ORNG get-buyer" onclick="return checkform('buyer')">

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Buyer?</h2>

                <p class="text-light font-14 mb-0">Post your requirement</p>

              </button>

            </div>

          </div>

          <!-- Relevent Buttons // -->

        </div>



      </div>

    </div>

  </div>

  <!-- // Distributor -->





  <!-- // Buyer -->

  <div class="buyer"> 

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-12">

          <h2 class="TXT-GARY-555 font-weight-light text-uppercase text-center font-26 pb-4">Register Now</h2>

        </div>



        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-4">

          <div class="BG-DARK-GRAY">

            <div class="BG-ORNG pt-4 pr-2 pb-4 pl-2 text-center">

              <!-- <p class="text-light font-14 mb-1">Are you a</p> -->

              <h2 class="font-26 text-white text-uppercase font-weight-bold mb-1">Buyer?</h2>

              <p class="text-light font-14 mb-0">Post your requirement</p>            

            </div>



            <div class="mt-3 p-3 text-center">

              <h4 class="text-white font-26 font-weight-light  pb-3">WHY US ?</h4>

              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Verified Manufacturers</h3>

                <p class="text-white font-weight-light">Get pricing/quotes from a list of verified manufacturers/distributors.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Product Document</h3>

                <p class="text-white font-weight-light">Access premium product documentations for your project.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Fast Fulfillment</h3>

                <p class="text-white font-weight-light">24x7 requirement fulfillment cycle.</p>

              </div>



              <div class="pb-1">

                <h3 class="font-18 font-weight-bold text-uppercase text-white mb-1">Priority Programs</h3>

                <p class="text-white font-weight-light">Priority project programs.</p>

              </div>

            </div>

          </div>

        </div>



        <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-4">

          <form method="post" action="{{ route('getlisted.post')}}">

            @csrf()              

            <input type="hidden" name="form_type" value="buyer">       

            <input type="hidden" id="thank_message" name="thank_message" value="Thank you. Your registration was successful. An acknowledging email with details has been sent to your registered email-id. If you did not received the email or have problems opening it, please get in touch with us at enquiry@plantautomation-technology.com.">  



           {{--  <div class="btn-group-toggle" data-toggle="buttons">

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR Brdr-right active">

                <input type="radio" id="buyer-1" name="type" autocomplete="off" value="free-inclusion" checked>

                <span class="text-uppercase">Free Inclusion</span>

              </label>

              <label class="btn btn-lg btn-light font-18 RAD-TL-TR">

                <input type="radio" id="buyer-2" name="type" autocomplete="off" value="premium-inclusion">

                <span class="text-uppercase">Premium Inclusion</span> <small class="font-weight-light font-14 ">(*Get Exclusive Services)</small>

              </label>

            </div> --}}

            

            <div class="btn-group-toggle" data-toggle="buttons">

              <label class="btn-light font-18 RAD-TL-TR Brdr-right active mb-0">

                <span class="text-uppercase">Register and Post your Requirement</span>

              </label>

            </div>



            <div class="form-prop">



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="firstname">First Name*</label>

                  <input type="text" class="form-control" name="firstname" id="firstname" required>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="lastname">Last Name*</label>

                  <input type="text" class="form-control" name="lastname" id="lastname" required>

                </div>

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="company">Company Name*</label>

                  <input type="text" class="form-control" name="company" id="company" required>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Job Title*</label>

                  <input type="text" class="form-control" name="job_title" id="job_title"  required>

                </div>



                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="company_type">Company Type*</label>     

                  <select class="form-control custom-select" name="company_type" required>

                    <option selected disabled></option>

                    <option value="Manufacturer">Manufacturer</option>

                    <option value="Custom Manufacturer">Custom Manufacturer</option>

                    <option value="Turnkey System Integrators">Turnkey System Integrators</option>

                    <option value="Service Company">Service Company</option>

                  </select>

                </div>

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="email">Email*</label>

                  <input type="email" class="form-control" name="email" id="email" required>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="website">Website URL*</label>

                  <input type="text" class="form-control" name="website" id="website" required>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="country">Select Country*</label>                

                  <select class="form-control custom-select buyerscountry" id="country" name="country" required>

                    <option selected disabled></option>

                    @foreach($countries as $country)

                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 

                    @endforeach

                  </select>

                </div>

                

              </div>



              <div class="form-row">

                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="phone">Phone*</label>

                  <div class="input-group">

                    <div class="input-group-prepend">                      

                      <select class="custom-select buyers_country_code" id="country_code" name="country_code">

                        <option selected="" disabled="">Code *</option>

                        @foreach($countries as $country)

                        <option value="{{$country->country_code}}">{{$country->calling_code}}</option> 

                        @endforeach

                      </select> 

                    </div>

                    <input type="text" class="form-control" name="phone" id="phone" required>

                  </div>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="street_address">Street Address*</label>

                  <input type="text" class="form-control" name="street_address" id="street_address" required>

                </div>

                

              </div>



              <div class="form-row">

               

               <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="city">City*</label>

                  <input type="text" class="form-control" name="city" id="city" required>

                </div>



                <div class="col-md-6 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="postal_code">Postal Code*</label>

                  <input type="text" class="form-control" name="postal_code" id="postal_code" required>

                </div>

              </div>



              <div class="form-row">

                <div class="col-md-12 mb-3">

                  <label class="TXT-GARY-777 mb-1" for="whom">How did you hear about us?*</label>                

                  <select class="form-control custom-select" name="whom" required>

                    <option selected disabled>--- Select ---</option>

                    <option value="Internet Search">Internet Search</option>

                    <option value="Social Media">Social Media</option>

                    <option value="Email">Email</option>

                    <option value="Other">Other</option>

                  </select>

                </div>

              </div>



              <div class="form-row">

                 <input type="hidden" id="g-recaptcha-buyer-response" name="g-recaptcha-buyer-response">

                <input type="hidden" name="buyer" value="{{ route('getlisted.post') }}">

                <!-- <div class="col-md-6 mt-2 mb-1">                      

                  <div class="form-group mb-0">

                    {!! Form::captcha() !!}

                  </div>

                  <div class="text-danger verifibuy"></div>            

                </div> -->



                <div class="col-md-6 mt-2 mb-1">

                  <div class="col-md-6 offset-md-3 col-12 text-center">

                    <button type="submit" class="btn btn-lg BG-ORNG text-white brd-radius btn-block" id="subbuy">SUBMIT</button>

                  </div>

                </div>

              </div>



            </div>

          </form>



          <div class="pt-4 d-none d-sm-block"></div>



          <!-- // Relevent Buttons -->

          <div class="row">

            <div class="col-md-5 col-sm-6 col-12 offset-md-1 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-BLUE get-manufacturer" onclick="return checkform('manufacturer')">

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Manufacturer?</h2>

                <p class="text-light font-14 mb-0">Showcase your products</p>

              </button>

            </div>



            <div class="col-md-5 col-sm-6 col-12 text-center pt-3">

              <button type="button" class="btn btn-lg btn-block BG-GREEN get-distributor" onclick="return checkform('distributor')">

                <p class="text-light font-14 mb-0">Are you a</p>

                <h2 class="font-24 text-white text-uppercase font-weight-bold mb-0">Distributor?</h2>

                <p class="text-light font-14 mb-0">Join our Distributor Network</p>

              </button>

            </div>

          </div>

          <!-- Relevent Buttons // -->

        </div>

      </div>

    </div>

  </div>

  <!-- // Buyer -->



  <div class="pt-4"></div> 

  <div class="pt-4 pb-4 d-none d-sm-block"></div> 



  <section class="testm-bg pt-3 pb-3">

    <div class="container">

      <h2 class="text-white font-weight-light text-uppercase text-center font-26 pt-2 pb-3">WHAT OUR CLIENTS SAY</h2>      

      <div class="row">

        <div class="col-md-12">

          <div id="testimonial-slider" class="owl-carousel">



            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">The moment I realized that the platform maintains diverse buyer networks and that I can address multiple RFQs at once, I joined immediately</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Mark Hefner</span> - German Robotics Major</h3>

              <small class="post">- Entrepreneur</small>

            </div>



            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">We are an Industrial valves manufacturer, apart from the regular inflow of RFQs/RFIs from PAT network, I especially liked the ease with which I can publish and promote my company news and articles.</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Tim Lai</span>  - Industrial Manufacturer – USA</h3>

              <small class="post">- Marketing Manager</small>

            </div>



            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">Superb network of buyers...really! What amazed me is that within 15 days of us going live on their website we actually received more product enquiries than we got in total that quarter.</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Juan Douglas</span>  - Business Partner</h3>

              <small class="post">- Metro Tools Inc.</small>

            </div>



            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">I have a very active relationship with them. Their  platform helps me in directly contacting material suppliers, raise RFIs and deal with those in batches. Plant Automation platform is a very important tool in my work life that I use.Keep up the good work.</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Brian Blevans</span>   - Unicorn Industrial Services</h3>

              <small class="post">- Plant Maintenance Consultant</small>

            </div>



            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">The site offers what we are looking for. Good visibility through Google ranking, possibility to present our products, press release and all kind of communications. We have excellent support from the team and are impressed by the quality of newsletter.We thank you for this support.</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Jean-Mi Stauffer</span>   - Colibrys</h3>

              <small class="post">- VP Sales & Marketing</small>

            </div>





            <div class="gl-testimonial">

              <div class="pic">

                <img src="{{ config('app.url')}}images/testimonial-icon.jpg" alt="Company" class="img-fluid rounded-circle">

              </div>

              <p class="description">Plant Automation is very customer-oriented and dedicated in understanding digital strategy to advise related content in the proposing stage and provides quality service and ensure media schedule is fulfilled and has helped us to take our first step to amplify web presence</p>

              <h3 class="testim-title"><span class="text-uppercase font-weight-bold mr-1">Ms. Iris Tsai</span>    - Advantech</h3>

              <small class="post">- Digital Marketing</small>

            </div>



          </div>

        </div>

      </div>

    </div>

  </section>





  <div class="pt-3 pb-3"></div> 





  <div class="container">

    <h2 class="TXT-GARY-555 font-weight-light text-center font-26 pb-3">OUR CLIENTS</h2>

    <div class="row">

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/mitsubishi-electric-corporation/1517555519-mitsubishi.jpg" alt="" class="img-fluid border p-1" />

      </div>

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/yokogawa-europe/1517657613-yokogawa.jpg" alt="" class="img-fluid border p-1" />

      </div>      

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/gem-gebr-mller-apparatebau-gmbh-co-kg/1517635954-gemu.jpg" alt="" class="img-fluid border p-1" />

      </div>

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/die-erste-industry-co-ltd/1517464051-logo.png" alt="" class="img-fluid border p-1" />

      </div>     

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/festo-ag-co-kg/1517462331-festo-logo.jpg" alt="" class="img-fluid border p-1" />

      </div> 

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/phytron-gmbh/1517635485-phytron.jpg" alt="" class="img-fluid border p-1" />

      </div> 

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/litre-meter-limited/1517378175-litermeter.jpg" alt="" class="img-fluid border p-1" />

      </div> 

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/breton-spa/1517389419-breton.jpg" alt="" class="img-fluid border p-1" />

      </div>   

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/crane-aerospace-electronics/201902160712291194184180.jpg" alt="" class="img-fluid border p-1" />

      </div>

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/novasina-ag/1516856194-novasina.jpg" alt="" class="img-fluid border p-1" />

      </div>

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <img src="{{ config('app.url')}}suppliers/buehler-technologies-gmbh/1541503790-Buhler.jpg" alt="" class="img-fluid border p-1" />

      </div>

      <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">

        <p class="mb-0 border p-4 text-blue font-16">

          <a href="{{url('clientele')}}" target="_blank"><i class="fa fa-plus mr-1" aria-hidden="true"></i> More</a>

        </p>

      </div>

    </div>

  </div> 



  <div class="pt-4"></div>



@endsection    





@section('scripts')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <script>

    $(document).ready(function(){

      $("#testimonial-slider").owlCarousel({

        items:2,

        itemsDesktop:[1000,2],

        itemsDesktopSmall:[990,2],

        itemsTablet:[768,1],

        pagination:true,

        navigation:false,

        navigationText:["",""],

        slideSpeed:1000,

        autoPlay:true,

        stopOnHover:true

      });

    });

  </script>



<script>



  @php

  $ip_address= $_SERVER['REMOTE_ADDR'];

  $hostname = gethostbyaddr($ip_address);

  $country ="India";

  $countrycode="IN";

  @endphp

  var country = "{{$country}}";



  var countryc="{{$countrycode}}"

  console.log("{{$ip_address}}");

  console.log(country);

  console.log(countryc);





  $('#country_code option[value="' + countryc + '"]').attr("selected", "selected");



  $('#country_code option').filter(function(){

    return this.value == countryc;

  }).prop("selected", true);





  $('#country option[value="' + country + '"]').attr("selected", "selected");





  $('#country option').filter(function(){

    return this.value == country;

  }).prop("selected", true);



  var selectedText = $("#country_code option:selected").html();

//alert(selectedText);



$("#calling_code").val(selectedText);

$("#calling_code1").val(selectedText);

$("#calling_code2").val(selectedText);



  @if (Request::segment(1) =="get-listed-manufacturer-success")

  $('#myModal').modal('show'); 

  @endif



  @if (Request::segment(1) =="get-listed-distributor-success")

  $('#myModal').modal('show'); 

  @endif

  



  @if (Request::segment(1) =="get-listed-buyer-success")

  $('#myModal').modal('show'); 

  @endif  

    $(document).ready(function() {

      $(".main").show();

       $(".manufacturer").hide();

        $(".distributor").hide();

         $(".buyer").hide();

    });



    $(".get-manufacturer").click(function() {

      $(".main").hide();

      $(".manufacturer").show();

      $(".distributor").hide();

      $(".buyer").hide();

    });



    $(".get-distributor").click(function() {

      $(".main").hide();

      $(".manufacturer").hide();

     

      $(".distributor").show();

      $(".buyer").hide();

    });



    $(".get-buyer").click(function() { 

      $(".main").hide();

      $(".manufacturer").hide();

      $(".distributor").hide();

      $(".buyer").show();

    });

    $('#sub').click(function(){

      if (grecaptcha.getResponse() == ""){

        alert("manu");

       $('.manufacturer').find('.verifi').html("We can't proceed request with out captcha verification!");

       return false;

        

     }

   });

$('.manufacturercontry').on('change', function() {

          $.ajax({

              url: "{{route('dail-code')}}",

              type: 'POST',

              data: {country: this.value, _token: "{{ csrf_token() }}"},

              dataType: 'json',

              success: function (response) {

                $(".manufacturer_country_code option:selected").html(response.calling_code);

              },

              error: function () {

                  alert("error");

              }

          });

    });

    $('.distributorcountry').on('change', function() {

          $.ajax({

              url: "{{route('dail-code')}}",

              type: 'POST',

              data: {country: this.value, _token: "{{ csrf_token() }}"},

              dataType: 'json',

              success: function (response) {

                $(".distributor_country_code option:selected").html(response.calling_code);

              },

              error: function () {

                  alert("error");

              }

          });

    });

    $('.buyerscountry').on('change', function() {

          $.ajax({

              url: "{{route('dail-code')}}",

              type: 'POST',

              data: {country: this.value, _token: "{{ csrf_token() }}"},

              dataType: 'json',

              success: function (response) {

                $(".buyers_country_code option:selected").html(response.calling_code);

              },

              error: function () {

                  alert("error");

              }

          });

    });

 </script>



@endsection



