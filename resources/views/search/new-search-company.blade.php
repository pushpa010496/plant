@extends('../layouts/pages')

@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css">

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


<style type="text/css">

 .btn:hover {

    background-color: #e9ecef !important;

    cursor: pointer;

    color: #92278f !important;

  } 

  .view-more:hover {

    background-color: #92278f !important;

    cursor: pointer;

    color: #ffffff !important;

  }



</style>
@endsection
@section('content')
<div class="mt-3"></div>

<div class="container position-relative pt-4 pb-3">

  <div class="row justify-content-center">

    <div class="col-lg-8  mt-4" id="main-search">

      <form method="get" class="m-0" action="{{route('new-search')}}" >

        <div class="input-group input-group-lg">

           <input type="text" name="q" id="search"class="form-control" id="autoComplete" required="" placeholder="Search Products & Manufacturers..." autocomplete="off">



          <span class="input-group-btn">

              <button class="btn btn-secondary h-100" type="submit">

                <i class="fa fa-search " aria-hidden="true"></i></button>

              </span>

          </div>

        {{Form::close()}}

      </div>

    </div>

    <div class="container position-absolute px-0 suggestions d-none" style="left:0; z-index:20;transition:all 0.2s ease-in-out;">

    <div class="row mx-0 justify-content-center">

      <div class="col-lg-8">

        <div class="row mx-0">

          <div class="col-12 px-0 bg-light links rounded border pt-3">

            <a href="" name="company" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<span class="dtext"></span>" in Companies</a>

            <a href="" name="product" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<span class="dtext"></span>" in Products</a>

            <a href="" name="article" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<span class="dtext"></span>" in Articles</a>

            <a href="" name="pressreleases" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<span class="dtext"></span>" in Press Releases</a>

          </div>

        </div>



      </div>

    </div>

  </div></br>

  <div class="container mb-4">

  <h1 style="font-size:24px;">Search result of "{{str_replace("-"," ",ucwords($query)) }}"</h1>

  </div>

    @if($companies->count() > 0 )

        <div class="container mt-4">

          <h5 class="font-weight-bold" style="color: #92278f;">Search By Companies</h5>

        </div>

    @endif

    <div class="container mt-4 p-0">

        <div class="container pb-3">

          <div class="row" id="company-load">

              @foreach($companies as $company) 

                <div class="col-lg-3 col-6 text-center mb-4">

                  <div class="product">

                    <div id="prodimage">

                        @if($company->companyproduct->count() > 0)

                          <a href="{{url('products').'/'. @$company->profile->url }}" target="_blank">

                            <img class="div-shadow p-2 img-fluid"

                              src="{{config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo}}"

                              title="{{$company->comp_name}}" alt="{{$company->comp_name}}">

                          </a>

                        @else

                          <a href="{{url('suppliers').'/'. @$company->profile->url }}" target="_blank">

                            <img class="div-shadow p-2 img-fluid"

                              src="{{config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo}}"

                              title="{{$company->comp_name}}" alt="{{$company->comp_name}}">

                          </a>

                        @endif

                    </div>

                  </div>

                </div>

              @endforeach

          </div>

        </div>

        @if($compcount > 8)

          <div class="container d-flex" id="loadMoreCompanyBtn">

            <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_company_btn"

              style="min-width: 10rem;" onclick="return moreCompany()">View

              More</button>

          </div>

        @endif

    </div>









  <div id="product_for_review" class="modal fade show" role="dialog" style="padding-right: 17px; display: none;">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title text-success">success</h4>

          <button type="button" class="close" data-dismiss="modal">×</button>



        </div>

        <div class="modal-body">

          <p class="" id="success"></p>

          <br> Happy Surfing!

          <p>Sincerely Plantautomation Technology</p>

          <p class="mb-0">Regards,</p>

          <p class="mb-0">Client Success Team (CRM),</p>

          <img src="https://industry.plantautomation-technology.com/img/main-logo.png" width="150px">

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>



  <!--Start Product Enquiry Modal -->

 <div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header m-auto">

        <h5 class="modal-title text-center" id="enquiryLabel">

          Product Enquiry </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true" style="position: absolute;top: 7px;left: 9px;">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="pt-2"></div> 

          <form  id="productForm">

                <input type="hidden" name="company_name" value="">

                <input type="hidden" name="page" value="">  

                <input type="hidden" name="company_id" value="">

                <input type="hidden" name="prod_name" value="">

                <input type="hidden" name="product_id" value="">

                <input type="hidden" name="subject_client" value="">

                <input type="hidden" name="subject_admin" value="">

                <div class="form-group">

                  <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">

                </div>



                <div class="form-group">

                  <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">

                </div>



                 <div class="form-group">

                  <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">

                </div>



                 <div class="form-group">

                  <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">

                </div>



                 <div class="form-group">

                    {!! Form::select('country', $countries, old('country'),['required'=>'required','class'=>'form-control']) !!}

                  </div>



                 <div class="form-group">

                  <input type="text" name="email" class="form-control" placeholder="Email*" required="">

                </div>



                <div class="form-group">

                  <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">

                </div>



                 <div class="form-group">

                   <textarea name="message" class="form-control" rows="5" placeholder="Write Message..." required=""></textarea>

                </div>



                <button type="submit" class="btn btn-primary btn-block post" >Submit</button>

          </form>

        <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1">

      </div>

    </div>

  </div>

</div>

</div> 

<!--   End Product Enquiry Modal -->

@endsection

@section('scripts')

<script type="text/javascript">

  var start = '8';

  var limit = '8';

  function moreCompany(){

      var search = "{{$query }}";

      $.ajax({

          type: "GET", 

          url: '{{ route("load-compaines") }}',

          data: { st: start, lmt: limit, query: search },

          dataType: 'json',

          beforeSend: function() {

              $(".load_more_company_btn").html('<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');

              $(".load_more_company_btn").prop('disabled', true); // disable button

          }

      })

      .done(function(data) {  

      console.log(data);              

          if(data.showbtn) {     

              start = parseInt(start) + parseInt(limit);    

                    console.log(start)    

          } else {

              $("#loadMoreCompanyBtn").remove();

          }

          $('#company-load').append(data.html);

      })

      .fail(function(data) {

          JSON.stringify(data)

      })

      .always(function(data) {

          $(".load_more_company_btn").text('More View');

          $(".load_more_company_btn").prop('disabled', false); // disable button 

      });

  }

</script>









