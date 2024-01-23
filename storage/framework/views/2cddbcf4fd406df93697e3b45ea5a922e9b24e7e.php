<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="product div-shadow">
      <a href="<?php echo e(route('article-view',$article->article_url)); ?>" target="_blank">
        <?php if($article->small_image): ?>
        <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($article->small_image); ?>" alt="<?php echo e(config('app.url')); ?>articles/1519109395-article-default.jpg" title="<?php echo e($article->article_title); ?>">
        <?php else: ?>
          <img class="img-fluid div-scal" src="<?php echo e(config('app.url')); ?>articles/article-img.jpg" alt="<?php echo e(config('app.url')); ?>articles/article-img.jpg" title="<?php echo e($article->article_title); ?>">
        <?php endif; ?>
      </a>
      <h2>
        <a href="<?php echo e(route('article-view',$article->article_url)); ?>"><?php echo e($article->article_title); ?></a>
      </h2>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/ajax-search-article-load.blade.php ENDPATH**/ ?>