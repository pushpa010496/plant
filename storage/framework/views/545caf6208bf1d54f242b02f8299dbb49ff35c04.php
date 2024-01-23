   <div class="col-lg-12 mb-3">
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="div-shadow p-3 mb-4 interviews">
                <div class="row">
                  <div class="col-lg-3 text-center">
           
                    <img class="img-fluid" src="<?php echo config('app.url'); ?>interview/<?php echo e($interviews->small_image); ?>" alt="<?php echo e($interviews->img_alt); ?>" title="<?php echo e($interviews->name); ?>">
                   
                    <h2 class="display-6 font-weight-bold mt-2"><?php echo e($interviews->name); ?></h2>
                    <h3 class="small"><span class="font-weight-light font-italic text-sm"><?php echo e($interviews->designation); ?></span></h3>
                    <h4 class="display-6">
                      <a href="<?php echo e(route('interview-view',$interviews->interviews_url)); ?>" class="text-blue"><?php echo e($interviews->company); ?></a>
                    </h4>
                  </div>

                  <div class="col-lg-9">
                    <h5 class="font-italic font-weight-bold mb-5">
                      <!-- <span class="quotes mr-2">“</span> -->
                      <a href="<?php echo e(route('interview-view',$interviews->interviews_url)); ?>" class="bio">
                        <?php echo e($interviews->title); ?>

                      </a>
                      <!-- <span class="quotes ml-1">”</span> -->
                    </h5>
                    <p><?php echo e($interviews->description); ?></p>                   
                  </div>                  
                </div>                 
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/interview_loadmore.blade.php ENDPATH**/ ?>