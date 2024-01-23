
<?php $__env->startSection('style'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('industry/css/form-design.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Start Content -->
     <div class="container">
      <div class="row">
        <!-- // Form -->
        <div class="col-lg-6 form-bg-color">
           <center> <?php echo $__env->make('error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></center>   

            <div class="mt-4"></div>  
            <?php echo Form::open(['url' => 'event-newsletter-signup-success','class'=>'contact-form d-flex justify-content-center']); ?>

              <div class="form-container"> 
                <h1 class="form-title CAPS text-center">Event Newsletter Signup</h1> 
                <div class="mt-2 mb-2"></div> 
                <div class="input-container"> 
                  <div class="row input-group req-input"> 
                    <?php echo e(Form::text('name', null,['placeholder'=>"Enter Your Name...",'required'=>'required'])); ?>

                  </div> 

                  <div class="row input-group req-input"> 
                    <?php echo e(Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required'])); ?>

                  </div> 

                  <div class="row input-group req-input"> 
                    <?php echo e(Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required'])); ?>

                  </div> 

                  <div class="row input-group req-input"> 
                    <?php echo e(Form::text('phone', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required'])); ?>

                  </div> 

                  <div class="row input-group req-input"> 
                    <select id="select2" name="country"> 
                      <option value="">Select Your Country</option> 
                     <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($country->country_name); ?>"> <?php echo e($country->country_name); ?></option> 
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> 
                  </div> 

                  <div class="row input-group req-input"> 
                    <?php echo e(Form::textarea('message', null,['placeholder'=>'Your Message ...','rows'=>5])); ?>

                  </div> 

                  <div class="mt-4"></div> 

                  <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-white"> 
                    <input type="checkbox" name="newsletter" id="newsletter" checked> &nbsp;<small>Plant Automation Technology e-Newsletters</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-white"> 
                    <input type="checkbox" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-white"> 
                    <input type="checkbox" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group">                  
                   <?php echo Form::captcha(); ?>

                  </div> 
                  <div class="submit-row"> 
                    <button type="submit" class="btn btn-block submit-form">Submit</button> 
                  </div> 
                </div> 
              </div>              
            <?php echo e(Form::close()); ?>               
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

            <div class="row">                  
              <div id="testimonial" class="carousel slide" data-ride="carousel"> 
                <h2 class="main-heading"><a href="#" class="text-dark">TESTIMONIALS</a></h2>   
                <ol class="carousel-indicators carousel-indicators-round d-flex justify-content-end">
                  <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                  <li data-target="#testimonial" data-slide-to="1"></li>
                  <li data-target="#testimonial" data-slide-to="2"></li>
                </ol>                 
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo e(asset('industry/img/testimonial/01.jpg')); ?>" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />
                    <p class="discription">PlantAutomation is very customer-oriented and dedicated in understanding digital strategy to advise related content in the proposing stage and provides quality service and ensure media schedule is fulfilled. Partnering with Plant Automation has helped us to take our first step to amplify web presence.</p>
                    <p class="name"><strong>Ms. Iris Tsai</strong> - Advantech<br>
                    <small>Digital Marketing Executive</small></p>  
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo e(asset('industry/img/testimonial/02.jpg')); ?>" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />
                    <p class="discription">What I see as strength of your team is the colleagues who are serious, professional and same time quite friendly and polite. Technical services can be obviously always update sometime by next version of programs, but finding good people is not that easy.</p>
                    <p class="name"><strong>Mr. Ardeshir Azartash</strong> - RUHFUS Systemhydraulik GmbH<br>
                    <small>Business Development & International Sales</small></p>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo e(asset('industry/img/testimonial/03.jpg')); ?>" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />
                    <p class="discription">Plant Automation Technology has a very global presence and offers a tremendous service. And as a bonus, we are able to reach a very interesting target group.</p>
                    <p class="name"><strong>Raphael Binder</strong> - Syslogic GmbH<br>
                    <small>Head of Product Management</small></p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <!-- End Right Section -->
          
      </div>
    </div>
    <!-- END Container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/event-news-letter-signup.blade.php ENDPATH**/ ?>