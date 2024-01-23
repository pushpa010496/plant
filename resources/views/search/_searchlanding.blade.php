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
  height:75px;
  border:3px solid #88dff3
}

 </style>

@endsection
@section('content')

 <div class="container pt-4 pb-3">
        <div class="row">
           <!-- // MAIN SEARCH -->
               
        <div class="col-lg-8 offset-lg-2 mt-4">
               {{Form::open(['url' => 'search'])}}
          <div class="input-group input-group-lg">
            <input type="text" name="q" class="form-control" id="autoComplete" required placeholder="" value="{{$keyword }}">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search</button>
            </span>
          </div>
          {{Form::close()}}
          </div>
    </div>
  </div>


  @if(count($products) != 0 or count($companies) != 0)
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h6>Search result of "{{ $keyword }}"</h6>
      </div>   
    </div>
  <div class="row mt-3">  
    <div class="col-lg-8">
      
      <div class="row">
        
           @if(count($products) != 0)
              <div class="col-lg-12 mb-3">
                <h5 class="border-bottom pb-1">By Product</h5>
                <div class="row"> 
                  @foreach ($products as $cp)
                  @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
                  @endphp
                  @foreach($company_logo as $com_logo)
                  <div class="col-lg-4 mb-4 text-center">
                    <div class="product div-shadow">
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
                  @endforeach
                </div>
              </div>
              @endif

                @if(count($companies) != 0 )
              <div class="col-lg-12 mb-3">
                 <h5 class="border-bottom pb-1">By Supplier</h5>
                <div class="row" id="product"> 
                  @foreach($companies as $company)       
                  <div class="col-lg-4 mb-4">
                    <div class="product div-shadow" style="min-height: 150px">
                      <div id="prodimage{{$company->id}}">
                        <a href="{{url('suppliers/'.$company->url)}}"><img  class="img-fluid pt-3" src="{{config('app.url').'suppliers/'.str_slug($company->company->comp_name).'/'.$company->company->comp_logo}}" alt="{{$company->alt_tag}}"/></a>                                           
                        <h2><a href="{{url('suppliers/'.$company->url)}}">{{$company->title}}</a></h2>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
      </div>
    </div> 
    <div class="col-lg-4">
        @if(count($parent_cat) != 0)
    
      <!--   <h5 class="border-bottom pb-1">Categories</h5> -->

        <div class="panel-group row" id="accordion2">
          
        
              <?php $cat = ordercatfirst(22);?>
           <?php $i=1; ?>
               @foreach($parent_cat as $val)
          <!--   <div class="panel panel-default mb-1">
              <div class="panel-heading">                
                  <h2 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a>
                  </h2>
                 
              </div>
              <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
                   <?php $childs = getcat($val['id']);?>
                   @if(@$childs)
                <div class="panel-body">
                   @foreach($childs as $child)                       
                      <?php 
                       $count = DB::table('categories')->where('parent_id',$child['id'])->count();
                       ?>
                       <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
                        <p>{{ucwords(strtolower($child['name']))}} </p>
                      </a>
                      @endforeach
                </div>
                 @endif
              </div>
            </div> -->
            <?php $i=$i+1; ?>
               @endforeach
          

         
        
        </div>
        
        @endif
    </div>
  </div>

    <h5>INDUSTRY INSIGHTS</h5>
        @if(count($article) != 0)
          <h5 class="border-bottom pb-1 mt-2">Articles</h5>
          <div class="row" id="product">
            @foreach($article as $articles)
                <div class="col-lg-3 mb-4">
                  <div class="product div-shadow"> 
                    <a href="{{ 'articles/'.$articles->article_url }}">
                      <img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>articles/<?php echo $articles->small_image;?>" alt="<?php echo config('app.url'); ?>articles/1519109395-article-default.jpg" title="{{$articles->article_title}}">
                    </a>
                    <h2>
                      <a href="{{ 'articles/'.$articles->article_url }}">{{ $articles->article_title }}</a>
                    </h2>
                  </div>
                </div>
            @endforeach 
             <div class="col-lg-12 text-right mt-2">
                  <a href="{{ url('articles') }}">view All</a>
                </div>     
          </div>  
        @endif

          @if(count($pressreleases) != 0)
          <h5 class="border-bottom pb-1">Pressreleases</h5>
          <div class="row">
            @foreach($pressreleases as $val)
              <div class="col-lg-4 mt-2">
                <div class="p-3 bg-light text-justify whitepaper-box" >
                  <div class="whitepaper-inner-box">
                <a href="{{ 'pressreleases/'.$val->pressreleases_url }}">{{ $val->title}}</a>
                <p>{{ $val->home_description }}</p>
              </div>
                 <a href="{{ 'pressreleases/'.$val->pressreleases_url }}" class="readmore text-right">Read more...</a>
              
                  </div>
                </div>
                @endforeach
                  <div class="col-lg-12 text-right mt-2">
                  <a href="{{ url('pressreleases') }}">view All</a>
                </div>
              </div>  
        @endif

        @if(count($interviews) != 0)
          <h5 class="border-bottom pb-1 mt-2">Interviews</h5>
          <div class="row">
            @foreach($interviews as $val)
              <div class="col-lg-6 mt-2">
                <div class="media">
                  <img class="mr-3 rounded-circle" src="{{config('app.url') }}/interview/{{$val->image }}" alt="Generic placeholder image">
                  <div class="media-body">
                    <h6 class="mt-0"><a href="{{ 'interviews/'.$val->interviews_url }}"> {{$val->name}}</a></h6>
                    <p>{{ $val->title }}</p>
                  </div>
                </div>
                </div>
                @endforeach
              <div class="col-lg-12 text-right mt-2">
                  <a href="{{ url('interviews') }}">view All</a>
                </div>
              </div>  
        @endif


        @if(count($whitepapers) != 0)
          <h5 class="border-bottom pb-1">Whitepapers</h5>
          <div class="row">
            @foreach($whitepapers as $val)
              <div class="col-lg-4 mt-2">
                <div class="p-3 bg-light text-justify whitepaper-box" >
                  <div class="whitepaper-inner-box">
                <a href="{{ 'whitepapers/'.$val->whitepapers_url }}">{{ $val->home_title}}</a>
                <p>{!! $val->home_description !!}</p>
              </div>
                 <a href="{{ 'whitepapers/'.$val->whitepapers_url }}" class="readmore text-right">Read more...</a>
              
                  </div>
                </div>
                @endforeach
                <div class="col-lg-12 text-right mt-2">
                  <a href="{{ url('whitepapers') }}">view All</a>
                </div>
              </div>  
        @endif

    
      @if(count($news) != 0)
         <h5 class="border-bottom pb-1 mt-2">News</h5>
        <div class="row">
          @foreach($news as $val)
          <div class="col-lg-6">
            <h6 class="ellipsis">{{$val->title}}</h6>
            <a href="{{ url('/')}}/news/{{$val->news_url}}" target="_blank" ><p class="ellipsis2"><i class="fa fa-hand-o-right"></i> {{ $val->title}}</p></a>
            <hr>
          </div>
            
          @endforeach
            <div class="col-lg-12 text-right mt-2">
                  <a href="{{ url('news') }}">view All</a>
                </div>
          </div>
         
         @endif
     

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

  $('.panel-title a').on('click',function(){
      $('.accordion-toggle').not($(this)).addClass('collapsed');     
      $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');

  });



      </script>
      <script src="{{ config('app.url') }}js/jqueryui/1.12.1/jquery-ui.min.js" ></script>
    
 <script>
  $('header form').remove();
     $(document).ready(function() {
      src = "{{ route('searchajax') }}";
      $("#autoComplete").autocomplete({
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
          $('#autoComplete').val(ui.item.value);
          $('form').submit();
          // var label = ui.item.label;
          // var value = ui.item.value;

   //store in session
   // document.valueSelectedForAutocomplete = value 
 }

});
    });

  </script>

@endsection
