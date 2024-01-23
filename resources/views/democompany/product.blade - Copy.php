@extends('../layouts/company')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
        <div class="row">
          <div class="col-lg-12">
          {!! Form::open(['url' => 'company-enquiry']) !!}
          <input type="hidden" name="page" value="all_pages">
          <div class="row">
          <div class="col-lg-9 mb-3">
            <div class="row" id="product"> 
            @foreach($companyprofile as $cp)
              @foreach($cp->pproduct->where('active_flag',0)->where('type','client') as $cproduct) 

              <div class="col-lg-4 mb-4">
                <div class="product div-shadow">
                  <div class="check">                       
                    <!-- <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="productname[]" id="check{{$cproduct->id}}" class="" value="{{$cproduct->title}}">
                      <span class="custom-control-indicator"></span>
                    </label> --> 
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="productname[]" class="custom-control-input" id="check{{$cproduct->id}}" value="{{$cproduct->title}}">
                      <label class="custom-control-label" for="check{{$cproduct->id}}"></label>
                    </div>                  
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
            @include('company._productEnquiryForm')
          </div>
        </div>
        </div>
        {!! Form::close() !!}</div></div>
      </div>  
      <!-- Profile Body // -->
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
  
  //var product = '{{ @$prods[0]->url }}';
  var company = '{{ @$cp->url }}';
  
</script>
@if(session('message_type') == 'success')    
<script type="text/javascript">         
  
  history.pushState(null, null, '/products/'+company+'/enquiry-success');
  $('#myModal1').modal('show');         
</script>
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
            // $('div.prodimage{{$cproduct->id}}').removeClass("unselectable").addClass("div-shadow");
            $('#prodimage{{$cproduct->id}}').removeClass('unselectable');
            $('#prodimage{{$cproduct->id}}').removeClass('overlay');
          }
        });
    @endforeach
              @endforeach
  </script>
@endsection