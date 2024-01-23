<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url>
    <loc><?php echo e(url('/')); ?>/suppliers/<?php echo e($page->url); ?></loc>   
   <?php if($page->pcatalog->count() >0): ?>
    <loc><?php echo e(url('/')); ?>/catalogue/<?php echo e($page->url); ?></loc> 
    <?php endif; ?>
    <?php if($page->ppress->count() >0): ?>
    <loc><?php echo e(url('/')); ?>/pressrelease/<?php echo e($page->url); ?></loc>  
    <?php endif; ?>
    <?php if($page->pwp->count() >0): ?>
    <loc><?php echo e(url('/')); ?>/whitepaper/<?php echo e($page->url); ?></loc>  
    <?php endif; ?>
    <?php if($page->pvideo->count() >0): ?>
    <loc><?php echo e(url('/')); ?>/video/<?php echo e($page->url); ?></loc>  
      <?php endif; ?> 
    <priority>0.8</priority>
    </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home/plantautomationt/public_html/resources/views/sitemaps/suppliers-internal.blade.php ENDPATH**/ ?>