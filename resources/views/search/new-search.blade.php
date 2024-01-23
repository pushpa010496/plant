@extends('../layouts/pages')

@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/jquery.ui.autocomplete.css">

<style type="text/css">

#accordion2 .panel {

    width: 100% !important;

}



#accordion2 .panel-default>.panel-heading {

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



.ellipsis2 {

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



.whitepaper-inner-box {

    min-height: 250px;

    max-height: 250px;

    overflow: hidden;



}



.whitepaper-inner-box p {

    color: #6f6f6c;

}



.whitepaper-box {

    height: 310px;



}



.media img {

    width: 75px;

    width: 75px;

    border: 3px solid #88dff3

}



.country_click,

.supplier_click {

    display: none;

}



.country_div {

    max-height: 80px;

    overflow: hidden;

}



.supplier_div {

    max-height: 195px;

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

.list-group-item-action:focus, .list-group-item-action:hover {

    color: #f8f9fa;

    text-decoration: none;

    background-color: #8d63ab;

}

</style>
@endsection
@section('content')
<div class="mt-3"></div>

<!-- <div class="position-relative container pt-4 pb-3">

    <div class="row justify-content-center">

        <div class="col-lg-8 mt-4" id="main-search">

            <form class="m-0" method="get" action="{{url('/search-result')}}">

                <div class="input-group input-group-lg">

                     <input type="text" id="search" name="q" class="form-control" placeholder="Search Products & Manufacturers..." autocomplete="off" />



                    <span class="input-group-btn">

                        <button class="btn btn-secondary h-100" type="submit">

                            <i class="fa fa-search" aria-hidden="true"></i></button>

                    </span>

                </div>

                {{Form::close()}}

        </div>

    </div>

     <div id="display"></div>

</div> -->

<div class="container mb-4">

    <h1 style="font-size:24px;">Search result of "{{str_replace("-"," ",ucwords($query)) }}"</h1>

</div>

@if(!empty($products->count() > 0))

@php

$test = App\SearchKeyword::where('keyword',\Request()->get('q'))->first();

if(empty($test)){

App\SearchKeyword::create(['keyword'=>\Request()->get('q'),'url'=>str_slug(\Request()->get('q'))]);

}

@endphp

<div class="container">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Products</h5>

</div>

<div class="container mb-3">

    <div class="row justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row pb-2" id="products-load">

                @foreach($products as $product)

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mt-4 px-3">

                    <div class="container border p-0"

                        style="box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; ">

                        @if($product->company)

                        <a href="{{url('products/'.$product->company->profile->url.'/'.$product->url)}}"

                            target="_blank">

                            <img class="img-fluid w-100" style="border-radius: 0.6rem 0.6rem 0 0;"

                                src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image}}"

                                alt="{{$product->alt_tag}}">

                        </a>

                        <div class="bg-light d-flex align-items-center justify-content-center pt-2"

                            style="min-height: 62px;max-height: 62px;overflow: hidden;">

                            <h2 class="small text-center">

                                <a href="{{url('products/'.$product->company->profile->url.'/'.$product->url)}}"

                                    class="text-secondary font-weight-bold" style="font-size: 15px;" target="_blank">

                                    {{$product->title}}</a>

                            </h2>

                        </div>

                        @endif

                        <div class="text-center pb-2" style="height: 50.5px;">

                            <img class="img-fluid"

                                src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo}}"

                                alt="{{$product->alt_tag}}" width="100">

                        </div>

                        <div class="text-center d-flex pb-3">

                            <button type="button" class="btn mx-3 w-100 bg-white font-weight-bold rounded"

                                style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal"

                                data-target="#enquiry" data-company_name="{{$product->company->comp_name}}"

                                data-company_id="{{$product->company->id}}" data-prod_name="{{$product->title}}"

                                data-product_id="{{$product->id}}"

                                data-subject_client="{{$product->title}} - Enquiry Submitted | Plantautomation Technology"

                                 data-page="product search">

                                <img src="{{config('app.url')}}/img/enquiry.png" alt="" srcset="">

                                Enquire</button>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

            @if($pcount > 8)

            <div class="container d-flex" id="loadMoreProductBtn">

                <button

                    class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_product_btn"

                    onclick="return moreProducts()" style="min-width: 10rem;">View More</button>

            </div>

            @endif

        </div>

    </div>

</div>

@else

<div class="container pb-0">

    <div class="row">

        <div class="col-lg-8 offset-lg-2">

            <div style="height: 150px">

                <h5>No results found, please try with different keywords.</h5>

            </div>

        </div>

    </div>

</div>

@php

$test = App\SearchKeyword::where('keyword',\Request()->get('q'))->first();

if(empty($test)){

App\SearchKeyword::create(['keyword'=>\Request()->get('q'),'url'=>str_slug(\Request()->get('q')),'no_products'=>0]);

}

@endphp



@endif

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

@if($articles->count() > 0)

<div class="container mt-4">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Articles</h5>

</div>

<div class="container mt-4">

    <div class="row article-load" id="product">

        @foreach($articles as $article)

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="product div-shadow">

                <a href="{{ route('article-view',$article->article_url)  }}" target="_blank">

                    @if($article->small_image)

                    <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/{{ $article->small_image }}"

                        alt="{{ config('app.url')}}articles/1519109395-article-default.jpg"

                        title="{{$article->article_title}}">

                    @else

                    <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/article-img.jpg"

                        alt="{{ config('app.url')}}articles/article-img.jpg" title="{{$article->article_title}}">

                    @endif

                </a>

                <h2>

                    <a href="{{ route('article-view',$article->article_url)  }}">{{$article->article_title}}</a>

                </h2>

            </div>

        </div>

        @endforeach

    </div>

    @if($artcount > 8)

    <div class="container d-flex" id="loadMoreArticleBtn">

        <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_article_btn"

            style="min-width: 10rem;" onclick="return moreArticles()">View

            More</button>

    </div>

    @endif

</div>

@endif



@if(!empty($pressrelease->count() > 0))

<div class="container mt-4">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Press Release</h5>

</div>

<div class="container my-4">

    <div class="row px-3" id="pressrelease-load">

        @foreach($pressrelease as $press)

        <div class="div-shadow col-12 p-3 mb-3">

            <div class="row">

                <div class="col-lg-10">

                    <h2 class="display-6"><a href="{{ route('pressrelease-view',$press->news_url) }}"

                            class="text-blue font-weight-bold" target="_blank">{{ $press->news_head }}</a></h2>

                </div>

            </div>

            <p class="mb-1">{!!strip_tags(substr(@$press->Data,0,500))!!}<small class="float-right">

                    <a href="{{ route('pressrelease-view',$press->news_url) }}" class="text-blue font-weight-bold"

                        target="_blank">Read more...</a></small></p>

        </div>

        @endforeach

    </div>

    @if($presscount > 3)

    <div class="container d-flex" id="loadMorePressreleaseBtn">

        <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_pressrelease_btn"

            style="min-width: 10rem;" onclick="return morePressrelease()">View

            More</button>

    </div>

    @endif

</div>

@endif



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

<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1"

    aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

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

                <form id="productForm">

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

                        {!! Form::select('country', $countries,

                        old('country'),['required'=>'required','class'=>'form-control']) !!}

                    </div>



                    <div class="form-group">

                        <input type="text" name="email" class="form-control" placeholder="Email*" required="">

                    </div>



                    <div class="form-group">

                        <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">

                    </div>



                    <div class="form-group">

                        <textarea name="message" class="form-control" rows="5" placeholder="Write Message..."

                            required=""></textarea>

                    </div>



                    <button type="submit" class="btn btn-primary btn-block post">Submit</button>

                </form>

                <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection"

                    width="100" class="img-fluid pull-right mt-1 mb-1">

            </div>

        </div>

    </div>

</div>

<!--   End Product Enquiry Modal -->

@endsection



<script type="text/javascript" src="{{ config('app.url')}}js/slick/slick.min.js"></script>

<script type="text/javascript">

$('header form').remove();

$('.panel-title a').on('click', function() {

    $('.accordion-toggle').not($(this)).addClass('collapsed');

    $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');



});

</script>

<script type="text/javascript">

var start = '8';

var limit = '8';



function moreProducts() {

    var search = "{{$query }}";

    $.ajax({

            url: '{{ route("load-products") }}',

            data: {

                st: start,

                lmt: limit,

                query: search

            },

            dataType: 'json',

            beforeSend: function() {

                $(".load_more_product_btn").html(

                    '<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');

                $(".load_more_product_btn").prop('disabled', true); // disable button

            },

        })

        .done(function(data) {

            console.log(data);

            if (data.showbtn) {

                start = parseInt(start) + parseInt(limit);

                console.log(start)

            } else {

                $("#loadMoreProductBtn").remove();

            }

            JSON.stringify(data)

            $('#products-load').append(data.html);

        })

        .fail(function(data) {

            JSON.stringify(data)

        })

        .always(function(data) {

            $(".load_more_product_btn").text('More View');

            $(".load_more_product_btn").prop('disabled', false); // disable button 

        });

}

</script>

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





<script type="text/javascript">

var start = '8';

var limit = '8';



function moreArticles() {

    var search = "{{$query }}";

    $.ajax({

            url: '{{ route("load-articles") }}',

            data: {

                st: start,

                lmt: limit,

                query: search

            },

            dataType: 'json',

            beforeSend: function() {

                $(".load_more_article_btn").html(

                    '<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');

                $(".load_more_article_btn").prop('disabled', true); // disable button

            },

        })

        .done(function(data) {

            console.log(data);

            if (data.showbtn) {



                start = parseInt(start) + parseInt(limit);

                console.log(start)

            } else {

                $("#loadMoreArticleBtn").remove();

            }

            JSON.stringify(data)

            $('.article-load').append(data.html);

        })

        .fail(function(data) {

            JSON.stringify(data)

        })

        .always(function(data) {

            $(".load_more_article_btn").text('More View');

            $(".load_more_article_btn").prop('disabled', false); // disable button 

        });

}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">

function morePressrelease() {

    var search = "{{$query }}";

    $.ajax({

            type: "GET",

            url: '{{ route("load-pressrelease") }}',

            data: {

                st: '3',

                lmt: '3',

                query: search

            },

            dataType: 'json',

            beforeSend: function() {

                $(".load_more_pressrelease_btn").html(

                    '<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');

                $(".load_more_pressrelease_btn").prop('disabled', true); // disable button

            },

        })

        .done(function(data) {

            console.log(data);

            if (data.showbtn) {

                console.log('truecond');

                start = parseInt(start) + parseInt(limit);

            } else {

                console.log('else');

                $("#loadMorePressreleaseBtn").remove();

            }

            console.log((data.showbtn));

            $('#pressrelease-load').append(data.html);

        })

        .fail(function(data) {

            console.log(JSON.stringify(data))

            console.log('fail')

        })

        .always(function(data) {

            $(".load_more_pressrelease_btn").text('More View');

            $(".load_more_pressrelease_btn").prop('disabled', false); // disable button 

        });

}

</script>



<script>

$(document).ready(function() {

   $("#search").keyup(function() {

       var name = $('#search').val();

       if (name == "") {

           $("#display").html("");

       }

       else {

           $.ajax({

                headers: {

                'Accept': "application/json"

                },

               type: "GET",

               url: "{{ route('searchajax') }}",

               dataType: 'json',

               data: {

                   search: name

               },

               success: function(data) {

                  $("#display").html(data.html);

               }

           });

       }

   });

});

</script>