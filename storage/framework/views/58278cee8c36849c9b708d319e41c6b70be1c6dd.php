<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<url>
<loc><?php echo e(url('/')); ?>/video/<?php echo e($page->compprofile->url); ?></loc>
<video:video>
<video:title><?php echo e(@$page->title); ?></video:title>
<video:content_loc>
<?php echo e(config('app.url')); ?>suppliers/<?php echo e($page->compprofile->url); ?>/video/<?php echo e($page->video); ?>

</video:content_loc>
</video:video>
</url>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home/plantautomationt/public_html/resources/views/sitemaps/videos.blade.php ENDPATH**/ ?>