<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CooperCorp Industrial Power Generators | Plant Automation Technology</title>

    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content=" " />
    <meta property="og:description" content="" />
    <meta property="og:Keywords" content="" />
    <meta property="og:image" content="" /> 

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'UA-91626815-1');
    </script>
    
    <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">  

    <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 

    <style>
      .bg-orng{background-color: #EE4D23;}
      .form-control{border-radius: 0px;padding: .2rem .75rem;margin-bottom: 5px;}
      select.form-control:not([size]):not([multiple]) {height: calc(2rem + 2px);}
      .cust-title h2 span{background-color: #365255;color: #fff;font-weight: bold;border-right: 2px solid #ef4c23;font-size: 18px;padding: 5px 30px 5px 20px; }

      ul { padding-left:20px; list-style:none; }
      li { margin-bottom:10px; }
      li:before {    
        font-family: 'FontAwesome';
        content: '\f046';
        margin:0 5px 0 -15px;
        color: #ff7007;
      }
    .g-recaptcha {
      transform: scale(0.73);
      -webkit-transform: scale(0.73);
    }
    </style>

    @yield('style')
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white div-shadow">
        <div class="container">
          <div class="col-lg-6 text-left">
            <img src="{{ config('app.url') }}/img/main-logo.png" height="50" class="d-inline-block" alt="Plant Automation Technology" />
          </div>
          <div class="col-lg-6 text-right">
            <img src="{{ config('app.url') }}single/img/cooper-corp-logo.png" height="70" class="d-inline-block" alt="CooperCorp" />
          </div> 
        </div>                         
      </nav>      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    </header>

    
      <!-- Modal start-->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">Thank You...</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>              
            </div>
            <!-- Modal body-->
            <div class="modal-body">
                <p>Thank you for showing interest in this product. One of our staff will get back to you at the earliest.</p>
                <p>Sincerely,<br/>
                Plant Automation Technology (PAT)</p>
                <img src="{{ config('app.url') }}/img/main-logo.png" width="200" class="img-fluid" alt="Plant Automation Technology" />

            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->

     <section class="bg-orng">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 pt-4 text-center">
            <img src="{{ config('app.url') }}single/img/cooper-generator.png" class="img-fluid" alt="CooperCorp Generator" />
            <h1 class="text-left text-white font-weight-bold display-4 pt-4 pb-2">WHEREVER THERE'S A NEED FOR POWER, THERE'S COOPER BOLT.</h1>
          </div>

          <div class="col-lg-4 pt-3 pb-3 text-center">
            <img src="{{ config('app.url') }}single/img/coopercorp-slid-2.jpg" class="img-fluid" alt="Cooper Bolt" />
          </div>

          <div class="col-lg-3 text-center">
            <div class="p-3 bg-white mt-3 mb-3">
              <h2 class="font-weight-bold display-5 pb-1 text-center">Enquire Now</h2>
              <form method="post" action="{{url('coopercorp-industrial-power-generators')}}">
                {{csrf_field()}}                  
                <input type="hidden" name="formtype" value="banner-form">

                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" value="{{old('name') }}" placeholder="Name*" required>
                   @if ($errors->has('name'))

                          <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" value="{{old('email') }}" placeholder="E-mail Address*" required>
                   @if ($errors->has('email'))
                          <div class="error text-danger">{{ $errors->first('email') }}</div>
                        @endif
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone"  value="{{old('phone') }}" placeholder="Telephone*" required>
                   @if ($errors->has('phone'))
                          <div class="error text-danger">{{ $errors->first('phone') }}</div>
                        @endif
                </div>

                <div class="form-group">
                  <select class="form-control" name="country" required>
                    <option>Select Country</option>
                  @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                  @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="kva_genset" placeholder="kVA of Genset">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="nature_of_business" placeholder="Nature of Business/Industry*" required>
                </div>

                <div class="form-group mb-0 mt-3">
                  {!! Form::captcha() !!}
                   @if ($errors->has('g-recaptcha-response'))
                          <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                   @endif
                </div>   

                <div class="form-group text-center mb-0">
                    <button type="submit" class="btn btn-block submit-btn btn-primary mt-1">SUBMIT</button>
                </div>              
              </form>
            </div>
          </div>
        </div>
      </div>       
     </section> 

    <div class="mt-3"></div>

    <div class="container">      
      <div class="cust-title">
        <h2><span>WHY COOPER?</span></h2>
      </div>

      <div class="border border-secondary p-3 bg-light mt-4">
        <div class="row">          
          <div class="col-lg-6 text-center">
            <img src="{{ config('app.url') }}single/img/quality.png" class="img-fluid pb-3" alt="Quality" width="80" />
            <h3 class="font-weight-bold display-5">Quality</h3>
            <p>"On the strong foundation of its intrinsic strengths, the company has undertaken mega expansion and diversification projects to reap the rewards of synergies."</p>
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ config('app.url') }}single/img/efficiency.png" class="img-fluid pb-3" alt="Efficiency" width="80" />
            <h3 class="font-weight-bold display-5">Efficiency</h3>
            <p>All Cooper Corporation products undergo stringent Quality Control testing. In the Cooper Corporation Quality Control laboratories, products are subjected...</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4"></div>

    <div class="container">
      <div class="cust-title">
        <h2><span>GASEOUS POWERED GENERATORS</span></h2>
      </div>

      <div class="row">
        <div class="col-lg-12">          
          <p class="pt-2 mb-3">Cooper Corporation specializes in design and manufacture of Super Silent LPG gas generator sets, with power ranging from 10KVA - 140 KVA (1.2L to 7.8L). Cooper ECOPACK series of Gas Powered Generators are powered by a 2, 3, 4 & 6 cylinder, in-line, and 4-stroke Cooper make-LPG GAS engine, based on state-of-the-art CRDi technology in technical collaboration with Ricardo, UK.</p>
        </div>

        <div class="col-lg-6">
          <div class="p-4 border border-secondary">
            <div class="text-center">              
              <img src="{{ config('app.url') }}single/img/cooper-generator.png" class="img-fluid" alt="CooperCorp Generator" />
            </div>
            <h2 class="font-weight-bold display-5 pt-3 text-blue">Inteligent, Quiet, Efficient and Durable Cost-effective</h2>
            <p class="font-italic">Natual / Bio Gas gensets</p>
            <ul>
              <li>The Cooper Corporation ECOPACK range of diesel-powered generators redefine performance efficiecy.</li>
              <li>Lube oil consumption of only 0.01% of the fuel used</li>
              <li>Power Range 10KV - 250 KVA</li>
              <li>40% smaller in size</li>
              <li>40% lighter in weight</li>
              <li>Engine specially designed by Ricardo, UK</li>
            </ul> 

            <div class="text-center pt-2">    
              <button class="btn btn-primary btn-radius" data-toggle="modal" data-target="#enquiry-now">Enquire Now</button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="p-4 border border-secondary">
            <div class="text-center">
              <img src="{{ config('app.url') }}single/img/robust-reliable.png" class="img-fluid" alt="Robust & Reliable" />
            </div>
            <h2 class="font-weight-bold display-5 pt-3 text-blue">Robust & Reliable</h2> 
            <p class="font-italic">Gas-powered Generators</p>
            <ul>
              <li>Cooper Corporation specialises in the design and manufacture of super silent gas generator.</li>
              <li>Safety features included</li>
              <li>Available in 10 to 250 KVA ratings</li>
              <li>Lowest fuel & oil consumption in its class</li>
              <li>Engine specially designed by Ricardo, UK</li>
              <li>Electric Engine Management System</li>
            </ul> 
            <div class="text-center pt-2">    
              <button class="btn btn-primary btn-radius" data-toggle="modal" data-target="#enquiry-now">Enquire Now</button>
            </div> 
          </div>      
        </div>
      </div>  

      <div class="mt-4"></div>

      <div class="row">
        <div class="col-lg-6 text-center">             
          <img src="{{ config('app.url') }}single/img/cooper-robo.png" class="img-fluid" alt="CooperCorp Robo" />
        </div>

        <div class="col-lg-6">
          <div class="cust-title">
            <h2><span>Capabilities</span></h2>
          </div>
          <p>Our expertise in centrifugal castings is supported by an on-going technical tie-up with a leading European supplier of centrifugal casting equipment. We currently have 10 carousel casting machines - out of only 30 worldwide.</p>
          <ul>
            <li>Centrifugal Casting</li>
            <li>Sand Casting</li>
            <li>CNC and Robotic Machining Lines</li>
            <li>Lowest fuel & oil consumption in its class</li>
            <li>Crankshafts Machining</li>
            <li>Engineering</li>
          </ul>   
        </div>
      </div> 

    </div>


    <div class="pt-3 pb-3"></div> 

    <!-- Footer -->
    <div class="container-fluid bg-dark">
      <div class="container pt-4 pb-4 text-center text-light">
        <p class="mb-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.plantautomation-technology.com - Powered by Ochre Media Pvt. Ltd.</p>
        <p class="mb-0"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> info@plantautomation-technology.com</p>
      </div>
    </div>


    <!-- Modal -->
    <div id="enquiry-now" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Enquire Now</h4>                     
          </div>

          <div class="modal-body">
            <form method="post" action="{{url('coopercorp-industrial-power-generators')}}">
              {{csrf_field()}}                  
              <input type="hidden" name="formtype" value="modal-form">

              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                @if ($errors->has('name'))
                          <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail Address*" required>
                @if ($errors->has('email'))
                          <div class="error text-danger">{{ $errors->first('email') }}</div>
                        @endif
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" required>
                @if ($errors->has('phone'))
                          <div class="error text-danger">{{ $errors->first('phone') }}</div>
                        @endif
              </div>

              <div class="form-group">
                <select class="form-control" name="country" required>
                  <option>Select Country</option>
                @foreach($countries as $country)
                  <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                @endforeach
                </select>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="kva_genset" placeholder="kVA of Genset">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="nature_of_business" placeholder="Nature of Business/Industry*" required>
              </div>

              <div class="form-group mb-0 mt-3">
                {!! Form::captcha() !!}
                 @if ($errors->has('g-recaptcha-response'))
                          <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                   @endif
              </div>   

              <div class="form-group text-center mb-0">
                  <button type="submit" class="btn btn-block submit-btn btn-primary mt-1">SUBMIT</button>
              </div>              
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Model End-->



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <script>
    $('.carousel').carousel({
      pause:"hover"
    })
  </script>
  @if($errors->any())
    @if(old('formtype') == 'modal-form')
       <script type="text/javascript">  
     $(document).ready(function(){ 
          $('#enquiry-now').modal('show');   
     });   
     </script>
    @endif             
  @endif
   @if(session('message'))
    <script type="text/javascript">
     $(document).ready(function(){ 
          $('#myModal').modal('show');
          history.pushState(null, null, '/coopercorp-industrial-power-generators/success');
      });
      
    </script>
    @endif

</body>
</html>


