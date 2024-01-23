@extends('../layouts/pages')
@section('style')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
<style>
  .modal-header .close {
   padding: 1rem;
   margin: -1rem 0rem 0rem auto;
  }
  .form-control{border-radius: 0px;font-size:14px;}
  .modal-header{display: block; text-align: center;}
  .card-deck .card .card-body{
    height: auto !important;
    padding: 0px !important;
  }
  .Brdr-bot-rad{
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
  }
  .brown-bg{background-color: #453848;}
  .media-body p{line-height: 1.5 !important;font-size: 16px;}
  .Brdr-Dash{border: 1px dashed #ccc;}

  .shadow {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1) !important;
  }

  .btn-info {
    color: #fff;
    background-color: #89289e;
    border-color: #89289e;
  }
  .txt-yellow{color: #fee61f;}
  .bg-transp{background-color: rgba(0,0,0,0.6);}

  .carousel-caption {   
    top: 20%;
    left: 20%;
    right: 20%;    
  }
  .carousel-caption h2{   
    padding-left: 20px;
    padding-right: 20px;
  }
  .carousel-caption h2{font-family: 'Poppins', sans-serif !important;}

  @media (min-width: 0px) and (max-width: 575.98px) { 
    .carousel-caption{   
      top: 0%;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 20px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }

  @media (min-width: 576px) and (max-width: 767.98px) { 
    .carousel-caption{   
      top: -10% !important;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 20px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }
  @media (min-width: 768px) and (max-width: 991.98px) { 
    .carousel-caption{   
      top: 1% !important;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 26px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }

  @media (min-width: 992px) and (max-width: 1200px) { 
    .carousel-caption {   
      top: 5%;
      left: 10%;
      right: 10%;    
    }
    .carousel-caption h2{   
      padding-left: 20px;
      padding-right: 20px;
    }
  }
</style>
<style type="text/css">
  .owl-buttons {display: block;}
  .owl-carousel:hover .owl-buttons {display: block;}
  .owl-item {text-align: center;}

  .owl-theme .owl-controls .owl-buttons div {
    background: transparent;
    color: #869791;
    font-size: 50px;
    line-height: 150px;
    margin: 0;
    padding: 0 20px;
    position: absolute;
    top: 0;
  }
  .owl-theme .owl-controls .owl-buttons .owl-prev {
    left: 0;
    padding-left: 20px;
  }
  .owl-theme .owl-controls .owl-buttons .owl-next {
    right: 0;
    padding-right: 20px;
  }

  .testi-desc::before {
    content: "\f10d";
    font-family: FontAwesome;
    position: relative;
    color: #cecece;
    left: 0px;
    bottom: 0px;
    font-size: 40px;
    padding-right: 10px;
  }

  .testi-desc::after {
    content: "\f10e";
    font-family: FontAwesome;
    position: relative;
    color: #cecece;
    right: 0px;
    bottom: -10px;
    font-size: 40px;
    padding-left: 10px;
  }
  .owl-theme .owl-controls .owl-buttons div{line-height: 150px;top: 13%}
</style>

@endsection
@section('content')

<div class="mt-80 pt-3"></div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success success-title">Successfully submitted
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </h4>
      </div>
      <div class="modal-body">
        <p>Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.<p>Sincerely Plant Automation Technology</p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-right">
          <img src="{{ config('app.url').'images/get-listed-banner-1.jpg' }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-center d-none d-sm-block">
          <img src="{{ config('app.url').'images/get-listed-banner-2.jpg' }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12 pl-0 pr-0 text-left d-none d-sm-block">
          <img src="{{ config('app.url').'images/get-listed-banner-3.jpg' }}" class="img-fluid" alt="">
        </div>
      </div>

      <div class="carousel-caption">
        <h2 class="font-30 bg-transp pt-3 pb-3 mb-4"><strong class="txt-yellow">Reach out to 10K+</strong> In-Market & Active Buyers Daily on Plant Automation Platform.</h2>
        <button type="button" class="btn btn-info modal-btn" data-id="get-listed" data-toggle="modal" data-target="#myModal0">List Your Business</button>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center brown-bg text-white font-20 pl-5 pr-5 pt-2 pb-2 Brdr-bot-rad">
        Get Buyers for your Products through our B2B Platform
      </h1>
    </div>
  </div>
</div>


<div class="pt-4"></div> 


<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card-deck">
        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-cubes text-blue mr-3 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">Showcase your Products</u> and details of your business to gain visibility among the buyers from the regions you prefer & get GUARANTEED Leads.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-envelope text-blue mr-3 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">Email Marketing</u> - Exclusive reach-out program to your prospective buyers from regions globally to show your products and get relevant RFI/RFQ.</p>
              </div>
            </div>
          </div>
        </div>
      </div>  

      <div class="card-deck">
        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-envelope-open text-blue mr-4 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">E-Newsletter</u> - Reach-out to an active list of subscribe through our fortnightly newsletter spread across the globe.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-microphone text-blue mr-4 ml-1 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">Webinars</u> - An exclusive series of authority programs that puts you directly in front of your buyers and industry.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck">
        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-handshake-o text-blue mr-3 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">Sponsorship</u> - Be a sponsor to our fortnightly newsletter and get star attention for your business and products.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card p-3 Brdr-Dash mb-4 shadow">
          <div class="card-body">
            <div class="media">
              <i class="fa fa-3x fa-desktop text-blue mr-3 mb-2" aria-hidden="true"></i>
              <div class="media-body">
                <p><u class="font-weight-bold">Online Banners</u> -  Wide variety of banner advertising options to experience perpetual traffic, page views to your product pages. </p>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </div>
</div>  

<div class="pt-3"></div> 


<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
      <button type="button" class="btn btn-lg btn-info modal-btn" data-id="get-listed" data-toggle="modal" data-target="#myModal0">List Your Business</button>
    </div>
  </div>
</div>

<div class="pt-3 pb-3"></div> 

<div class="container">
  <h2 class="text-center font-weight-bold font-20 mb-3">Testimonials</h2>

  <div class="row">
    <div class="owl-carousel col-md-12" id="owl-testimonials">

      <div class="card-deck">
        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">Superb network of buyers...really! What amazed me is that within 15 days of us going live on their website we actually received more product enquiries than we got in total that quarter.</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Juan Douglas  - Business Partner</p>
              <small class="font-14 font-italic">Metro Tools Inc.</small>
            </div>
          </div>
        </div>

        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">I have a very active relationship with them. Their platform helps me in directly contacting material suppliers, raise RFIs and deal with those in batches. Plant Automation platform is a very important tool in my work life that I use. Keep up the good work.</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Brian Blevans  - Unicorn Industrial Services</p>
              <small class="font-14 font-italic">Plant Maintenance Consultant</small>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck">
        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">The moment I realized that the platform maintains diverse buyer networks and that I can address multiple RFQs at once, I joined immediately</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Mark Hefner - German Robotics Majorr</p>
              <small class="font-14 font-italic">Entrepreneur</small>
            </div>
          </div>
        </div>

        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">We are an Industrial valves manufacturer, apart from the regular inflow of RFQs/RFIs from PAT network, I especially liked the ease with which I can publish and promote my company news and articles.</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Tim Lai - Industrial Manufacturer – USA</p>
              <small class="font-14 font-italic">Marketing Manager</small>
            </div>
          </div>
        </div>
      </div>


      <div class="card-deck">
        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">The site offers what we are looking for. Good visibility through Google ranking, possibility to present our products, press release and all kind of communications. We have excellent support from the team and are impressed by the quality of newsletter. We thank you for this support.</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Jean-Mi Stauffer - Colibrys</p>
              <small class="font-14 font-italic">VP Sales &amp; Marketing</small>
            </div>
          </div>
        </div>

        <div class="card bg-light border text-left p-4">
          <div class="card-body">
            <p class="testi-desc pt-2">Plant Automation is very customer-oriented and dedicated in understanding digital strategy to advise related content in the proposing stage and provides quality service and ensure media schedule is fulfilled and has helped us to take our first step to amplify web presence</p>
            <div class="">
              <p class="mt-3 mb-0 font-weight-bold">Ms. Iris Tsai - Advantech</p>
              <small class="font-14 font-italic">Digital Marketing</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="pt-3 pb-3"></div> 

<div class="container">
  <h2 class="text-center font-weight-bold font-20 mb-3">Our Clients</h2>
  <div class="row">
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/scaglia-indeva-spa/1517398922-indeva.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/hydro-znphs-sp-z-oo/1517401846-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/festo-ag-co-kg/1517462331-festo-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/dfi-inc/1517494967-dfi-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/horiba-ltd/1517500480-horiba-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/mitsubishi-electric-corporation/1517555519-mitsubishi.jpg" alt="" class="img-fluid border p-1" />
    </div>

    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/3s-smart-software-solutions/1517566224-3s-smart.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/advantech-co-ltd/1517570217-advantech.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/gem-gebr-mller-apparatebau-gmbh-co-kg/1517635954-gemu.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/syslogic-gmbh/1517648473-syslogic.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/yokogawa-europe/1517657613-yokogawa.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <p class="mb-0 border p-4 text-blue font-weight-bold">
        <a href="{{url('clientele')}}" target="_blank"><i class="fa fa-plus" aria-hidden="true"></i> More</a>
      </p>
    </div>
  </div>
</div> 


  <!-- // Popup -->
  <div class="container advert">
    <div class="row">
      <!-- Modal 0 -->
      <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="get-listed-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-18 text-blue font-weight-bold text-center" id="get-listed-modal">List your Business
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </h5>
              
            </div>
            <div class="modal-body">
              <ul class="error" style="list-style-type: none;"></ul>
              <form method="post" name="getlist_form">
                <input type="hidden" name="source" value="{{\Request::getRequestUri()}}">
                {{-- v-tiger fields --}}
                {{-- <input type="hidden" name="publicid" value="e61b440a856ef834e43e624afa389482">
                <input type="hidden" name="urlencodeenable" value="1">
                <input type="hidden" name="name" value="plantautomation-getlisted"> --}}
                <select name="cf_leads_technology" data-label="label:Technology" required=""  hidden="">
                  <option value="">Select Value</option>
                  <option value="Plantautomation-technology">Plantautomation-technology</option>
                  <option value="Asianhhm">Asianhhm</option>
                  <option value="Pharmafocusasia">Pharmafocusasia</option>
                  <option value="Hospitals-management">Hospitals-management</option>
                  <option value="Pharmaceutical-tech">Pharmaceutical-tech</option>
                  <option value="Packaging-labelling">Packaging-labelling</option>
                  <option value="Pulpandpaper-technology">Pulpandpaper-technology</option>
                  <option value="Defence-industries">Defence-industries</option>
                  <option value="Plastics-technology">Plastics-technology</option>
                  <option value="Automotive-technology">Automotive-technology</option>
                  <option value="Ochre-media">Ochre-media</option>
                </select>
                {{-- v-tiger fields --}}

                <input type="hidden" name="member_type" class="mem_type" value="get-listed">

                <div class="form-group">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname*" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname*" required>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="cf_leads_jobtitle" id="job_title" placeholder="Job Title*" required>
                </div>

                <div class="form-group">
                  <select class="form-control" name="cf_leads_countryname" required>
                    <option>Select Country*</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="mobile" id="phone" placeholder="Telephone*" required>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="description"  id="message" rows="2" placeholder="Your Message..."></textarea>
                </div>

                <div class="form-group mb-0">
                  {!! Form::captcha() !!}
                </div>

                <div class="text-danger verifi"></div>   

                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success mt-1 pl-3 pr-3 submit-btn" id="sub">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Popup // -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->



  <script>
    // $("#sub,#sub1").click(function(){
    // if (grecaptcha.getResponse() == ""){
    //  $(this).closest('form').find('.verifi').html("We can't proceed request with out captcha verification!");
    //  return false;
    //  } 
    // else{
    // return true;
    // }
    // });
  </script>



</body>
</html>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#owl-testimonials").owlCarousel({
      items : 1, //1 item above 1000px browser width
      itemsDesktop : [1000,1], //1 item between 1000px and 901px
      itemsDesktopSmall : [900,1], // 1 item betweem 900px and 601px
      itemsTablet: [600,1], //1 item between 600 and 0
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      navigation : true,   
      pagination:false,
      navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    });
  });
</script>

<script type="text/javascript">
  toastr.options = {
    "positionClass": "toast-center-center",
    "timeOut": "5000",
  }
  $('.modal-btn').on('click',function(){

    var memType = $(this).attr('data-id');
    if(memType == 'premium-membership'){
      // $('.modal-title').text('Premium Plan');
    }else if(memType == 'basic-membership'){
      // $('.modal-title').text('Basic Plan');
    }else{
      // $('.modal-title').text('List your Business');
    }
    $('.mem_type').val(memType);
  });
  $('.submit-btn').on('click',function(e) {  

            // if (grecaptcha.getResponse() == ""){

            //     $('#basic_getlist').find('.verifi').html("We can't proceed request with out captcha verification!");
            //     return false;
            // }

            var dataString = $(this).closest('.modal-body').find('form').serialize();

            var plan = $(this).closest('.modal-body').find('input[name="member_type"]').val(); 

            var title = '';
            if(plan == 'basic-membership'){
              title = 'Basic Membership Success';
            }else if(plan == 'premium-membership'){
              title = 'Premium Membership Success';
            }else{
              title = 'List your Business Success';
            }
            $.ajax({
              type: 'POST',
              url: "{{ url('basic-membership') }}",
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: dataString,       
              success:function(data){
                 $('#myModal0').modal('hide');   
                // history.pushState(null, null, "/get-listed/"+plan+"/success");
                history.pushState(null, null, "/get-listed/success");                           
              // $('#myModal0 .modal-footer').find('button').click();

            $('.success-title').text(title);
                $(".error").empty();
              $('#myModal').modal('show');             
               $('form')[0].reset();
          

            /*  document.getlist_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
              document.getlist_form.submit();  */

              $('form')[0].reset();

            },
            error: function (data) {
              $(".error").empty();
              $.each( data.responseJSON.errors, function( key, value ) {
                $(".error").append('<li class="text-danger">'+value+'</li>');
              });
            }
          });
          });
  @if ( Request::segment(2) == 'success')
  $('#myModal').modal('show'); 
  @endif
</script>


@endsection



