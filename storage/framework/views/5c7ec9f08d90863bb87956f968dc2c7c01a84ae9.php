<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-4 px-3">
    <div class="container border p-0" style="box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; ">
      <a href="<?php echo e(url('products/'.$product->company->profile->url.'/'.$product->url)); ?>"  target="_blank">
         <img class="img-fluid w-100" style="border-radius: 0.6rem 0.6rem 0 0;"
         src="<?php echo e(config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image); ?>" alt="<?php echo e($product->alt_tag); ?>">
      </a>
      <div class="bg-light d-flex align-items-center justify-content-center pt-2"
        style="min-height: 62px;max-height: 62px;overflow: hidden;">
        <h2 class="small text-center">
          <a href="<?php echo e(url('products/'.$product->company->profile->url.'/'.$product->url)); ?>"
            class="text-secondary font-weight-bold" style="font-size: 15px;" target="_blank">
            <?php echo e($product->title); ?></a>
        </h2>
      </div>
      <div class="text-center pb-2" style="height: 50.5px;">
        <img class="img-fluid"
          src="<?php echo e(config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo); ?>"
          alt="<?php echo e($product->alt_tag); ?>" width="100">
      </div>
      <div class="text-center d-flex pb-3">
        <button type="button" class="btn mx-3 w-100 bg-white font-weight-bold rounded"
          style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal" data-target="#enquiry" data-company_name="<?php echo e($product->company->comp_name); ?>" data-company_id="<?php echo e($product->company->id); ?>" data-prod_name="<?php echo e($product->title); ?>" data-product_id="<?php echo e($product->id); ?>" data-subject_client="<?php echo e($product->title); ?> - Enquiry Submitted | Plantautomation Technology" data-subject_admin="Enquiry  Plantautomation Technology" data-page="product view">
          <img src="<?php echo e(config('app.url')); ?>/img/enquiry.png" alt="" srcset="">
          Enquire</button>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/ajax-search-product-load.blade.php ENDPATH**/ ?>