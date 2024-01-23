<?php if(count($errors) > 0): ?>
    <div class="ui icon error message">
      <i class="remove icon"></i>
      <div class="content text-danger col-md-offset-3 col-md-6">
        <div class="header">There were some problems with your input.</div>
        <p>Fix the issues listed below before trying again.</p>
        <ul class="list">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><i class="remove icon"></i> <?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
<?php endif; ?><?php /**PATH /home/plantautomationt/public_html/resources/views/error.blade.php ENDPATH**/ ?>