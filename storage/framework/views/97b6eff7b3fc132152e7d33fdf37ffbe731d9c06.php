<?php $__env->startSection('style'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

 <script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script> 



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php     

  $page = getPageId(Request::segment(2));     

  $page_all = getPage(Request::segment(1));     

?>



<!-- Leader Board Banner -->

  <div class="container">

        <div class="row">

          <?php

          $count =0;

          ?>

          <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

            <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>

                <?php $count++;  ?>

              <?php endif; ?>  

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php if($count == 1): ?>

          <?php $column=12 ?>             

          <?php else: ?>

          <?php $column=6 ?>

          <?php endif; ?>

          <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

          <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>

          <div class="col-12 text-center mt-2" >

            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>">

            <img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>"  title="<?php echo e($homebanner12->img_title); ?>"/></a>

          </div>

          <?php else: ?>

          <?php endif; ?>  

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>

<!-- End Leader Board Banner-->



<div id="publishedNews" class="modal fade" role="dialog"<?php echo e($page_all); ?>>

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Success</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        

      </div>

      <div class="modal-body">

       <p>Thank you for your interest in publishing an article with Plantautomation Technology. Our client success team member will get in touch with you shortly to take this ahead.

        While you're here, check out our high-quality and insightful articles. Happy Reading!

      </p>

      <p>Regards,</p>

      <p>Client Success Team (CRM),</p>

      <p><a href="<?php echo url('/');?>" title=" <?php echo e(config('app.name', 'Laravel')); ?>" target="_blank" style="color:#333333;"><img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">

     <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

      <a href="<?php echo e(url()->previous()); ?>" type="button" class="btn btn-info" >Close</a> 

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

            <h1 class="main-title"><span><a href="#" class="text-blue">Articles</a></span></h1>

          </div>

         

        </div>  



        <div class="container pb-3 ">

          <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your Article</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3" style="top:5px"></div>

            </div>

          </div>

          <div class="row">

            <div class="col-lg-9 mb-4">

              <div class="row" id="product">  

                <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3 mb-4">

                  <div class="product div-shadow"> 

                    <a href="<?php echo e(route('article-view',$articles->article_url)); ?>">

                      <?php if($articles->small_image): ?>

                      <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($articles->small_image); ?>" alt="<?php echo e(config('app.url')); ?>articles/1519109395-article-default.jpg" title="<?php echo e($articles->article_title); ?>">

                      <?php else: ?>

                        <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/article-img.jpg" alt="<?php echo e(config('app.url')); ?>articles/article-img.jpg" title="<?php echo e($articles->article_title); ?>">

                      <?php endif; ?>

                    </a>

                    <h2>

                      <a href="<?php echo e(route('article-view',$articles->article_url)); ?>"><?php echo $articles->article_title; ?></a>

                    </h2>

                  </div>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  

              </div>  

                <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>          

            </div>


            <!-- square baneners -->
            <div class="col-lg-3">
<?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($homebanner12->positions[0]->id == 16 and $pcount->id == 1): ?>
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;"  target="_blank" title="<?php echo e($homebanner12->title); ?>">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" />
                      </a>
                  </div>            
            <?php endif; ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
         
<!-- square banners end -->
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

              <h4 class="modal-title">Publish Your Article</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <form  action="<?php echo e(route('submit-articles')); ?>" method="post">

                  <!-- <form id='publishpressForm' class="publishform" name="insight_form"> -->

                <input type="hidden" name="name" value="plantautomation-articles">

                <input type="hidden" name="subject" value="Article Publish">

                <input type="hidden" name="type" value="article">

                

                <?php echo $__env->make('industry._infoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       

                 <button type="submit" class="btn btn-block submit-btn btn-primary">Submit</button>

              </form>

             

           

            </div>

            <div class="modal-footer">

              <button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

      <!-- Publish News End-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>   





<!-- POP-UP -->

<style>

  button.close{

    position: absolute;

    right: 5px;

  }

  .modal{background-color: rgba(0,0,0,0.4) !important;}

</style>



<div id="myModal1" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content p-0">           

      <div class="modal-body p-0">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <a href="<?php echo e(url('events/light-middle-east')); ?>" target="_blank">

          <img src="<?php echo e(config('app.url')); ?>images/Light-Middle-East.jpg" width="100%">

        </a> 

      </div>          

    </div>

  </div>

</div>





<?php if(session('message_type') == 'success'): ?>    

    <script type="text/javascript"> 

        $('#publishedNews').modal('show');         

   </script>

 <?php endif; ?>

<script type="text/javascript">

  var url = "<?php echo e(url('articles/more')); ?>";

 <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/article.blade.php ENDPATH**/ ?>