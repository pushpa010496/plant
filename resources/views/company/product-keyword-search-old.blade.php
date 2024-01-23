@extends('../layouts/pages')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css"">
<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/jquery.ui.autocomplete.css">
<style type="text/css">
#accordion2 .panel{
  width:100% !important;
}
#accordion2 .panel-default > .panel-heading{
  color: #635e5e;
  background-color: #c6eafa;
}
.ellipsis {
  white-space: nowrap;
  width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  padding: 2px 3px;
}
.ellipsis2{
  white-space: nowrap;
  width: 50%;
  overflow: hidden;
  text-overflow: ellipsis;
  padding: 2px 3px;
}
hr {
  border: 0;
  height: 1px;
  width: 75%;
  margin-top: 5px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 102, 102, .6), rgba(0, 0, 0, 0));
}
.whitepaper-inner-box{
 min-height:250px;
 max-height:250px;
 overflow: hidden; 

}
.whitepaper-inner-box p{
  color: #6f6f6c;
}
.whitepaper-box{
 height:310px;

}
.media img{
  width: 75px;
  width:75px;
  border:3px solid #88dff3
}

.country_click,.supplier_click{
  display: none;
}
.country_div{
  max-height:80px;
  overflow: hidden;
}
.supplier_div{
  max-height:195px;
  overflow: hidden;
}
</style>

@endsection
@section('content')

<div class="container pt-4 pb-3">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 mt-4" id="main-search">
      <form method="get" action="{{route('new-search')}}" >
        <div class="input-group input-group-lg">
           <input type="text" name="q" class="form-control autoComplete ui-autocomplete-input" id="autoComplete" required="" placeholder="Search Products & Manufacturers..." autocomplete="off">

          <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
          </div>
        {{Form::close()}}
      </div>
    </div>
</div>


@if(count($products) != 0 )
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h6>Search result of "{{ $keyword }}"</h6>
    </div>   
  </div>
  <div class="row mt-3">  
    <div class="col-lg-12">

      <div class="row">
       @if(count($products) != 0)
       <div class="col-lg-12 mb-4">
        <h5 class="border-bottom pb-1">By Product</h5>
        <div class="row"> 
          @foreach ($products as $cp)
          @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
          @endphp
          @foreach($company_logo as $com_logo)
           @if($cp->company->active_flag == 1)

          <div class="col-lg-3 mb-4 text-center">
            <div class="product div-shadow">
              <div id="prodimage{{$cp->id}}">
                <a href="{{url('products/'.@$cp->compprofile->url.'/'.@$cp->url)}}">
                  <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug(@$cp->company->comp_name).'/products/'.@$cp->small_image}}" alt="{{$cp->alt_tag}}"/>
                </a>
              </div>

              <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                <h2 class="small text-center">
                  <a href="{{url('products/'.@$cp->compprofile->url.'/'.@$cp->url)}}" class="text-secondary font-weight-bold">{{$cp->title}}</a>
                </h2>
              </div>

              <div class="text-center pb-2 pt-2">                        
                <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug(@$cp->company->comp_name).'/'.@$com_logo->comp_logo}}" alt="{{$cp->alt_tag}}" width="100" />
              </div>
            </div>                    
          </div>
          @endif
          @endforeach
          @endforeach

        </div>
      </div>
      @endif


  </div>
</div> 
<!-- //Right section -->
  </div>
</div>

@else
<div class="container pt-4 pb-3">
  <div class="row">      
    <div class="col-lg-8 offset-lg-2 mt-4">
      <div  style="height: 150px"> 
       <h5>No results found, please try with different keywords.</h5>
     </div>
   </div>
 </div>
</div>

@endif


@endsection
@section('scripts')

<script type="text/javascript">
$('header form').remove();
  $('.panel-title a').on('click',function(){
    $('.accordion-toggle').not($(this)).addClass('collapsed');     
    $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');

  });
</script>
<script src="{{ config('app.url') }}js/jqueryui/1.12.1/jquery-ui.min.js" ></script>

<script>
 $(document).ready(function() {
  src = "{{ route('searchajax') }}";
  $(".autoComplete").autocomplete({
    source: function(request, response) {
      $.ajax({
        url: src,
        dataType: "json",
        data: {
          term : request.term
        },
        success: function(data) {
          response(data);

        }
      });
    },
    minLength: 3,
    autoFill: true,
    select: function (event, ui) {
      $('.autoComplete').val(ui.item.value);
      $('form').submit();
          // var label = ui.item.label;
          // var value = ui.item.value;

   //store in session
   // document.valueSelectedForAutocomplete = value 
 }

});


 var country_height = $('.country_div').height(); 
 if(country_height >=  80){
  $('.country_click').css('display','block');
}

$('.country_click').on('click',function(){
  $('.country_div').css({"max-height":"inherit","overflow":"auto"}); 
  setTimeout(function(){
    $('.country_click').addClass('country_less').removeClass('country_click');
    $('.country_less').find('a').empty();
    $('.country_less').find('a').append('<i class="fa fa-minus-circle" aria-hidden="true"></i> Less');
  },10);
});

$('body').on("click",'.country_less', function() {
  
  $('.country_div').css({"max-height":"80px","overflow":"hidden"});   
  setTimeout(function(){
    $('.country_less').addClass('country_click').removeClass('country_less');
    $('.country_click').find('a').empty();
    $('.country_click').find('a').append('<i class="fa fa-plus-circle" aria-hidden="true"></i> More');
  },10);
});


var supplier_height = $('.supplier_div').height(); 
 if(supplier_height >=  195){
  $('.supplier_click').css('display','block');
}


$('.supplier_click').on('click',function(){
  $('.supplier_div').css({"max-height":"inherit","overflow":"auto"});
  setTimeout(function(){
    $('.supplier_click').addClass('supplier_less').removeClass('supplier_click');
    $('.supplier_less').find('a').empty();
    $('.supplier_less').find('a').append('<i class="fa fa-minus-circle" aria-hidden="true"></i> Less');
  },10);
});

$('body').on("click",'.supplier_less', function() {  
  $('.supplier_div').css({"max-height":"195px","overflow":"hidden"});   
  setTimeout(function(){
    $('.supplier_less').addClass('supplier_click').removeClass('supplier_less');
    $('.supplier_click').find('a').empty();
    $('.supplier_click').find('a').append('<i class="fa fa-plus-circle" aria-hidden="true"></i> More');
  },10);
});



});
</script>
@endsection
