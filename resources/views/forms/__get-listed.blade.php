@extends('../layouts/app')
@section('style')
    <style>
      .card-deck .card .card-body{height: auto !important;}
      .table td, .table th {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important;

       /* padding-left: 0.75rem;*/
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
<div class="mt-80"></div>

        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-success">{{session('member_type')}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                  <p class="">Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.<p>Sincerely Plant Automation Technology</p></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

     @if(session('message'))
        <script type="text/javascript">
          $(document).ready(function(){ 
              $('#myModal').modal('show');
          });
      </script>
      @endif
     
    </div>

    <div class="container-fluid text-center get-listed-bg">
      <h2 class="display-5 text-center ">Global Marketplace for</h2>
      <h1 class="font-weight-bold text-center pb-2">B2B Manufacturers, Suppliers and Buyers.</h1>
      <p class="mb-0 text-center">Be Found, Get Enquiries, Make Sales - With Plant Automation Technology</p>
    </div>
    
    <div class="pt-3 pb-3"></div>

    <div class="container text-center bg-darkblue pt-4  pb-4">
      <h2 class="display-4 text-center text-white">We receive a lot of RFQs and RFIs</h2>
      <p class="mb-0 text-center text-white">from buyers worldwide that fits <strong>your line of business</strong></p>
    </div>

    <div class="pt-3 pb-3"></div>
    
    <div class="container">
      <div class="row">
        <p>To fulfill our ever increasing "supplier/ product discovery" requirements from buyers across the globe, our team of industry experts have <strong>identified and shortlisted you as a possible partner.</strong></p>

        <p>To let you get a hang of our services/ offerings and benefits, we propose to offer you <strong>first six months of our Basic Membership at free of cost (worth USD 750) with no obligations.</strong> You may upgrade to a paid membership after your six months tenure gets over or anytime before that (or you may simply...let it go).</p>

        <p>Ensure your product and company exposure is worldwide to prospective Buyers and B2B decision makers for 24/7/365.
        Our comprehensive partnership program ensures you don’t miss out on business opportunities that really make a difference.</p>
      </div>
    </div> 
    
    <div class="pt-3 pb-3"></div> 
      
     <div class="container">
      <div class="row">
        <div class="col-lg-1 text-center"></div>

        <div class="col-lg-2 text-center div-shadow">
          <p class="text-blue font-weight-bold pt-2">
            <i class="fa fa-4x rounded-circle fa-user-plus" aria-hidden="true"></i>
          </p>
          <p class="display-6">Average Page Visits</p>
          <p class="display-4 font-weight-bold">200K+</p>
        </div>

        <div class="col-lg-2 text-center"></div>

        <div class="col-lg-2 text-center div-shadow">
          <p class="text-blue font-weight-bold pt-2">
            <i class="fa fa-4x rounded-circle fa-eye" aria-hidden="true"></i>
          </p>
          <p class="display-6">Unique Page Visitors</p>
          <p class="display-4 font-weight-bold">72K+</p>
        </div>

        <div class="col-lg-2 text-center"></div>

        <div class="col-lg-2 text-center div-shadow">
          <p class="text-blue font-weight-bold pt-2">
            <i class="fa fa-4x rounded-circle fa-handshake-o" aria-hidden="true"></i>
          </p>
          <p class="display-6">Average Engagement</p>
          <p class="display-4 font-weight-bold">46K+</p>
        </div>

        <div class="col-lg-1 text-center"></div>
      </div>
    </div>   

    <div class="pt-3 pb-5"></div> 

    <div class="container">
      <div class="row bg-light div-shadow">
        <img src="{{ config('app.url') }}/images/market-chart.png" class="d-inline-block align-middle" alt="Market Trends" />
      </div>
    </div>    
    
    <div class="pt-3 pb-5"></div> 

    <div class="container" align="center">
      <div class="row">
        <table class="table table-striped border border-secondary" style="width: 90%;">
          <!-- <thead class="bg-darkblue text-white text-center display-5">
            <tr>
              <td scope="col">Basic Membership</td>
              <td class="border-left" width="1"></td>
              <td scope="col">Premium Membership</td>
            </tr>
          </thead> -->

          <tbody>
            <tr>
              <td class="bg-darkblue text-white text-center display-5 font-weight-bold">Basic Membership <i class="fa fa-star ml-2" aria-hidden="true"></i>
              </td>
              <td class="bg-darkblue text-white text-center display-5 border-left" width="1"></td>
              <td class="bg-darkblue text-white text-center display-5 font-weight-bold">Premium Membership 
                <i class="fa fa-star ml-2" aria-hidden="true"></i>
                <i class="fa fa-star fa-lg ml-2" aria-hidden="true"></i>
                <i class="fa fa-star ml-2" aria-hidden="true"></i>
              </td>
            </tr>
            <tr>
              <td>Put yourself at the forefront of enhanced business dynamics and success.</td>
              <td class="border-left"></td>
              <td>Take your business success to the next level with our premium services.</td>
            </tr>
            <tr>
              <td>Comprises of:</td>
              <td class="border-left"></td>
              <td>Comprises of:</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Company Listing on our Portal with -</td>
              <td class="border-left"></td>
              <td class="font-weight-bold">Everything in Basic Membership, and:</td>
            </tr>

            <tr>
              <td>Unlimited Products Uploads</td>
              <td class="border-left"></td>
              <td>SEO Pro (Search Engine Optimization)</td>
            </tr>
            <tr>
              <td>Unlimited PDF Catalogues</td>
              <td class="border-left"></td>
              <td>SMM Pro (Social Media Marketing)</td>
            </tr>

            <tr>
              <td>Unlimited Product Tech Sheets and Videos</td>
              <td class="border-left"></td>
              <td>E-Newsletter</td>
            </tr>
            <tr>
              <td>Unlimited Profile and Product Edits</td>
              <td class="border-left"></td>
              <td>E-Mail Marketing</td>
            </tr>

            <tr>
              <td>Back-Link to your website</td>
              <td class="border-left"></td>
              <td>Banner Promotions</td>
            </tr>
            <tr>
              <td>Company Name and Logo</td>
              <td class="border-left"></td>
              <td>Content Marketing</td>
            </tr>

            <tr>
              <td>Company Address</td>
              <td class="border-left"></td>
              <td>Monthly Performance Report and Advise</td>
            </tr>
            <tr>
              <td>Contact Phone, Fax</td>
              <td class="border-left"></td>
              <td>Free Access to Premium Industry Reports</td>
            </tr>

            <tr>
              <td>Onboarding Support</td>
              <td class="border-left"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>SEO (Search Engine Optimization)</td>
              <td class="border-left"></td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td>SMM (Social Media Marketing)</td>
              <td class="border-left"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Guaranteed Business Enquiries**</td>
              <td class="border-left"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Monthly Performance Report</td>
              <td class="border-left"></td>
              <td>&nbsp;</td>
            </tr>  

            <tr class="bg-white text-center border-0">
              <td>               
                <button class="btn btn-primary btn-radius" data-toggle="modal" data-target="#myModal1">Get listed</button>
                 <p class="mt-1 mb-0">USD 125 per month <span class="small font-italic">(Billed Annually)</span></p>
              </td>
              <td class="border-left"></td>
              <td>               
                <button class="btn btn-primary btn-radius" data-toggle="modal" data-target="#myModal2">Get listed</button>
                 <p class="mt-1 mb-0">USD 200 per month <span class="small font-italic">(Billed Annually)</span></p>
              </td>
            </tr>           
          </tbody>
        </table>
      </div>  
    </div>

    <div class="pt-4 pb-4"></div> 


    <div class="container">
      <div class="row">
        <div class="card-deck text-center">
          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <div class="card-body">
              <p class="card-text">"I was skeptical of the initial six months complimentary period and what benefits i will derive out of their program, but I was really happy to see a steady stream of product enquiries and moreover from markets were we failed earlier. Their  customer success team (as they call it) is at the top of their game. Happy to recommend."</p> 
              <h5 class="card-title pt-2 mb-1 text-blue font-weight-bold">Lisa Harris</h5>
              <p class="card-text">- Sr. Marcom Lead, Robots Universe, USA</p>
              <p class="text-muted">(Signed-up for Business Promos and Business)</p>
            </div>
          </div>

          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <div class="card-body">
              <p class="card-text">"Their six months fully functional complimentary package is really a good opportunity for custom manufacturers like us to get a fair idea of what to expect. I sincerely recommend them to anyone looking not only for a steady stream of business but also to work with a team that is super dedicated. Truly Happy."</p>              
              <h5 class="card-title pt-2 mb-1 text-blue font-weight-bold">David Camasi</h5>
              <p class="card-text">Marketing & Sales Head Bigfoot Tools Inc.</p>
              <p class="text-muted">(Signed-up for Lead Generations from European Regions.)</p>
            </div>
          </div>
        </div>            
      </div>
      <p class="text-muted text-right font-italic pt-1">And many more...</p>
    </div> 
    
    <div class="pt-3 pb-3"></div> 

    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1519370127-logo.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517650960-teldor.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517640088-robotnik.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1518695127-logo.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517555519-mitsubishi.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517650262-tecnofluid.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517648473-syslogic.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>

        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url') }}company/1517635485-phytron.jpg" alt="" class="img-fluid mb-4 div-shadow" />
        </div>
      </div>
    </div> 

    <div class="pt-3 pb-3"></div>

    




      
      <!-- // Popup -->
      <div class="container advert">
        <div class="row">
        <!-- Modal-1 -->
        <!--  <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal1">Get listed</button> -->   
        <div id="myModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-blue">Basic Membership</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                  <form method="post" action="{{route('getlist.basic')}}">
          {{csrf_field()}}                  
            <input type="hidden" name="member_type" value="basic-membership">
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
              <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">
            </div>
            <div class="form-group">
                  <select class="form-control" name="country">
                    <option>Select Country</option>
                  @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                  @endforeach
                  </select>
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
                <button type="submit" class="btn btn-success mt-1">Submit</button>
            </div>
          </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 


        <!-- Modal-2 -->
        <!-- <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal2">Get listed</button> -->
        <div id="myModal2" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-blue">Premium Membership</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
              <form method="post" action="{{route('getlist.premium')}}">
            {{csrf_field()}}                  
              
              <input type="hidden" name="member_type" value="premium-membership">
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
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">
              </div>
              <div class="form-group">
                    <select class="form-control" name="country">
                      <option>Select Country</option>
                    @foreach($countries as $country)
                      <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                    </select>
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
                  <button type="submit" class="btn btn-success mt-1">Submit</button>
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        </div>
      </div>
      <!-- Popup // -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
@endsection


