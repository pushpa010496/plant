
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          
        
          <div class="col-lg-9">
            <div class="row">
                <?php $__currentLoopData = $interviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-6 text-center mb-4">
                <div class="border border-secondary div-shadow p-3 min-height-240">
                  <h2 class="display-5"><?php echo e($cp->title); ?></h2>
                  <img class="img-fluid rounded-circle mb-2" src="<?php echo e(config('app.url').'event/organiser/interview/'.$cp->image); ?>" alt="" width="120">
                  <p><?php echo $cp->description; ?></p>
                  <h3 class="display-5 text-blue"><?php echo e($cp->name); ?></h3>
                  <small><?php echo e($cp->designation); ?></small>
                </div>
              </div>            
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </div>            
          </div>
          
          <div class="col-lg-3 pb-3">
            <div id="form-sticky">
              <div class="bg-white p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Register <small class="text-muted">( for this Event )</small></h3>
                 <?php if(session('message')): ?>
                    <div class="alert alert-<?php echo e(session('message_type')); ?> alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo e(@session('message')); ?>

                    </div>
                <?php endif; ?>
                <?php echo Form::open(['url' => 'company-enquiry']); ?>

                  <div class="form-group">
                    <?php echo e(Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])); ?>

                    <input type="hidden" name="page" value="event organiser interviews">
                    <input type="hidden" name="slug" value="<?php echo e('event-organiser/'.\Request::segment(2).'/'.\Request::segment(3)); ?>">
                  </div>
                  <div class="form-group">
                   <?php echo e(Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])); ?>

                  </div>
                  <div class="form-group">
                    <select class="form-control" name="country">
                      <option>Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="form-group">
                   <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])); ?>

                  </div>
                  <div class="form-group">
                    <?php echo e(Form::text('telephone', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])); ?>

                  </div>
                  <div class="form-group">
                    <?php echo e(Form::textarea('message', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])); ?>

                  </div>
                 <div class="form-group">
                   <?php echo Form::captcha(); ?>

                </div>
                <button type="submit"  class="btn btn-primary btn-block">Submit</button>
                <?php echo Form::close(); ?>

              </div>  
            </div>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/eventorg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/eventorg/interviews.blade.php ENDPATH**/ ?>