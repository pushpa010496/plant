@extends('../layouts/pages')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">
 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
@endsection

@section('content')

@php     
  $page = getPageId(Request::segment(2));     
  $page_all = getPage(Request::segment(1));     
@endphp
<!-- Leader Board Banner -->
  @include('layouts.partials._leaderboard_banner')
<!-- End Leader Board Banner-->

<div id="publishedNews" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Success</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <p>Thank you for showcasing interest in our interviews section. We have received your request and a client success team member will get in touch with you shortly to take this ahead.</p>
       <p>Regards,</p>
       <p>Client Success Team (CRM),</p>
       <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" width="250"/>
       </a></p> 
       
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a> -->
     </div>
   </div>
 </div>
</div>
 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
      
      <!-- // Press Releases -->  
      <div class="container-fluid">
        <div class="container">
          <div class="text-center pt-2">
            <h1 class="main-title"><span>PRODUCT LAUNCHES</a></span></h1>
          </div>
        </div>  

        <div class="container pb-3">
             <div class="row mb-2 share_box mb-4 pt-3">
            <div class="col-lg-8 mb-3">
            
            <!--   <div class="border p-2 d-table" style="width:fit-content">
                              
              <span class="text-white pt-2 display-5 p-3">Want to see yourself here...
                  <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#seeYourself">Get in touch</button>  
            </span>
               </div> -->
            </div>
          
          <!--   <div class="col-lg-4 mb-3 mt-3">
               <div class="sharethis-inline-share-buttons" style="top:0"></div>
            </div> -->
          </div>
           
         
          <div class="row">
            <div class="col-lg-12 mb-3">
              @foreach($productluanch as $luanches)
              <div class="div-shadow p-3 mb-4 interviews">
                <div class="row">
                  <div class="col-md-2 text-center">
                    <img class="img-fluid" src="<?php echo config('app.url'); ?>productlaunch/<?php echo $luanches->image;?>"  style="float:left; width:155px;height: 125px">                    
                    <h2 class="display-6 font-weight-bold mt-2">{{ $luanches->name }}</h2>
                  </div>

                  <div class="col-lg-9">
                    <h5 class="font-italic font-weight-bold mb-4">
                      <!-- <span class="quotes mr-2">“</span> -->
                      <a href="{{ route('productlaunchview',$luanches->project_url) }}" class="bio">
                        {{ $luanches->title }}
                      </a>
                      <!-- <span class="quotes ml-1">”</span> -->
                    </h5>
                    <p>{!! str_limit($luanches->home_description, 280, '...') !!} </p> 
                          
                  </div>                  
                </div>                 
              </div>
              @endforeach 
            </div>
        </div>
        </div>
        <!-- Press Releases // -->        
      </div>
    </div>
      <!-- Profile Body // -->
    </div>

      <div id="seeYourself" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Want to see yourself here...</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form id='publishpressForm' class="publishform" name="insight_form">
                 <input type="hidden" name="subject" value="want to see yourself here">
                 <input type="hidden" name="type" value="interview">
                  <input type="hidden" name="publicid" value="28ae98237c1e4dc32c702c6072178788">
                  <input type="hidden" name="name" value="plantautomation-interviews">
                 @include('industry._infoForm') 
              </form>
              <button class="btn btn-block submit-btn">Submit</button> 
           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')  
 <script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script> 
 <script type="text/javascript">


     @if( Request::segment(2) == 'success')
        
       if (performance.navigation.type == 1) {

      }else{ 
        $('#publishedNews').modal('show');  
        $('#publishedNews').addClass('show');    
      }
    @endif
</script>
@endsection