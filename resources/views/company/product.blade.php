@extends('../layouts/company')

@section('style')

 <style type="text/css">

   .product{

    min-height: 300px;

   }

   #product .overlay{

    height: 300px;

   }

 </style>

@endsection

<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script type="text/javascript">
         grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
              document.getElementById("g-recaptcha-response").value=token
            });
          });
</script>
<script type="text/javascript">
  function checkpopupform ($id){
      if($id =='Post'){
        grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'post'}).then(function(token) {
              document.getElementById("g-recaptcha-post-response").value=token
            });
          });
      }
  }
</script>
@section('content')

 <!-- // Profile Body -->



      <div class="container pt-4 pb-3">

        <div class="row">

          <div class="col-lg-12">

          {{-- {!! Form::open(['url' => 'company-enquiry']) !!} --}}

          <form action="{{url('company-enquiry')}}" name="product_form" class="product_form" method="post" id="form_count">

            @csrf

            <input type="hidden" name="publicid" value="6f6fbad2e8a0e3fd79096e13acb09486">

            <input type="hidden" name="name" value="plantautomation-product-enquiry">

            <input type="hidden" name="cf_leads_page" value="all_pages">      

            <input type="hidden" name="view_page" value="all_pages">



          <div class="row">

          <div class="col-lg-9 mb-3">

            <div class="row" id="product"> 

            @foreach($companyprofile as $cp)

              @foreach($cp->pproduct->where('active_flag',1)->where('stage',1) as $cproduct) 

              <div class="col-lg-4 mb-4">

                <div class="product div-shadow">

                  <div class="check">                       

                  </div> 

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

            @include('company._productEnquiryForall')
          </div>
        </div>
      </form>
        </div>
        {{-- {!! Form::close() !!} --}}
      </div></div>

      </div>  

      <!-- Profile Body // -->

    </div>

@endsection

@section('scripts')


<!-- <script type="text/javascript">

  

  //var product = '{{ @$prods[0]->url }}';

  var company = '{{ @$cp->url }}';

  

</script> -->

<!--@if(session('message_type') == 'success')    -->
<!--<script type="text/javascript">         -->
<!--var slug = '{{  Request::segment(2) }}';-->
<!--  history.pushState(null, null, '/products/'+slug+'/enquiry-success');-->

<!--  $('#myModal1').modal('show');         -->

<!--</script>-->

@endif

  <script type="text/javascript">

     @foreach($companyprofile as $cp)

              @foreach($cp->pproduct as $cproduct) 

    $('#check{{$cproduct->id}}').change(function()

        {

          if($(this).is(":checked"))

          {  

            $('#prodimage{{$cproduct->id}}').addClass('unselectable');

            $('#prodimage{{$cproduct->id}}').addClass('overlay');     

          } 

          else {
            $('#prodimage{{$cproduct->id}}').removeClass('unselectable');

            $('#prodimage{{$cproduct->id}}').removeClass('overlay');

          }

        });

    @endforeach

              @endforeach

  </script>
 <script type="text/javascript">

var url = "{{ url('company-enquiry') }}";

function OnButton1(){
 setTimeout(function(){
   document.product_form.action = url;
  document.product_form.submit();
      },100);
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
 gToken =$("#g-token").val();
    $.ajax({
          url: "{{route('gogglecaptha')}}",
          type: "POST",
          data: {'gtoken':gToken, '_token': '{{ csrf_token() }}'},
          success: function (response) {
              var obj = JSON.parse(response);
             // alert(obj.success);
              if(obj.success) {
                  OnButton1()
                  return true;
              }
              else{
                  alert("We can't proceed request with out captcha verification!");
                  return false;
              }           
          },
      });
//OnButton1();
//return true
}

</script> 
@endsection