<?php $__env->startSection('style'); ?>
<style type="text/css">
  .product{
    min-height: 300px;
  }
</style>
<?php $__env->stopSection(); ?>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
<?php $__env->startSection('content'); ?>


<!-- // Profile Body -->
<div class="container pt-4 pb-3">
  <form action="<?php echo e(route('company-enquiry.post')); ?>"   method="post" >
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
    <input type="hidden" name="name" value="plantautomation-product-enquiry">
    <input type="hidden" name="cf_leads_page" value="product view">
    <input type="hidden" name="view_page" value="product view">
    <input type="hidden" name="companyurl" value="<?php echo e(\Request::segment(2)); ?>">
    <input type="hidden" name="producturl" value="<?php echo e(\Request::segment(3)); ?>">
    <div class="row">
      <div class="col-lg-9 mb-3">
        <div class="p-3 div-shadow"> 
         <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
         <input type="checkbox" name="productname[]" class="custom-control-input" value="<?php echo e($prod->title); ?>">
         <input type="hidden" name="products" value="<?php echo e($prod->title); ?>">
         <input type="hidden" name="cf_leads_product" value="<?php echo e($prod->title); ?>">
         <div class="text-center">
          <h2 class="title text-center text-blue font-20 pb-2"><strong><?php echo $prod->title; ?></strong></h2>  
          <?php if(\Request::is('products/ami/alarm-panels-j3500') || \Request::is('products/ami/alarm-annunciators-j3000-or-j3105') || \Request::is('products/ami/alarm-panels-j1905s')): ?>
             <a href="https://www.ami-control.com/en/alarmannunciators/" target="_blank"><img src="<?php echo e(config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->big_image); ?>" alt="<?php echo e($prod->title); ?>" title="<?php echo e($prod->title); ?>" class="img-fluid"/></a>
          <?php else: ?>
            <img src="<?php echo e(config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->big_image); ?>" alt="<?php echo e($prod->title); ?>" title="<?php echo e($prod->title); ?>" class="img-fluid"/>
          <?php endif; ?>   
           

        </div>           
        <div class="pt-5"></div> 
        <?php echo $prod->description; ?>

        <div class="pt-3 mb-3">
         <?php if(@$prod->tech_spec_pdf == ''): ?>
         <!--<a class="btn btn-outline-primary mr-5 mb-2 disabled"><i class="fa fa-lg fa-cog" aria-hidden="true"></i> &nbsp; Technical Specs</a>-->
         <?php else: ?>
         <a class="btn btn-outline-primary mr-5 mb-2" href="<?php echo e(config('app.url').'suppliers/'.str_slug($companyprofile[0]->company->comp_name).'/products/'.$prod->tech_spec_pdf); ?>" role="button"><i class="fa fa-lg fa-cog" aria-hidden="true"></i> &nbsp; Technical Specs</a>
         <?php endif; ?>
         <?php if(@$prod->facebook): ?>                
         <a href="<?php echo e($prod->facebook); ?>" target="_blank"><img src="<?php echo e(config('app.url')); ?>img/fb.jpg" alt="" class="img-fluid mb-2"/></a>
         <?php endif; ?>
         <?php if(@$prod->twitter): ?>          
         <a href="<?php echo e($prod->twitter); ?>" target="_blank"><img src="<?php echo e(config('app.url')); ?>img/twitter.jpg" alt="" class="img-fluid mb-2"/></a>
         <?php endif; ?>
         <?php if(@$prod->googleplus): ?>                
         <a href="<?php echo e($prod->googleplus); ?>" target="_blank"><img src="<?php echo e(config('app.url')); ?>img/g-plus.jpg" alt="" class="img-fluid mb-2"/></a>
         <?php endif; ?>
         <?php if(@$prod->linkedin): ?>                
         <a href="<?php echo e($prod->linkedin); ?>" target="_blank"><img src="<?php echo e(config('app.url')); ?>img/linkedin.jpg" alt="" class="img-fluid mb-2"/></a>
         <?php endif; ?>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
     <div class="pt-3"></div>
     <!-- // Other Products -->
     <div class="partners">
      <div class="main-title"><span><a href="#">Other Products</a></span></div>              
    </div>
    <div class="row" id="product">              
      <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = $cp->pproduct->whereNotIn('url',\Request::segment(3))->where('active_flag',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <div class="col-lg-4 mb-4">
        <div class="product div-shadow">
                    <div id="prodimage<?php echo e($cproduct->id); ?>">
                      <a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>"><img class="img-fluid" src="<?php echo e(config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image); ?>" alt="<?php echo e($cproduct->alt_tag); ?>"/></a>                                          
                      <h2><a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>"><?php echo $cproduct->title; ?></a></h2>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
              </div>
              <!-- Other Products // -->  
            </div>
            
            <div class="col-lg-3 pb-3">
              <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
              <?php endif; ?>
              <?php echo $__env->make('company._productEnquiryForall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </form>
      </div>
    </div>

<div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success"><?php echo session('message_type'); ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class=""><?php echo session('message'); ?></p>
                <p>Sincerely Plantautomation Technology</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
               <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a> 
            </div>
          </div>
        </div>
      </div>
    
    <?php $__env->stopSection(); ?>
    
    <?php $__env->startSection('scripts'); ?> 
<script type="text/javascript">
  
  var product = '<?php echo e(@$prods[0]->url); ?>';
  var company = '<?php echo e(@$prods[0]->compprofile->url); ?>';
  
</script>

 <?php if(session('status')): ?>    
    <script type="text/javascript">    
         history.pushState(null, null, '/products/'+company+'/'+product+'/enquiry-success');
        $('#myModal1').modal('show');         
   </script>
 <?php endif; ?>

  <script>
    $( "table" ).addClass( "table" );
  </script> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/company/productview.blade.php ENDPATH**/ ?>