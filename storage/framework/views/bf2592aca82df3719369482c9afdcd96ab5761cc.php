<?php $__env->startSection('style'); ?>

  <link rel="stylesheet" href="<?php echo e(asset('industry/css/form-design.css')); ?>">

  <style type="text/css">

  .grecaptcha-badge { 

    bottom: 100px !important;

  }

  .rc-anchor-normal{

    background: #000 !important;

    color: #000 !important; 

  }

</style>

<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>

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
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>
          </div>
          <?php else: ?>
          <?php endif; ?>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
 <!-- Start Content -->

     <div class="container">

      <div class="row">

        <!-- // Form -->

        <div class="col-lg-6 form-bg-color">

           <!-- <center> <?php echo $__env->make('error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></center>    -->



            <div class="mt-4"></div>  

           

            <form name="post_requirement_form" method="post" class="contact-form d-flex justify-content-center" id="form_count">



              <!--hidden values-->              

              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

              <input type="hidden" name="name" value="plantautomation-post-requirement">

              

              <div class="form-container"> 

                <h1 class="form-title CAPS text-center">Post Your Requirement</h1> 

                <div class="mt-2 mb-2"></div> 

                <div class="input-container"> 

                  <div class="row input-group req-input"> 

                    <?php echo e(Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'pattern'=>"[A-Za-z\s]{3,30}", 'title'=>"Enter only Alphabet characters ",'required'=>'required'])); ?>




                    <?php if($errors->has('firstname')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('firstname')); ?></div>

                    <?php endif; ?>

                  </div>

                  <div class="row input-group req-input"> 

                    <?php echo e(Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'pattern'=>"[A-Za-z\s]{3,30}", 'title'=>"Enter only Alphabet characters ",'required'=>'required'])); ?>




                    <?php if($errors->has('lastname')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('lastname')); ?></div>

                    <?php endif; ?>

                  </div>  



                  <div class="row input-group req-input"> 

                    <?php echo e(Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required'])); ?>


                    <?php if($errors->has('email')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('email')); ?></div>

                    <?php endif; ?>

                  </div> 



                  <div class="row input-group req-input"> 

                    <?php echo e(Form::text('company', null,['placeholder'=>"Enter Your Company name...",'pattern'=>"[A-Za-z0-9\s]{3,30}",'required'=>'required'])); ?>




                    <?php if($errors->has('company')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('company')); ?></div>

                    <?php endif; ?>

                  </div> 

                   <div class="row input-group req-input"> 

                    <?php echo e(Form::text('cf_leads_jobtitle', null,['placeholder'=>"Enter Your Job Title...",'pattern'=>"[A-Za-z0-9\s]{3,30}",'required'=>'required'])); ?>




                    <?php if($errors->has('cf_leads_jobtitle')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_jobtitle')); ?></div>

                    <?php endif; ?>

                  </div> 



                  <div class="row input-group req-input"> 

                    <?php echo e(Form::text('mobile', null,['placeholder'=>"Enter Your Phone Number...",'pattern'=>"[0-9\s._*#()+-]+",'required'=>'required'])); ?>


                    <?php if($errors->has('mobile')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('mobile')); ?></div>

                    <?php endif; ?>



                  </div> 



                  <div class="row input-group req-input"> 

                    <select id="select2" name="cf_leads_countryname" required> 

                     <option disabled selected value="">Select Your Country </option>

                     <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <option value="<?php echo e($country->country_name); ?>"> <?php echo e($country->country_name); ?></option> 

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select> 

                  </div>



                  <div class="row input-group req-input"> 

                    <?php echo e(Form::textarea('description', null,['placeholder'=>'Your Message ...','rows'=>5])); ?>


                  </div> 



                  <div class="mt-4"></div> 

                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                <input type="hidden" name="action" value="<?php echo e(url('post-requirement-success')); ?>">

                  <!-- <div class="text-left form-group">                  

                   <?php echo Form::captcha(); ?>


                   <span class="error text-danger verifi"></span>

                  </div> 

                    <?php if($errors->has('g-recaptcha-response')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>

                    <?php endif; ?> -->

                  <div class="submit-row"> 

                    <input type="button" value="Submit" class="btn btn-block submit-form" onclick="return checkform();">

                  </div> 

                </div> 

              </div>              

            </form>            

          <div class="clearfix"></div>



          <div class="mb-1"></div>

        </div> 

        <!-- Start Form // -->



        <div class="col-lg-1"></div>                

          <!-- Start Right Section -->

          <div class="col-lg-5 text-center">

            <div class="mt-2 mb-2">

              <img src="<?php echo e(asset('industry/img/profile-screen.png')); ?>" alt="Company Profile" title="Company Profile" class="img-fluid" />

            </div>

          </div>

          <!-- End Right Section -->

          

      </div>

    </div>

    <!-- END Container -->

      <div id="myModal" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

           <div class="modal-header">

              <h4 class="modal-title text-success">Success! You have successfully posted your requirement.</h4>

              <button type="button" class="close" onClick="location.href=location.href">&times;</button>

              

            </div>

           <div class="modal-body">

                <p class="">For any further queries or issue resolution reach us at <strong>+91 40 4961 4567</strong> or email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>

           

            </div>

            <div class="modal-footer">

               <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>

            </div>

          </div>

        </div>

      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

  <script type="text/javascript">

    var url = "<?php echo e(url('post-requirement-success')); ?>";

      function OnButton1(){    

        setTimeout(function(){

        document.post_requirement_form.action = url;

        document.post_requirement_form.submit();  

        },200);

      }

       function checkform() {      

       var flag = true;

       var form = $('#form_count');

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

  </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/postrequirement.blade.php ENDPATH**/ ?>