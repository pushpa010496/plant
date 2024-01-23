<?php $__env->startSection('style'); ?>
 <style type="text/css">
  .event-bg {
    background-image: url("<?php echo e(config('app.url')); ?>img/events/event-list/event-listing-bg.jpg");
  }
  #product {
    background-color: #2d8fc7;
    padding: 15px;
}
 </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Begin page content -->

    <div role="main" id="company-profile">
     <div class="container">
        <div class="text-center pt-2">
          <h2 class="main-title"><span class="font-weight-bold">Projects View</span></h2>
        </div>
      </div>
       <!-- // Event Listing -->
      <div class="container pt-2 pb-3">
        <div class="row">
          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-12 offset-lg-9 offset-md-9">  -->
                <!--  <a class="btn btn-block btn-primary" href="<?php echo e(url('registration')); ?>" role="button">-->
                <!--    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Latest Newsletter-->
                <!--  </a>-->
                <!--</div>-->
          <div class="col-lg-12">
       
            <h1 class="display-5 pt-3 pb-4 text-blue"><?php echo e($project->title); ?></h1>
            <div class="row">
              <div class="col-lg-3 mb-3">
                <img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>project/<?php echo e($project->image); ?>" alt="<?php echo e($project->img_alt); ?>"/>
              </div>
              <div class="col-lg-9 mb-3">
                <h3 class="display-6 font-weight-bold mb-3">Specifications:</h3>
                  <div class="row">
                    <div class="col-3">
                      <p>Name:</p>
                      </div>
                      <div class="col-9">
                      <p><?php echo e($project->title); ?></p>
                    </div>
                       <div class="col-3"> 
                      <p>Location:</p> 
                    </div>
                    <div class="col-9">
                      <p><?php echo e($project->location); ?></p>
                    </div>
                     <div class="col-3">
                      <p>Company:</p>
                      </div>
                      <div class="col-9">
                      <p><?php echo e($project->company); ?></p>
                    </div>
                       <div class="col-3"> 
                      <p>Estimated Cost:</p> 
                      </div>
                      <div class="col-9">
                      <p><?php echo e($project->cost); ?></p>
                    </div>
                       <div class="col-3"> 
                      <p>Source:</p> 
                    </div>
                    <div class="col-9">
                      <p><?php echo e($project->source); ?></p>
                    </div>
                  </div>                  
              </div>
            </div>
                <!--      <h3 class="display-6 font-weight-bold mb-3">Introduction:</h3> -->
           <?php echo $project->description; ?>

             <!--   <div class="mt-5 text-right">
              <a href="#" target="_blank"><img src="assets/img/fb.jpg" alt="" class="img-fluid mb-2"/></a>
              <a href="#" target="_blank"><img src="assets/img/twitter.jpg" alt="" class="img-fluid mb-2"/></a>
              <a href="#" target="_blank"><img src="assets/img/g-plus.jpg" alt="" class="img-fluid mb-2"/></a>
              <a href="#" target="_blank"><img src="assets/img/linkedin.jpg" alt="" class="img-fluid mb-2"/></a>
            </div> -->
          </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- <div class="col-lg-3 pt-2 pb-3">
            <div class="pt-2 pb-4">
              <a class="btn btn-block btn-primary" href="<?php echo e(url('newsletter-signup')); ?>" role="button">
                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Newsletter
              </a>
            </div> -->
            <!-- <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
               <h3 class="text-center title mb-3">Post Your Project</h3>
                 <?php if(session('message')): ?>
                    <div class="alert alert-<?php echo e(session('message_type')); ?> alert-dismissible" id="success-alert" role="alert">
                      <a href="<?php echo e(url('newsletter-signup')); ?>">  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></a>
                              <?php echo e(@session('message')); ?>

                          </div>
                      <?php endif; ?>
                    <?php echo Form::open(['url' => 'company-enquiry']); ?>

                        <div class="form-group">
                          <?php echo e(Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])); ?>

                          <input type="hidden" name="page" value="Project View">
                          <input type="hidden" name="slug" value="<?php echo e(\Request::segment(1).'/'.\Request::segment(2)); ?>">
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
                    </div>  
                    <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
                    <div class="clearfix"></div>
            </div> -->
            <!-- <div id="form-sticky">
              <a href="<?php echo e(url('events')); ?>"><img src="<?php echo e(config('app.url')); ?>/img/skyscraper-banner.jpg" alt="" class="img-fluid mt-1 mb-1" /></a>
            </div> 
                </div> -->
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
    <!-- Related project start -->
    <div class="container">
      <div class="row">
      <div class="col-lg-12 col-md-12  col-sm-12">
					<div class="text-left pt-2">
						<h2 class="main-title text-center mb-4"><span><a class="text-blue">Related Projects</a></span></h2>
					</div>
					<div id="product" class="mb-3">
						<div class="row">
            <?php $__currentLoopData = $realated_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<div class="col-lg-2 col-md-2 ">
								<div class="product div-shadow"> 
									<a href="<?php echo e(url('projects/'.$related->project_url)); ?>"><img class="img-fluid div-scal" src="<?php echo config('app.url'); ?>project/<?php echo $related->image;?>" alt="">
									</a>
									<h2><a href="<?php echo e(url('projects/'.$related->project_url)); ?>"></a><?php echo e(str_limit($related->title,'30','..')); ?></h2>
								</div>
							</div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
					

           
            
							  
						</div>
					</div>
				</div> </div>
    </div>
  <!-- Related project start -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
      // Form Sticky
      $(window).scroll(function() {
        var y = $(window).scrollTop();
        if (y > 0) {
          $("#form-sticky").addClass('sticky-top').addClass('pt-180');
        } else {
          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');
        }
      });
    </script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $('.from').datepicker({
      autoclose: true,
      minViewMode: 1,
      format: 'mm/yyyy'
    })
  </script>
  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->
  <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script>
  <script>
    $(document).ready(function() {
      $('#example-getting-started').multiselect();
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/projects/projectview.blade.php ENDPATH**/ ?>