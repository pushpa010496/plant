 
 <div class="row" id="product">  
 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 mb-4">
                  <div class="product div-shadow"> 
                    <a href="<?php echo e(route('article-view',$articles->article_url)); ?>">
                      <?php if($articles->small_image): ?>
                      <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($articles->small_image); ?>" alt="<?php echo e(config('app.url')); ?>articles/1519109395-article-default.jpg" title="<?php echo e($articles->article_title); ?>">
                      <?php else: ?>
                        <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/article-img.jpg" alt="<?php echo e(config('app.url')); ?>articles/article-img.jpg" title="<?php echo e($articles->article_title); ?>">
                      <?php endif; ?>
                    </a>
                    <h2>
                      <a href="<?php echo e(route('article-view',$articles->article_url)); ?>"><?php echo e($articles->article_title); ?></a>
                    </h2>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
              </div>
           <?php /**PATH /home/plantautomationt/public_html/resources/views/industry/loadmore.blade.php ENDPATH**/ ?>