<?php $__env->startSection('style'); ?>

 <style type="text/css">

   .product{

    min-height: 300px;

   }

   #product .overlay{

    height: 300px;

   }

 </style>

<?php $__env->stopSection(); ?>

<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script type="text/javascript">
         grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
              document.getElementById("g-recaptcha-response").value=token
            });
          });
</script>
<script type="text/javascript">
  function checkpopupform ($id){
      if($id =='Post'){
        grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'post'}).then(function(token) {
              document.getElementById("g-recaptcha-post-response").value=token
            });
          });
      }
  }
</script>
<?php $__env->startSection('content'); ?>

 <!-- // Profile Body -->



      <div class="container pt-4 pb-3">

        <div class="row">

          <div class="col-lg-12">

          

          <form action="<?php echo e(url('company-enquiry')); ?>" name="product_form" class="product_form" method="post" id="form_count">

            <?php echo csrf_field(); ?>

            <input type="hidden" name="publicid" value="6f6fbad2e8a0e3fd79096e13acb09486">

            <input type="hidden" name="name" value="plantautomation-product-enquiry">

            <input type="hidden" name="cf_leads_page" value="all_pages">      

            <input type="hidden" name="view_page" value="all_pages">



          <div class="row">

          <div class="col-lg-9 mb-3">

            <div class="row" id="product"> 

            <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php $__currentLoopData = $cp->pproduct->where('active_flag',1)->where('stage',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

              <div class="col-lg-4 mb-4">

                <div class="product div-shadow">

                  <div class="check">                       

                  </div> 

                  <div id="prodimage<?php echo e($cproduct->id); ?>">

                    <a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>">

                      <img class="img-fluid" src="<?php echo e(config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cproduct->small_image); ?>" alt="<?php echo e($cproduct->alt_tag); ?>"/></a>

                    <h2><a href="<?php echo e(url('products/'.$cp->url.'/'.$cproduct->url)); ?>"><?php echo $cproduct->title; ?></a></h2>

                  </div>

                </div>

              </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

          </div>



          <div class="col-lg-3 pb-3">            

            <?php echo $__env->make('company._productEnquiryForall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>
      </form>
        </div>
        
      </div></div>

      </div>  

      <!-- Profile Body // -->

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<!-- <script type="text/javascript">

  

  //var product = '<?php echo e(@$prods[0]->url); ?>';

  var company = '<?php echo e(@$cp->url); ?>';

  

</script> -->

<!--<?php if(session('message_type') == 'success'): ?>    -->
<!--<script type="text/javascript">         -->
<!--var slug = '<?php echo e(Request::segment(2)); ?>';-->
<!--  history.pushState(null, null, '/products/'+slug+'/enquiry-success');-->

<!--  $('#myModal1').modal('show');         -->

<!--</script>-->

<?php endif; ?>

  <script type="text/javascript">

     <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php $__currentLoopData = $cp->pproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

    $('#check<?php echo e($cproduct->id); ?>').change(function()

        {

          if($(this).is(":checked"))

          {  

            $('#prodimage<?php echo e($cproduct->id); ?>').addClass('unselectable');

            $('#prodimage<?php echo e($cproduct->id); ?>').addClass('overlay');     

          } 

          else {
            $('#prodimage<?php echo e($cproduct->id); ?>').removeClass('unselectable');

            $('#prodimage<?php echo e($cproduct->id); ?>').removeClass('overlay');

          }

        });

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </script>
 <script type="text/javascript">

var url = "<?php echo e(url('company-enquiry')); ?>";

function OnButton1(){
 setTimeout(function(){
   document.product_form.action = url;
  document.product_form.submit();
      },100);
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
    }
  }
});
if (!flag) { return false; }
 gToken =$("#g-token").val();
    $.ajax({
          url: "<?php echo e(route('gogglecaptha')); ?>",
          type: "POST",
          data: {'gtoken':gToken, '_token': '<?php echo e(csrf_token()); ?>'},
          success: function (response) {
              var obj = JSON.parse(response);
             // alert(obj.success);
              if(obj.success) {
                  OnButton1()
                  return true;
              }
              else{
                  alert("We can't proceed request with out captcha verification!");
                  return false;
              }           
          },
      });
//OnButton1();
//return true
}

</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/company/product.blade.php ENDPATH**/ ?>