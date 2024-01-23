
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="offset-md-3 col-md-6 offset-md-3">
		<?php if(session('message')): ?>
            <div class="alert alert-<?php echo e(session('message_type')); ?> alert-dismissible" id="success-alert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo e(@session('message')); ?>

            </div>
        <?php endif; ?>
        <p class="alert alert-info" style="font-size: 16px;">For any further queries or issue resolution reach us at<strong> +91 40 4961 4567</strong> or email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>
	</div>
  		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/postrequirement-success.blade.php ENDPATH**/ ?>