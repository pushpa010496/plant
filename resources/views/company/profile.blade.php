@extends('../layouts/company')

@section('style')

<style type="text/css">
  #product h2 {
    background-color: rgba(21, 9, 9, 0.6) !important;
  }
  #product h2 a{
    color: #fdfdfd !important;
  }
</style>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script type="text/javascript">
  function checkpopupform($id){
      if($id == 'Ask'){
           grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'ask'}).then(function(token) {
              document.getElementById("g-recaptcha-ask-response").value=token
            });
          });
      }if($id == 'Post'){
         grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'post'}).then(function(token) {
              document.getElementById("g-recaptcha-post-response").value=token
            });
          });
      }
  }
</script>
@stop



@section('content')



  <!-- // Profile Body -->

  <div class="container pt-4 pb-3">
    <form name="product_form" class="product_form" method="post" id="form_count">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="name" value="plantautomation-technology-product-enquiry">
      <input type="hidden" name="cf_leads_page" value="all_pages">
      <div class="row border border-secondary bg-white">
        <div class="col-md-8 col-lg-9 pt-3 pr-3 pb-0 pl-3">
           @foreach($companyprofile as $cp)
           <div class="">   
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-5 col-12">
                <h2 class="display-6 mb-3 mt-2">About<span class="font-weight-bold ml-2">{{$cp->title }} </span></h2>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-8 mb-2 text-center">
                @if($cp->company->website)
                   <a href="javascript:void(0)" onclick="trackOutboundLink('{{$cp->company->track_url}}'); return false;" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Visit Website</a>
                @else

                     <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Visit Website</a>

                @endif

              </div>

              <!--<div class="col-lg-2 col-md-3 col-sm-5 col-6 mb-2 text-center">-->

              <!--  <a href="{{ $cp->company->product_url? $cp->company->product_url : 'javascript:void(0)' }}" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark {{ $cp->company->product_url ? ' ' : 'disabled' }}">Product Page</a>-->

              <!--</div>-->

            </div>   



            {!! $cp->description !!}     



            <div class="text-center">

              <a data-toggle="modal" data-target="#askquestion" onclick="return checkpopupform('Ask')" class="btn btn-sm btn-success btn-top-rad pl-4 pr-4 text-white">Ask a question to this supplier?</a>           

            </div>

          </div>

          @endforeach  



        </div>



      <div class="col-md-4 col-lg-3 text-center">

          @if($cp->company->banner_image )

          <a href="javascript:void(0)" onclick="trackOutboundLink('{{$cp->company->banner_url}}'); return false;"  target="_blank" title="{{$cp->company->comp_name}}">

            <img src="{{ config('app.url') }}suppliers/{{str_slug($cp->company->comp_name)}}/{{$cp->company->banner_image}}" alt="{{$cp->company->comp_name}}" title="{{$cp->company->comp_name}}" class="img-fluid border border-secondary mt-3">                     

          </a>

          @else

          <img src="https://industry.plantautomation-technology.com/images/advertise-here.jpg" alt="advertise here" class="img-fluid border border-secondary mt-3">

          @endif

        </div>

      </div>

    </form>





 @if($cp->pproduct->where('active_flag',1)->count())

    <div class="row mt-4 Prod-list border bg-light" id="product"> 

      <div class="col-lg-12">

        <h4 class="display-5 mb-3 pt-3">Products</h4>    

      </div>

   

      @foreach($companyprofile as $cp)

      @foreach($cp->pproduct->where('active_flag',1)->where('stage',1) as $key => $cproduct) 
      @if($key <= 10)

      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">

        <div class="product div-shadow"> 

          <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}">

            <img class="img-fluid div-scal" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image}}" alt="{{$cproduct->alt_tag}}" title="{{$cproduct->alt_tag}}">

          </a>

          <h2 class="font-12 {{$key}}" style="color: #ccc">

            <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}" title="{{$cproduct->alt_tag}}" >
                {{ str_limit(preg_replace('#<a.*?>([^>]*)</a>#i', '$1', $cproduct->title),$limit = 40) }}

            </a>

         

          </h2>

        </div>

      </div>

      @elseif( $key == 11)

      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">

        <div class="div-shadow"> 

          <a href="{{url('products/'.$cp->url)}}">

            <img class=" " src="https://industry.plantautomation-technology.com/images/view-more.jpg" title="View more products from {{$cp->title}}" height="160px" width="160px">

          </a>        

        </div>

      </div>

      @endif

    

      @endforeach

      @endforeach



    </div>

    @endif



  </div>  

  <!-- Profile Body // -->





  <!-- // Post Your Requirement Modal -->

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postRequirement">

    Launch demo modal

  </button>

 -->

  <!-- Modal -->

  <div class="modal fade" id="postRequirement" tabindex="-1" role="dialog" aria-labelledby="postRequirementTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title text-blue" id="postRequirementTitle">Post Your Requirement</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          @include('company._postRequirementForm')

        </div>

      </div>

    </div>

  </div>

  <!-- Post Your Requirement Modal // -->



  <!-- Modal -->

  <div class="modal fade" id="askquestion" tabindex="-1" role="dialog" aria-labelledby="postRequirementTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-blue" id="postRequirementTitle">Ask a question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @include('company._askquestion')
        </div>
      </div>
    </div>
  </div>
  <!-- Post Your Requirement Modal // -->
  <!-- success modal -->
<div id="askquestionSuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success">{!!session('message_type')!!}</h4>
        <button type="button" class="close" onClick="location.href=location.href">&times;</button>
      </div>
      <div class="modal-body">
        <p class="">{!!session('message')!!}</p>
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







  @endsection

  @section('scripts')



  @if(session('message_type') == 'success')    

  <script type="text/javascript">         

    var slug = '{{ $cp->url }}';

    history.pushState(null, null, '/suppliers/'+slug+'/enquiry-success');

    // $('#myModal1').modal('show');         

  </script>

  @endif



  <script type="text/javascript">

    // var url = "{{ url('company-enquiry') }}";
    var url = "{{ url('company-postrequirement') }}";
    function OnButton1(){
     setTimeout(function(){
       document.company_postrequirement.action = url;
       document.company_postrequirement.submit();
          },400);
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
        }else{
          OnButton1();
          return true
        }
      }
    });
    
  }



  @if($errors->any())

    @if(old('formtype') == 'modal-form')  

      $(document).ready(function(){ 

        $('#{{old('formid')}}').modal('show');   

      });   

    @endif             

  @endif

  </script>

  @if(session('askquestion') == 'success') 

    <script type="text/javascript">

      $('#askquestionSuccess').modal('show');        

    </script>

  @endif  



  

 

@endsection