@extends('../layouts/app')
@section('style')
 
@endsection
@section('content')
<div class="container advert">
        <div class="row">

        <div class="col-lg-9">
        @if(session('message'))
            <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{@session('message')}}
            </div>
        @endif
      </div>
        <!-- Modal -->
        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal1">Get listed</button>
        <div id="myModal1" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Premium Membership</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
              <form method="post" action="{{route('getlist.premium')}}">
            {{csrf_field()}}                  
              
              <input type="hidden" name="member_type" value="premium">
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
                <!-- {!! Form::captcha() !!} -->
              </div>   

              <div class="form-group">
                  <button type="submit" class="btn btn-system mt-1">Submit</button>
              </div>

              <!-- <p class="text-left mt-3">OR write to us at <br/>
              <a href="mailto:info@plantautomation-technology.com?Subject=Contact%20Plantautomation%20Technology%20for%20Advertising&amp;bcc=web@ochre-media.com" class="text-white">info@plantautomation-technology.com</a> <br/>
              Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a> </p> -->
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
              <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal2">Get listed</button> 
              <!-- Modal -->
            <div id="myModal2" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                   <h4 class="modal-title">Basic Membership</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                  </div>
                  <div class="modal-body">
                      <form method="post" action="{{route('getlist.basic')}}">
            {{csrf_field()}}                  
              <input type="hidden" name="member_type" value="basic">
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
                  <button type="submit" class="btn btn-system mt-1">Submit</button>
              </div>

              <!-- <p class="text-left mt-3">OR write to us at <br/>
              <a href="mailto:info@plantautomation-technology.com?Subject=Contact%20Plantautomation%20Technology%20for%20Advertising&amp;bcc=web@ochre-media.com" class="text-white">info@plantautomation-technology.com</a> <br/>
              Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a> </p> -->
            </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>     
             
      </div>
  </div>


@endsection
