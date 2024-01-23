<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 mb-4">
      <div class="projects-list projects-disc div-shadow">
        <a href="<?php echo e(url('projects/'.$project->  project_url)); ?>"><img class="img-fluid" src="<?php echo e(config('app.url')); ?>project/<?php echo e($project->image); ?>" alt="<?php echo e($project->img_alt); ?>"/></a>
        <div class="overlay">
          <div class="text text-white">   
            <h2 class="pb-1"><a href="<?php echo e(url('projects/'.$project->  project_url)); ?>"><?php echo e($project->company); ?></a></h2>
            <p class="display-6"><i class="fa fa-map-marker fa-lg mr-1 text-muted" aria-hidden="true"></i> <?php echo e($project->location); ?></p>
            <p class="display-6 text-warning font-weight-bold"><small>Project Cost :</small> <?php echo e($project->cost); ?></p>                           
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/projects/filter.blade.php ENDPATH**/ ?>