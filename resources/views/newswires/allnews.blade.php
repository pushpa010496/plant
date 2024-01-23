@extends('../layouts/pages')
@section('style')
 <link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">
 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
@endsection
@section('content')

</div>
 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
      
      <!-- // Press Releases -->  
      <div class="container-fluid">
        <div class="container">
          <div class="text-center pt-2">
            <h2 class="main-title"><span><a href="#" class="text-blue">News</a></span></h2>
          </div>
        </div>  

        <div class="container pb-3">

          <div class="row">
            <div class="col-lg-12 mb-3">
                 @foreach($news as $lnews)
                   @if($lnews->type =='prnews')
              <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="{{  url('prnews/id',$lnews->id) }}" class="text-blue">{{ $lnews->news_head }}</a></h2>
                  </div>
                  <div class="col-lg-2">
                    <p class="mb-2 text-muted">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
                  </div>
                </div> 
                <p class="mb-1">{{substr(strip_tags($lnews->Data),0,350)}}</p>
                <small><a href="{{  url('prnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
              </div>
                 @elseif($lnews->type =='bussinesswire' or $lnews->type =='indwire')
                 <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="{{  url('bwnews/id',$lnews->id) }}" class="text-blue">{{ $lnews->news_head }}</a></h2>
                  </div>
                  <div class="col-lg-2">
                    <p class="mb-2 text-muted">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
                  </div>
                </div> 
                <p class="mb-1">{{substr(strip_tags($lnews->Data),0,350)}}</p>
                <small><a href="{{  url('bwnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
              </div>
               @elseif($lnews->type =='globalnews')
               <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="{{  url('gwnews/id',$lnews->id) }}" class="text-blue">{{ $lnews->news_head }}</a></h2>
                  </div>
                  <div class="col-lg-2">
                    <p class="mb-2 text-muted">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
                  </div>
                </div> 
                <p class="mb-1">{{substr(strip_tags($lnews->Data),0,350)}}</p>
                <small><a href="{{  url('gwnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
              </div>
              @endif
              @endforeach 
            </div>
        </div>
        </div>
        <!-- Press Releases // -->        
      </div>
    </div>
      <!-- Profile Body // -->
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
  // Publish Your News

</script>
  
@endsection
