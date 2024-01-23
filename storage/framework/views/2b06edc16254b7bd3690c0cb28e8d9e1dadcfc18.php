<?php $__currentLoopData = $pressrelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $press): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="div-shadow col-12 p-3 mb-3">
    <div class="row">
      <div class="col-lg-10">
        <h2 class="display-6"><a
            href="<?php echo e(route('pressrelease-view',$press->news_url)); ?>"
            class="text-blue font-weight-bold" target="_blank"><?php echo e($press->news_head); ?></a></h2>
      </div>
    </div>
    <p class="mb-1"><?php echo strip_tags(substr(@$press->Data,0,500)); ?><small class="float-right">
      <a href="<?php echo e(route('pressrelease-view',$press->news_url)); ?>" class="text-blue font-weight-bold" target="_blank">Read more...</a></small></p>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/ajax-search-pressrelease-load.blade.php ENDPATH**/ ?>