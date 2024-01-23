
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="offset-md-3 col-md-6 offset-md-3 pt-4" align="center">
		  <br/>  <br/>
        <h4>Thank You...</h4>
         <br/>
      <p class="alert alert-info" style="font-size: 16px;margin-top: 20px;">For any further queries or issue resolution reach us at<strong> +91 40 4961 4567</strong> or
email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>
	</div>
    <br/>  <br/>
  		   <a id="filedownload" download style="display: none" href="<?php echo e(url('/')); ?>/industry/mediapack/Plant-Media-Pack.pdf">download</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript">
   for (let link of document.querySelectorAll('a[download]'))
       link.click();
</script>
  		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/mediapack-success.blade.php ENDPATH**/ ?>