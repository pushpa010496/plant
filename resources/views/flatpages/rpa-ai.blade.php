<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">
   
      <!-- LUMEN -->
      <!-- {!! app('seotools')->generate() !!} -->
      <!-- Bootstrap CSS -->
      <!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->

      <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
      <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
    

      @yield('style')

      <style>
      .carousel-indicators-round {
          position: relative;
          top:20px !important;
          height: 10px;
        }
      </style>

      <!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-91626815-1');

      </script>
      

  </head>

  <body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light div-shadow fixed-top">
          <div class="col-lg-6 text-left">
          <img src="{{ config('app.url') }}/img/main-logo.png" height="60" class="img-fluid d-inline-block" alt="Plant Automation Technology" /> </div>
          <div class="col-lg-6 text-right">
          <img src="{{ config('app.url') }}images/rpa-ai/rpa-logo.png" height="60" class="img-fluid d-inline-block" alt="RPA & AI" />
          </div>                  
      </nav>  
    </header>

    <div class="mt-80 pt-1"></div>
    <!-- Modal start-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{{session('page_type')}}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <!-- Modal body-->
            <div class="modal-body">
                <p>{{session('message')}}.</p>
                <p>Sincerely,<br/>
                Plant Automation Technology</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->
    @if(session('message'))
    <script type="text/javascript">
          $(document).ready(function(){ 
              $('#myModal').modal('show');
              setTimeout(
              function() 
              {
               
               window.location.href = "{{URL::to('download-pdf')}}";
              }, 1000);
          });
    </script>
    @endif
    <div class="container-fluid event-rpa-ai-bg">
      <div class="container text-center">
        <h2 class="display-4 line-h">Europe's only Executive - Level Robotic Process Automation (RPA)
        <br>
        and Artificial Intelligence (AI) Exchange</h2>
      </div>   

      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-left pt-4">
            <span class="transp-outline btn-radius"><i class="fa fa-lg fa-map-marker mr-2" aria-hidden="true"></i> Rafael Hotel Madrid Norte</span>          
          </div>

          <div class="col-lg-6 text-right pt-4">
            <span class="transp-outline btn-radius"><i class="fa fa-lg fa-calendar mr-2" aria-hidden="true"></i> 20-21 March, 2018</span>
          </div>
        </div>
      </div>  
    </div>

    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-7 pt-3 border border-secondary">
          <h1 class="display-4 text-center text-blue">RPA & AI Exchange Europe</h1>
          <div class="p-3">            
            <p>The RPA & AI Exchange is an exclusive executive-level, invitation-only forum, where leaders from across Europe will meet in a captive environment to discuss high-level strategy and create a clear roadmap for the business transformation required for the 4th Industrial Revolution.</p>
            <p>Network, benchmark and learn from 70 leaders in Robotic Process Automation & Artificial Intelligence who are boldly setting the course for enterprise-wide intelligent process automation strategies.</p>

            <div class="mt-80 pt-5"></div>  

            <p class="text-right font-weight-bold alert alert-warning mb-0 offset-lg-4 col-lg-8 mb-3">
              <i class="fa fa-download mr-2 fa-lg" aria-hidden="true"></i>
              Download Free Executive Survey Report
              <i class="fa fa-arrow-right ml-2 fa-lg" aria-hidden="true"></i>
            </p>

            <div class="alert alert-warning" role="alert">
              <p class="small mb-0">Ahead of the RPA & AI Exchange Europe 2018, we surveyed senior executive delegates from Unilever, HSBC, AXA, eBay, Adidas, AkzoNobel, Ericsson and many more to find out in which investment stage they are currently sitting when it come to their RPA & AI investment priorities. We also looked at the specific timescales in which they are implementing them and have collated the results of this exclusive survey into the infographic below.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-5" id="company-profile">
          <div class="border border-secondary p-3 bg-light">
            <h2 class="font-weight-bold display-4 pb-3 text-center text-blue">Request Invitation</h2>
            <form method="post" action="{{route('rpa.store')}}">
              {{csrf_field()}}                  
              <input type="hidden" name="page_type" value="RPA & AI Extension">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" required>
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
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" required>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message"  id="message" rows="2" placeholder="Your Message..."></textarea>
              </div>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                <label class="custom-control-label pl-2 pt-1" for="customCheck1">Free Executive Survey Report</label>
              </div>

              <div class="form-group mb-0 mt-3">
                {!! Form::captcha() !!}
              </div>   

              <div class="form-group text-center">
                  <button type="submit" class="btn btn-block btn-primary mt-1 btn-radius">Submit</button>
              </div>
            </form>
        </div>
        </div>
      </div>  
    </div>

    <div class="pt-3 pb-3"></div>

    <!-- //Testimonials -->
    <div class="container-fluid text-center event-testim-bg">                  
        <div id="event-testim" class="carousel slide text-center" data-ride="carousel">
          <div class="carousel-inner text-center min-height-100"> 

            <div class="carousel-item text-center active">               
              <p class="display-5 quote">Super informative, well organized and a great investment of time.</p>
              <span class="small font-italic">- VP of Customer Operations, Franklin Templeton Investments</span>  
            </div>             

            <div class="carousel-item text-center">
              <p class="display-5 quote">The speakers sessions were great and insightful.</p>
              <span class="small font-italic">- Global Transition Lead, Kerry Group</span>  
            </div> 

            <div class="carousel-item text-center">
              <p class="display-5 quote">If you don't have a framework in place yet for RPA this event gives you all required information you need to set up RPA in your business.</p>
              <span class="small font-italic">- Operational Excellence, Siemens</span>  
            </div> 

            <div class="carousel-item text-center">
              <p class="display-5 quote">A good mix of old hands and new entrants, all with a practical mindset oriented to value delivery. A good platform for open and honest discussion.</p>
              <span class="small font-italic">- Head of IT Architecture and Digital, BNP Paribas</span>  
            </div>

            <div class="carousel-item text-center">
              <p class="display-5 quote">It was very useful to hear what other organisations are doing and what they have achieved. The industry analysis and vendor input was also good to hear.</p>
              <span class="small font-italic">- Lead Enterprise Architect, Yorkshire Building Society</span>  
            </div> 
          </div>  
          <ol class="carousel-indicators carousel-indicators-round">
            <li data-target="#event-testim" data-slide-to="0" class="active"></li>
            <li data-target="#event-testim" data-slide-to="1"></li>
            <li data-target="#event-testim" data-slide-to="2"></li>
            <li data-target="#event-testim" data-slide-to="3"></li>
            <li data-target="#event-testim" data-slide-to="4"></li>
          </ol>                 
        </div>
    </div>
    <!-- Testimonials // -->

    <div class="pt-3 pb-3"></div>

    <div class="container border border-secondary p-4 text-center">
      <h2 class="main-title mt-0 font-weight-bold"><span>What to Expect</span></h2>
      <p class="mb-0 display-6">Exclusive top of the line business networking coupled with innovative learning, keynote addresses and engrossing case studies. In addition to this, a series of one-to-one consultative business meetings are scheduled between attendees and solution provider for business process enhancements.</p>
    </div>

    <div class="pt-3 pb-3"></div>

    <div class="container-fluid bg-darkblue">
      <div class="container">
        <h2 class="text-center text-white display-4 pt-3 font-weight-bold">Highlights</h2>
        <div class="row">
          <div class="col-lg-3 text-center pb-2">
            <img src="{{ config('app.url') }}images/rpa-ai/icon1.png" alt="Learn from Leaders" class="img-fluid"/>
            <p class="text-white">Learn from Leaders in the Automotive Industry</p>
          </div>

          <div class="col-lg-3 text-center pb-2">
            <img src="{{ config('app.url') }}images/rpa-ai/icon2.png" alt="cross-industry" class="img-fluid"/>
            <p class="text-white">Network with 60 cross-industry peers</p>
          </div>

          <div class="col-lg-3 text-center pb-2">
            <img src="{{ config('app.url') }}images/rpa-ai/icon3.png" alt="Empower" class="img-fluid"/>
            <p class="text-white">Empower yourself with the right solutions and services</p>
          </div>

          <div class="col-lg-3 text-center pb-2">
            <img src="{{ config('app.url') }}images/rpa-ai/icon4.png" alt="own interactive agenda" class="img-fluid"/>
            <p class="text-white">Customise your own interactive agenda</p>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-3 pb-3"></div>

    <div class="container text-center">
      <h2 class="main-title mt-0 font-weight-bold"><span>Speakers</span></h2>
      
      <div class="row">
        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/elena-alfaro.jpg" alt="" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Elena Alfaro</h3>
                <p class="text-light">Global Head of Open Data & Innovation</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/keith-williams.jpg" alt="Keith Williams" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Keith Williams</h3>
                <p class="text-light">HR Services Director</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/alexander-hubel.jpg" alt="Alexander Hübel" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Alexander Hübel</h3>
                <p class="text-light">Global Head of Automation & AI Transformation</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/dr-holger-koemm.jpg" alt="Dr Holger Koemm" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Dr Holger Koemm</h3>
                <p class="text-light">Director of Data Science</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/Jose-maria-san-jose.jpg" alt="José María  San José" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>José María San José</h3>
                <p class="text-light">Director of Technology</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/bill-bentaieb.jpg" alt="Bill Bentaieb" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Bill Bentaieb</h3>
                <p class="text-light">Head of Finance Transformation</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/andrew-pearce.png" alt="Andrew Pearce" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Andrew Pearce</h3>
                <p class="text-light">Global Head of Payments</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/aurelie-pols.png" alt="Aurélie Pols" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Aurélie Pols</h3>
                <p class="text-light">Data Governance & Privacy Engineer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/sergi-mesquida.jpg" alt="Sergi Mesquida Sergi Mesquida" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Sergi Mesquida Sergi Mesquida</h3>
                <p class="text-light">Head of Innovation & New Ventures</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/karol-kuhl.jpg" alt="Karol Kuhl" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Karol Kuhl</h3>
                <p class="text-light">Commercial Operations & Marketing Analytics Director CE</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/jonas-carlsson.jpg" alt="Jonas Carlsson" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Jonas Carlsson</h3>
                <p class="text-light">Head of Continuous Improvement & Technology</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 text-center mb-4">
          <div class="img-overlay border border-secondary">
            <img src="{{ config('app.url') }}images/rpa-ai/speakers/jacob-anthonsen.jpg" alt="Jacob Anthonsen" class="img-fluid" />
            <div class="text-overlay">
              <div class="img-text">
                <h3>Jacob Anthonsen</h3>
                <p class="text-light">Chief Consultant</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div class="container text-center">
      <h2 class="main-title mt-0 font-weight-bold"><span>Corporate Support</span></h2>
      <div class="row">
        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/abn-amro.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/bbva.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/bnp-paribas.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/boots.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/celonis.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/close-brothers.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/engie.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/fidelity.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/fidelity2.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/heathrow.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/hfs-research.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/idc.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>



        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/kellogg.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/marherstudy.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/maximise-it.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/nn.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/smith-nephew.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/dt.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/aviva.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/axa.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/ericsson.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/metlife.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/ubs.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>

        <div class="col-lg-2 text-center mb-4">
          <img src="{{ config('app.url') }}images/rpa-ai/corp-logos/unilever.jpg" alt="logo" class="img-fluid border border-secondary" />
        </div>
      </div>  
    </div>     

    <div class="pt-3 pb-3"></div> 

    <div class="container-fluid bg-dark">
      <div class="container pt-4 pb-4 text-center text-light">
        <p class="mb-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.plantautomation-technology.com - Powered by Ochre Media Pvt. Ltd.</p>
        <p class="mb-0"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> info@plantautomation-technology.com</p>
      </div>
    </div>


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

</body>
</html>


