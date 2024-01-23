
<?php $__env->startSection('style'); ?>
<style>
  .card-header h2 {font-size: 12px !important;} /* For Main Nav */
  .filter > ul{margin-left: -30px;}
  .filter > ul li{list-style: none;float:left;margin-right: 7px;color: #99ca3c;margin-bottom: 10px; width: 20px;height: 20px;border:1px solid #99ca3c; text-align: center;vertical-align: middle;}
  .filter > ul li a{color: #99ca3c;font-size: 14px;background-color: transparent;display: block;line-height: 18px;}
  .filter > ul li a:hover{color: #fff;}
  .filter > ul li:hover{ background-color:#99ca3c;color: #fff; }
  .filter > ul li a:active {background-color: #99ca3c;color: #fff;}

  .breadcrumb{background-color: transparent;padding: 5px 0;margin-bottom: 5px;font-size: 14px;} 

  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #6c757d;
    content: "\f101";
    font-family: fontawesome;
  }
  .suppliers a{color: #333;}
  .suppliers a:hover{color: #99ca3c;}
  .pagination{border-radius: 0px;}
  .page-link {    
    color: #222;
    background-color: #99ca3c;
    border: 1px solid #99ca3c;
    margin-right: 7px;
  }
  .page-link:hover {
    color: #fff;
    text-decoration: none;
    background-color:#99ca3c;
    border-color: #99ca3c;
  }
  .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #99ca3c;
    border-color: #99ca3c;
  }
  .page-item:last-child .page-link, .page-item:first-child .page-link{border-radius: 0px;}
  .suppliers h3{
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .filter .active{
    background-color: #99ca3c;
    color:#ffffff;
  }
  .carousel-indicators {
    right: 10px;
    left: auto;
    margin-right: 7%;
    bottom: 0px;
  }

  .carousel-indicators li{
    height:8px;
    width:8px;
    background: #e2e2e2;
    border-radius: 50%;
  }
  .carousel-indicators .active{
    background: transparent;
    border:1px solid #e2e2e2;
    
  }
  
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

    <div class="col-lg-<?php echo $column ?> text-center mt-5" >
      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>">
        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" />
      </a>
    </div>
    <?php else: ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </div>
</div>
<!-- End Leader Board Banner-->

<!-- Begin page content -->

<div role="main <?php echo e(@$page_all); ?>">
  <div class="pt-2 pb-2 d-none d-sm-block"></div>
  

  <!-- // Event Listing -->
  <div class="container pb-3">
    <div class="row">        

     <?php echo $__env->make('company.featuredfilter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>          
     <div class="col-lg-3 col-md-3 col-sm-12 col-12 text-center pt-5">
      <div class="bg-gray p-2 border border-secondary">
        <div class="text-center">
          <h3 class="adv-title">Advertisements</h3>
        </div>
         <!--  <a href="javascript:void(0)" target="_blank" class="mb-3" title="AFT-Global" 
          onclick="trackOutboundLink('http://track.pulpandpaper-technology.com/20190327010830356941734'); return false;">
          <img class="img-fluid div-shadow mb-3" src="https://industry.pulpandpaper-technology.com/slider/1553692345-aftjpg" alt=""/>
        </a> -->


    <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($homebanner12->positions[0]->id == 16 and $pcount->id == 1): ?>
    <a href=" javascript:void(0)" target="_blank" class="mb-3" title="<?php echo e($homebanner12->title); ?>" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;">
      <img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" />
    </a>
    <?php else: ?>
    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p class="font-italic font-weight-bold text-center text-secondary mb-0">See your banner here...</p>
  </div>
</div>
</div>
</div>
</div>
<!-- Event Listing // -->
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success"><?php echo session('message_type'); ?></h4>
        <button type="button" class="close" onClick="location.href=location.href">&times;</button>

      </div>
      <div class="modal-body">
        <p class=""><?php echo session('message'); ?></p>
        <p>Sincerely Planautomation Technology</p>
        <p class="mb-0">Regards,</p>
        <p class="mb-0">Client Success Team (CRM),</p>
        <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>


        
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php if(session('message_type') == 'success'): ?>    
<script type="text/javascript">         

  // history.pushState(null, null, '/products/'+company+'/'+product+'/enquiry-success');
  $('#myModal2').modal('show');
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/company/featured_supplier.blade.php ENDPATH**/ ?>