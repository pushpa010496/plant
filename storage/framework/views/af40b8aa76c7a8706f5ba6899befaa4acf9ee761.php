<style type="text/css">
	#Supp-list .card {margin-bottom: 15px;}
	#Supp-list .card-header {background-color: #fff; }
	#Supp-list .card-header h4 .btn {font-size: 16px; color: #222; font-weight: bold; overflow: visible;}
	#Supp-list .card-header h4 .btn:hover {text-decoration: none; color: #009B68; background-color: #fff; }
	#Supp-list .card-body ul {margin-left: -30px; margin-bottom: 10px;}
	#Supp-list .card-body ul li {list-style: none; padding-bottom:7px; font-size: 15px;}
	#Supp-list .card-body ul li::before {
		content: "\f0da";
		font-family: FontAwesome;
		position: absolute;
		color: #009B68;
		font-size: 14px;
		font-weight: 400;
		left: 30px;
	}

	.products {
    display: block;
    list-style-type: disc;
    margin-block-start:0em;
    margin-block-end: 0em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start:10px;
}
</style>
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
			<h2 class="display-5 pt-3">Featured Companies</h2>
			<div class="filter">
				<ul>
				
						<?php $__currentLoopData = range('A', 'Z'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<li><a class="<?php echo ($string == strtolower($column) ? 'active' : ''); ?>" href="<?php echo e(url('featured-suppliers')); ?>/<?php echo e(strtolower($column)); ?>/1"><?php echo e($column); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				

					<li style="width: 30px;"><a class="<?php echo ($string == '0-9' ? 'active' : ''); ?>" href="<?php echo e(url('featured-suppliers')); ?>/0-9/1">0-9</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>                          
			<?php if(count($suppliers) != 0): ?>
			<div class="suppliers mt-2 mb-4">

				<?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="accordion" id="Supp-list">
					<?php if($company->companyproduct->count()>0): ?>
					<div class="card">
						<div class="card-header" id="headingOne">
							<h3 class="display-6 mb-3">
							
								<a href="<?php echo e(url('testsuppliers').'/'. @$company->companyprofile[0]->url); ?>" class="font-weight-bold" style="font-size: 16px"><?php echo e($company->comp_name); ?></a>
									<i class="fa fa-angle-double-right ml-2 mr-2 text-secondary" aria-hidden="true"></i><?php echo e($company->country); ?>

								
									
								
							</h3>
						</div>
							<ul class="products">
								<?php $__currentLoopData = $company->companyproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								    <?php if($product !=''): ?>
									<span style="font-size:12px; "><?php echo e($product->title); ?></span>,
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
							
					</div>
					<?php endif; ?>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
			<?php else: ?>
				<h5>No suppliers available</h5>
			<?php endif; ?>	
			
		</div>
		</div>
		<?php if($pageCount > 1): ?>
		<div aria-label="Page navigation">
				<ul class="pagination d-flex justify-content-center pt-3">           
		            <?php for($i=1; $i<=$pageCount; $i++): ?>
		            <?php if($pageno == $i ): ?>
		            <li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo e($i); ?></a></li>
		            <?php else: ?>
		            <li class="page-item"><a class="page-link" href="<?php echo e(url('featured-suppliers')); ?>/<?php echo e($string); ?>/<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
		            <?php endif; ?>	              
		            <?php endfor; ?>            
        		</ul>
    		</div> 	
    		<?php endif; ?>
	

</div><?php /**PATH /home/plantautomationt/public_html/resources/views/company/featuredfilter.blade.php ENDPATH**/ ?>