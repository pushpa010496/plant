 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div><img src="<?php echo config('app.url'); ?>partner/<?php echo $val;?>" class="img-fluid"></div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php /**PATH /home/plantautomationt/public_html/resources/views/home/loadmore.blade.php ENDPATH**/ ?>