<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <div class="col-lg-3 col-6 text-center mb-4">
    <div class="product">
      <div id="prodimage">
          <?php if($company->companyproduct->count() > 0): ?>
            <a href="<?php echo e(url('products').'/'. @$company->profile->url); ?>" target="_blank">
              <img class="div-shadow p-2 img-fluid"
                src="<?php echo e(config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo); ?>"
                title="<?php echo e($company->comp_name); ?>" alt="<?php echo e($company->comp_name); ?>">
            </a>
          <?php else: ?>
            <a href="<?php echo e(url('suppliers').'/'. @$company->profile->url); ?>" target="_blank">
              <img class="div-shadow p-2 img-fluid"
                src="<?php echo e(config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo); ?>"
                title="<?php echo e($company->comp_name); ?>" alt="<?php echo e($company->comp_name); ?>">
            </a>
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/ajax-search-company-loads.blade.php ENDPATH**/ ?>