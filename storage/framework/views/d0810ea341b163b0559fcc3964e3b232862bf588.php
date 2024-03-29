<?php $__env->startSection('style'); ?>

<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.css">

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mt-3"></div>

<div class="container position-relative pt-4 pb-3">

  <div class="row justify-content-center">

    <div class="col-lg-8 mt-4" id="main-search">

      <form method="get" class="m-0" action="<?php echo e(route('new-search')); ?>" >

        <div class="input-group input-group-lg">

           <input type="text" name="q" id="search" class="form-control"  required="" placeholder="Search Products & Manufacturers..." autocomplete="off">



          <span class="input-group-btn">

              <button class="btn btn-secondary h-100" type="submit">

                <i class="fa fa-search " aria-hidden="true"></i></button>

              </span>

          </div>

        <?php echo e(Form::close()); ?>


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

  </div>

  </div>

  <div class="container mb-4">

  <h1 style="font-size:24px;">Search result of "<?php echo e(str_replace("-"," ",ucwords($query))); ?>"</h1>

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

              <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($article->small_image); ?>" alt="<?php echo e(config('app.url')); ?>articles/1519109395-article-default.jpg" title="<?php echo e($article->article_title); ?>">

              <?php else: ?>

                <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/article-img.jpg" alt="<?php echo e(config('app.url')); ?>articles/article-img.jpg" title="<?php echo e($article->article_title); ?>">

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

    <?php else: ?>

        <div class="container pb-0">

          <div class="row">      

            <div class="col-lg-8 offset-lg-2">

              <div  style="height: 150px"> 

               <h5>No results found, please try with different keywords.</h5>

             </div>

           </div>

         </div>

        </div>

        <!-- <?php

             $test = App\SearchKeyword::where('keyword',\Request()->get('q'))->first();

              if(empty($test)){

               App\SearchKeyword::create(['keyword'=>\Request()->get('q'),'url'=>str_slug(\Request()->get('q')),'no_articles'=>0]);

              }

        ?> -->

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

                    <?php echo Form::select('country', $countries, old('country'),['required'=>'required','class'=>'form-control']); ?>


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









  <?php $__env->stopSection(); ?>





  <script type="text/javascript">

$('header form').remove();

  $('.panel-title a').on('click',function(){

    $('.accordion-toggle').not($(this)).addClass('collapsed');     

    $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');



  });

</script>

<script type="text/javascript">

  var start = '8';

  var limit = '8';

  function moreArticles(){

      var search = "<?php echo e($query); ?>";

      $.ajax({

          url: '<?php echo e(route("load-articles")); ?>',

          data: { st: start, lmt: limit, query: search },

          dataType: 'json',

          beforeSend: function() {

              $(".load_more_article_btn").html('<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');

              $(".load_more_article_btn").prop('disabled', true); // disable button

          },

      })

      .done(function(data) {  

      console.log(data);              

          if(data.showbtn) { 

              start = parseInt(start) + parseInt(limit);    

                    console.log(start)   

          } else {

              $("#loadMoreArticleBtn").remove();

          }

          JSON.stringify(data)

          $('#article-load').append(data.html);

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

  </script>

  <script>

window.onload=function(){

  let searchBox = document.getElementById('search');

  let suggestions = document.getElementsByClassName('suggestions')[0];

  searchBox.addEventListener("keyup", function(event) {

    event.target.value.length > 0 ? suggestions.classList.remove('d-none') : suggestions.classList.add('d-none');

    Array.from(document.getElementsByClassName("dtext")).forEach(function(element) {

      element.innerHTML = searchBox.value;

      element.parentElement.href = `https://www.plantautomation-technology.com/search-result?q=${searchBox.value}&key=${element.parentElement.name}`;

    });

  });

  searchBox.addEventListener("blur", function(event) {

    setTimeout(() => {

      suggestions.classList.add("d-none")

    }, 200);

  });

  searchBox.addEventListener("focus", function(event) {

    if (event.target.value.length > 0) {

      suggestions.classList.remove("d-none")

    }

  });

}

</script>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/new-search-articles.blade.php ENDPATH**/ ?>