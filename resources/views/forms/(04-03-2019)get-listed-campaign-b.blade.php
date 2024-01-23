<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- <title>{{ config('app.name') }}</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Get Listed Campaign B</title>
  <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
  {{-- <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> --}}
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

    <meta property="og:image" content="{{ config('app.url') }}promotions/images/getlisted-banner.jpg" >

<link rel="canonical" href="{{ config('app.url') }}promotions/images/getlisted-banner.jpg"/>



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-91626815-1');
  </script>
  
  <style>
    p{font-size: 15px;}

    button.close{
      position: absolute;
      right: 5px;
    }
    .modal{background-color: rgba(0,0,0,0.4) !important;}
    .form-control{border-radius: 0px; background-color: transparent;border:1px solid #fff;}
  </style>

  <style type="text/css">
    .navbar-nav li.active::after {
      width: 70%;
      background: #4194c9;
    }

    .toast-center-center { top: 50%; left: 50%; transform: translate(-50%, -50%); }
    p, p a {
      word-break: break-word;
    }
    /*Author box*/
    .radius-15{
      border-radius: 15px;
    }
    .bg-grey{
      background-color: #f2f3f5;
    }
    .font-12{
      font-size: 12px !important;
    }   
    .bg-blue{
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0281c7+22,0790dc+100 */
      background: #0281c7; /* Old browsers */
      background: -moz-linear-gradient(top,  #0281c7 22%, #0790dc 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  #0281c7 22%,#0790dc 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  #0281c7 22%,#0790dc 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0281c7', endColorstr='#0790dc',GradientType=0 ); /* IE6-9 */
      color: #fff;
    }
    .step-position{
      /*position: relative;*/
      right: 0;
      bottom: 65px;
    }
    .steps-1-1{
      position: absolute;
      right: 20px;
    }
    .steps-1-2{
      position:relative;
      top: -60px;
    }
  </style>

</head>


<body>  
  <header>
    <nav class="navbar">
      <img src="{{ config('app.url') }}/img/main-logo.png" alt="Plantautomation Technology" class="img-fluid" width="250" >
    </nav>
  </header>

  <section>
    <img src="{{ config('app.url') }}promotions/images/getlisted-banner-b.jpg" alt="Plantautomation Technology" width="100%">
  </section>


  <div class="pt-3 pb-2"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mt-2 mb-4 display-4" >Control Your Business Listing in 3 Easy Steps</h1>      
      </div>

      <div class="col-lg-4 text-center pb-5">
        <img src="{{ config('app.url') }}promotions/images/step1.png" alt="Step 1" class="img-fluid" />
        <h2 class="display-5 font-weight-bold">Account Creation</h2>
        <p>Login Details will be sent to the client along with further steps.</p>
      </div>

      <div class="col-lg-4 text-center pb-5">
        <img src="{{ config('app.url') }}promotions/images/step2.png" alt="Step 2" class="img-fluid" />
        <h2 class="display-5 font-weight-bold">Content Modification/Update</h2>
        <p>You may modify/update content of your profile, product details, images and may add new ones.</p>
      </div>

      <div class="col-lg-4 text-center pb-5">
        <img src="{{ config('app.url') }}promotions/images/step3.png" alt="Step 3" class="img-fluid" />
        <h2 class="display-5 font-weight-bold">Test Link</h2>
        <p>Review the changes/modifications and publish when satisfied. Start receiving enquiries, traffic and monthly performance reports.</p>
      </div>
    </div>
  </div>

 <div class="pt-3 pb-3"></div>


  <section class="bg-blue">
    <div class="steps-1-1">
      <div class="steps-1-2">
        <img src="{{ config('app.url') }}promotions/images/form-step1.png" alt="Step 1" class="img-fluid step-position" width="150" />
      </div>
    </div>

    <div class="container">
      <div class="pt-4 pb-4">
        <div class="col-lg-8 offset-lg-2 font-weight-bold text-white"><legend>Sign Up - FREE</legend>

          <form action="{{url('get-listed-campaign-b')}}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="type" value="Getlisted Campaign">
            <input type="hidden" name="admin_subject" value="Claimed their profile">
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="contact_person">Contact Person*</label>
                <input type="text" name="fullname" class="form-control" id="contact_person" required="">
                 @if ($errors->has('fullname'))
                    <div class="error text-danger">{{ $errors->first('fullname') }}</div>
                  @endif
              </div>
              <div class="form-group col-md-5 offset-lg-1">
                <label for="company_name">Company Name*</label>
                <input type="text" class="form-control" name="company" id="company_name" required="">
                 @if ($errors->has('company'))
                    <div class="error text-danger">{{ $errors->first('company') }}</div>
                  @endif
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="company_email">Contact Email*</label>
                <input type="email" class="form-control" name="email" id="company_email" required="">
                 @if ($errors->has('email'))
                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                  @endif
              </div>
              <div class="form-group col-md-5 offset-lg-1">
                <label for="phone">Phone*</label>
                <input type="text" class="form-control" name="mobile" id="phone" required="">
                 @if ($errors->has('mobile'))
                    <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                  @endif
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="address">Company URL</label>
                <input type="text" class="form-control" name="company_url" id="address">
                 @if ($errors->has('company_url'))
                    <div class="error text-danger">{{ $errors->first('company_url') }}</div>
                  @endif
              </div>
              <div class="form-group col-md-5 offset-lg-1 pt-1">
                <button type="submit" class="btn btn-lg btn-light mt-4 font-weight-bold">Submit</button>
              </div>
            </div> 

            <div class="form-row">
              <div class="form-group col-md-12 mb-0">
                <p class="font-12">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</p>
              </div>
            </div>             
          </form> 
        </div>       
      </div>
    </div>
   </section> 


    <!-- FOOTER -->
    <div class="container-fluid bg-dark">
      <div class="container pt-4 pb-4 text-center text-light">
        <p class="mb-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.plantautomation-technology.com - Powered by Ochre Media Pvt. Ltd.</p>
        <p class="mb-0"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> info@plantautomation-technology.com</p>
      </div>
    </div>

 
</body>
</html>    