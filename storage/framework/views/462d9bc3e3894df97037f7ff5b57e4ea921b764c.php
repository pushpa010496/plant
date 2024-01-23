<?php $__env->startSection('style'); ?>

 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <!-- // Profile Body -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script type="text/javascript">
         grecaptcha.ready(function() {
           grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
              document.getElementById("g-recaptcha-response").value=token
            });
          });
</script>


      <div class="container pt-4 pb-3">

        <div class="row">

          <div class="col-lg-9 mb-3">

            <div class="row">  

             <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $cp->pcatalog->where('active_flag',1)->where('stage',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>             

                  <div class="col-lg-4 mb-4">

                    <a href="<?php echo e(config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/catalog/'.$pcat->pdf); ?>" target="_blank">

                      <img src="<?php echo e(config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/catalog/'.$pcat->image); ?>" alt="<?php echo e($pcat->title); ?>" class="img-fluid div-scal"/>

                    </a>

                  </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

             </div> 

          </div>



          <div class="col-lg-3 pb-3">

             <form action="<?php echo e(url('company-enquiry')); ?>" name="product_form" class="product_form" method="post" id="form_count">

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

            <input type="hidden" name="publicid" value="6f6fbad2e8a0e3fd79096e13acb09486">

            <input type="hidden" name="name" value="plantautomation-product-enquiry">

            <input type="hidden" name="cf_leads_page" value="all_pages">      

            <input type="hidden" name="view_page" value="all_pages">

            <?php echo $__env->make('company._productEnquiryForall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </form>

          </div>

        </div>

      </div>  



      

      <!-- // CTA-10 -->

      <div class="container-fluid pt-1 pb-3 text-center">

        <div class="container">

          <a href="<?php echo e(url('/get-listed')); ?>" target="_blank">
            <img class="img-fluid" src="<?php echo config('app.url'); ?>images/cta/company-catalogues.jpg" alt="Get Started"/> 
          </a>

        </div> 

      </div>      

      <!-- CTA-10 // -->



    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

  <?php if(session('message_type') == 'success'): ?>    

          <script type="text/javascript">         

          var slug = '<?php echo e($cp->url); ?>';

          history.pushState(null, null, '/catalogue/'+slug+'/enquiry-success');

              $('#myModal1').modal('show');         

         </script>

  <?php endif; ?>   



  <script type="text/javascript">

      // var url = "<?php echo e(url('company-enquiry')); ?>";

      // function OnButton1(){



      //    document.product_form.action = url;

      //   document.product_form.submit();

            

      //   setTimeout(function(){

      //     //  document.product_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";

        

      //     // document.product_form.submit(); 

      //     /*

      //     $('.product_form').prop('action',url);

      //      $('.product_form').submit(function(){return true;});*/

          

      //   },200);

      // }

      function checkform() {  



       var flag = true;

       var form = $('#form_count');

       if(form.find('select').val() == ''){

         $('#alertModal').modal('show');  

         return false;

       }    

       if(grecaptcha.getResponse() == ""){

        

        form.find('.verifi').html("We can't proceed request with out captcha verification!");



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

       OnButton1();

       return true

       

     }

  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/company/catalogue.blade.php ENDPATH**/ ?>