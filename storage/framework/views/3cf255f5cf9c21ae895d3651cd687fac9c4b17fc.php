
<?php $__env->startSection('style'); ?>
 
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
      <?php echo Form::open(['url' => 'company-enquiry']); ?>

       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
       <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
      <input type="hidden" name="name" value="plantautomation-event-register">
      <div class="container pt-4 pb-3">        
        <div class="row">          
          <?php $__currentLoopData = $eventprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-9">
            <input type="hidden" name="event_name_display" value="<?php echo e($cp->name); ?>">
            <input type="hidden" name="event_url" value="<?php echo e($cp->event_url); ?>">
            
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-success"><?php echo e(session('message_type')); ?></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                    </div>
                    <div class="modal-body">
                        <?php echo e(session('message')); ?>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="pt-1">
              <h2 class="display-5 mb-3">
                About 
                <?php if($cp->event_url): ?>
                <span class="text-blue font-weight-bold"><?php echo e($cp->name); ?></span>
                <?php else: ?>
                <span class="text-blue font-weight-bold"><?php echo e($cp->name); ?></span>
                <?php endif; ?>
              </h2>

              <div class="pb-3"><?php echo $cp->description; ?></div>
              
            </div>


            <?php if(count($cp->eventspeaker) > 0): ?>
            <div class="bg-light p-3 border border-secondary">
              <h2 class="display-5 text-blue mb-3 mt-0">Speakers</h2>
              <div class="row"> 
              <?php $__currentLoopData = $cp->eventspeaker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speakers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($speakers->show_on_profile == 1): ?>
              <div class="col-lg-3 text-center">               
                <img class="img-fluid" src="<?php echo e(config('app.url')); ?>event/speaker/<?php echo e($speakers->image); ?>" alt="" width="120">
                  <h3 class="display-6 text-blue pt-2"><?php echo e($speakers->name); ?></h3>
                  <p class="card-text"><small><?php echo e($speakers->designation); ?></small></p>                
              </div>
              <?php else: ?>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="text-right"><a href="<?php echo e(url('events/'.$cp->event_url.'/speakers')); ?>" class="text-blue small">More...</a>
              </div>
            </div>
            <?php else: ?>
            <?php endif; ?>

            <div class="mt-3 mb-3"></div>

           
            <div class="row">  
              <div class="col-lg-12 pt-3">
                <?php if(@$cp->eventprofile->exibitors_profile): ?>
                <h3 class="display-5 text-blue">Exhibitors Profile</h3>
                <p class="card-text"><?php echo @$cp->eventprofile->exibitors_profile; ?></p>   
                <?php else: ?>
                <?php endif; ?>             
              </div>

              <div class="col-lg-12 pt-3">
                <?php if(@$cp->eventprofile->visitor_profile): ?>
                <h3 class="display-5 text-blue">Visitors Profile</h3>
                <p class="card-text"><?php echo @$cp->eventprofile->visitor_profile; ?></p>   
                <?php else: ?>
                <?php endif; ?>            
              </div>
            </div>  
            

            

            <div class="mt-3 mb-3"></div>

            <?php if(count($cp->eventpartner) > 0): ?>
            <div> 
              <h3 class="display-5 text-blue">Event Partners</h3>             
              <div class="row">
                <?php $__currentLoopData = $cp->eventpartner->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 mb-2">
                  <img class="img-fluid border border-secondary" src="<?php echo e(config('app.url')); ?>event/partner/<?php echo e($partner->image); ?>" title="<?php echo e($partner->img_title); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>  
              <div class="text-right"><a href="<?php echo e(url('events/'.$cp->event_url.'/partners')); ?>" class="text-blue small">More...</a>
              </div>            
            </div>  
            <?php else: ?>
            <?php endif; ?>
          </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  



          <div class="col-lg-3 pb-3">
            
            <div class="mb-4">
              <a href="<?php echo e(url('events-newsletters')); ?>">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>
              </a>
             <!--  <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
            </div>

            <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary div-shadow"> 
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
                  <div class="form-group">
                    <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])); ?>

                    <input type="hidden" name="cf_leads_page" value="event_profile">
                    <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
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
                      <option>Select Country</option>
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
                   <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                 <input type="hidden" name="action" value="<?php echo e(url('company-enquiry')); ?>">
                 <!-- <div class="form-group mb-0">
                   <?php echo Form::captcha(); ?>

                   <?php if($errors->has('g-recaptcha-response')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
                    <?php endif; ?>
                     <div class="error text-danger verifi"></div>
                </div> -->
               <!--  <button type="submit"  class="btn btn-primary btn-block">Submit</button> -->
               <input type="button" class="btn btn-primary btn-block" value="Submit" name=button1 onclick="return checkform();">
                <!-- <?php echo Form::close(); ?> -->
              </form>
              </div>  
              <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php if(session('message')): ?>
    
          <script type="text/javascript">         
         var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"-success");
              $('#myModal1').modal('show');         
         </script>
      <?php endif; ?>
  <script type="text/javascript">
      var url = "<?php echo e(url('company-enquiry')); ?>";
      function OnButton1(){
        setTimeout(function(){
           document.product_form.action = url;
           document.product_form.submit();
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
  </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/profile.blade.php ENDPATH**/ ?>