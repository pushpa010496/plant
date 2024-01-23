@extends('../layouts/pages')
@section('style')
<style>
  .card-header h2 {font-size: 12px !important;} /* For Main Nav */
  .filter > ul{margin-left: -30px;}
  .filter > ul li{list-style: none;float:left;margin-right: 7px;color: #EC193A;margin-bottom: 10px; width: 20px;height: 20px;border:1px solid #EC193A; text-align: center;vertical-align: middle;}
  .filter > ul li a{color: #EC193A;font-size: 14px;background-color: transparent;display: block;line-height: 18px;}
  .filter > ul li a:hover{color: #fff;}
  .filter > ul li:hover{ background-color: #EC193A; color: #fff; }
  .filter > ul li a:active {background-color: #EC193A;color: #fff;}

  .breadcrumb{background-color: transparent;padding: 5px 0;margin-bottom: 5px;font-size: 14px;} 

  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #6c757d;
    content: "\f101";
    font-family: fontawesome;
  }
  .suppliers a{color: #333;}
  .suppliers a:hover{color: #EC193A;}
  .pagination{border-radius: 0px;}
  .page-link {    
    color: #222;
    background-color: #e4e4e4;
    border: 1px solid #d5d5d5;
    margin-right: 7px;
  }
  .page-link:hover {
    color: #fff;
    text-decoration: none;
    background-color: rgb(9, 110, 13);
    border-color: #EC193A;
  }
  .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #EC193A;
    border-color: #EC193A;
  }
  .page-item:last-child .page-link, .page-item:first-child .page-link{border-radius: 0px;}
  .suppliers h3{
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .filter .active{
    background-color: #EC193A;
    color:#ffffff;
  }
  .carousel-indicators {
    right: 10px;
    left: auto;
    margin-right: 7%;
    bottom: 0px;
  }

  .carousel-indicators li{
    height:8px;
    width:8px;
    background: #e2e2e2;
    border-radius: 50%;
  }
  .carousel-indicators .active{
    background: transparent;
    border:1px solid #e2e2e2;
  }

</style>
@endsection
@section('content')
     @php     
       $page = getPageId(Request::segment(2));     
       $page_all = getPage(Request::segment(1));   
     @endphp



<!-- Leader Board Banner -->
  @include('layouts.partials._leaderboard_banner')


    
<!-- End Leader Board Banner-->

 <!-- Begin page content -->
    <div role="main">
        
      <!-- // Event Listing -->
    <!-- // Event Listing -->
      <div class="container pb-3 pt-5">
        <div class="row">        
            <div class="col-lg-8 offset-lg-2 mt-4">
    {{Form::open(['url' => 'search'])}}
          <div class="input-group input-group-lg">
            <input type="text" name="q" class="form-control" id="autoComplete" required placeholder="Search Products & Manufacturers...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            {{Form::close()}}
          </div>
          <!-- MAIN SEARCH // -->
    </div>
         <div class="col-lg-9 pt-3"> 
  
  <div class="row">
    <div class="col-lg-6">
      Search result of <strong>{{$keyword}}</strong>
    </div>
   
  </div>

  <div class="row">
    <div class="col-lg-12 bg-light border border-secondary">
      <h2 class="display-5 pt-3"></h2>
      <div class="filter">
        <div class="clearfix"></div>
      </div>                          
      @if(count($companyinfo) != 0)
      <div class="suppliers mt-2 mb-4">
        @foreach($companyinfo as $company)  
        <h3 class="display-6 mb-3">
          <a href="{{url('suppliers').'/'. @$company->companyprofile[0]->url }}" class="font-weight-bold">{{ $company->comp_name }}</a>

          @if(@$company->companyproduct[0]->category->ParentCategory->id == 22 )
            <i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>
            <small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->name)}}</small>
          @else
          <i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>
          <small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->ParentCategory->name)}}</small>
          <i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>
          <small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->name)}}</small>
          @endif
        </h3>
        @endforeach
      </div>
      @else
        <h5>No suppliers available</h5>
      @endif  
    </div>
    </div>
</div>
          </div>
        </div>
      </div>
      <!-- Event Listing // -->


      </div>
      <!-- Event Listing // -->
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
                <p>Sincerely automotive-technology</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              {{-- <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a> --}}
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script type="text/javascript">

// $(function() {
  // $('.filter button').on('click',function(){
  //   var character = $(this).text();
  //   var url = "{{url('suppliers-filter') }}/"+character.toLowerCase(); 
  //   load()
  //    getSuppliers(url);
    //  $.ajax({
    //     type: "GET",
    //     url: url,        
    //     cache: false,
    //     success: function(data)
    //     {
    //       $('#filter_body').empty();
    //       $('#filter_body').append(data);
    //     }
    // });
    

  // });


//     $('body').on('click', '.pagination a', function(e) {
//         e.preventDefault();
//         load()
//         var url = $(this).attr('href'); 
//         getSuppliers(url);
//         window.history.pushState("", "", url);
//     });
//     function load(){

//         $('#load a').css('color', '#dfecf6');
//         $('#load').append('<img style="position: absolute; left: 0; top: 10%;width: 50%; opacity: 0.5;" src="http://172.17.32.99/loading-grey.gif" />');

         
//     }

//     function getSuppliers(url) {
//         $.ajax({
//             url : url  
//         }).done(function (data) {
//             $('.suppliers').html(data);  
//         }).fail(function () {
//             alert('suppliers could not be loaded.');
//         });
//     }
// });


</script>
       @if(session('message_type') == 'success')    
<script type="text/javascript">         
  
   @if ( Request::segment(2) == 'success')
     
       if (performance.navigation.type == 1) {

      }else{        
      $('#myModal1').modal('show');    
     $('#myModal1').addClass('show');   
      }
    @endif
</script>
@endif
@endsection