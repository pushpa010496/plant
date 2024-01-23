@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
        <div class="row">
          
          
           <div class="col-lg-9">
            <div class="row">    
            @foreach($speakers as $cp)          
               <div class="col-lg-4 text-center mb-4">
                <div class="border border-secondary div-shadow p-3 min-height-240">
                  <img class="img-fluid rounded-circle mb-2" src="{{ config('app.url') }}event/speaker/{{$cp->image}}" alt="" width="120">
                  <h3 class="display-6 text-blue">{{$cp->name}}</h3>
                  <p class="card-text"><small>{{$cp->designation}}</small></p>
                </div>
              </div>
              @endforeach 
            </div>
          </div>
            
          <div class="col-lg-3 pb-3">
            {{-- {!! Form::open(['url'=>'company-enquiry']) !!} --}}
             <form name="speakers_form" method="post" id="form_count">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
                <input type="hidden" name="name" value="plantautomation-event-register">
              <input type="hidden" name="cf_leads_page" value="event-speaker">
            @include('events._eventRegisterForm2')
            {{-- {!! Form::close() !!} --}}
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
            window.history.pushState("object or string", "Title",url+"/speaker-enquiry-success");
              $('#myModal1').modal('show');         
         </script>
  @endif  
   <script type="text/javascript">
      var url = "{{ url('company-enquiry') }}";
      function OnButton1(){
         document.speakers_form.action = url;
        document.speakers_form.submit();
            
        setTimeout(function(){
           document.speakers_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.speakers_form.submit(); 
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