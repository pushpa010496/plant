@extends('../layouts/pages')
@section('style')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<style>
  .card-deck .card .card-body{height: auto !important;}
  .table td, .table th {
    padding-top: .5rem !important;
    padding-bottom: .5rem !important;

   /* padding-left: 0.75rem;*/
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    }
    /*Pricing Css*/
    .pricing-body{
      border:1px solid #d0caca;
      border-top-width: 0;
      min-height:530px;
    }
    .pricing-body li{
      margin-bottom: 13px;
      font-size: 14px;
      color:#555;

    }
    .pricing-body button{
      font-size: 14px !important;

    }
    .pricing-body li i{
      margin-right: 5px;
    }
    .pricing-footer-btn{
      bottom: 10px;
      position: absolute;
      left: 36%;
    }
    .pricing-body .title {
      min-height: 70px;
    }
    @media(min-width: 992px){
    	.cpr-0{
    		    padding-right: 0px !important;
    	}
    	.cp-0{
    		    padding: 0px !important;
    	}
    	.cpl-0{
    		    padding-left: 0px !important;
    	}
    	.cborder-left-0{
    		border-left: 0 !important;
    		}
    	.cborder-right-0{
    		border-right: 0 !important;
    	}

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
              <h4 class="modal-title text-success success-title">Successfully submitted</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.<p>Sincerely Plant Automation Technology</p></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    
     
    </div>

    <!-- <div class="container-fluid text-center get-listed-bg">
      <h2 class="display-5 text-center ">Global Marketplace for</h2>
      <h1 class="font-weight-bold text-center pb-2">B2B Manufacturers, Suppliers and Buyers.</h1>
      <p class="mb-0 text-center">Be Found, Get Enquiries, Make Sales - With Plant Automation Technology</p>
    </div> -->
    
    <section>
      <img src="{{ config('app.url').'images/getlisted-new-bg.jpg' }}" alt="industry image" width="100%">
    </section>
    <div class="pt-3 pb-2"></div>

    <!-- <div class="container text-center bg-darkblue pt-4  pb-4">
      <h2 class="display-4 text-center text-white">Get connected with the most bustling B2B market of</h2>
      <h2 class="mb-0 text-center text-white display-5">Buyers, Engineers, MRO's and Manufacturers.</strong></h2>
    </div> -->

    <div class="container ">
      <!-- <div class="text-center bg-darkblue pt-4  pb-4">
      <h2 class="display-4 text-center text-white">Getting your product discovered is critical for business success.</h2>
      <h2 class="mb-0 text-center text-white display-5">Join a qualified network of manufacturers, buyers and suppliers from the manufacturing industry.</strong></h2>
      </div> -->
           <div class="row">
            <div class="col-md-12">
              <div class=" p-3" style="background: #eff4f9">
                <h4 class="text-blue text-center mt-2 mb-4" >Choose a program to get started</h4>
              <p class="mt-2">Enhance your business reach; get in front of thousands of buyers, procurement professionals, manufacturing engineers. Get industry insights, news, relevant tenders and much more.</p>
              <p class="mt-2">Stay ahead of your competition with qualified business leads, RFQs, custom product enquiries and relevant industrial projects.</p>
              <p class="mt-2">Choose a program that best suits your business goals, budget and give your business an unparallel exposure of qualified buyers.</p>      
            </div>
            </div>
        
      </div>
    </div>


    <div class="container">

       <!-- New price table -->
      <div class="row mt-3">
         <div class="col-md-12">
         
           <div class="row">
              <div class="col-sm-12 col-lg-4 cpr-0 mt-1">
                <div class="pricing_table">
                <div class="header bg-darkblue p-2 text-center">
                    <h5 class="text-white mb-0 mt-0">Free Listing
                        <img src="{{ config('app.url') }}img/free-listing-icon.png"  class="" alt="Logo" />
                    </h5>
                </div>
                <div class="pricing-body p-3">
                  <p class="title" style="color:#111">Join the network of industry’s leading product sourcing and discovery platform.</p>
                  <h6 class="mt-3">You Get:</h6>

                  <ul class="pl-0 mt-3 " style="list-style-type: none;" >
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Detailed Company Profile</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> 6 Products showcasing</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> 6 Products images</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> 6 Product Catalogues</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Product categorized listing</li>
                  </ul>
                  <div class="text-center pricing-footer-btn">
                    <p class="mb-0"><em>Free</em></p>
                   <button class="btn btn-primary btn-radius modal-btn" data-id="free-listed" data-toggle="modal" data-target="#myModal0">Get Started</button> 
                  </div>
                   
                </div>
                </div>
              </div>
              <div class="col-lg-4 cp-0 mt-1">
                 <div class="pricing_table">
                  <div class="header bg-darkblue p-2 text-center">
                      <h5 class=" text-white  mb-0 mt-0">Basic Plan
                          <img src="{{ config('app.url') }}img/basic-plan-icon.png"  class="" alt="Logo" />
                      </h5>
                  </div>
                  <div class="pricing-body p-3 cborder-left-0 cborder-right-0">
                  <p class="title" style="color:#111">First step towards discovering new markets, qualified enquiries and enhanced market engagements.</p>
                  <h6 class="mt-3">You Get:</h6>

                  <ul class="pl-0 mt-3 " style="list-style-type: none;" >
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Detailed Company Profile</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Unlimited Product showcasing</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Unlimited Product images</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Unlimited Product/Company Catalogues/PDFs</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Unlimited videos</li>

                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Unlimited profile and product edits</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Verified Business Enquiries</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> On boarding technical/sales support</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> SEO (Search Engine Optimization)</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> SMM (Social Media Marketing)</li>
                  </ul>
                  <div class="text-center pricing-footer-btn">
                   <button class="btn btn-primary btn-radius modal-btn" data-id="basic-membership" data-toggle="modal" data-target="#myModal0">Get a Quote</button> 
                  </div>
                   
                </div>
              </div>
              </div>
              <div class="col-lg-4 cpl-0 mt-1">
                 <div class="pricing_table">
                  <div class="header bg-darkblue p-2 text-center">
                      <h5 class=" text-white  mb-0 mt-0">Premium Plan
                           <img src="{{ config('app.url') }}img/premium-icon.png"  class="" alt="Logo" /> 
                      </h5>
                  </div>
                          <div class="pricing-body p-3">
                  <p class="title" style="color:#111">Stand out of your competition with global presence, enhanced market reach, top of the line industry insights & more sales.</p>
                  <h6 class="mt-3">You Get:</h6>

                  <ul class="pl-0 mt-3" style="list-style-type: none;" >
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Everything in Basic Plan, Plus:</li>                  
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> SEO Pro (Search Engine Optimization</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> SMM Pro (Social Media Marketing)</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> E-Newsletter Presence (n/w of 140K)</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Email Marketing</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Banner Placements</li>
                    <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Content Marketing</li>
                    <!-- <li><i class="fa fa-check-square-o text-info" aria-hidden="true"></i> Access to cutting edge industry reports</li> -->
                  </ul>

                  <div class="text-center pricing-footer-btn">
                   <button class="btn btn-primary btn-radius modal-btn" data-id="premium-membership" data-toggle="modal" data-target="#myModal0">Get a Quote</button> 
                  </div>
                   
                </div>
                </div>
              </div>
           </div>        
         </div>
      </div>
      <!-- New price table End -->

       <div class="text-center bg-darkblue pt-4 pb-4 mt-4">
      <h2 class="display-6 text-center text-white">*Not sure which one is right for you? Speak with a PAT.com representative at +91 40 4961 4567</h2>
      <h2 class="mb-0 text-center text-white display-6">or Email us at info@plantautomation-technology.com</strong></h2>
      </div>
    </div>

    <!-- <div class="pt-4 pb-4"></div>  -->


    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
        <div class="card-deck text-center">
          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary mb-1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <div class="card-body pl-4">
              <p class="card-text">"I have a very active relationship with them. Their platform helps me in directly contacting material suppliers, raise RFIs and deal with those in batches. Plant Automation platform is a very important tool in my work life that I use.</p>
              <p class="card-text">Keep up the good work."</p> 
              <h5 class="card-title pt-2 mb-1 text-blue font-weight-bold">Brian Blevans</h5>
              <p class="card-text">Plant Maintenance Consultant.</p>
              <p class="card-text">Unicorn Industrial Services.</p>
              <p class="text-muted">(Signed-up for Digital Promos and Business Listing.)</p>
            </div>
          </div>

          <div class="card text-center border border-secondary pb-4 pt-2 bg-light">
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <p class="display-1 text-secondary mb-1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <div class="card-body pl-4">
              <p class="card-text">"Superb network of buyers...really! What amazed me is that within 15 days of us going live on their website we actually received more product enquiries than we got in total that quarter."</p>
              <p>&nbsp;</p>              
              <h5 class="card-title pt-2 mb-1 text-blue font-weight-bold">Juan Douglas</h5>
              <p class="card-text">Business Partner</p>
              <p class="card-text">Metro Tools Inc.</p>
              <p class="text-muted">(Signed-up for Business Listing and Brand Promos.)</p>
            </div>
          </div>
        </div>            
        </div>
      </div>
      <p class="text-muted text-right font-italic pt-1">And many more...</p>
    </div>  
    
    <div class="pt-3 pb-3"></div> 

    <div class="container">
      <div class="row">
        @foreach($clientele as $logo)
        <div class="col-lg-3 text-center">
          <img src="{{ config('app.url')}}suppliers/{{ str_slug($logo->comp_name) }}/{{ $logo->comp_logo }}" alt="" class="img-fluid mb-4 div-shadow" />
        </div>
        @endforeach
     
      </div>
    </div> 

    <div class="pt-3 pb-3"></div>

    




      
     <!-- // Popup -->
      <div class="container advert">
        <div class="row">
            <!-- Modal 0 -->
            <div id="myModal0" class="modal fade">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-blue">Free Listing</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                 <ul class="error" style="list-style-type: none;"></ul>
                <form method="post" name="getlist_form">
                  
                    {{-- v-tiger fields --}}
                    <input type="hidden" name="publicid" value="e61b440a856ef834e43e624afa389482">
                    <input type="hidden" name="urlencodeenable" value="1">
                    <input type="hidden" name="name" value="plantautomation-getlisted">
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
                         
            <input type="hidden" name="member_type" class="mem_type" value="free-listed">
       

              <div class="form-group">
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>
            </div>
              <div class="form-group">
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" required>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>

          
            <div class="form-group">
              <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="cf_leads_jobtitle" id="job_title" placeholder="Job Title">
            </div>
            <div class="form-group">
                  <select class="form-control" name="cf_leads_countryname" required>
                    <option>Select Country</option>
                  @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                  @endforeach
                  </select>
                </div>
            <div class="form-group">
              <input type="text" class="form-control" name="mobile" id="phone" placeholder="Telephone" required>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="description"  id="message" rows="2" placeholder="Your Message..."></textarea>
            </div>

            <div class="form-group mb-0">
              {!! Form::captcha() !!}
            </div>
            <div class="text-danger verifi"></div>   

          </form>
          
            <div class="form-group">
                <button type="submit" class="btn btn-success mt-1 submit-btn" id="sub">Submit</button>
            </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info " data-dismiss="modal">Close</button>
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
<script type="text/javascript">
    toastr.options = {
      "positionClass": "toast-center-center",
      "timeOut": "5000",
    }
    $('.modal-btn').on('click',function(){

      var memType = $(this).attr('data-id');
      if(memType == 'premium-membership'){
        $('.modal-title').text('Premium Plan');
      }else if(memType == 'basic-membership'){
        $('.modal-title').text('Basic Plan');
      }else{
        $('.modal-title').text('Free Listing');
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
          title = 'Free Listing Success';
        }
       $.ajax({
            type: 'POST',
            url: "{{ url('basic-membership') }}",
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: dataString,       
            success:function(data){
              history.pushState(null, null, "/get-listed/"+plan+"/success");                           
              // $('#myModal0 .modal-footer').find('button').click();

              $('#myModal0').modal('hide');             

              $('.success-title').text(title);
                $(".error").empty();

                document.getlist_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
                document.getlist_form.submit();  
                   
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



