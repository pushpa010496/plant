<?php $__env->startSection('style'); ?>

<style type="text/css">
  #product h2 {
    background-color: rgba(21, 9, 9, 0.6) !important;
  }
  #product h2 a{
    color: #fdfdfd !important;
  }
</style>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script type="text/javascript">
  function checkpopupform($id){
      if($id == 'Ask'){
           grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'ask'}).then(function(token) {
              document.getElementById("g-recaptcha-ask-response").value=token
            });
          });
      }if($id == 'Post'){
         grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'post'}).then(function(token) {
              document.getElementById("g-recaptcha-post-response").value=token
            });
          });
      }
  }
</script>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



  <!-- // Profile Body -->

  <div class="container pt-4 pb-3">
    <form name="product_form" class="product_form" method="post" id="form_count">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <input type="hidden" name="name" value="plantautomation-technology-product-enquiry">
      <input type="hidden" name="cf_leads_page" value="all_pages">
      <div class="row border border-secondary bg-white">
        <div class="col-md-8 col-lg-9 pt-3 pr-3 pb-0 pl-3">
           <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="">   
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-5 col-12">
                <h2 class="display-6 mb-3 mt-2">About<span class="font-weight-bold ml-2"><?php echo e($cp->title); ?> </span></h2>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-8 mb-2 text-center">
                <?php if($cp->company->website): ?>
                   <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($cp->company->track_url); ?>'); return false;" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Visit Website</a>
                <?php else: ?>

                     <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark">Visit Website</a>

                <?php endif; ?>

              </div>

              <!--<div class="col-lg-2 col-md-3 col-sm-5 col-6 mb-2 text-center">-->

              <!--  <a href="<?php echo e($cp->company->product_url? $cp->company->product_url : 'javascript:void(0)'); ?>" target="_blank" class="btn btn-sm btn-outline-info btn-radius text-dark <?php echo e($cp->company->product_url ? ' ' : 'disabled'); ?>">Product Page</a>-->

              <!--</div>-->

            </div>   



            <?php echo $cp->description; ?>     



            <div class="text-center">

              <a data-toggle="modal" data-target="#askquestion" onclick="return checkpopupform('Ask')" class="btn btn-sm btn-success btn-top-rad pl-4 pr-4 text-white">Ask a question to this supplier?</a>           

            </div>

          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  



        </div>



      <div class="col-md-4 col-lg-3 text-center">

          <?php if($cp->company->banner_image ): ?>

          <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($cp->company->banner_url); ?>'); return false;"  target="_blank" title="<?php echo e($cp->company->comp_name); ?>">

            <img src="<?php echo e(config('app.url')); ?>suppliers/<?php echo e(str_slug($cp->company->comp_name)); ?>/<?php echo e($cp->company->banner_image); ?>" alt="<?php echo e($cp->company->comp_name); ?>" title="<?php echo e($cp->company->comp_name); ?>" class="img-fluid border border-secondary mt-3">                     

          </a>

          <?php else: ?>

          <img src="https://industry.plantautomation-technology.com/images/advertise-here.jpg" alt="advertise here" class="img-fluid border border-secondary mt-3">

          <?php endif; ?>

        </div>

      </div>

    </form>





 <?php if($cp->pproduct->where('active_flag',1)->count()): ?>

    <div class="row mt-4 Prod-list border bg-light" id="product"> 

      <div class="col-lg-12">

        <h4 class="display-5 mb-3 pt-3">Products</h4>    

      </div>

   

      <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $cp->pproduct->where('active_flag',1)->where('stage',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <?php if($key <= 10): ?>

      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">

        <div class="product div-shadow"> 

          <a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>">

            <img class="img-fluid div-scal" src="<?php echo e(config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image); ?>" alt="<?php echo e($cproduct->alt_tag); ?>" title="<?php echo e($cproduct->alt_tag); ?>">

          </a>

          <h2 class="font-12 <?php echo e($key); ?>" style="color: #ccc">

            <a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>" title="<?php echo e($cproduct->alt_tag); ?>" >
                <?php echo e(str_limit(preg_replace('#<a.*?>([^>]*)</a>#i', '$1', $cproduct->title),$limit = 40)); ?>


            </a>

         

          </h2>

        </div>

      </div>

      <?php elseif( $key == 11): ?>

      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">

        <div class="div-shadow"> 

          <a href="<?php echo e(url('products/'.$cp->url)); ?>">

            <img class=" " src="https://industry.plantautomation-technology.com/images/view-more.jpg" title="View more products from <?php echo e($cp->title); ?>" height="160px" width="160px">

          </a>        

        </div>

      </div>

      <?php endif; ?>

    

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>

    <?php endif; ?>



  </div>  

  <!-- Profile Body // -->





  <!-- // Post Your Requirement Modal -->

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postRequirement">

    Launch demo modal

  </button>

 -->

  <!-- Modal -->

  <div class="modal fade" id="postRequirement" tabindex="-1" role="dialog" aria-labelledby="postRequirementTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title text-blue" id="postRequirementTitle">Post Your Requirement</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <?php echo $__env->make('company._postRequirementForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

      </div>

    </div>

  </div>

  <!-- Post Your Requirement Modal // -->



  <!-- Modal -->

  <div class="modal fade" id="askquestion" tabindex="-1" role="dialog" aria-labelledby="postRequirementTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-blue" id="postRequirementTitle">Ask a question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo $__env->make('company._askquestion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Post Your Requirement Modal // -->
  <!-- success modal -->
<div id="askquestionSuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success"><?php echo session('message_type'); ?></h4>
        <button type="button" class="close" onClick="location.href=location.href">&times;</button>
      </div>
      <div class="modal-body">
        <p class=""><?php echo session('message'); ?></p>
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

    var slug = '<?php echo e($cp->url); ?>';

    history.pushState(null, null, '/suppliers/'+slug+'/enquiry-success');

    // $('#myModal1').modal('show');         

  </script>

  <?php endif; ?>



  <script type="text/javascript">

    // var url = "<?php echo e(url('company-enquiry')); ?>";
    var url = "<?php echo e(url('company-postrequirement')); ?>";
    function OnButton1(){
     setTimeout(function(){
       document.company_postrequirement.action = url;
       document.company_postrequirement.submit();
          },400);
    }

    function checkform() {  
     var flag = true;
     var form = $('#form_count');
     if(form.find('select').val() == ''){
       $('#alertModal').modal('show');  
       return false;
     }    
    $("#form_count input").each(function(){
      if($(this)[0].hasAttribute("required")){
        if($(this)[0].value == ""){
          $('#alertModal').modal('show');                 
          flag = false;
        }else{
          OnButton1();
          return true
        }
      }
    });
    
  }



  <?php if($errors->any()): ?>

    <?php if(old('formtype') == 'modal-form'): ?>  

      $(document).ready(function(){ 

        $('#<?php echo e(old('formid')); ?>').modal('show');   

      });   

    <?php endif; ?>             

  <?php endif; ?>

  </script>

  <?php if(session('askquestion') == 'success'): ?> 

    <script type="text/javascript">

      $('#askquestionSuccess').modal('show');        

    </script>

  <?php endif; ?>  



  

 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/company/profile.blade.php ENDPATH**/ ?>