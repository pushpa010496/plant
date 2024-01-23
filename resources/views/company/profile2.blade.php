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

      <div class="row border border-secondary bg-white">
        <div class="col-lg-9 pt-3 pr-3 pb-0 pl-3">
           @foreach($companyprofile as $cp)
           <div class="">   
            <div class="row">
              <div class="col-lg-8">
                <h2 class="display-6 mb-3 mt-2">About<span class="font-weight-bold ml-2">{{$cp->title }} </span></h2>
              </div>
              <div class="col-lg-2 mb-2 text-center">
                <a href="{{ $cp->company->website ? $cp->company->website : 'javascript:void(0)' }}" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Home</a>
              </div>
              <div class="col-lg-2 mb-2 text-center">
                <a href="{{ $cp->company->product_url? $cp->company->product_url : 'javascript:void(0)' }}" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Product Page</a>
              </div>
            </div>   

            {!! $cp->description !!}     

            <div class="text-center">
              <a data-toggle="modal" data-target="#askquestion" class="btn btn-sm btn-success btn-top-rad pl-4 pr-4 text-white">Ask a question to this supplier?</a>           
            </div>
          </div>
          @endforeach  

        </div>

        <div class="col-lg-3 text-center">
          @if($cp->company->banner_image )
          <a href="#" target="_blank">
            <img src="{{ config('app.url') }}suppliers/{{str_slug($cp->company->comp_name)}}/{{$cp->company->banner_image}}" alt="$cp->company->comp_name" class="img-fluid border border-secondary mt-3">                     
          </a>
          @else
          <img src="https://industry.plantautomation-technology.com/images/advertise-here.jpg" alt="" class="img-fluid border border-secondary mt-3">
          @endif
        </div>
      </div>
    </form>

    <div class="row mt-4 Prod-list border bg-light" id="product"> 
      <div class="col-lg-12">
        <h4 class="display-5 mb-3 pt-3">Products</h4>    
      </div>
   
      @foreach($companyprofile as $cp)
      @foreach($cp->pproduct->where('active_flag',1)->take(15) as $key => $cproduct) 
      @if($key <= 10)
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="product div-shadow"> 
          <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}">
            <img class="img-fluid div-scal" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image}}" alt="{{$cproduct->alt_tag}}" title="{{$cproduct->alt_tag}}">
          </a>
          <h2 class="font-12">
            <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}" title="{{$cproduct->alt_tag}}"> {{ str_limit(ucfirst($cproduct->title),$limit = 40) }}
            </a>

            {{--  {{ str_limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($cproduct->title)))),$limit = 300, $end = '...') }} --}}
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

   {{--    @foreach($companyprofile as $cp)
      @foreach($cp->pproduct->where('active_flag',1) as $cproduct) 
        <div class="col-lg-3 mb-4">
          <h6 class="font-14">
            <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}" class="text-dark">{!!$cproduct->title!!}</a>
          </h6>
        </div>
      @endforeach
      @endforeach --}}
    </div>

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
        <p>Sincerely Plantautomation Technology</p>
        <p class="mb-0">Regards,</p>
        <p class="mb-0">Client Success Team (CRM),</p>
        <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>


        {{-- <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a> --}}
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
    $('#myModal1').modal('show');         
  </script>
  @endif

  <script type="text/javascript">
    // var url = "{{ url('company-enquiry') }}";
    var url = "{{ url('company-postrequirement') }}";
    function OnButton1(){
      

     document.company_postrequirement.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
     document.company_postrequirement.submit(); 

     setTimeout(function(){
       document.company_postrequirement.action = url;
       document.company_postrequirement.submit();
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

   @if(session('requirement') == 'success') 
    <script type="text/javascript">
      $('#postRequirementSuccess').modal('show');        
    </script>
  @endif  
@endsection