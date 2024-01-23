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





 <!-- // Profile Body -->

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

               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              <!-- <a href="<?php echo e(url('news')); ?>" type="button" class="btn btn-info" >Close</a> -->

            </div>

          </div>

        </div>

      </div>

      <div role="main" class="bg-white">    

      

      <!-- // Press Releases -->  

      <div class="container-fluid">

        <div class="container">

          <div class="text-center pt-2">

            <h2 class="main-title"><span><a href="#" class="text-blue">Interviews</a></span></h2>

          </div>

           

        </div>  

       

        <div class="container pb-3">          

         <div class="row mb-2 share_box mb-4 pt-3">

            <div class="col-lg-8 mb-3">

              <!-- <img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"> -->

              <!-- <a href="" data-toggle="modal" data-target="#seeYourself" style="outline:none"><img src="<?php echo e(config('app.url')); ?>img/get-in-touch-banner2.png" class="img-fluid"></a> -->

              <div class="border p-2 d-table" style="width:fit-content">

                              

              <span class="text-white pt-2 display-5 p-3">Want to see yourself interviewed

                  <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#seeYourself">Get in touch</button>  

            </span>

               </div>

            </div>

          

            <div class="col-lg-4 mb-3 mt-3">

               <div class="sharethis-inline-share-buttons" style="top:0"></div>

            </div>

          </div>

           <?php $__currentLoopData = $interview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



           <div class="row mt-2">

             <div class="col-lg-8">

                <h1 class="display-5 pb-1 mt-3 text-blue"><?php echo e($interviews->company); ?></h1>

             </div>

             <div class="col-lg-4">

                  <!-- <div class="float-right  sharethis-inline-share-buttons"></div> -->

             </div>

           </div>

                <!-- Author Box -->

          <div class="row">                              

            <div class="col-lg-12">

                <div class="media bg-grey p-3 d-block d-sm-flex d-lg-flex d-md-flex d-xl-flex">

                    <img class="mr-4 radius-15" src="<?php echo config('app.url'); ?>interview/<?php echo $interviews->image;?>" alt="<?php echo e($interviews->name); ?>"  width="120px">

                    <div class="media-body">

                      <h5 class="mt-0">About: <span class="text-blue"><?php echo e(ucfirst($interviews->name)); ?> - <small class="font-14"><i><?php echo e($interviews->designation); ?></i></small></span></h5>

                      <p style="color:#636060" "><?php echo $interviews->description; ?></p>

                    </div>

                  </div>

            </div>

          </div>



          <div class="row">

            <div class="col-lg-12">

              <!-- <h2 class="display-5 pb-3 text-blue"><?php echo e($interviews->company); ?>   -->

                <!-- <div class="float-right  sharethis-inline-share-buttons"></div></h2> -->

                <!--  <div class="row bg-grey p-3">                              

            <div class="col-lg-12 p-0">

                <div class="media">

                    <img class="mr-4 radius-15" src="<?php echo config('app.url'); ?>interview/<?php echo $interviews->image;?>" alt="<?php echo e($interviews->name); ?>">

                    <div class="media-body">

                      <h5 class="mt-0">About: <span class="text-blue"><?php echo e(ucfirst($interviews->name)); ?> - <small class="font-14"><i><?php echo e($interviews->designation); ?></i></small></span></h5>

                      <p style="color:#636060" "><?php echo $interviews->description; ?></p>

                    </div>

                  </div>

            </div>

          </div> -->



          <!--     <div class="row">

                <div class="col-lg-2">

                  <img class="img-fluid" src="<?php echo config('app.url'); ?>interview/<?php echo $interviews->image;?>" alt="<?php echo e($interviews->name); ?>" />

                  <h3 class="display-6 font-weight-bold pt-2 mb-1"><?php echo e($interviews->name); ?></h3>

                  <h4 class="font-weight-light small"><?php echo e($interviews->designation); ?></h4>

                </div>

                <div class="col-lg-10 bg-light border border-secondary d-flex align-items-center">

                  <p class="mb-0 small"><?php echo $interviews->description; ?></p>

                </div>

              </div>     -->          

              

              <p><?php echo $interviews->add_questions; ?></p>

            </div>             

          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

        



        </div>

     

    </div>



      <!-- Profile Body // -->

    </div>



  </div>

   <div id="seeYourself" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Want to see yourself</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>              

            </div>

            <div class="modal-body">

              <form method="post" action="<?php echo e(route('submit-interviews')); ?>">
<?php echo csrf_field(); ?>
                 <input type="hidden" name="subject" value="want to see yourself interviewed">

                 <input type="hidden" name="type" value="interview">

                 <input type="hidden" name="publicid" value="28ae98237c1e4dc32c702c6072178788">

                <input type="hidden" name="name" value="plantautomation-interviews">

                 <?php echo $__env->make('industry._infoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                 <button class="btn btn-block submit-btn">Submit</button> 
              </form>

            

           

            </div>

            <div class="modal-footer">

              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?> 



 <script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/publishform.js"></script>

<script>





</script>



<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=inline-share-buttons"></script>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

 <script type="text/javascript">





     <?php if( Request::segment(2) == 'success'): ?>

        

       if (performance.navigation.type == 1) {



      }else{ 

        $('#publishedNews').modal('show');  

        

      }

    <?php endif; ?>

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/interviewview.blade.php ENDPATH**/ ?>