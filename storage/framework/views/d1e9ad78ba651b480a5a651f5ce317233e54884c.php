<?php $__env->startSection('style'); ?>

<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.css">

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="mt-3"></div>

<!-- <div class="position-relative container pt-4 pb-3">

    <div class="row justify-content-center">

        <div class="col-lg-8 mt-4" id="main-search">

            <form class="m-0" method="get" action="<?php echo e(url('/search-result')); ?>">

                <div class="input-group input-group-lg">

                     <input type="text" id="search" name="q" class="form-control" placeholder="Search Products & Manufacturers..." autocomplete="off" />



                    <span class="input-group-btn">

                        <button class="btn btn-secondary h-100" type="submit">

                            <i class="fa fa-search" aria-hidden="true"></i></button>

                    </span>

                </div>

                <?php echo e(Form::close()); ?>


        </div>

    </div>

     <div id="display"></div>

</div> -->

<div class="container mb-4">

    <h1 style="font-size:24px;">Search result of "<?php echo e(str_replace("-"," ",ucwords($query))); ?>"</h1>

</div>

<?php if(!empty($products->count() > 0)): ?>

<?php

$test = App\SearchKeyword::where('keyword',\Request()->get('q'))->first();

if(empty($test)){

App\SearchKeyword::create(['keyword'=>\Request()->get('q'),'url'=>str_slug(\Request()->get('q'))]);

}

?>

<div class="container">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Products</h5>

</div>

<div class="container mb-3">

    <div class="row justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row pb-2" id="products-load">

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mt-4 px-3">

                    <div class="container border p-0"

                        style="box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; ">

                        <?php if($product->company): ?>

                        <a href="<?php echo e(url('products/'.$product->company->profile->url.'/'.$product->url)); ?>"

                            target="_blank">

                            <img class="img-fluid w-100" style="border-radius: 0.6rem 0.6rem 0 0;"

                                src="<?php echo e(config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image); ?>"

                                alt="<?php echo e($product->alt_tag); ?>">

                        </a>

                        <div class="bg-light d-flex align-items-center justify-content-center pt-2"

                            style="min-height: 62px;max-height: 62px;overflow: hidden;">

                            <h2 class="small text-center">

                                <a href="<?php echo e(url('products/'.$product->company->profile->url.'/'.$product->url)); ?>"

                                    class="text-secondary font-weight-bold" style="font-size: 15px;" target="_blank">

                                    <?php echo e($product->title); ?></a>

                            </h2>

                        </div>

                        <?php endif; ?>

                        <div class="text-center pb-2" style="height: 50.5px;">

                            <img class="img-fluid"

                                src="<?php echo e(config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo); ?>"

                                alt="<?php echo e($product->alt_tag); ?>" width="100">

                        </div>

                        <div class="text-center d-flex pb-3">

                            <button type="button" class="btn mx-3 w-100 bg-white font-weight-bold rounded"

                                style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal"

                                data-target="#enquiry" data-company_name="<?php echo e($product->company->comp_name); ?>"

                                data-company_id="<?php echo e($product->company->id); ?>" data-prod_name="<?php echo e($product->title); ?>"

                                data-product_id="<?php echo e($product->id); ?>"

                                data-subject_client="<?php echo e($product->title); ?> - Enquiry Submitted | Plantautomation Technology"

                                 data-page="product search">

                                <img src="<?php echo e(config('app.url')); ?>/img/enquiry.png" alt="" srcset="">

                                Enquire</button>

                        </div>

                    </div>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <?php if($pcount > 8): ?>

            <div class="container d-flex" id="loadMoreProductBtn">

                <button

                    class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_product_btn"

                    onclick="return moreProducts()" style="min-width: 10rem;">View More</button>

            </div>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php else: ?>

<div class="container pb-0">

    <div class="row">

        <div class="col-lg-8 offset-lg-2">

            <div style="height: 150px">

                <h5>No results found, please try with different keywords.</h5>

            </div>

        </div>

    </div>

</div>

<?php

$test = App\SearchKeyword::where('keyword',\Request()->get('q'))->first();

if(empty($test)){

App\SearchKeyword::create(['keyword'=>\Request()->get('q'),'url'=>str_slug(\Request()->get('q')),'no_products'=>0]);

}

?>



<?php endif; ?>

<?php if($companies->count() > 0 ): ?>

<div class="container mt-4">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Companies</h5>

</div>

<?php endif; ?>

<div class="container mt-4 p-0">

    <div class="container pb-3">

        <div class="row" id="company-load">

            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-3 col-6 text-center mb-4">

                <div class="product">

                    <div id="prodimage">

                        <?php if($company->companyproduct->count() > 0): ?>

                        <a href="<?php echo e(url('products').'/'. @$company->profile->url); ?>" target="_blank">

                            <img class="div-shadow p-2 img-fluid"

                                src="<?php echo e(config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo); ?>"

                                title="<?php echo e($company->comp_name); ?>" alt="<?php echo e($company->comp_name); ?>">

                        </a>

                        <?php else: ?>

                        <a href="<?php echo e(url('suppliers').'/'. @$company->profile->url); ?>" target="_blank">

                            <img class="div-shadow p-2 img-fluid"

                                src="<?php echo e(config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo); ?>"

                                title="<?php echo e($company->comp_name); ?>" alt="<?php echo e($company->comp_name); ?>">

                        </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <?php if($compcount > 8): ?>

    <div class="container d-flex" id="loadMoreCompanyBtn">

        <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_company_btn"

            style="min-width: 10rem;" onclick="return moreCompany()">View

            More</button>

    </div>

    <?php endif; ?>

</div>

<?php if($articles->count() > 0): ?>

<div class="container mt-4">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Articles</h5>

</div>

<div class="container mt-4">

    <div class="row article-load" id="product">

        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="product div-shadow">

                <a href="<?php echo e(route('article-view',$article->article_url)); ?>" target="_blank">

                    <?php if($article->small_image): ?>

                    <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($article->small_image); ?>"

                        alt="<?php echo e(config('app.url')); ?>articles/1519109395-article-default.jpg"

                        title="<?php echo e($article->article_title); ?>">

                    <?php else: ?>

                    <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/article-img.jpg"

                        alt="<?php echo e(config('app.url')); ?>articles/article-img.jpg" title="<?php echo e($article->article_title); ?>">

                    <?php endif; ?>

                </a>

                <h2>

                    <a href="<?php echo e(route('article-view',$article->article_url)); ?>"><?php echo e($article->article_title); ?></a>

                </h2>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <?php if($artcount > 8): ?>

    <div class="container d-flex" id="loadMoreArticleBtn">

        <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_article_btn"

            style="min-width: 10rem;" onclick="return moreArticles()">View

            More</button>

    </div>

    <?php endif; ?>

</div>

<?php endif; ?>



<?php if(!empty($pressrelease->count() > 0)): ?>

<div class="container mt-4">

    <h5 class="font-weight-bold" style="color: #92278f;">Search By Press Release</h5>

</div>

<div class="container my-4">

    <div class="row px-3" id="pressrelease-load">

        <?php $__currentLoopData = $pressrelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $press): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="div-shadow col-12 p-3 mb-3">

            <div class="row">

                <div class="col-lg-10">

                    <h2 class="display-6"><a href="<?php echo e(route('pressrelease-view',$press->news_url)); ?>"

                            class="text-blue font-weight-bold" target="_blank"><?php echo e($press->news_head); ?></a></h2>

                </div>

            </div>

            <p class="mb-1"><?php echo strip_tags(substr(@$press->Data,0,500)); ?><small class="float-right">

                    <a href="<?php echo e(route('pressrelease-view',$press->news_url)); ?>" class="text-blue font-weight-bold"

                        target="_blank">Read more...</a></small></p>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <?php if($presscount > 3): ?>

    <div class="container d-flex" id="loadMorePressreleaseBtn">

        <button class="border mx-auto mt-4 font-weight-bold btn rounded text-dark view-more load_more_pressrelease_btn"

            style="min-width: 10rem;" onclick="return morePressrelease()">View

            More</button>

    </div>

    <?php endif; ?>

</div>

<?php endif; ?>



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

                        <?php echo Form::select('country', $countries,

                        old('country'),['required'=>'required','class'=>'form-control']); ?>


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

<?php $__env->stopSection(); ?>



<script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/slick/slick.min.js"></script>

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

    var search = "<?php echo e($query); ?>";

    $.ajax({

            url: '<?php echo e(route("load-products")); ?>',

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

      var search = "<?php echo e($query); ?>";

      $.ajax({

          type: "GET", 

          url: '<?php echo e(route("load-compaines")); ?>',

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

    var search = "<?php echo e($query); ?>";

    $.ajax({

            url: '<?php echo e(route("load-articles")); ?>',

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

    var search = "<?php echo e($query); ?>";

    $.ajax({

            type: "GET",

            url: '<?php echo e(route("load-pressrelease")); ?>',

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

               url: "<?php echo e(route('searchajax')); ?>",

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
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/new-search.blade.php ENDPATH**/ ?>