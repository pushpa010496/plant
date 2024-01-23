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

            <img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>

          </div>

          <?php else: ?>

          <?php endif; ?>  

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>

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

       <p><a href="<?php echo url('/');?>" title=" <?php echo e(config('app.name', 'Laravel')); ?>" target="_blank" style="color:#333333;"><img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

       

     </div>

     <div class="modal-footer">

       <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

        <a href="<?php echo e(url('interviews')); ?>" type="button" class="btn btn-info" >Close</a> 

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

            <h1 class="main-title"><span>Interviews</a></span></h1>

          </div>

        </div>  



        <div class="container pb-3">

             <div class="row mb-2 share_box mb-4 pt-3">

            <div class="col-lg-8 mb-3">

              <!-- <img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"> -->

              <!-- <a href="" data-toggle="modal" data-target="#seeYourself" style="outline:none"><img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"></a> -->

              <div class="border p-2 d-table" style="width:fit-content">

                              

              <span class="text-white pt-2 display-5 p-3">Want to see yourself here...

                  <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#seeYourself">Get in touch</button>  

            </span>

               </div>

            </div>

          

            <div class="col-lg-4 mb-3 mt-3">

               <div class="sharethis-inline-share-buttons" style="top:0"></div>

            </div>

          </div>

           

          <!-- <div class="row">

            <div class="col-lg-12 mb-3">

              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>

            </div>              

          </div> -->

          <div class="row">

            <div class="col-lg-12 mb-3">

              <?php $__currentLoopData = $interview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="div-shadow p-3 mb-4 interviews">

                <div class="row">

                  <div class="col-lg-3 text-center">

                    <img class="img-fluid" src="<?php echo config('app.url'); ?>interview/<?php echo $interviews->small_image;?>" alt="<?php echo e($interviews->img_alt); ?>" title="<?php echo e($interviews->name); ?>">                    

                    <h2 class="display-6 font-weight-bold mt-2"><?php echo e($interviews->name); ?></h2>

                    <h3 class="small"><span class="font-weight-light font-italic text-sm"><?php echo e($interviews->designation); ?></span></h3>

                    <h4 class="display-6">

                      <a href="<?php echo e(route('interview-view',$interviews->interviews_url)); ?>" class="text-blue"><?php echo e($interviews->company); ?></a>

                    </h4>

                  </div>



                  <div class="col-lg-9">

                    <h5 class="font-italic font-weight-bold mb-4">

                      <!-- <span class="quotes mr-2">“</span> -->

                      <a href="<?php echo e(route('interview-view',$interviews->interviews_url)); ?>" class="bio">

                        <?php echo e($interviews->title); ?>


                      </a>

                      <!-- <span class="quotes ml-1">”</span> -->

                    </h5>

                    <p><?php echo e($interviews->description); ?></p> 

                    <!-- Social Icons -->

                     <!--  <div class="share_icons social-widget pt-2 text-right">

                        <ul class="social-icons">

                          <li>

                            <a target="_blank" title="Facebook" class="facebook" href="<?php echo e(config('app.furl')); ?>"><i class="fa fa-facebook"></i></a>

                          </li>

                          <li><a target="_blank" title="Google Plus" class="google" href="<?php echo e(config('app.gurl')); ?>"><i class="fa fa-google-plus"></i></a></li>

                        

                          <li><a target="_blank" title="Twitter" class="twitter" href="<?php echo e(config('app.turl')); ?>"><i class="fa fa-twitter"></i></a></li>

                         

                          <li><a target="_blank" title="LinkedIn" class="linkdin" href="<?php echo e(config('app.lurl')); ?>"><i class="fa fa-linkedin"></i></a></li>

                        </ul>                                   

                      </div>     -->

                   <!-- Social Icons End-->               

                  </div>                  

                </div>                 

              </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

               <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

              <form  method="post" action="<?php echo e(route('submit-interviews')); ?>" >

                    <!-- <form id='publishpressForm' class="publishform" name="insight_form"> -->

                 <input type="hidden" name="subject" value="want to see yourself here">

                 <input type="hidden" name="type" value="interview">

                  <input type="hidden" name="publicid" value="28ae98237c1e4dc32c702c6072178788">

                  <input type="hidden" name="name" value="plantautomation-interviews">

                 <?php echo $__env->make('industry._infoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

                 <button class="btn btn-block submit-btn" type="submit">Submit</button> 

              </form>

              

           

            </div>

            <div class="modal-footer">

              <!--<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>-->

              <a href="<?php echo e(url()->previous()); ?>" type="button" class="btn btn-info" >Close</a> 

            </div>

          </div>

        </div>

      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>  



<?php if(session('message_type') == 'success'): ?>    

    <script type="text/javascript"> 

        $('#publishedNews').modal('show');         

   </script>

 <?php endif; ?>



<script type="text/javascript">

  var url = "<?php echo e(url('interviews/morein')); ?>";

 <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/interview.blade.php ENDPATH**/ ?>