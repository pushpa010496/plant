
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 
<!-- // Content -->
    <div class="container pt-3"> 
    
    <iframe id="form-iframe" src="<?php echo config('app.url'); ?>/e-newsletters/<?php echo @$enews_letter->file; ?>"  width="100%" height="2400" style="border: 0px;"></iframe> 
     
    </div><!-- Container // -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/enews_letter.blade.php ENDPATH**/ ?>