@extends('../layouts/pages')
@section('style')

    
<style type="text/css">
.product{
  min-height: 300px;
}
[id=prodimage]{
  height: 220px;
}
.country_click,.supplier_click,.tags_click{
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
.tags_div{
  max-height:195px;
  overflow: hidden;
}

.page-link {
  padding: 0.3rem 0.45rem !important;
}
.pagination{
  flex-wrap:wrap;
  row-gap:10px;
}

/* For mobile devices */
 /* @media only screen and (max-width: 600px) {
   .image1 { 
    display:block;
width:50%;
     } } */
</style>
@endsection
@section('content')
@php     
       $page = getPageId(Request::segment(2));     
       $page_all = getPage(Request::segment(1));     
     @endphp
      <!-- Leader Board Banner -->
      <div class="container">
        <div class="row">
          @php
          $count =0;
          @endphp
          @foreach($banner1314 as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
                @php $count++;  @endphp
              @endif  
            @endforeach
          @endforeach
          @if($count == 1)
          <?php $column=12 ?>             
          @else
          <?php $column=6 ?>
          @endif
          @foreach($banner1314 as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
          </div>
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
      </div>

    <!-- cytiva-->

<!-- end leader board banner -->

<div class="pt-1 pb-1"></div>
<div role="main" class="bg-white">
  <!-- // CLIENTELE -->
        <!-- // Categories -->
        
        <div class="container mb-3">
        <p>Products</p>
          <div class="row" >
           <div class="col-lg-8 mb-3">
            <div class="row" id="product-list">  
              @foreach ($products as $cp)
              @if(@$cp->compprofile->active_flag == 1)
              @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
              @endphp
              @foreach($company_logo as $com_logo)
              <div class="col-lg-4 mb-4 text-center">
                <div class="product div-shadow" >
                  <div id="prodimage{{$cp->id}}">
                    <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}">
                      <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cp->small_image}}" alt="{{$cp->alt_tag}}"/>
                    </a>
                  </div>

                  <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                    <h2 class="small text-center">
                      <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}" class="text-secondary font-weight-bold">{!!$cp->title!!}</a>
                    </h2>
                  </div>
                  <div class="text-center pb-2 pt-2">                        
                    <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/'.$com_logo->comp_logo}}" alt="{{$cp->alt_tag}}" width="100" />
                  </div>
                </div>                    
              </div>
              @endforeach
              @endif
              @endforeach
             
               <div class="col-lg-12 text-center">
            
                  <div class=" text-center">
                           {{ $products->links("pagination::bootstrap-4")}}
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            {{-- right side --}}
             @if($products->count() != 0)
            <div class="border border-secondary div-shadow p-4">
              <div class="">
                <h3 class="display-5 font-weight-bold">Search by Country</h3>  
                <div class="country_div div_height">
                         @foreach($country_list as $country)
                         <a href="{{ route('category-country',[$country['category_url'],str_slug($country['name'])])}}">{{$country['name']}}</a> {{--({{$country['count']}}) --}}<br>
                        @endforeach   
                        </div>  
                <span class="float-right country_click">
                  <a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i> More</a>
                </span>  
              </div>
              <div style="border-bottom:1px dashed #ccc;" class="pt-3 mt-3"></div>
              <div class="pt-3">
                <h3 class="display-5 font-weight-bold">Search by Supplier</h3>    
                <div class="supplier_div">
                  @foreach($company_filter as $company)
                  <small>
                   <a href="{{url('products').'/'.$company['url']}}">
                    <img src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', ucfirst($company['country'])) }}.png" title="{{$company['country']}}">
                  </a>
                  <a href="{{url('suppliers').'/'.$company['url']}}">{{ $company['name']}}</a>
                  <a href="{{url('products').'/'.$company['url']}}"> ({{ $company['count']}})
                  </a>
                </small>
                <br>
                @endforeach   
                
              </div>
               
             
              <span class="float-right supplier_click">
                <a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i> More</a>
              </span> 
            </div>
          </div>
          @endif
          
            <!-- <div class="pt-3">
              <div class="">
                <h3 class="font-weight-bold">Search by Tags</h3>  
                <div class="">
                  @foreach($tags_list->tags as $tag)
                  @php $subtags=App\SubTags::where('tag_id',$tag->id)->where('category_id',$tag->category_id)->GroupBy('subtag_name')->get();
                  @endphp
                  <a href="">{{$tag['tag_name']}}</a> {{--({{$country['count']}}) --}}<br>
                   <div class="tags_div">
                   <ul  style="list-style-type:none">
                   @foreach($subtags as $subtag)
                   <li> 
                    <input type="checkbox" value="{{$subtag['subtag_name']}}" class="btn  ajaxbtn" data-datac="{{$subtag['subtag_name']}}"> {{$subtag['subtag_name']}}</checkbox>
                   </li>
                  @endforeach
                </ul>
                  </div>
                 <span class="float-right tags_click">
                <a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i> More</a>
              </span>  
                  @endforeach   
                </div>  
              </div> -->

              <div class="mt-3 text-center">
              <!-- <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/moxa-india-industrial-networking-pvt-ltd/video/Moxa.mp4" type="video/mp4">
                      
                    </video> -->
                    <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/sms-tork/video/WIN-Eurasia-2023.mp4" type="video/mp4">
                      
                    </video>
                    <!-- <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/mpl-ag/video/MPL-AGSwitzerland-Company.mp4" type="video/mp4">
                </video> --> 
                <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/scaglia-indeva-spa/video/indeva-manipulators.mp4" type="video/mp4">
                </video>


                    </div>

              <div style="border-bottom:1px dashed #ccc;" class="pt-3 mt-3"></div>
              <div class="mb-3"></div>
              @foreach($banner1314 as $k=>$homebanner12) 
        @foreach($homebanner12->pagesCount as $j=>$pcount)
            @if($homebanner12->positions[0]->id == 16 and $pcount->id == 1)
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"  target="_blank" title="{{$homebanner12->title}}">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
                      </a>
                  </div>            
            @endif  
        @endforeach
      @endforeach
          </div>
        </div>
      </div>
  </div>
  

<div id="products-list"></div>
</div>
@endsection
<script type="text/javascript">
$(document).ready(function(){
  $('#product-info').hide();



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



 var subtags_height = $('.country_div').height(); 

 if(subtags_height >=  80){

  $('.tags_click').css('display','block');

}



$('.tags_click').on('click',function(){

  $('.tags_div').css({"max-height":"inherit","overflow":"auto"}); 

  setTimeout(function(){

    $('.tags_click').addClass('tags_less').removeClass('tags_click');

    $('.tags_less').find('a').empty();

    $('.tags_less').find('a').append('<i class="fa fa-minus-circle" aria-hidden="true"></i> Less');

  },10);

});



$('body').on("click",'.tags_less', function() {



  $('.tags_div').css({"max-height":"80px","overflow":"hidden"});   

  setTimeout(function(){

    $('.tags_less').addClass('tags_click').removeClass('tags_less');

    $('.tags_click').find('a').empty();

    $('.tags_click').find('a').append('<i class="fa fa-plus-circle" aria-hidden="true"></i> More');

  },10);

});

$(document).on('click', '.ajaxbtn', function(){

    var subtag = $(this).data('datac');     

    var url = "{{ url('tag') }}";

        $.ajax({

          url: url + '/' + subtag ,

          type: 'get',

          cache: false,

          success:function(data){

 $('#product-list').empty();

 $('#product-list').append(data);

},

 error:function( error) {

  console.log('error');

           }

});

      });

</script>
