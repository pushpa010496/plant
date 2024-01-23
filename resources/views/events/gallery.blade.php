@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
 <!-- {!! Form::open(['url' => 'company-enquiry']) !!} -->
      <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-lg-9">  
              <div class="row">
              @foreach($galleries as $cp)
                  <div class="col-lg-4 mb-4">
                <a href="{{ config('app.url') }}event/gallery/{{$cp->big_img}}" data-toggle="lightbox" data-gallery="example-gallery">
                  <img src="{{ config('app.url') }}event/gallery/{{$cp->small_img}}" class="img-fluid div-scal">
                </a>
              </div>

              @endforeach 
              @foreach($eventprofile as $cp)
               <input type="hidden" name="event_name_display" value="{{$cp->name}}">   
               @endforeach  
            </div>
            </div>
            
          <div class="col-lg-3 pb-3">  
             <form name="gallery_form" method="post" id="form_count">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
              <input type="hidden" name="name" value="plantautomation-event-register"> 
              <input type="hidden" name="cf_leads_page" value="event-Gallery">         
            @include('events._eventRegisterForm')
          </form>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>

@endsection
@section('scripts')
 
   @if(session('message_type') == 'success')    
          <script type="text/javascript">         
         var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"/register-success");
              $('#myModal1').modal('show');         
         </script>
  @endif
    <script src="{{ asset('industry/js/ekko-lightbox.min.js')}}"></script>

 <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });    
  </script>

<script type="text/javascript">
      var url = "{{ url('company-enquiry') }}";
      function OnButton1(){
         document.gallery_form.action = url;
        document.gallery_form.submit();
            
        setTimeout(function(){
           document.gallery_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.gallery_form.submit(); 
          /*
          $('.product_form').prop('action',url);
           $('.product_form').submit(function(){return true;});*/
          
        },200);
      }
      function checkform() {  

       var flag = true;
       var form = $('#form_count');
       if(form.find('select').val() == ''){
         $('#alertModal').modal('show');  
         return false;
       }    
       if(grecaptcha.getResponse() == ""){
        
        form.find('.verifi').html("We can't proceed request with out captcha verification!");

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
       OnButton1();
       return true
       
     }
  </script> 
 
@endsection

