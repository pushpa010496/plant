@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-lg-9">           
              @foreach($eventprofile as $cp)
                {!! $cp->eventprofile->exhibitor_description !!}
                <input type="hidden" name="event_name_display" value="{{$cp->name}}">
              @endforeach      
            </div>
            
          <div class="col-lg-3 pb-3">
            {{-- {!! Form::open(['url'=>'company-enquiry']) !!} --}}
            <form name="exhibitors_form"  method="post" id="form_count">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
              <input type="hidden" name="name" value="plantautomation-event-register">
              <input type="hidden" name="cf_leads_page" value="event-exhibitors">
             @include('events._eventRegisterForm')
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
            window.history.pushState("object or string", "Title",url+"/exhibitor-signup-success");
              $('#myModal1').modal('show');         
         </script>
  @endif
     <script type="text/javascript">
      var url = "{{ url('company-enquiry') }}";
      function OnButton1(){
         document.exhibitors_form.action = url;
        document.exhibitors_form.submit();
            
        setTimeout(function(){
           document.exhibitors_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.exhibitors_form.submit(); 
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

