<?php $__env->startSection('style'); ?>

  <style type="text/css">

   .country_flag{

    vertical-align: bottom;

    position: relative;

    right: 24px;    

    top: 0px;

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
 <!-- // Profile Body -->



    <div role="main" class="bg-white">

      <!-- // CLIENTELE -->

      <div class="container">

        <div class="text-center pt-2">

          <h1 class="main-title"><span><a href="<?php echo e(url('clientele')); ?>" class="text-blue">CLIENTELE</a></span></h1>

        </div>

      </div>



      <div class="container">

        <div class="row">

           <?php $__currentLoopData = $clientele; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp_logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <?php

                  $clitlie_url = App\CompanyProfile::where('company_id',$comp_logo->id)->pluck('url');

                  

                ?>

                <?php $__currentLoopData = $clitlie_url; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-3 col-6 text-center mb-4">

              <a href="<?php echo e(url('suppliers/'.$url)); ?>">

                <img src="<?php echo config('app.url'); ?>suppliers/<?php echo e(str_slug($comp_logo->comp_name)); ?>/<?php echo $comp_logo->comp_logo;?>" class="div-shadow p-2 img-fluid">

                <img class="country_flag" src="<?php echo e(config('app.url')); ?>img/flags/<?php echo e(str_replace(' ', '_', ucfirst($comp_logo->country))); ?>.png" alt="<?php echo e($comp_logo->country); ?>">

              </a>  

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </div>

      </div>

      <!-- CLIENTELE // -->        

    </div>

      <!-- Profile Body // -->

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/cms/clientele.blade.php ENDPATH**/ ?>