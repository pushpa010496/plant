     <div class="row">
            <div class="col-lg-12 mb-3">
             <?php $__currentLoopData = $pressrelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pressreleases): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="div-shadow p-3 mb-3">
              <div class="row">
                <div class="col-lg-10">
                  <h2 class="display-6"><a href="<?php echo e(route('pressrelease-view',$pressreleases->news_url)); ?>" class="text-blue"><?php echo e($pressreleases->news_head); ?></a></h2>
                </div>
                <div class="col-lg-2">
                  <p class="mb-2 text-muted"><?php echo e(date('j F Y', strtotime($pressreleases->story_date))); ?></p>
                </div>
              </div> 
              <p class="mb-1"><?php echo strip_tags(substr($pressreleases->Data,0,500)); ?></p>
              <small><a href="<?php echo e(route('pressrelease-view',$pressreleases->news_url)); ?>" class="text-blue">Read more...</a></small>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </div>

        </div><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/pressreleases_loadmore.blade.php ENDPATH**/ ?>