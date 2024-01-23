<?php $__env->startSection('style'); ?>

 <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

<?php $__env->stopSection(); ?>
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
<?php $__env->startSection('content'); ?>



<?php     

  $page = getPageId(Request::segment(2));     

  $page_all = getPage(Request::segment(1));     

?>



<!-- Leader Board Banner -->

  <?php echo $__env->make('layouts.partials._leaderboard_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

       <p>Thank you for your interest in submitting whitepapers with Packaging-Labelling. Our client success team member will get in touch with you shortly to take this ahead.</p>

       <p>While you are here, check out our informative and insightful whitepapers. Happy Surfing!</p>

       <p>Regards,</p>

       <p>Client Success Team (CRM),</p>

       <p><a href="<?php echo url('/');?>" title=" <?php echo e(config('app.name', 'Laravel')); ?>" target="_blank" style="color:#333333;"><img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

       

     </div>

     <div class="modal-footer">

      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      <!-- <a href="<?php echo e(url('whitepaper')); ?>" type="button" class="btn btn-info" >Close</a> -->

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

            <h2 class="main-title"><span><a href="#" class="text-blue">Whitepapers</a></span></h2>

          </div>

          

        </div>  



        <div class="container pb-3">

        <!--    <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your Whitepaper</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>

            </div>

          </div> -->



           <div class="row mb-2 share_box mb-4 pt-3">

            <div class="col-lg-8 mb-3">

              <!-- <img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"> -->

              <!-- <a href="" data-toggle="modal" data-target="#seeYourself" style="outline:none"><img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"></a> -->

              <div class="border p-2 d-table" style="width:fit-content">

                              

              <span class="text-white pt-2 display-5 p-3">Have a white paper?

                  <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#publishNews">Publish with us!</button>  

            </span>

               </div>

            </div>

          

            <div class="col-lg-4 mb-3 mt-3">

               <div class="sharethis-inline-share-buttons" style="top:0"></div>

            </div>

          </div>

           <?php $__currentLoopData = $whitepaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whitepapers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         

                     

          <div class="row">

           <div class="col-lg-12">

           <h1 class="display-5 pb-3 text-blue"><?php echo e($whitepapers->title); ?></h1>

              <img class="img-fluid div-shadow mb-2 mr-4 pull-left" src="<?php echo config('app.url'); ?>whitepapers/<?php echo $whitepapers->image;?>" alt=""/>

               <p><?php echo $whitepapers->description; ?></p>

               <strong><u>Download Link</u></strong>

               <a href="<?php echo config('app.url'); ?>whitepapers/<?php echo $whitepapers->pdf;?>" download="<?php echo $whitepapers->pdf;?>" target="_blank" ><?php echo $whitepapers->pdf;?></a>

              </div>             

          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

          

        </div>

        <!-- Press Releases // -->        

      </div>

    </div>

      <!-- Profile Body // -->



<div class="container">

          <div class="text-center pt-2">

            <h2 class="main-title"><span><a href="#" class="text-blue">Most Read White Papers</a></span></h2>

          </div>



          <div class="row" id="product">  

            <?php $__currentLoopData = $top_whitepapers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-2 col-md-3 mb-4">

              <a href="<?php echo e(url('whitepapers/'.$paper->whitepapers_url)); ?>"><?php echo e($paper->title); ?></a>

              <div class="product div-shadow"> 

                <a href="<?php echo e(url('whitepapers/'.$paper->whitepapers_url)); ?>"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>pressreleases/<?php echo $paper->image;?>" alt=""/>

                </a>

               <h2><a href="<?php echo e(url('whitepapers/'.$paper->whitepapers_url)); ?>"><?php echo e($paper->title); ?></a></h2>

              </div>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  

          </div>

        </div>



    </div>



     <!-- Publish News Modal -->

      <div id="publishNews" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Publish Your Whitepaper</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

            <form method="post" action="<?php echo e(route('submit-whitepapers')); ?>">

                <input type="hidden" name="publicid" value="d3ebf898fe22b1139e7ec09b8d33fa4f">

                <input type="hidden" name="name" value="plantautomation-whitepapers">

                <input type="hidden" name="subject" value="Whitepaper Publish">

                <input type="hidden" name="type" value="whitepaper">

                <?php echo $__env->make('industry._infoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                    
                <button class="btn btn-block submit-btn btn-primary">Submit</button> 
              </form>

             

           

            </div>

            <div class="modal-footer">

              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

      <!-- Publish News End-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>





  

<script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/publishform.js"></script> 

<script type="text/javascript">

     <?php if( Request::segment(2) == 'success'): ?>

        

       if (performance.navigation.type == 1) {



      }else{ 

        $('#publishedNews').modal('show');  

        $('#publishedNews').addClass('show');    

      }

    <?php endif; ?>

</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/whitepaperview.blade.php ENDPATH**/ ?>