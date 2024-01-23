<?php $__env->startSection('style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/sharethis.css">
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
<style type="text/css">
	#product {
		background-color: #2d8fc7;
		padding: 15px;
	}
	.table {border-color: #ccc !important;}
	button.close{
		position: absolute;
		right: 5px;
	}
	.modal{background-color: rgba(0,0,0,0.4) !important;}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php     
$page = getPageId(Request::segment(2));     
$page_all = getPage(Request::segment(1));     
?>

<!-- Leader Board Banner -->

<div class="container">

<div class="row">

  <?php

  $count =0;

  ?>

  <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

	<?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	  <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>

		<?php $count++;  ?>

	  <?php endif; ?>  

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php if($count == 1): ?>

  <?php $column=12 ?>             

  <?php else: ?>

  <?php $column=6 ?>

  <?php endif; ?>

  <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

  <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>

  <div class="col-12 text-center mt-2" >

	<a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>">

	<img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>"  title="<?php echo e($homebanner12->img_title); ?>"/></a>

  </div>

  <?php else: ?>

  <?php endif; ?>  

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

</div>

<!-- End Leader Board Banner-->



<div role="main" class="bg-white">    
	<!-- // Articles -->  
	<div class="container-fluid">
		<div class="container">
			<div class="text-center pt-2">
				<h2 class="main-title"><span>Articles</span></h2>
			</div>
		</div>  
		<div class="container  pb-3">
			<div class="row share_box mb-4">
				<div class="col-lg-8 pt-1">
					<button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your Article</button>  
				</div>
				<div class="col-lg-4">
					<div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>
				</div>
			</div>
			<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
				<div class="col-lg-9">
					<h1 class="display-5 pb-3 text-blue"><?php echo e($articles->article_title); ?></h1>
					<img class="img-fluid div-shadow mb-2 mr-4 pull-left" src="<?php echo config('app.url'); ?>articles/<?php echo $articles->article_image;?>" alt=""/>
					<p><?php echo $articles->article_description; ?></p>
				</div>    
				        <!-- square banner       -->
						<div class="col-lg-3">
            <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($homebanner12->positions[0]->id == 16 and $pcount->id == 1): ?>
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;"  target="_blank" title="<?php echo e($homebanner12->title); ?>">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" />
                      </a>
                  </div>            
            <?php endif; ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
              <!-- square banner end  -->         
			</div>
			<!-- Author Box -->
			<?php if($articles->auther_name != null): ?>
			<div class="row">                              
				<div class="col-lg-12">
					<div class="media bg-grey p-3 d-block d-sm-flex d-lg-flex d-md-flex d-xl-flex">
						<img class="mr-4 radius-15" src="<?php echo e(config('app.url')); ?>articles/<?php echo e($articles->auther_image); ?>" alt="image"  width="120px"> 
						<div class="media-body">
							<h5 class="mt-0">About: <span class="text-blue"><?php echo e(ucfirst($articles->auther_name)); ?> - <small class="font-14"><i><?php echo e(ucfirst($articles->auther_designation)); ?></i></small></span></h5>
							<p style="color:#636060"><?php echo e($articles->auther_description); ?> </p>
						</div>

					</div>
				</div>
			</div>   
			<?php endif; ?>      
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
		</div>
		<!-- Articles  -->        
		<div class="container">
			<div class="row" >  
				<div class="col-lg-6">
					<div class="text-left pt-2">
						<h2 class="main-title text-left mb-4"><span><a class="text-blue">Related Articles</a></span></h2>
					</div>
					<div id="product" class="mb-3">
						<div class="row">
							<?php $__currentLoopData = $realted_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-md-4 ">
								<div class="product div-shadow"> 
									<a href="<?php echo e(url('articles/'.$related->article_url)); ?>"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>articles/<?php echo $related->article_image;?>" alt=""/>
									</a>
									<h2><a href="<?php echo e(url('articles/'.$related->article_url)); ?>"><?php echo e($related->home_title); ?></a></h2>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text-left pt-2">
						<h2 class="main-title text-left mb-4"><span><a class="text-blue">Top Viewed Articles</a></span></h2>
					</div>
					<div class="">
						<div id="product" class="mb-3">
							<div class="row">
								<?php $__currentLoopData = $top_viewed_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_viewed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-lg-4 col-md-4">
									<div class="product div-shadow"> 
										<a href="<?php echo e(url('articles/'.$top_viewed->article_url)); ?>"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>articles/<?php echo $top_viewed->article_image;?>" alt=""/>
										</a>
										<h2><a href="<?php echo e(url('articles/'.$top_viewed->article_url)); ?>"><?php echo e($top_viewed->home_title); ?></a></h2>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="publishedNews" class="modal fade" role="dialog" <?php echo e($page_all); ?>>
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Success</h4>
				<button type="button" class="close" data-toggle="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p>Thank you for your interest in publishing an article with Packaging-Labelling. Our client success team member will get in touch with you shortly to take this ahead.
					While you're here, check out our high-quality and insightful articles. Happy Reading!
				</p>
				<p>Regards,</p>
				<p>Client Success Team (CRM),</p>
				<p><a href="<?php echo url('/');?>" title=" <?php echo e(config('app.name', 'Laravel')); ?>" target="_blank" style="color:#333333;"><img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-toggle="modal">Close</button>
				<!-- <a href="<?php echo e(url('news')); ?>" type="button" class="btn btn-info" >Close</a> -->
			</div>
		</div>
	</div>
</div>
<!-- Publish News Modal -->
<div id="publishNews" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Publish Your Article</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id='publishNewsForm' class="publishform" name="insight_form">
					<input type="hidden" name="publicid" value="07ffc9ca384bb197dbadfa152661944d">
					<input type="hidden" name="name" value="plantautomation-articles">
					<input type="hidden" name="subject" value="Article Publish">
					<input type="hidden" name="type" value="article">
					<!-- <?php echo $__env->make('industry._infoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   -->                  
				</form>
				<button class="btn btn-block submit-btn btn-primary">Submit</button> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Publish News End-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/publishform.js"></script>
<script type="text/javascript">
	toastr.options = {
		"positionClass": "toast-center-center",
		"timeOut": "5000",
	}
</script>    
<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content p-0">           
			<div class="modal-body p-0">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<a href="<?php echo e(url('events/light-middle-east')); ?>" target="_blank">
					<img src="<?php echo e(config('app.url')); ?>images/Light-Middle-East.jpg" width="100%">
				</a> 
			</div>          
		</div>
	</div>
</div>
<script type="text/javascript">       
	<?php if( Request::segment(3) == 'success'): ?>
	if (performance.navigation.type == 1) {
	}else{ 
		$('#publishedNews').modal('show');  
		$('#publishedNews').addClass('show');    
	}
	<?php endif; ?>
</script>   
<script>
	$( "table" ).addClass( "table" );
</script>                  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/industry/articleview.blade.php ENDPATH**/ ?>