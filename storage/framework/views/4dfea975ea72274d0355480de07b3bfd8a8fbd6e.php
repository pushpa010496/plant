   <?php $__currentLoopData = $eventprofiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-12 bg-light border-bottom pb-2 pt-2">
                <div class="row">
                  <div class="col-lg-9">
                    <h2 class="display-6 mt-2 pb-2">
                      <?php if($cp->event_url): ?>
                      <a href="<?php echo e(url('events/'.$cp->event_url)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>
                      <?php else: ?>
                      <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>
                      <?php endif; ?>
                    </h2>

                    <p class="mb-2">
                      <div class="row">
                        <i class="fa fa-lg fa-calendar-check-o col-lg-1" aria-hidden="true"></i>
                        <span class="col-lg-11"><?php echo date('j F Y', strtotime($cp->start_date)); ?> &nbsp; - &nbsp; <?php echo date('j F Y', strtotime($cp->end_date)); ?></span>
                      </div>
                    </p>

                    <p class="mb-1">
                      <div class="row">
                        <i class="fa fa-lg fa-map-marker col-lg-1" aria-hidden="true"></i>
                        <span class="col-lg-11"><?php echo e($cp->venue); ?>, <?php echo e($cp->country); ?></span>
                      </div>
                    </p>

                           <div class="row">
                      <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                        <p class="mb-1 small font-italic">
                          <img class="img-fluid" width="18" src="<?php echo e(config('app.url')); ?>event/event-type.png" alt="Event Type"/> <span class="bg-white pt-1 pb-1 pl-2 pr-2">Event Type: <?php if($cp->cat_id=='24'): ?><strong class="text-success"><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='25'): ?><strong class="text-warning "><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='26'): ?><strong class="text-primary "><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='27'): ?><strong class="text-info"><?php echo e($cp->eventcategory->name); ?></strong><?php endif; ?></span>
                        </p>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">
                        <p class="mb-1">
                          <?php if($cp->event_url): ?>
                          <a href="<?php echo e(url('events/'.$cp->event_url)); ?>"><strong>More...</strong></a>
                          <?php else: ?>
                          <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong>More...</strong></a>
                          <?php endif; ?>                      
                        </p>
                      </div>
                    </div>

                   <!--  <p class="mb-0 text-right">
                     
                        <?php if($cp->event_url): ?>
                      <a href="<?php echo e(url('events/'.$cp->event_url)); ?>"><strong>More...</strong></a>
                      <?php else: ?>
                      <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank" ><strong>More...</strong></a>
                      <?php endif; ?>
                    </p> -->
                  </div>

                  <div class="col-lg-3 pr-0">
                    <img class="img-fluid" src="<?php echo e(config('app.url')); ?>event/<?php echo e($cp->big_image); ?>" alt="<?php echo e($cp->img_alt); ?>"/>
                  </div>
                </div>
              </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/filter.blade.php ENDPATH**/ ?>