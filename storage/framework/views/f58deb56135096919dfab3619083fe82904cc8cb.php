
<?php $__env->startSection('style'); ?>

 <style type="text/css">
  .event-bg {
    background-image: url("<?php echo e(config('app.url')); ?>img/events/event-list/event-listing-bg.jpg");
  }
 </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Begin page content -->
    <div role="main" id="company-profile">

      <div class="container">
        <div class="text-center pt-2">
          <h1 class="main-title"><span class="font-weight-bold">Archive Projects</span></h1>
        </div>
      </div>

      <!-- // Event Listing -->
      <div class="container pb-3">
        <div class="row">
          <div class="col-lg-12"> 
            <div class="mt-3 mb-3 text-center">
              <form>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <select name="year" id="filter_year" class="form-control">
                    <?php
                    $starting_year  =date('Y', strtotime('-1 year'));
                      $ending_year = date('Y');
                      for($starting_year; $starting_year <= $ending_year; $starting_year++) {
                         if(date('Y')==$starting_year) { //is the loop currently processing this year?
                            $selected='selected'; //if so, save the word "selected" into a variable
                         } else {  
                            $selected='' ; //otherwise, ensure the variable is empty
                         }
                         //then include the variable inside the option element
                         echo '<option  '.$selected.' value="'.$starting_year.'">'.$starting_year.'</option>';
                      }

                       ?>            
                     </select>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="form-group">
                      <div class="input-group">
                        <?php echo e(Form::select('country[]', $countrylist, null, ['id'=>'filter_country','multiple'=>'multiple'])); ?>

                      </div>
                    </div>
                  </div>       

                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <a href="<?php echo e(url('projects')); ?>" class="btn btn-primary btn-block">Projects</a>
                  </div>            
                 
                  <!--<div class="col-lg-3 col-md-3 col-sm-6 col-12">  -->
                  <!--  <a class="btn btn-block btn-primary" href="<?php echo e(url('registration')); ?>" role="button">-->
                  <!--    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Latest Newsletter-->
                  <!--  </a>-->
                  <!--</div>-->
                </form>

                </div>
                  <!-- <div class="form-group col-lg-4 mb-1">
                    <?php echo \App\Category::attr(['name' => 'parent_id','class'=>'form-control','placeholder'=>'Selcet One','id'=>'filter_category'])
                   ->renderAsDropdown(); ?>

                  </div> -->
               
             <!--  <small class="text-muted">** Search for the Industrial Projects by Country AND Category</small> -->
          </div>          

            <div class="row"> 
              <div class="col-lg-12 mb-2">
                <h2 class="display-5 text-muted">Projects Search Results</h2>
              </div> 

              <div class="col-lg-12 mb-4">
                <div class="row" id="projects-list">  
                  <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-12 mb-4">
                    <div class="projects-list projects-disc div-shadow">
                      <a href="<?php echo e(url('projects/'.$project->  project_url)); ?>"><img class="img-fluid" src="<?php echo e(config('app.url')); ?>project/<?php echo e($project->image); ?>" alt="<?php echo e($project->img_alt); ?>"/></a>
                      <div class="overlay">
                        <div class="text text-white">   
                          <h2 class="pb-1"><a href="<?php echo e(url('projects/'.$project->  project_url)); ?>"><?php echo e($project->company); ?></a></h2>
                          <p class="display-6"><i class="fa fa-map-marker fa-lg mr-1 text-muted" aria-hidden="true"></i> <?php echo e($project->location); ?></p>
                          <p class="display-6 text-warning font-weight-bold"><small>Project Cost :</small> <?php echo e($project->cost); ?></p>                           
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                </div>        
              </div>

            </div>
          </div>

          <!-- <div class="col-lg-3 pt-2 pb-3">
            <div class="pt-2 pb-4">
              <a class="btn btn-block btn-primary" href="<?php echo e(url('e-newsletters')); ?>" role="button">
                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Latest Newsletter
              </a>
            </div> -->

            <!-- <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Post Your Project</h3>
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

                          <input type="hidden" name="page" value="Projects">
                          <input type="hidden" name="slug" value="<?php echo e(\Request::segment(1)); ?>">
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
                  </div>
                </div>
              </div>
              </div>
              <?php echo Form::close(); ?>

              </div>  
            </div> -->
            <!-- <div id="form-sticky">
              <a href="<?php echo e(url('events')); ?>"><img src="<?php echo e(config('app.url')); ?>/img/skyscraper-banner.jpg" alt="" class="img-fluid mt-1 mb-1" /></a>
            </div>
          </div> -->

        </div>
      </div>
      <!-- Event Listing // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<!-- <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script> -->
    


   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('.from').datepicker({
      autoclose: true,
      minViewMode: 1,
      format: 'mm/yyyy'
    })
  </script>
  
  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->
  <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script>
  <script type="text/javascript">

  $(document).ready(function() {
      $('#filter_country').multiselect({
        nonSelectedText: 'By Country'
      });
     
      $('#filter_year').multiselect({
        nonSelectedText: 'By Year'
      });
    });
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
  <script type="text/javascript">
    $(document).ready(function() {


$("#filter_year, #filter_country, #filter_category").change(function()
{
var year=$('#filter_year').val();

var country =  $('#filter_country').val();
var category = $('#filter_category').val();
var dataString = 'year='+year+'&country='+country+'&category='+category;
console.log(year);
console.log(dataString);

$.ajax
({
type: "GET",
url: "<?php echo e(url('/projectfilter')); ?>",
data: dataString,
cache: false,
success: function(data)
{
   $('#projects-list').empty();
   $('#projects-list').append(data);
   
} 
});

});
      $('#example-getting-started').multiselect();
    });


  </script>

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/projects/archive.blade.php ENDPATH**/ ?>