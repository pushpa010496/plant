 
  <div class="row">
            <div class="col-lg-12">
                 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whitepapers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="<?php echo e(route('whitepaper-view',$whitepapers->whitepapers_url)); ?>" class="text-blue"><?php echo e($whitepapers->title); ?></a></h2>
                  </div>
                  <div class="col-lg-2">
                    <!-- <p class="mb-2 text-muted"><?php echo e(date('j F Y', strtotime($whitepapers->date))); ?></p> -->
                  </div>
                </div> 
                <p class="mb-1"><?php echo $whitepapers->description; ?></p>
                <small><a href="<?php echo e(route('whitepaper-view',$whitepapers->whitepapers_url)); ?>" class="text-blue">Read more...</a></small>
                
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div>
        </div><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/whitepaper_loadmore.blade.php ENDPATH**/ ?>