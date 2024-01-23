<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">

   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <url>

        <loc><?php echo e(url('/')); ?>/categories/<?php echo e($page->slug); ?></loc>

        <priority>0.8</priority>

    </url>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</urlset><?php /**PATH /home/plantautomationt/public_html/resources/views/sitemaps/category.blade.php ENDPATH**/ ?>