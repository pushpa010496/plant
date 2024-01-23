<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

      <div class="pt-3 pb-3"></div>

      <!-- <div class="container-fluid pt-1 pb-1 text-center">
        <div class="container">
          <a href="<?php echo e(url('/get-listed')); ?>" target="_blank"><img class="img-fluid" src="<?php echo config('app.url'); ?>images/cta/sub-category-1.jpg" alt="Get Started"/> 
          </a>
        </div> 
      </div> -->
      <!-- CTA-5 // -->

    <div role="main" class="bg-white">

          <div class="container">
            <div class="text-center pt-2"> 
              <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <h2 class="main-title"><span class="font-weight-bold"><?php echo e($chield->name); ?></span></h2>
            </div>
          </div>

          <div class="container mt-5">                  
              <?php $childs = getcat($chield['id']);?>                  
              <div class="row"> 
              <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-4">                         
                    <h2 class="display-6 text-blue"><a href="<?php echo e(route('category.sub-cat',[$child->slug])); ?>"> <?php echo e(ucwords(strtolower($child->name))); ?></a> </h2>
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>      
          </div>

          <div class="container mb-3 mt-4">            
            <div class="row">
               <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php $product = \App\Product::where('category_id',$child->id)->orderBy('id','desc')->where('active_flag', 1)->get();?>
               <?php $__currentLoopData = $product->where('active_flag',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
                  ?>
                  <?php $__currentLoopData = $company_logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com_logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-3 mb-4 text-center">
                    <div class="product div-shadow">
                      <div id="prodimage<?php echo e($cp->id); ?>">
                        <a href="<?php echo e(url('products/'.$cp->compprofile->url.'/'.$cp->url)); ?>">
                          <img class="img-fluid" src="<?php echo e(config('app.url').'products/'.$cp->small_image); ?>" alt="<?php echo e($cp->alt_tag); ?>"/>
                        </a>
                      </div>

                      <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                        <h2 class="small text-center">
                          <a href="<?php echo e(url('products/'.$cp->compprofile->url.'/'.$cp->url)); ?>" class="text-secondary font-weight-bold"><?php echo e($cp->title); ?></a>
                        </h2>
                      </div>
                      
                      <div class="text-center pb-2 pt-2">                        
                        <img class="img-fluid" src="<?php echo e(config('app.url').'company/'.$com_logo->comp_logo); ?>" alt="<?php echo e($cp->alt_tag); ?>" width="100" />
                      </div>
                    </div>                    
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>       
          </div>

        <!-- Categories // -->

        <!-- // CTA-6 -->
        <!-- <div class="container-fluid pt-1 pb-3 text-center">
          <div class="container">
            <a href="<?php echo e(url('/get-listed')); ?>" target="_blank"><img class="img-fluid" src="<?php echo config('app.url'); ?>images/cta/sub-category-2.jpg" alt="Get Started"/> 
            </a>
          </div> 
        </div> -->
        <!-- CTA-6 // -->      

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/category/category_landing.blade.php ENDPATH**/ ?>