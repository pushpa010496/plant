@extends('../layouts/pages')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
<style type="text/css">
	#product {
		background-color: #2d8fc7;
		padding: 15px;
	}
	.table {border-color: #ccc !important;}
	button.close{
		position: absolute;
		right: 5px;
	}
	.modal{background-color: rgba(0,0,0,0.4) !important;}
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

  <div class="col-12 text-center mt-2" >

	<a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}">

	<img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}"  title="{{$homebanner12->img_title}}"/></a>

  </div>

  @else

  @endif  

  @endforeach

  @endforeach

</div>

</div>

<!-- End Leader Board Banner-->



<div role="main" class="bg-white">    
	<!-- // Articles -->  
	<div class="container-fluid">
		<div class="container">
			<div class="text-center pt-2">
				<h2 class="main-title"><span>Articles</span></h2>
			</div>
		</div>  
		<div class="container  pb-3">
			<div class="row share_box mb-4">
				<div class="col-lg-8 pt-1">
					<button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your Article</button>  
				</div>
				<div class="col-lg-4">
					<div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>
				</div>
			</div>
			@foreach($article as $articles)
			<div class="row">
				<div class="col-lg-9">
					<h1 class="display-5 pb-3 text-blue">{{ $articles->article_title }}</h1>
					<img class="img-fluid div-shadow mb-2 mr-4 pull-left" src="<?php echo config('app.url'); ?>articles/<?php echo $articles->article_image;?>" alt=""/>
					<p>{!! $articles->article_description !!}</p>
				</div>    
				        <!-- square banner       -->
						<div class="col-lg-3">
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
              <!-- square banner end  -->         
			</div>
			<!-- Author Box -->
			@if($articles->auther_name != null)
			<div class="row">                              
				<div class="col-lg-12">
					<div class="media bg-grey p-3 d-block d-sm-flex d-lg-flex d-md-flex d-xl-flex">
						<img class="mr-4 radius-15" src="{{ config('app.url')}}articles/{{$articles->auther_image}}" alt="image"  width="120px"> 
						<div class="media-body">
							<h5 class="mt-0">About: <span class="text-blue">{{ ucfirst($articles->auther_name) }} - <small class="font-14"><i>{{ ucfirst($articles->auther_designation) }}</i></small></span></h5>
							<p style="color:#636060">{{ $articles->auther_description }} </p>
						</div>

					</div>
				</div>
			</div>   
			@endif      
			@endforeach             
		</div>
		<!-- Articles  -->        
		<div class="container">
			<div class="row" >  
				<div class="col-lg-6">
					<div class="text-left pt-2">
						<h2 class="main-title text-left mb-4"><span><a class="text-blue">Related Articles</a></span></h2>
					</div>
					<div id="product" class="mb-3">
						<div class="row">
							@foreach($realted_articles as $related)
							<div class="col-lg-4 col-md-4 ">
								<div class="product div-shadow"> 
									<a href="{{ url('articles/'.$related->article_url) }}"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>articles/<?php echo $related->article_image;?>" alt=""/>
									</a>
									<h2><a href="{{ url('articles/'.$related->article_url) }}">{{ $related->home_title }}</a></h2>
								</div>
							</div>
							@endforeach  
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text-left pt-2">
						<h2 class="main-title text-left mb-4"><span><a class="text-blue">Top Viewed Articles</a></span></h2>
					</div>
					<div class="">
						<div id="product" class="mb-3">
							<div class="row">
								@foreach($top_viewed_articles as $top_viewed)
								<div class="col-lg-4 col-md-4">
									<div class="product div-shadow"> 
										<a href="{{ url('articles/'.$top_viewed->article_url) }}"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>articles/<?php echo $top_viewed->article_image;?>" alt=""/>
										</a>
										<h2><a href="{{ url('articles/'.$top_viewed->article_url) }}">{{ $top_viewed->home_title }}</a></h2>
									</div>
								</div>
								@endforeach  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="publishedNews" class="modal fade" role="dialog" {{$page_all}}>
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Success</h4>
				<button type="button" class="close" data-toggle="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Thank you for your interest in publishing an article with Packaging-Labelling. Our client success team member will get in touch with you shortly to take this ahead.
					While you're here, check out our high-quality and insightful articles. Happy Reading!
				</p>
				<p>Regards,</p>
				<p>Client Success Team (CRM),</p>
				<p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-toggle="modal">Close</button>
				<!-- <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a> -->
			</div>
		</div>
	</div>
</div>
<!-- Publish News Modal -->
<div id="publishNews" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Publish Your Article</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id='publishNewsForm' class="publishform" name="insight_form">
					<input type="hidden" name="publicid" value="07ffc9ca384bb197dbadfa152661944d">
					<input type="hidden" name="name" value="plantautomation-articles">
					<input type="hidden" name="subject" value="Article Publish">
					<input type="hidden" name="type" value="article">
					<!-- @include('industry._infoForm')   -->                  
				</form>
				<button class="btn btn-block submit-btn btn-primary">Submit</button> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Publish News End-->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script>
<script type="text/javascript">
	toastr.options = {
		"positionClass": "toast-center-center",
		"timeOut": "5000",
	}
</script>    
<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content p-0">           
			<div class="modal-body p-0">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<a href="{{url('events/light-middle-east')}}" target="_blank">
					<img src="{{ config('app.url') }}images/Light-Middle-East.jpg" width="100%">
				</a> 
			</div>          
		</div>
	</div>
</div>
<script type="text/javascript">       
	@if( Request::segment(3) == 'success')
	if (performance.navigation.type == 1) {
	}else{ 
		$('#publishedNews').modal('show');  
		$('#publishedNews').addClass('show');    
	}
	@endif
</script>   
<script>
	$( "table" ).addClass( "table" );
</script>                  
@endsection