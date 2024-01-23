  <?php $__currentLoopData = $eventprofiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-12 div-shadow mb-4">
                <div class="row">
                  <div class="col-lg-4 pl-0">
                    <img class="img-fluid p-3" src="<?php echo e(config('app.url')); ?>event/<?php echo e($cp->big_image); ?>" alt="<?php echo e($cp->img_alt); ?>"/>
                  </div>
                  <div class="col-lg-8">
                    <h2 class="display-6 mt-2">
                      <?php if($cp->event_url): ?>
                      <a href="<?php echo e(url('events/'.$cp->event_url)); ?>"><strong><?php echo e($cp->name); ?></strong></a>
                      <?php else: ?>
                      <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>
                      <?php endif; ?>
                    </h2>
                    <p class="mb-2"><?php echo e($cp->venue); ?></p>
                    <p class="mb-2">For more information, contact:<?php echo e($cp->organiser); ?></p>
                    <p class="mb-2"><?php echo e($cp->phone); ?></p>
                    <p class="mb-2 text-lowercase"><?php echo e($cp->email); ?></p>
                    <p class="mb-2 text-lowercase"><a href="<?php echo e($cp->web_link); ?>" target="_blank"><?php echo e($cp->web_link); ?></a></p>

                    <div class="row pt-1">
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> Start Date</strong></p>
                        <p class="mb-2"><?php echo date('j F Y', strtotime($cp->start_date)); ?></p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> End Date</strong></p>
                        <p class="mb-2"><?php echo date('j F Y', strtotime($cp->end_date)); ?></p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-map-marker text-primary" aria-hidden="true"></i> Country</strong></p>
                        <p class="mb-2"><?php echo e($cp->country); ?></p>
                      </div>
                      <div class="col-lg-3 text-center pt-2 pb-2">
                        <?php if($cp->event_url): ?>
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="<?php echo e(url('events/'.$cp->event_url)); ?>">View More</a>
                        <?php else: ?>
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="<?php echo e(url($cp->web_link)); ?>" target="_blank">View More</a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /home/plantautomationt/public_html/resources/views/events/archive_loadmore.blade.php ENDPATH**/ ?>