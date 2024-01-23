<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <?php if(!empty($page->event_url)): ?>
    <url>
        <loc><?php echo e(url('/')); ?>/events/<?php echo e($page->event_url); ?></loc>
        <priority>0.8</priority>
    </url>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home/plantautomationt/public_html/resources/views/sitemaps/events.blade.php ENDPATH**/ ?>