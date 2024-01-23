    <?php if(count($products) > 0): ?>
       <div class="container position-absolute px-0 suggestions"
        style="left:0; z-index:20;transition:all 0.2s ease-in-out;">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="row mx-0 rounded border bg-white">
                    <div class="col-md-7 rounded-0 p-0">
                        <p class="px-4 pt-2 m-0 text-secondary">Suggestions</p>
                       <div class="list-group">
                           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('new-search',['q'=>$product->title,'key'=>'product'])); ?>"  class="border-0 font-weight-bold list-group-item list-group-item-action"><?php echo e($product->title); ?></a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-md-5 px-0 bg-light links rounded-0">
                        <p class="px-3 py-2 m-0 text-secondary">Other Suggestions</p>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'company'])); ?>" name="company" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Companies</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'product'])); ?>" name="product" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Products</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'article'])); ?>" name="article" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Articles</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'pressreleases'])); ?>" name="pressreleases" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Press Releases</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php else: ?>
      <div class="container position-absolute px-0 suggestions"
        style="left:0; z-index:20;transition:all 0.2s ease-in-out;">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="row mx-0">
                    <div class="col-12 px-0 bg-light links rounded border pt-3">
                        <p class="px-3 py-2 m-0 text-secondary">Other Suggestions</p>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'company'])); ?>" name="company" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Companies</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'product'])); ?>" name="product" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Products</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'article'])); ?>" name="article" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Articles</a>
                        <a href="<?php echo e(route('new-search',['q'=>$query,'key'=>'pressreleases'])); ?>" name="pressreleases" class="font-weight-bold px-3 mb-3 d-block" style="line-height: 16px;color: #7a0e77; transition: all 0.2s ease;">Search "<?php echo e($query); ?>" in Press Releases</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php endif; ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/search-suggestions.blade.php ENDPATH**/ ?>