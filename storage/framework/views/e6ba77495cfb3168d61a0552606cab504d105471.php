<?php $__env->startSection('style'); ?>

 <style type="text/css">

  .event-bg {

    background-image: url("<?php echo e(config('app.url')); ?>img/events/event-list/event-listing-bg.jpg");

  }

 </style>

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
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>
          </div>
          <?php else: ?>
          <?php endif; ?>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
 <!-- Begin page content -->

    <div role="main" id="company-profile">



      <div class="container">

        <div class="text-center pt-2">

          <h1 class="main-title"><span>Partners</span></h1>

        </div>

      </div>



    <!--  <div class="container-fluid pl-0 pr-0">

        <div class="event-bg">

          <h1 class="text-center text-uppercase">Partners</h1>

        </div>

      </div> -->



      <!-- // Event Listing -->

      <div class="container pt-2 pb-3">

        <div class="row">          

               <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               

                  <div class="col-lg-2 col-6 mb-4">

                    <div class="partner-list partner-disc div-shadow">

                     <?php if($partner->url_active==1): ?>

                        <a href="<?php echo e($partner->partner_url); ?>" target="_blank"> 

                          <img class="img-fluid" src="<?php echo e(config('app.url')); ?>partner/<?php echo e($partner->image); ?>" alt="<?php echo e($partner->img_alt); ?>"/>

                          </a>   

                      <?php else: ?>

                       <img class="img-fluid" src="<?php echo e(config('app.url')); ?>partner/<?php echo e($partner->image); ?>" alt="<?php echo e($partner->img_alt); ?>"/>

                     <?php endif; ?> 

                    </div>                  

                   </div> 

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  

                 

        </div>

      </div>

      <!-- Event Listing // -->

    </div>

  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>

      // Form Sticky

      $(window).scroll(function() {

        var y = $(window).scrollTop();

        if (y > 0) {

          $("#form-sticky").addClass('sticky-top').addClass('pt-180');

        } else {

          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');

        }

      });

    </script>



  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

    $('.from').datepicker({

      autoclose: true,

      minViewMode: 1,

      format: 'mm/yyyy'

    })

  </script>

  

  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->

  <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script>

  <script>

    $(document).ready(function() {

      $('#example-getting-started').multiselect();

    });

  </script>



   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/partners/index.blade.php ENDPATH**/ ?>