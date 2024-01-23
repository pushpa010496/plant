<div class="mb-4">
              <a href="<?php echo e(url('events-newsletters')); ?>">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>
              </a>
              <!-- <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
            </div>
            
            <div id="form-sticky">
              <div class="bg-white p-2 border border-secondary"> 
                <h3 class="text-center display-5 mb-3 pb-2 pt-1 bg-primary text-white">Register <span class="text-white small font-italic">( for this Event )</span></h3>
                 <!-- <?php if(session('message')): ?>
                    <div class="alert alert-<?php echo e(session('message_type')); ?> alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo e(@session('message')); ?>

                    </div>
                <?php endif; ?> -->
                <?php if(session('error')): ?>
              <div class="alert alert-danger" role="alert"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                
               

                <?php $__currentLoopData = $eventprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="cf_leads_eventname" value="<?php echo e($cp->name); ?>"> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="slug" value="<?php echo e('events/'.\Request::segment(2).'/'.\Request::segment(3)); ?>">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
                  
                  <div class="form-group">
                    <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])); ?>

                                      
                   <?php if($errors->has('firstname')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('firstname')); ?></div>
                    <?php endif; ?>
                  </div>
                    <div class="form-group">
                    <?php echo e(Form::text('lastname', null,['required'=>'required','class'=>'form-control','placeholder'=>'Last Name*'])); ?>

                    
                  
                   <?php if($errors->has('lastname')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('lastname')); ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                   <?php echo e(Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])); ?>

                  </div>
                   <div class="form-group">
                   <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title*'])); ?>

                  </div>
                  <div class="form-group">
                       <select class="form-control" name="cf_leads_countryname">
                      <option selected disabled="disabled" value="">Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('cf_leads_countryname')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_countryname')); ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                   <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])); ?>

                  
                  <?php if($errors->has('email')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('email')); ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <?php echo e(Form::text('mobile', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])); ?>


                    <?php if($errors->has('mobile')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('mobile')); ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <?php echo e(Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])); ?>

                    <?php if($errors->has('description')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('description')); ?></div>
                    <?php endif; ?>
                  </div>
                 <div class="form-group">
                   <?php echo Form::captcha(); ?>


                  <?php if($errors->has('g-recaptcha-response')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
                    <?php endif; ?>
                     <div class="error text-danger verifi"></div>
                </div>
                
                   <INPUT type="button" class="btn btn-primary btn-block" value="Submit" onclick="return checkform()">
                <?php echo Form::close(); ?>

              </div>  
              <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
              <div class="clearfix"></div>
            </div>

             <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success"><?php echo e(session('message_type')); ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class=""><?php echo session('message'); ?></p>
                <p>Happy Surfing!</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Events-Client Success Team (CRM),</p>
            <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> -->
              <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div>
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">Event News letter</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <ul class="error" style="list-style-type: none"></ul>
              <form>
                 
                
                   <div class="form-group"> 
                    <?php echo e(Form::text('name', null,['placeholder'=>"Enter Your Name...",'required'=>'required','class'=> 'form-control'])); ?>

                  </div> 

                   <div class="form-group"> 
                    <?php echo e(Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])); ?>

                  </div> 

                   <div class="form-group"> 
                    <?php echo e(Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required','class'=> 'form-control'])); ?>

                  </div> 

                   <!-- <div class="form-group"> 
                    <?php echo e(Form::text('phone', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required','class'=> 'form-control'])); ?>

                  </div> --> 

                   <div class="form-group"> 
                    <select id="select2" name="country" class="form-control"> 
                      <option value="">Select Your Country</option> 
                     <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($country->country_name); ?>"> <?php echo e($country->country_name); ?></option> 
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> 
                  </div> 

                   <!-- <div class="form-group"> 
                    <?php echo e(Form::textarea('message', null,['placeholder'=>'Your Message ...','rows'=>5,'class'=> 'form-control'])); ?>

                  </div>  -->

                  <div class="mt-4"></div> 

                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="newsletter" id="newsletter" checked> &nbsp;<small>Plant Automation Technology e-Newsletters</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group">                  
                   <?php echo Form::captcha(); ?>

                   <span class="verifi"></span>
                  </div> 
                
                         
            <?php echo e(Form::close()); ?>

              <div class="submit-row"> 
                    <button type="submit" class="btn btn-block submit-btn">Submit</button> 

                  </div> 
                
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> -->
               <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div>

       <div id="modalSuccess" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">success</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              
            </div>
            <div class="modal-body">
                <p class="">Thank You. You have successfully registered for our newsletter.</p>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>              -->
               <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div><?php /**PATH /home/plantautomationt/public_html/resources/views/events/_eventRegisterForm2.blade.php ENDPATH**/ ?>