@extends('../layouts/pages')

@section('style')


@endsection

@section('content')

        
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

        
      
      </div>

    <div class="container-fluid text-center get-listed-bg" style="margin-top: 85px">
      <h2 class="display-5 text-center ">Global Marketplace for</h2>
      <h1 class="font-weight-bold text-center pb-2">B2B Manufacturers, Suppliers and Buyers.</h1>
      <p class="mb-0 text-center">Be Found, Get Enquiries, Make Sales - With Plant Automation Technology</p>
    </div>


    <div class="pt-3 pb-3"></div>

    <div class="container text-center  pt-4  pb-4">

     <img src="{{ config('app.url') }}/images/get-listed1-banner.jpg" class="d-inline-block align-middle" alt="Market Trends" />
    </div>

    <div class="pt-3 pb-3"></div>




    <div class="container text-center pt-4">
        <div class="row">
          <div class="col-lg-1 text-center"></div>

          <div class="col-lg-2 text-center">
            <p class="text-blue font-weight-bold mb-1">
              <i class="fa fa-2x p-3 rounded-circle border border-primary fa-user-plus" aria-hidden="true"></i>
            </p>
            <p class="display-6 mb-2">Average Page Visits</p>
            <p class="fa-lg font-weight-bold text-blue">200K+</p>
          </div>

          <div class="col-lg-2 text-center"></div>

          <div class="col-lg-2 text-center">
            <p class="text-blue font-weight-bold mb-1">
              <i class="fa fa-2x p-3 rounded-circle border border-primary fa-eye" aria-hidden="true"></i>
            </p>
            <p class="display-6 mb-2">Unique Page Visitors</p>
            <p class="fa-lg font-weight-bold text-blue">72K+</p>
          </div>

          <div class="col-lg-2 text-center"></div>

          <div class="col-lg-2 text-center">
            <p class="text-blue font-weight-bold mb-1">
              <i class="fa fa-2x p-3 rounded-circle border border-primary fa-handshake-o" aria-hidden="true"></i>
            </p>
            <p class="display-6 mb-2">Average Engagement</p>
            <p class="fa-lg font-weight-bold text-blue">46K+</p>
          </div>

          <div class="col-lg-1 text-center"></div>
        </div>
      </div>
    

    <div class="pt-2 pb-2"></div> 

    <div class="container pl-0 pr-0">
      <div class="row">
        <div class="col-lg-7">
          <table class="table table-striped border border-secondary membership-table" align="center">
            <tbody>
              <tr>
                <td class="bg-darkblue text-white text-center display-5 font-weight-bold">
                  <i class="fa fa-star mr-3" aria-hidden="true"></i> Complimentary Pack <i class="fa fa-star ml-3" aria-hidden="true"></i><span class="pull-right small">(6 Months Free)</span>
                </td>
              </tr>
              <tr>
                <td class="pl-5">Put yourself at the forefront of enhanced business dynamics and success.</td>
              </tr>
              <tr>
                <td class="pl-5">Comprises of:</td>
              </tr>
              <tr>
                <td class="pl-5 font-weight-bold">Company Listing on our Portal with -</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Unlimited Products Uploads</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Unlimited PDF Catalogues</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Unlimited Product Tech Sheets and Videos</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Unlimited Profile and Product Edits</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Back-Link to your website</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Company Name and Logo</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Company Address</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Contact Phone, Fax</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Onboarding Support</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> SEO (Search Engine Optimization)</td>
              </tr>

              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> SMM (Social Media Marketing)</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Guaranteed Business Enquiries**</td>
              </tr>
              <tr>
                <td class="pl-5"><i class="fa fa-check-square-o text-blue mr-3 pl-4" aria-hidden="true"></i> Monthly Performance Report</td>
              </tr>           
            </tbody>
          </table>
        </div>

        <div class="col-lg-5" id="company-profile">
          <div class="border border-secondary p-3 bg-light">
            <h2 class="font-weight-bold display-4 pb-3 text-center text-blue">Signup for Free</h2>
            <form method="post" action="{{route('getlist1.basic')}}">
              {{csrf_field()}}                  
              <input type="hidden" name="member_type" value="linkedin-offer">
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

              <div class="form-group mb-0">
                {!! Form::captcha() !!}
              </div>   

              <div class="form-group text-center">
                  <button type="submit" class="btn btn-block btn-primary mt-1 btn-radius">Yes, I am interested</button>
              </div>
            </form>
        </div>
        </div>
      </div>  
    </div>

    


    <div class="container">
      <div class="row bg-light div-shadow">
        <img src="{{ config('app.url') }}images/market-chart.png" class="d-inline-block align-middle" alt="Market Trends" />
      </div>
    </div> 

    <div class="pt-4 pb-4"></div> 


    <div class="container">
      <div class="row">
        <div class="card-deck text-center">
          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary mb-1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <div class="card-body">
              <p class="card-text">"I was skeptical of the initial six months complimentary period and what benefits i will derive out of their program, but I was really happy to see a steady stream of product enquiries and moreover from markets were we failed earlier. Their  customer success team (as they call it) is at the top of their game. Happy to recommend."</p> 
              <h5 class="card-title pt-2 mb-1 text-blue font-weight-bold">Lisa Harris</h5>
              <p class="card-text">- Sr. Marcom Lead, Robots Universe, USA</p>
              <p class="text-muted">(Signed-up for Business Promos and Business)</p>
            </div>
          </div>

          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary mb-1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
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
                <form method="post" action="{{route('getlist1.basic')}}">
                  {{csrf_field()}}                  
                  <input type="hidden" name="member_type" value="Basic-membership">
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

  <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
 @if(session('message'))
        <script type="text/javascript">
          $(document).ready(function(){ 
              $('#myModal').modal('show');
              /*setTimeout(
                  function() 
                  {
                   window.location.href = "{{URL::to('download-pdf')}}";
                  }, 1000);*/
             
          });
        </script>
        
        @endif 

</body>
</html>
@endsection