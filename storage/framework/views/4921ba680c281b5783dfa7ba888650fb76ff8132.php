<?php $__env->startSection('style'); ?>

<!--   <link rel="stylesheet" href="<?php echo e(asset('industry/css/form-design.css')); ?>"> -->

  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url').'css/swiper.min.css'); ?>">

 <style type="text/css">

 

 .swiper-container {

      width: 100%;

    

      padding-bottom: 50px;

    }

    .swiper-slide {

      background-position: center;

      background-size: cover;

      width: 480px;

      /*height: 300px;*/

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

 <!-- Start Content -->

 
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
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
              <h4 class="modal-title text-success"><?php echo e(session('message')); ?></h4>
              <button type="button" class="close"  onClick="location.href=location.href">&times;</button>
            </div>
            <div class="modal-body">
                <p class="">For any further queries or issue resolution reach us at +91 40 4961 4567 or email us at info@plantautomation-technology.com. And our support staff will get back to you at the earliest.</p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
            </div>
          </div>
        </div>
      </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <div class="container">
      <div class="row">
       <!-- Start Left Section -->
        <div class="col-lg-8 text-left mt-5">
         <!--  <div class="mt-2 mb-2">
            <img src="<?php echo e(asset('industry/images/subscribe-now-screens.png')); ?>" alt="Subscribe Now" title="Subscribe Now" class="img-fluid" />
          </div> -->
          <!-- // Content -->
          <!-- Slider -->
            <div class="swiper-container" dir="rtl">
                <div class="swiper-wrapper">             
              <?php
              $i=1; 
              ?>
              <?php $__currentLoopData = $enews_letter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsletter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($i== count($enews_letter) ): ?>  
                  <div class="swiper-slide swiper-slide-active">
                        <a href="<?php echo e(config('app.url')); ?>e-newsletters/<?php echo e($newsletter->file); ?>" target="_blank">
                        <img src="<?php echo e(config('app.url')); ?>e-newsletters/images/<?php echo e($newsletter->image); ?>" class="img-fluid" alt='<?php echo e($newsletter->title); ?>'>
                        </a> 

                  </div>

             <?php else: ?>

              <div class="swiper-slide">

                        <a href="<?php echo e(config('app.url')); ?>e-newsletters/<?php echo e($newsletter->file); ?>" target="_blank">

                        <img src="<?php echo e(config('app.url')); ?>e-newsletters/images/<?php echo e($newsletter->image); ?>" class="img-fluid" alt='<?php echo e($newsletter->title); ?>'>

                        </a> 

                  </div>

              <?php endif; ?>

              <?php $i++; ?>

            

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

                </div>



                <!-- Add Pagination -->

                 <div class="swiper-button-next"></div>

                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>

              </div>

          <!-- Slider End -->

        </div>

        <!-- End Left Section -->







        <!-- // Form -->

        <div class="col-lg-4 mt-5" id="company-profile">

         

           

             <form  method="post" action="<?php echo e(route('registration.post')); ?>" class="contact-form d-flex justify-content-center" id="form_count">

              <!--hidden values -->

              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

              <input type="hidden" name="publicid" value="7671192dbc2d395adf92cb9e119ab350">

              <input type="hidden" name="name" value="plantautomation-registration">

             

                 

                <input type="hidden" name="registration" value="registration">

              <div class=" border border-secondary bg-light p-3"> 



                <h1 class="text-center text-blue display-4 pb-2">Subscribe our Newsletter</h1> 



                <div class="form-group">

                  <?php echo e(Form::text('firstname', null,['required'=>'required','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'class'=>'form-control','placeholder'=>'First Name*'])); ?>


                  <input type="hidden" name="page" value="profile">

                  <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">

                    <?php if($errors->has('firstname')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('firstname')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                  <?php echo e(Form::text('lastname', null,['required'=>'required','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'class'=>'form-control','placeholder'=>'Last Name*'])); ?>


                  <input type="hidden" name="page" value="profile">

                  <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">

                    <?php if($errors->has('lastname')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('lastname')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                 <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])); ?>


                   <?php if($errors->has('email')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('email')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                 <?php echo e(Form::text('company', null,['required'=>'required','pattern'=>"[A-Za-z0-9\s]{3,30}",'class'=>'form-control','placeholder'=>'Company Name*'])); ?>


                   <?php if($errors->has('company')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('company')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                 <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title'])); ?>


                   <?php if($errors->has('cf_leads_jobtitle')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_jobtitle')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                  <?php echo e(Form::text('mobile', null,['required'=>'required','pattern'=>"[0-9\s._*#()+-]+",'class'=>'form-control','placeholder'=>'Telephone*'])); ?>


                    <?php if($errors->has('mobile')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('mobile')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                  <select class="form-control" name="cf_leads_countryname" required>

                       <option disabled selected value="">Select Your Country </option>



                  <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </select>

                    <?php if($errors->has('cf_leads_countryname')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_countryname')); ?></div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                  <?php echo e(Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])); ?>


                </div>



                <div class="mt-3"></div> 



                <div class="text-left form-group mb-0"> 

                  <label class="checkbox-inline"> 

                  <input type="checkbox" value="Yes" name="newsletter" id="newsletter" checked > &nbsp;<small>Monthly Newsletter</small>

                  </label> 

                </div> 

                <div class="text-left form-group mb-0"> 

                  <label class="checkbox-inline"> 

                  <input type="checkbox" value="Yes" name="newsletter" id="newsletter" checked> &nbsp;<small>Events Newsletter</small>

                  </label> 

                </div> 

                <div class="text-left form-group mb-0"> 

                  <label class="checkbox-inline"> 

                  <input type="checkbox" value="Yes" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions.</small>

                  </label> 

                </div> 

                <div class="text-left form-group mb-0"> 

                  <label class="checkbox-inline"> 

                  <input type="checkbox" value="Yes" name="promotions" id="promotions" checked> &nbsp;<small>Receive promotions, products &amp; services info.</small>

                  </label> 

                </div> 

                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                <!-- <input type="hidden" name="action" value="<?php echo e(url('registration-success')); ?>"> -->

                <!-- <div class="form-group mb-0">

                 <?php echo Form::captcha(); ?>


                   <?php if($errors->has('g-recaptcha-response')): ?>

                      <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>

                    <?php endif; ?>

                </div> -->

                <input type="submit" value="Submit" class="btn btn-primary btn-block">

              </div> 

              </form>   

          <img src="<?php echo e(config('app.url')); ?>img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />

          <div class="clearfix"></div>

          <div class="mb-1"></div>

        </div> 

      <!-- Start Form // -->

        

                     

      </div>

    </div>

    <!-- END Container -->

   

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script type="text/javascript" src="<?php echo e(config('app.url').'js/swiper.min.js'); ?>"></script>

  <?php if(session('message_type') == 'success'): ?>    

          <script type="text/javascript">         

              history.pushState(null, null, '/registration-success');            

              $('#myModal').modal('show');         

         </script>

  <?php endif; ?>



<script type="text/javascript">



  var swiper = new Swiper('.swiper-container', {

      effect: 'coverflow',

      grabCursor: false,

      centeredSlides: true,

      slidesPerView: 'auto',

  

      coverflowEffect: {

        rotate: 50,

        stretch: 0,

        depth: 100,

        modifier: 1,

        slideShadows : true,

      },

      pagination: false,

      navigation: {

        nextEl: '.swiper-button-next',

        prevEl: '.swiper-button-prev',

      },

    });



    $('body').on('click','.swiper-slide',function(){



       if ($(this).hasClass("swiper-slide-active")) {

             return true;

       }else{

            return false;

        

       };

       });



</script>

   <script type="text/javascript">

      var url = "<?php echo e(url('registration-success')); ?>";

      function OnButton1(){  

        setTimeout(function(){

        document.registration_form.action = url;

        document.registration_form.submit();  

        },200);

      }



    //   function checkform() {      

    //    var flag = true;

    //    var form = $('#form_count');

    //    $("#form_count input").each(function(){

    //     if($(this)[0].hasAttribute("required")){

    //       if($(this)[0].value == ""){

    //         $('#alertModal').modal('show');                 

    //         flag = false;

    //       }else{

    //         OnButton1();

    //         return true

    //       }

    //     }

    //   });

       

    //  }

  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/registration.blade.php ENDPATH**/ ?>