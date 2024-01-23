
<?php $__env->startSection('style'); ?>
 <style type="text/css">
 	.event-bg {
    background-image: url("<?php echo e(config('app.url')); ?>img/events/event-list/event-listing-bg.jpg");
	}
 </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
     <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          <div class="col-lg-9">
              <div class="row" id="product"> 
            <?php $__currentLoopData = $eventorg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-4 mb-4">
                <div class="product div-shadow">
                  <div class="check">                       
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="productname[]" id="check<?php echo e($cp->event->id); ?>" class="custom-control-input" value="<?php echo e($cp->event->name); ?>">
                      <span class="custom-control-indicator"></span>
                    </label>                      
                  </div> 
                  <div id="prodimage<?php echo e($cp->event->id); ?>">
                    <a href="<?php echo e(url('events/'.$cp->event->event_url)); ?>"><img class="img-fluid" src="<?php echo e(config('app.url').'event/'.$cp->event->image); ?>" alt="<?php echo e($cp->event->img_alt); ?>"/></a>                                           
                    <h2><a href="<?php echo e(url('events/'.$cp->event->event_url)); ?>"><?php echo e($cp->event->name); ?></a></h2>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
            <!--  Event Listing // -->

          <div class="col-lg-3 pt-4 pb-3">
            
            <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Post Your Event</h3>
                 <?php if(session('message')): ?>
                    <div class="alert alert-<?php echo e(session('message_type')); ?> alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
			                        <?php echo e(@session('message')); ?>

			                    </div>
			                <?php endif; ?>
			               <?php echo Form::Open(array('url' => 'postevent-success', 'method' => 'post')); ?>

                     <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                          <?php echo e(Form::text('event_name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Name*'])); ?>

                          <input type="hidden" name="page" value="Events">
                          <input type="hidden" name="url" value="<?php echo url()->current();?>">
                          <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">
                        </div>
                        <div class="form-group">
                          <?php echo e(Form::text('event_venue',null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Venue*'])); ?>

                        </div>
                        <div class="form-gropup">
                          <?php echo e(Form::textarea('event_address',null,['rows'=>3,'required'=>'required',
                          'class'=>'form-control mb-3','placeholder'=>'Event Address*'])); ?>

                          
                        </div>
                        <div class="form-group">
                          <?php echo e(Form::text('start_date',null,['id'=>'datepick','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])); ?>

                          
                        </div>
                        <div class="form-group">
                          <?php echo e(Form::text('end_date',null,['id'=>'datepick1','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])); ?>

                        </div>
                        <div class="form-group">
                         <?php echo e(Form::text('organiser', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Organizer*'])); ?>

                        </div>
                        <div class="form-group">
                         <?php echo e(Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])); ?>

                        </div>
                        <div class="form-group">
                          <?php echo e(Form::text('web_link', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Weblink*'])); ?>

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
                         <?php echo Form::captcha(); ?>

                      </div>
                      <button type="submit"  class="btn btn-primary btn-block">Submit</button>                      
                    </div>  
                    <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              </div>
              <?php echo Form::close(); ?>

              </div>  
            </div>
          </div>
        </div>
      </div>
      <!-- Event Listing // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
 <script type="text/javascript">
     <?php $__currentLoopData = $eventorg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    $('#check<?php echo e($cp->event->id); ?>').change(function()
        {
          if($(this).is(":checked"))
          {  
            $('#prodimage<?php echo e($cp->event->id); ?>').addClass('unselectable');
            $('#prodimage<?php echo e($cp->event->id); ?>').addClass('overlay');     
          } 
          else {
            // $('div.prodimage<?php echo e($cp->event->id); ?>').removeClass("unselectable").addClass("div-shadow");
            $('#prodimage<?php echo e($cp->event->id); ?>').removeClass('unselectable');
            $('#prodimage<?php echo e($cp->event->id); ?>').removeClass('overlay');
          }
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/eventorg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/eventorg/index.blade.php ENDPATH**/ ?>