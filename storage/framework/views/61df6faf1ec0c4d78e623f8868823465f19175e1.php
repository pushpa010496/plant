<?php $__env->startSection('style'); ?>
<style>

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>js/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>js/slick/slick-theme.css">
<style type="text/css">
  .slick-prev, .slick-next,.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus{
    background: #717070f7 !important;
  }
  .slick-prev {
    right: 47px !important;
    left: auto !important;
  }
  .slick-next{
   right: 20px !important;
 }
 .slick-prev, .slick-next {
  top:130% !important;
  border-radius: 0 !important;
  height: 25px !important;
  width:25px !important;
}
.slick-prev:before, .slick-next:before{
  color: #ffffff !important;
  font:normal normal normal 14px/1 FontAwesome !important;

}
.slick-prev:before{
  content: "\f053" !important;
} 
.slick-next:before{
  content: "\f054" !important;
}
/*///////////////////////////////////*/
.tab-content {
  /*padding:10px;*/
 /*   border:1px solid #ddd;
 border-bottom:0px;*/
}
.nav-tabs {
/*border-bottom: 0px;
border-top: 1px solid #ddd;*/

}
.nav.nav-tabs{
  margin-top: -3px;
  float: right;
}

.nav-tabs > li {
  margin-bottom:0;
  margin-top:-1px;
}

.nav-tabs > li > a {
  padding:5px 10px;
  line-height: 20px;
  font-size: 16px;
  border: 1px solid #ffffff;
  border-bottom: none;
  border-right: none;
  -moz-border-radius:0px;
  -webkit-border-radius:0px;
  border-radius:0px;
  background-color: #cccccc;
}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
  color: #555555;
  /*cursor: default;*/
  background-color: #ffffff;
  border-top-color: transparent;
}
.nav.nav-tabs li a.active{
  cursor: default;
  background: #a9a9a9;
}
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  text-align: center;
  margin-top: 10px;
}
  .links a:hover {
    color: #5d085a !important;
  }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Leader Board Banner -->

<div class="container">
    <div class="row">
     
      <?php
      $count =0;
      foreach($banner1314 as $banner){            
      if ($banner->positions[0]->id == 14 and $banner->pagesCount[0]->id == 1) {
      $count++; 
    }
  }   
  ?>


  <?php if($count == 1): ?>

  <?php $column=12 ?>             
  <?php else: ?>
  <?php $column=6 ?>
  <?php endif; ?>
  <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           


  <?php if($homebanner12->positions[0]->id == 14 and $homebanner12->pagesCount[0]->id == 1): ?>

  <div class="col-lg-12 text-center mt-2 mb-2">
    <?php if($homebanner12->type == 'swf'): ?>
    <?php else: ?>
    <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;"  target="_blank" title="<?php echo e($homebanner12->title); ?>">
      <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" />
    </a>
    <?php endif; ?>
  </div>     
     
  <?php else: ?>
  <?php endif; ?>  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- cytiva-->
        
</div>
</div>
<!-- end leader board banner -->
<div class="pt-2"></div>
<div class="container" >
    <hp class="pt-2">Categories </p>
    <div class="panel-group row" id="accordion">

      <div class="col-lg-4">
          <?php $i=1; ?>
        <?php $cat = ordercatfirst(22);?>
        
        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel panel-default">
          <div class="panel-heading">                
            <h2 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_<?php echo e($i); ?>" aria-expanded="false" contenteditable="false"><?php echo e($val['name']); ?></a>
            </h2>

          </div>
          <div id="TEST_<?php echo e($i); ?>" class="panel-collapse collapse" aria-expanded="false">
           <?php $childs = getcat($val['id']);?>
           <?php if(@$childs): ?>
           <div class="panel-body">
             <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                       
            
             <a href="<?php echo e(url('categories')); ?><?php echo e('/'.$child->slug); ?>"> 
              <p><?php echo e(ucwords(strtolower($child['name']))); ?> </p>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php $i=$i+1; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
    <div class="col-lg-4">  
      <?php $cat = ordercatsecond(22);?>
      <?php $i=12; ?>
      <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="panel panel-default">
        <div class="panel-heading">                
          <h2 class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_<?php echo e($i); ?>" aria-expanded="false" contenteditable="false"><?php echo e($val['name']); ?></a>
          </h2>

        </div>
        <div id="TEST_<?php echo e($i); ?>" class="panel-collapse collapse" aria-expanded="false">
         <?php $childs = getcat($val['id']);?>
         <?php if(@$childs): ?>
         <div class="panel-body" style="">
           <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                       
           <?php 
           $count = DB::table('products')->where('category_id',$child['id'])->count();
           ?>
           <a href="<?php echo e(url('categories')); ?><?php echo e('/'.$child->slug); ?>"> 
            <p><?php echo e(ucwords(strtolower($child['name']))); ?> </p></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php $i=$i+1; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </div>
    
    <div class="col-lg-4">    <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($homebanner12->positions[0]->id == 16 and $pcount->id == 1): ?>
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;"  target="_blank" title="<?php echo e($homebanner12->title); ?>">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" />
                      </a>
                  </div>            
            <?php endif; ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>

</div>
  </div>

 <!-- Categories // -->   

</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/category/index.blade.php ENDPATH**/ ?>