@extends('../layouts/company')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
           {{--  {!! Form::open(['url' => 'company-enquiry']) !!} --}}
            <form name="product_form" class="product_form" method="post" id="form_count">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="hidden" name="publicid" value="6f6fbad2e8a0e3fd79096e13acb09486">
           <input type="hidden" name="name" value="plantautomation-product-enquiry">
            <input type="hidden" name="cf_leads_page" value="all_pages">
        <div class="row">
          <div class="col-lg-9 mb-3">
             @foreach($companyprofile as $cp)
            <div class="p-3 border border-secondary bg-white">   
                <h4 class="display-5 mb-3">About<span class="text-blue"> {{$cp->title }}</span></h4>          
                {!! $cp->description !!}                
            </div>
            @endforeach  

            <div class="row mt-4" id="product"> 
              <div class="col-lg-12">
                 <h4 class="display-5 mb-3">Products</span></h4>    
              </div>
            @foreach($companyprofile as $cp)
              @foreach($cp->pproduct->where('active_flag',1) as $cproduct) 
              <div class="col-lg-4 mb-4">
                <div class="product div-shadow">
                 
                  <div id="prodimage{{$cproduct->id}}">
                    <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}">
                      <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image}}" alt="{{$cproduct->alt_tag}}"/></a>
                    <h2><a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}">{!!$cproduct->title!!}</a></h2>
                  </div>
                </div>
              </div>
              @endforeach
              @endforeach
            </div>


          </div>

          <div class="col-lg-3 pb-3">
           @include('company._productEnquiryForm')
          </div>
        </div>
      </form>
      </div>  
      <!-- Profile Body // -->
    
@endsection
@section('scripts')

 @if(session('message_type') == 'success')    
          <script type="text/javascript">         
          var slug = '{{ $cp->url }}';
          history.pushState(null, null, '/suppliers/'+slug+'/enquiry-success');
              $('#myModal1').modal('show');         
         </script>
  @endif

  <script type="text/javascript">
      var url = "{{ url('company-enquiry') }}";
      function OnButton1(){
         document.product_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
           document.product_form.submit();

         
            
        setTimeout(function(){
           document.product_form.action = url;
          document.product_form.submit();
          /*
          $('.product_form').prop('action',url);
           $('.product_form').submit(function(){return true;});*/
          
        },400);
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