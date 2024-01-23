@extends('../layouts/company')
@section('style')
<style type="text/css">
  .product{
    min-height: 300px;
  }
</style>
@endsection
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
@section('content')


<!-- // Profile Body -->
<div class="container pt-4 pb-3">
  <form action="{{route('company-enquiry.post')}}"   method="post" >
    @csrf
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    <input type="hidden" name="name" value="plantautomation-product-enquiry">
    <input type="hidden" name="cf_leads_page" value="product view">
    <input type="hidden" name="view_page" value="product view">
    <input type="hidden" name="companyurl" value="{{ \Request::segment(2) }}">
    <input type="hidden" name="producturl" value="{{ \Request::segment(3) }}">
    <div class="row">
      <div class="col-lg-9 mb-3">
        <div class="p-3 div-shadow"> 
         @foreach($prods as $prod)   
         <input type="checkbox" name="productname[]" class="custom-control-input" value="{{$prod->title}}">
         <input type="hidden" name="products" value="{{$prod->title}}">
         <input type="hidden" name="cf_leads_product" value="{{$prod->title}}">
         <div class="text-center">
          <h2 class="title text-center text-blue font-20 pb-2"><strong>{!!$prod->title!!}</strong></h2>  
          @if(\Request::is('products/ami/alarm-panels-j3500') || \Request::is('products/ami/alarm-annunciators-j3000-or-j3105') || \Request::is('products/ami/alarm-panels-j1905s'))
             <a href="https://www.ami-control.com/en/alarmannunciators/" target="_blank"><img src="{{config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->big_image}}" alt="{{$prod->title}}" title="{{$prod->title}}" class="img-fluid"/></a>
          @else
            <img src="{{config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->big_image}}" alt="{{$prod->title}}" title="{{$prod->title}}" class="img-fluid"/>
          @endif   
           

        </div>           
        <div class="pt-5"></div> 
        {!!$prod->description!!}
        <div class="pt-3 mb-3">
         @if(@$prod->tech_spec_pdf == '')
         <!--<a class="btn btn-outline-primary mr-5 mb-2 disabled"><i class="fa fa-lg fa-cog" aria-hidden="true"></i> &nbsp; Technical Specs</a>-->
         @else
         <a class="btn btn-outline-primary mr-5 mb-2" href="{{config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->tech_spec_pdf}}" role="button"><i class="fa fa-lg fa-cog" aria-hidden="true"></i> &nbsp; Technical Specs</a>
         @endif
         @if(@$prod->facebook)                
         <a href="{{$prod->facebook}}" target="_blank"><img src="{{config('app.url')}}img/fb.jpg" alt="" class="img-fluid mb-2"/></a>
         @endif
         @if(@$prod->twitter)          
         <a href="{{$prod->twitter}}" target="_blank"><img src="{{config('app.url')}}img/twitter.jpg" alt="" class="img-fluid mb-2"/></a>
         @endif
         @if(@$prod->googleplus)                
         <a href="{{$prod->googleplus}}" target="_blank"><img src="{{config('app.url')}}img/g-plus.jpg" alt="" class="img-fluid mb-2"/></a>
         @endif
         @if(@$prod->linkedin)                
         <a href="{{$prod->linkedin}}" target="_blank"><img src="{{config('app.url')}}img/linkedin.jpg" alt="" class="img-fluid mb-2"/></a>
         @endif
       </div>
       @endforeach
     </div>
     <div class="pt-3"></div>
     <!-- // Other Products -->
     <div class="partners">
      <div class="main-title"><span><a href="#">Other Products</a></span></div>              
    </div>
    <div class="row" id="product">              
      @foreach($companyprofile as $cp)
      @foreach($cp->pproduct->whereNotIn('url',\Request::segment(3))->where('active_flag',1) as $cproduct) 
      <div class="col-lg-4 mb-4">
        <div class="product div-shadow">
                    <div id="prodimage{{$cproduct->id}}">
                      <a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}"><img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image}}" alt="{{$cproduct->alt_tag}}"/></a>                                          
                      <h2><a href="{{url('products/'.$cp->url.'/'.$cproduct->url)}}">{!!$cproduct->title!!}</a></h2>
                    </div>
                  </div>
                </div>
                @endforeach
                @endforeach             
              </div>
              <!-- Other Products // -->  
            </div>
            
            <div class="col-lg-3 pb-3">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @include('company._productEnquiryForall')
            </div>
          </div>
        </form>
      </div>
    </div>

<div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{!!session('message_type')!!}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">{!!session('message')!!}</p>
                <p>Sincerely Plantautomation Technology</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
               <a href="{{ Request::url() }}" class="btn btn-info text-right">Close</a> 
            </div>
          </div>
        </div>
      </div>
    
    @endsection
    
    @section('scripts') 
<script type="text/javascript">
  
  var product = '{{ @$prods[0]->url }}';
  var company = '{{ @$prods[0]->compprofile->url }}';
  
</script>

 @if(session('status'))    
    <script type="text/javascript">    
         history.pushState(null, null, '/products/'+company+'/'+product+'/enquiry-success');
        $('#myModal1').modal('show');         
   </script>
 @endif

  <script>
    $( "table" ).addClass( "table" );
  </script> 

@endsection