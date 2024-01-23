e@xtends('../layouts/pages')
@section('style')
   <style>
      .contact-bg{
        background-image: url("{{ config('app.url') }}img/contact-us-bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center;
        color:#00838F;
        width: 100%;
        height: 200px;
        color: #fff;
      }

      .contact-bg h1{/*padding: 80px 0;*/color: #fff; line-height: 200px;}

      .contact-body-bg{
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3486b8+0,1db9c6+100 */
        background: #3486b8; /* Old browsers */
        background: -moz-linear-gradient(top,  #3486b8 0%, #1db9c6 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #3486b8 0%,#1db9c6 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #3486b8 0%,#1db9c6 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        color: #fff !important;
      }

      .form-group { margin-bottom: 1rem;}

      .form-control {
          display: block;
          width: 100%;
          padding: .375rem .75rem;
          font-size: 1rem;
          line-height: 1.5;
          color: #495057;
          background-color: transparent;
          background-image: none;
          background-clip: padding-box;
          border: 1px solid #fff;
          border-radius:0rem;
          transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
      }
       #autoComplete{
        background-color: #fff !important;
        border: 1px solid #9894944a;
      }

      .contact-btn{width: 200px;height: 40px; background-color: transparent;color: #fff; border: 1px solid #fff;}
      .contact-btn:hover{background-color: #fff;color: #3388B9;}

      iframe{width: 100%;height: 300px;border: 0px;}
      </style>
<script src="https://www.google.com/recaptcha/api.js?render=6LdVRuQZAAAAACpVV7puoqScYDgOZVA0wSzC4aUQ"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdVRuQZAAAAACpVV7puoqScYDgOZVA0wSzC4aUQ', {action: 'submit'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
      
@endsection
@section('content')
 <!-- Start Content -->
    <div class="mt-80"></div>
    
     <div class="container-fluid contact-bg text-center">
      <div class="row">
        <div class="col-lg-12">          
          <h1 class="text-white text-uppercase fa-2x">Contact Us</h1>  
        </div>
       </div>
     </div>

     <div class="container-fluid contact-body-bg pt-4 pb-4">
        <!-- Start Contact -->
        <div class="container">
          <div class="row">  
           
            <div class="col-lg-6 col-sm-12 pt-4">      
              
                    <div class="MRGN-10"></div>

                <!--  <div class="col-lg-1"></div> -->
                <center> @include('error')</center>   
                  <!-- Start Contact Form -->      
                  {{-- {!! Form::open(['url' => 'contactus-success']) !!} --}}
                  <form  method="post" action="{{ url('contactus-success') }}">
                    @csrf
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="publicid" value="0440bc841bc1b067a4b349068a99f7ca">
                    <input type="hidden" name="name" value="pulpandpaper-contactus">
                     <div class="form-group row">
                      <label for="name" class="col-lg-4 col-sm-2 col-form-label">First Name</label>
                      <div class="col-lg-8 col-sm-10">
                          {{Form::text('firstname', null,['required'=>'required','class'=>'form-control'])}}
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="name" class="col-lg-4 col-sm-2 col-form-label">Last Name</label>
                      <div class="col-lg-8 col-sm-10">
                          {{Form::text('lastname', null,['required'=>'required','class'=>'form-control'])}}
                      </div>
                    </div>

                <div class="form-group row">
                  <label for="email" class="col-lg-4 col-sm-2 col-form-label">Email</label>
                  <div class="col-lg-8 col-sm-10">
                   {{Form::text('email', null,['required'=>'required','class'=>'form-control'])}}
                  </div>
                </div>

                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Company Name</label>
                  <div class="col-lg-8 col-sm-10">
                   {{Form::text('company', null,['required'=>'required','class'=>'form-control'])}}
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Job Title</label>
                  <div class="col-lg-8 col-sm-10">
                   {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control'])}}
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Telephone</label>
                  <div class="col-lg-8 col-sm-10">
                    {{Form::text('mobile', null,['required'=>'required','class'=>'form-control'])}}
                  </div>
                </div>

                <div class="form-group row">
                  <label for="whom" class="col-lg-4 col-sm-2 col-form-label">How did you hear about us?</label>
                  <div class="col-lg-8 col-sm-10">
                    <select class="form-control" name="whom" required>
                      <option selected disabled>--- Select ---</option>
                      <option value="Internet Search">Internet Search</option>
                      <option value="Social Media">Social Media</option>
                      <option value="Email">Email</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Message</label>
                  <div class="col-lg-8 col-sm-10">
                    {{Form::textarea('description', null,['rows'=>3,'class'=>'form-control'])}}
                  </div>
                </div>
                <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">
               <!--  <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Captcha</label>
                  <div class="col-lg-8 col-sm-10">
                   {!! Form::captcha() !!}
                    </div>
                    <div class="error text-danger verifi"></div>
                </div> -->

                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label"></label>
                  <div class="col-lg-8 col-sm-10">
                    <input type="submit" class="btn contact-btn" value="submit">
                  </div>
                </div>
                {{-- {!! Form::close() !!} --}}
              </form>
            </div>     

            <div class="col-lg-1"></div>

            <div class="col-lg-5 text-white">
              <div class="pt-3 pb-3"></div>
              <div class="row">
                  <div class="col-lg-12">
                    <p class="fa-lg text-white font-weight-bold">Our Office:</p>
                  </div>
              </div>
              <div class="pb-3"></div>

              <div class="row">
                  <div class="col-lg-1">
                    <p class="text-white"><i class="fa fa-2x fa-map-marker" aria-hidden="true"></i></p>
                  </div>
                  <div class="col-lg-11 col-sm-12">
                    <p><img src="{{ config('app.url') }}img/uk-address.png" alt="UK Address" class="img-fluid"></p>
                  </div>
              </div>

              <!-- <div class="pb-2"></div> -->

              <div class="row">
                  <div class="col-lg-1">
                    <p class="text-white"><i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i></p>
                  </div>
                  <div class="col-lg-11">
                    <p class="text-white"><a class="text-white" href="mailto:info@pharmaceutical-tech.com?Subject=Contact%20Us&amp;bcc=web@ochre-media.com">info@pharmaceutical-tech.com</a></p>
                  </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Contact -->
      </div>
      <!-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
              <h4 class="modal-title text-success">{{session('message')}}</h4>
              <button type="button" class="close" href="{{url('contactus-success')}}">&times;</button>
              
            </div>
           <div class="modal-body">
                <p class="">Thank you for contacting us. One of our support staff will get in touch with you shortly.</p>
                 <p>Happy Surfing!</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
             <!-- <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button> -->
             <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a> 
            </div>
          </div>
        </div>
      </div> -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title text-success">{{session('message')}}</h5>
              <button type="button" class="close" onClick="location.href=location.href">&times;</button>
              
            </div>
           <div class="modal-body">
                <p class="">Thank you for contacting us. One of our support staff will get in touch with you shortly.</p>
                 <p>Happy Surfing!</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
              
            </div>
          </div>
        </div>
      </div>

<div id="customerrorpopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title text-danger">Error</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p id="errorText"></p>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
     </div>
   </div>
 </div>
</div>
@endsection
@section('scripts')
  @if(session('message'))
    <script type="text/javascript">
       $('#myModal').modal('show');   
        history.pushState(null, null, "/contactus-success");
    </script>
  @endif
  <script type="text/javascript">
      var url = "{{ url('contactus-success') }}";
      function OnButton1(){
        setTimeout(function(){
            document.contactus_form.action = url;
        document.contactus_form.submit();
         
        },200);
      }
      function checkform() {  
       var flag = true;
       var form = $('#form_count');
      if(form.find('select').val() == ''){
         $('#alertModal').modal('show');  
         return false;
       }  
       $("#form_count input").each(function(){
        if($(this)[0].hasAttribute("required")){
          if($(this)[0].value == ""){
            $('#alertModal').modal('show');                 
            flag = false;
          }
        }
      });
       if (!flag) { return false; }
     }
  </script> 
@endsection


