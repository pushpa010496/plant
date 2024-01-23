
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
      
      <!-- // Press Releases -->  
      <div class="container-fluid">
        <div class="container">
          <div class="text-center pt-2">
            <h1 class="main-title"><span><a href="#" class="text-blue">Reports</a></span></h1>
          </div>
        </div>  

        <div class="container pb-3">
          <!-- <div class="row">
            <div class="col-lg-12 mb-3">
              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>
            </div>              
          </div> -->
          
          <div class="row">
            <div class="col-lg-12">
              <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reports): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="<?php echo e('reports/'.$reports->reports_url); ?>" class="text-blue"><?php echo e($reports->title); ?></a></h2>
                  </div>
                  <div class="col-lg-2">
                    <!-- <p class="mb-2 text-muted"><?php echo e(date('j F Y', strtotime($reports->date))); ?></p> -->
                  </div>
                </div> 
                <p class="mb-1"><?php echo e($reports->home_description); ?></p>
                <small><a href="<?php echo e('reports/'.$reports->reports_url); ?>" class="text-blue">Read more...</a></small>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div>
        </div>
        </div>
        <!-- Press Releases // -->        
      </div>
    </div>
      <!-- Profile Body // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/report.blade.php ENDPATH**/ ?>