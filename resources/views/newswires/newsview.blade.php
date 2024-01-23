@extends('../layouts/pages')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">
 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
 <style type="text/css">
   hr{
        border: 0;
        height: 1px;
        width: 75%;
        margin-top: 5px;    
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(128, 117, 117, .6), rgba(0, 0, 0, 0));
   }
   .ellipsis{
    white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 2px 3px;
   }
 </style>
@endsection
@section('content')

</div>
 <!-- report abuse success modal -->
<div id="abuse" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Success</h4>
        <button type="button" class="close" onClick="location.href=location.href">&times;</button>
        
      </div>
      <div class="modal-body">
       <p>Successfully repored......

      </p>
      <p>Regards,</p>
      <p>Client Success Team (CRM),</p>
      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 
      
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
     <!-- <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a> -->
   </div>
 </div>
</div>
</div>
 <!-- // Modal end -->
 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
      
      <!-- // news -->  
      <div class="container-fluid">
        <div class="container">
          <div class="text-center pt-2">
            <h2 class="main-title"><span><a href="#" class="text-blue">News</a></span></h2>
          </div>
          <div class="row share_box mb-4">
            <div class="col-lg-8 pt-1">
               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your News</button>  
            </div>
            <div class="col-lg-4">
               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>
            </div>
          </div> 
          
        </div>
      @foreach($news as $lnews) 
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 class="display-6 mb-3 text-blue">{{ $lnews->new_head }}</h2>
            </div>
            <div class="col-lg-2 text-right">
              <p class="mb-2 text-muted mb-3">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
            </div>
          </div> 
          <p>{!!$lnews->Data!!}</p>  
          <!--  <button class="btn btn-primary mb-3 news_id" data-id='{{ $lnews->id }}' data-toggle="modal" data-target="#reportAbuse">Report Abuse</button>   -->
        </div>
          @endforeach 
        <!-- news  // -->   
      
     
      </div>
      
    </div>
   
    </div>

      <!-- Publish News Modal -->
      <div id="publishNews" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Publish Your News Story</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form id='publishNewsForm' class="publishform">
                 <input type="hidden" name="subject" value="News Publish">
                 <input type="hidden" name="type" value="news">
                 @include('industry._infoForm') 
              </form>
              <button class="btn btn-block submit-btn" id="sub">Submit</button> 
           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->
      <!-- Report abuse form -->
      <div id="reportAbuse" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title ">Report Abuse</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form id='reportForm' >
                <input type="hidden" name="subject" value="News Abuse">
                @include('industry._infoForm')   
              </form>
              <button class="btn btn-block submit-btn2">Submit</button> 
           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Report abuse form End-->
@endsection
@section('scripts')
@endsection