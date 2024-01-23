
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          <?php $__currentLoopData = $eventorg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-12">
                <!-- <img src="assets/img/events/smart-factory-expo-event-image.jpg" alt="" class="img-fluid" /> -->
                <h2 class="display-5 pt-1"><b><?php echo e($org->name); ?></b></h2>
            
                <div class="pt-2">
                 <?php echo $org->exhibitor_description; ?>

                </div>
              </div>
            </div>
            
            <div class="pb-2"></div>

            <div class="text-center">
                <h2 class="main-title"><span><b>DIRECTION &amp; VENUE</b></span></h2>
            </div>

            <div class="row">              
              <div class="col-lg-5 mt-2">
                 <div id="map"></div>
              </div>

              <div class="col-lg-6 offset-lg-1 mt-2">
                <p class="mb-3"><i class="fa fa-map-marker text-blue fa-lg" aria-hidden="true"></i> &nbsp; <?php echo e($org->org_address); ?></p>
              
                <p class="mb-3"><i class="fa fa-envelope text-blue" aria-hidden="true"></i> &nbsp; <a href="mailto:visitor-eng.sfe@reedexpo.co.jp" class="text-dark" target="_blank"><?php echo e($org->org_email); ?></a></p>
                <p class="mb-3"><i class="fa fa-phone text-blue" aria-hidden="true"></i> &nbsp; <?php echo e($org->org_contactno); ?></p>
                <p class="mb-3"><i class="fa fa-globe text-blue" aria-hidden="true"></i> &nbsp; <a href="http://www.sma-fac.jp/en/" class="text-dark" target="_blank"><?php echo e($org->org_website); ?></a></p>
              </div>
            </div>

            <div class="mt-3"></div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                    <input type="hidden" name="page" value="profile">
                    <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">
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

   <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $org->latitude; ?>, lng: <?php echo $org->longitude; ?>},
          zoom: 18
        });

        var labels = '<?php echo substr($org->name,0); ?>';
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            title: "<?php echo $org->name; ?>",
            label: labels[i % labels.length]
          });
        });
      var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = [
        {lat: <?php echo $org->latitude; ?>, lng: <?php echo $org->longitude; ?>}
      ]
    </script>
 <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDRDGrQ2qfvhvGoxgwIXol6DJVqwNeVs9Y&callback=initMap" async defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/eventorg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/eventorg/profile.blade.php ENDPATH**/ ?>