@extends('../layouts/pages')
@section('style')
  <link rel="stylesheet" href="{{ asset('industry/css/form-design.css')}}">
@endsection
@section('content')

<style>

  .min-hyt-580{
    min-height: 580px;
  }
  .theme-bg-color{
    background-color: #953f86;
  }
  .btn-system {
    background-color: #762668 !important ;
    color: #fff;
  }

  .advert-bg{
    background-image: url("{{ config('app.url')}}img/advertise/advertise-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    padding-right:0px;
  }

  .advert h2{
    color: #fff;
    font-size: 22px;
    line-height: 25px;
    font-weight: normal;
    font-weight: 600;
  }

  .advert p{
    color: #fff;
    font-size: 15px; 
    line-height: 22px;
    font-weight: normal;
  }
  .advert ul li{list-style: none;padding-bottom: 3px;color: #fff;}
  
  .adv-visit h2{
    color: #8c2c6e;
  }
  .adv-visit p{
    color: #222;
    font-size: 20px;
    line-height: 22px;
  }
  .fa-cust{
    background-color:#8c2c6e;
    color: #fff;
    border-radius: 50%;
    padding: 20px;
    font-size: 50px;
    border:1px solid transparent;    
    -webkit-transition: all .6s ease;
    -moz-transition: all .6s ease;
    -ms-transition: all .6s ease;
    -o-transition: all .6s ease;
    transition: all .6s ease;
  }
   .fa-cust:hover{
    background-color:#fff;
    color: #8c2c6e;
    border:1px solid #8c2c6e;
    cursor: default;
    -webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0,.3);
    box-shadow: 2px 2px 5px 0 rgba(0,0,0,.3);
    -webkit-transition: all .6s ease;
    -moz-transition: all .6s ease;
    -ms-transition: all .6s ease;
    -o-transition: all .6s ease;
    transition: all .6s ease;
  }

  .PAD-L0{
    padding-left:0px;
  }
  .PAD-LR10{
    padding: 0 10px;
  }
  
  .testim-bg{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c146a1+0,953f86+71 */
    background: #c146a1; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #c146a1 0%, #953f86 71%); /* FF3.6-15 */
    background: -webkit-radial-gradient(center, ellipse cover,  #c146a1 0%,#953f86 71%); /* Chrome10-25,Safari5.1-6 */
    background: radial-gradient(ellipse at center,  #c146a1 0%,#953f86 71%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c146a1', endColorstr='#953f86',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }

  .banner-wrap-img{
    bottom: 0;
    display: block;
    /*height: 100%;*/
    left: 0;
    position: relative;
    right: 0;
    top: 183px;
    width: 100%;
    }

    .form-group { margin-bottom: 1rem;}
    .form-control {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      /*background-color: transparent;*/
      background-image: none;
      background-clip: padding-box;
      border: 1px solid #fff;
      border-radius:0rem;
      transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }


  @media only screen and (min-device-width :200px) and (max-device-width :990px){
    .mob-MR0{
    padding-left:0px;
    padding-right: 0px;
    }

    .banner-wrap-img{
    bottom: 0;
    display: block;
    /*height: 100%;*/
    left: 0;
    position: relative;
    right: 0;
    top: 0px;
    width: 100%;
    }

  }

  @media only screen and (min-device-width :991px) and (max-device-width :1240px){
    .min-hyt-580{
      min-height: 700px;
    }
    .banner-wrap-img{
    bottom: 0;
    display: block;
    /*height: 100%;*/
    left: 0;
    position: relative;
    right: 0;
    top: 344px;
    width: 100%;
    }
  }  
</style>
 <!-- Start Content -->
     <div class="mt-80 pt-4"></div>
    
      <!-- // Main Container -->
      <div class="container advert">
        <div class="row">
          <!-- // col-8 -->
          <div class="col-lg-8 pl-0">
            <div class="advert-bg">
              <div class="row min-hyt-580">
                <div class="col-lg-5 pt-3 pl-5">
                  <h2>Smart advertising choices for smart companies</h2>
                  <!-- <div class="m-3"></div> -->
                  <p class="text-left">It is imperative, in this digital era, to reach your customers and engage them through multiple touch points on a continuous basis.<br/> 
                  <strong>Plantautomation-technology.com</strong> attracts nearly 180,000+ visitors every month, who come on to our platform in search vendors like you. Take your first step now to experience our digital marketing finesse in delivering your customized messages to your target audience.</p>
                  
                  <ul class="pl-0">
                    <li><h2 class="pt-2">Our Services</h2></li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> Company Profile
                    </li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> Banner Advertisements
                    </li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> e-Mail Direct Marketing
                    </li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> e-Newsletter
                    </li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> Video Marketing
                    </li>
                    <li><img src="{{ config('app.url')}}img/advertise/hand-icon.png" alt="Hand icon" width="20" class="mr-3" /> Digital Marketing
                    </li>
                  </ul>
                </div>

                <div class="col-lg-7">
                  <img src="{{ config('app.url')}}img/advertise/advertise-user.png" alt="" class="img-fluid banner-wrap-img" />
                </div>
              </div>
            </div> 

          </div>
          <!-- col-8 // -->

          <!-- // Right -->
          <div class="col-lg-4 theme-bg-color p-3 min-hyt-580">
            <form method="post" action="#">
            {{csrf_field()}}                  
              <div class="advert">
                <h2 class="text-left mt-1">Have a query or want to know more?</h2>
                <p class="text-left mb-3">Please fill in the below form and download our Mediapack. </p>
                @if(session('message'))
            <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{@session('message')}}
            </div>
               @endif
              </div> 

              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone">
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message"  id="message" rows="2" placeholder="Your Message..."></textarea>
              </div>

              <div class="form-group mb-0">
                {!! Form::captcha() !!}
              </div>   

              <div class="form-group">
                  <button type="submit" class="btn btn-system mt-1">Submit</button>
              </div>

              <!-- <p class="text-left mt-3">OR write to us at <br/>
              <a href="mailto:info@plantautomation-technology.com?Subject=Contact%20Plantautomation%20Technology%20for%20Advertising&amp;bcc=web@ochre-media.com" class="text-white">info@plantautomation-technology.com</a> <br/>
              Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a> </p> -->
            </form>  
            <div class="clearfix"></div>
          </div>  
        </div>
        <!-- Right // --> 
      </div>
      <!-- Main Container // -->
      
      <!-- // Visits Container -->
      <div class="container">
        <div class="text-center">
          <div class="col-lg-12 pt-4 pb-4 adv-visit">
            <div class="row">
              <div class="col-lg-4 pt-3 pb-1 text-center">
                <i class="fa-cust fa fa-5x mb-2 fa-user pl-4  pr-4" aria-hidden="true"></i>
                <div class="pt-1 pb-1 text-center">
                  <p class="text-center mb-1">Average Page</p>
                  <p class="text-center mb-2">Visits</p>
                  <h2 class="fa-2x text-center">180,000+</h2>
                </div>
              </div>

              <div class="col-lg-4 pt-3 pb-1 text-center">
                <i class="fa-cust fa fa-5x mb-2 fa-eye" aria-hidden="true"></i>
                <div class="pt-1 pb-1 text-center">
                  <p class="text-center mb-1">Unique Page</p>
                  <p class="text-center mb-2">Visitors</p>
                  <h2 class="fa-2x text-center">35,000+</h2>
                </div>
              </div>

              <div class="col-lg-4 pt-3 pb-1 text-center">
                <i class="fa-cust fa fa-5x mb-2 fa-clock-o" aria-hidden="true"></i>
                <div class="pt-1 pb-1 text-center">
                  <p class="text-center mb-1">Average</p>
                  <p class="text-center mb-2">Visitors Time</p>
                  <h2 class="fa-2x text-center">10+ mnts</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Visits Container // -->

      
      <!-- //Testimonials -->
      <div class="container testimonial text-center testim-bg">
        <div class="row">      
          <div class="col-lg-12 text-center">        
            <div id="testimonial" class="carousel slide" data-ride="carousel"> 
              <h2 class="main-heading white-text pt-4">TESTIMONIALS</h2>   
                <ol class="carousel-indicators carousel-indicators-round d-flex justify-content-end" >
                <?php $i=0; ?>
                @foreach($testimonials as $testimonial) 
                  <li data-target="#testimonial" data-slide-to="<?php echo $i; ?>"></li>
                  <?php $i=$i+1;?>
                @endforeach
              </ol>                
              <div class="carousel-inner">
                 <?php $i=1; ?>
                @foreach($testimonials as $testimonial)
                 @if($i==1)
                <div class="carousel-item active text-center">
                  <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>" class="img-fluid rounded-circle mt-1 mb-1" alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}" />
                    <p class="discription">{{$testimonial->description}}</p>
                    <p class="name"><strong>{{$testimonial->client_name}}</strong> - {{$testimonial->company_name}}<br>
                    <small>{{$testimonial->designation}}</small></p>  
                </div>
                  @else
                <div class="carousel-item text-center">
                  <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>" class="img-fluid rounded-circle mt-1 mb-1" alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}" />
                    <p class="discription">{{$testimonial->description}}</p>
                    <p class="name"><strong>{{$testimonial->client_name}}</strong> - {{$testimonial->company_name}}<br>
                    <small>{{$testimonial->designation}}</small></p>  
                </div>
                 @endif
                <?php $i++; ?>
                @endforeach
              </div>
            </div>
          </div>    
        </div>
      </div>
      <!-- Testimonials // -->


      <!-- // Clients-Container -->
      <div class="container text-center">
        <h2 class="display-4 mt-4">Our Clients</h2>
        <div class="row p-2">         
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/mitsubishi-logo.png" alt="Mitsubishi" class="img-fluid" />
            </a>
          </div>
        
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/syslogic-logo.png" alt="syslogic" class="img-fluid" />
            </a>
          </div>
        
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/phytron-logo.png" alt="phytron" class="img-fluid" />
            </a>
          </div>      
         
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/ingersoll-rand-logo.png"  alt="ingersoll" class="img-fluid" />
            </a>
          </div>
          
          <div class="col-lg-2 mb-4 text-center"> 
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/lesta-logo.png" alt="lesta" class="img-fluid" />
            </a>
          </div>

          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/keller.png" alt="keller" class="img-fluid" />
            </a>
          </div>

          <!-- ===== row-2 ======= -->

          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/dis-sensors-logo.png" alt="Dis sensors" class="img-fluid" />
            </a>
          </div>
          
           <div class="col-lg-2 mb-4 text-center"> 
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/breton-logo.png" alt="breton" class="img-fluid" />
            </a>
          </div>
        
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/pal-robotics-logo.png" alt="PAL Robotics" class="img-fluid" />
            </a>
          </div>
          
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/webtec-logo.png" alt="webtec" class="img-fluid" />
            </a>
          </div>      
         
          <div class="col-lg-2 mb-4 text-center">
            <a href="#" target="_blank">
              <img src="<?php echo config('app.url'); ?>single/img/eilersen-logo.png"  alt="Eilersen" class="img-fluid" />
            </a>
          </div>

          <div class="col-lg-2 mb-4 text-center" valign="middle">
            <a href="clientele">
              <h6 class="pt-4 lead">More...</h6>
            </a>
          </div>
        </div>
      </div>
      <!-- Clients-Container // -->
    

    <!-- END Container -->
@endsection
