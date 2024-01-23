<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
 <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <url>
        <loc><?php echo e(url('/')); ?>/pat/<?php echo e($keyword->url); ?></loc>      
        <priority>1.0</priority>
    </url>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home/plantautomationt/public_html/resources/views/sitemaps/pat2.blade.php ENDPATH**/ ?>