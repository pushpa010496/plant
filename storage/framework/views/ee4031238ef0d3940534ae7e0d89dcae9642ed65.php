 



<div class="col-lg-9 pt-3"> 

	

	<div class="row">

		<div class="col-lg-6">

			<nav aria-label="breadcrumb">

				<ol class="breadcrumb">

					<li class="breadcrumb-item"><a href="#">Home</a></li>

					<li class="breadcrumb-item active" aria-current="page">Suppliers</li>

				</ol>

			</nav>

		</div>

		<div class="col-lg-6 text-right">              	

			<p class="mb-0 pt-2">page <?php echo e($pageno); ?> of <?php echo e($pageCount); ?></p>

		</div>

	</div>



	<div class="row">

		<div class="col-lg-12 bg-light border border-secondary">

			<h1 class="display-5 pt-3">Partnered Companies</h1>

			<div class="filter">

				<ul>

						<li><a class="<?php echo ($string == 'a' ? 'active' : ''); ?>" href="<?php echo e(url('suppliers')); ?>/a">A</a></li>

						<?php $__currentLoopData = range('B', 'Z'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



							<li><a class="<?php echo ($string == strtolower($column) ? 'active' : ''); ?>" href="<?php echo e(url('suppliers')); ?>/<?php echo e(strtolower($column)); ?>/1"><?php echo e($column); ?></a></li>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



				



					<li style="width: 30px;"><a class="<?php echo ($string == '0-9' ? 'active' : ''); ?>" href="<?php echo e(url('suppliers')); ?>/0-9/1">0-9</a></li>

				</ul>

				<div class="clearfix"></div>

			</div>                          

			<?php if(count($suppliers) != 0): ?>

			<div class="suppliers mt-2 mb-4">

				<?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<h3 class="display-6 mb-3">

					<a href="<?php echo e(url('suppliers').'/'. @$company->companyprofile[0]->url); ?>" class="font-weight-bold"><?php echo e($company->comp_name); ?> </a>

					<?php if(@$company->companyproduct[0]->category->ParentCategory->id == 22 ): ?>

						<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

						<small style=" text-transform: capitalize;"><?php echo e(strtolower(@$company->companyproduct[0]->category->name)); ?></small>

					<?php else: ?>

					<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

					<small style=" text-transform: capitalize;"><?php echo e(strtolower(@$company->companyproduct[0]->category->ParentCategory->name)); ?></small>

					<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

					<small style=" text-transform: capitalize;"><?php echo e(strtolower(@$company->companyproduct[0]->category->name)); ?></small>

					<?php endif; ?>		

				</h3>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



		

			</div>

			<?php else: ?>

				<h5>No suppliers available</h5>

			<?php endif; ?>	

			

		</div>

		</div>

		<?php if($pageCount > 1): ?>
		

		<div aria-label="Page navigation pagination-sm" style="display:inline-block;">

				<ul class="pagination pt-3" style="display:inline-block;">           

		            <?php for($i=1; $i<=$pageCount; $i++): ?>

		            <?php if($pageno == $i ): ?>

		            <li class="page-item active" style="display:inline-block;padding:10px;"><a class="page-link" href="javascript:void(0)"><?php echo e($i); ?></a></li>

		            <?php else: ?>

		            <li class="page-item" style="display:inline-block;padding:10px;"><a class="page-link" href="<?php echo e(url('suppliers')); ?>/<?php echo e($string); ?>/<?php echo e($i); ?>"><?php echo e($i); ?></a></li>

		            <?php endif; ?>	              

		            <?php endfor; ?>            

        		</ul>

    		</div> 	

    		<?php endif; ?>

	



</div><?php /**PATH /home/plantautomationt/public_html/resources/views/company/filter.blade.php ENDPATH**/ ?>