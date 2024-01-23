@extends('democompany/layout/company')

@section('style')

 <style type="text/css">

   .product{

    min-height: 300px;

   }

 </style>

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

  

              <div class="col-lg-4 mb-4">

                <div class="product div-shadow">

                 {{--  <div class="check">                       

                 

                    <div class="custom-control custom-checkbox">

                      <input type="checkbox" name="productname[]" class="custom-control-input" id="check{{$cp->id}}" value="{{$cp->title}}">

                      <label class="custom-control-label" for="check{{$cp->id}}"></label>

                    </div>                  

                  </div>  --}}

                  <div id="prodimage{{$cp->id}}">

                    <a href="{{url('testproducts/'.$cp->compprofile->url.'/'.$cp->url)}}">

                      <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cp->small_image}}" alt="{{$cp->alt_tag}}"/></a>

                    <h2><a href="{{url('testproducts/'.$cp->compprofile->url.'/'.$cp->url)}}">{!!$cp->title!!}</a></h2>

                  </div>

                </div>

              </div>

             

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

             

    $('#check{{$cp->id}}').change(function()

        {

          if($(this).is(":checked"))

          {  

            $('#prodimage{{$cp->id}}').addClass('unselectable');

            $('#prodimage{{$cp->id}}').addClass('overlay');     

          } 

          else {

            // $('div.prodimage{{$cp->id}}').removeClass("unselectable").addClass("div-shadow");

            $('#prodimage{{$cp->id}}').removeClass('unselectable');

            $('#prodimage{{$cp->id}}').removeClass('overlay');

          }

        });

    @endforeach

             

  </script>

@endsection