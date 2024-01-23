<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head> 
	<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'UA-91626815-1');
 </script>

 <title>SCWS Americas Enterprises Event</title>
 <link rel="canonical" href="https://www.plantautomation-technology.com/scwsamericas-enterprises-event-2018"/>
 <meta property="og:description" content="SCWS Americas is the only event that brings together the entire Small Cells, Carrier Wi-Fi, Backhaul and DAS ecosystem to share trial and deployment experiences" />
 <meta property="og:title" content="SCWS Americas Enterprises Event" />
 <meta property="og:url" content="https://www.plantautomation-technology.com/scwsamericas-enterprises-event-2018" />
 <meta property="og:keyword" content="SCWS Americas Enterprises Event" />
 <meta property="og:type" content="website" />
 <meta property="og:locale" content="en_GB" />
 <meta property="og:image" content="https://industry.plantautomation-technology.com/promotions/scws/scws-americas-banner.jpg" />

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="shortcut icon" href="<?php echo e(asset('industry/img/favicon.ico')); ?>" type="image/x-icon">  

 <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">
 <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
 <?php echo $__env->yieldContent('style'); ?>

 <style>
 .font-20{font-size: 20px;}
 p{font-size: 15px;}
 li{padding-bottom: 5px; font-size: 15px;}
 .bg-purple{background-color: #331D68;color: #fff;}
 .btn-danger {
  color: #fff;
  background-color: #D41C5A;
  border-color: #D41C5A;
}
.form-group { margin-bottom: 9px;}
.form-control{border-radius: 0px;}
.small{line-height: 16px !important;color: #666;}
</style>
</head>

<body>
  <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-white div-shadow">
     <div class="col-lg-6 text-left">
      <img src="<?php echo e(config('app.url')); ?>/img/main-logo.png" height="60" class="img-fluid d-inline-block" alt="Plant Automation Technology" />
    </div>
    <div class="col-lg-6 text-right">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/scws-americas.png" height="80" class="d-inline-block" alt="TEX WEEK" />
    </div>                  
  </nav> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</header>

<!-- Modal start-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success">Thank You...</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <!-- Modal body-->
      <div class="modal-body">
        <p><?php echo e(session('message')); ?><a href="#">info@plantautomation.com</a></p>
        <p>Sincerely,<br/>
        Plant Automation Technology</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->



<section>
 <img src="<?php echo e(config('app.url')); ?>promotions/scws/scws-americas-banner.jpg" class="img-fluid d-inline-block pb-4" alt="scws" />
</section>

<div class="container">
 <div class="row">
   <div class="col-lg-8">
    <h2 class="font-weight-bold font-20">About the event:</h2>
    <p>SCWS Americas is the only event that brings together the entire Small Cells, Carrier Wi-Fi, Backhaul and DAS ecosystem to share trial and deployment experiences, build lasting business relationships with qualified industry stakeholders and provide a platform for exciting new product launches and technological developments.</p>

    <h2 class="font-weight-bold font-20 pt-1">Benefits of attending:</h2>

    <ul style="list-style: decimal;">
     <li>Understand how connectivity technologies can enable new revenue opportunities such as:
      <ul style="list-style: disc !important;">
       <li>Real-time concessions, merchandise and ticket upgrades</li>
       <li>Targeted promotions, adverts and unique sponsor activations</li>
       <li>Venue-based services to highlight amenities</li>
     </ul>
   </li>
   <li>New and enhanced fan experiences
    <ul style="list-style: disc !important;">
     <li>Access to extra content</li>
     <li>Increased interaction and personalization</li>
   </ul>
 </li>
 <li>Operational benefits
  <ul style="list-style: disc !important;">
   <li>Emergency network, facilities management and health and safety improvements.</li>
 </ul>
</li>
<li>Access to data (which is otherwise not available to stadiums and venues) which can then be used to market future events and tickets.</li>
</ul>        	
</div>

<div class="col-lg-4" id="company-profile">
  <div class="border border-secondary p-3 bg-purple mt-3">
    <h2 class="font-weight-bold display-4 pb-2 text-center">Registration</h2>
   
    <form method="post" action="<?php echo e(route('scwsamericas.success')); ?>">
      <?php echo e(csrf_field()); ?>                  
      <input type="hidden" name="page_type" value="RPA & AI Extension">
      <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name*" required  value="<?php echo e(old('name')); ?>">
        <?php if($errors->has('name')): ?>

        <div class="error text-danger"><?php echo e($errors->first('name')); ?></div>
        <?php endif; ?>             
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required value="<?php echo e(old('company')); ?>">
        <?php if($errors->has('company')): ?>

        <div class="error text-danger"><?php echo e($errors->first('company')); ?></div>
        <?php endif; ?>            
    </div>

      <div class="form-group">
        <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation*" required value="<?php echo e(old('designation')); ?>">
        <?php if($errors->has('designation')): ?>

        <div class="error text-danger"><?php echo e($errors->first('designation')); ?></div>
        <?php endif; ?>		              
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail*" required value="<?php echo e(old('email')); ?>">
        <?php if($errors->has('email')): ?>

        <div class="error text-danger"><?php echo e($errors->first('email')); ?></div>
        <?php endif; ?>          
    </div>

      <div class="form-group">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" required value="<?php echo e(old('phone')); ?>">
          <?php if($errors->has('phone')): ?>

          <div class="error text-danger"><?php echo e($errors->first('phone')); ?></div>
           <?php endif; ?>         
       </div>

      <div class="form-group">
        <select class="form-control" name="country" required value="<?php echo e(old('country')); ?>">
          <?php if($errors->has('country')): ?>

          <div class="error text-danger"><?php echo e($errors->first('country')); ?></div>
          <?php endif; ?>                
          <option>Select Country</option>
          <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <div class="form-group mb-0 mt-3">
        <?php echo Form::captcha(); ?>


         <?php if($errors->has('g-recaptcha-response')): ?>
               <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
         <?php endif; ?>
      </div>   

      <div class="form-group text-center mb-0">
        <button type="submit" class="btn btn-block btn-danger mt-1 btn-radius">Submit</button>
      </div>
    </form>	            
  </div>

	          	<!-- <div class="text-center">
	          		<img src="<?php echo e(config('app.url')); ?>promotions/scws/seniority-attendees.jpg" class="img-fluid mb-3 mt-3" alt="scws" />
		    		<button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#register">Register Now</button>
		    	</div> -->
       </div>
     </div>
   </div>  

   <div class="container">
    <h2 class="font-weight-bold display-4 pt-2 pb-2 text-center">SPEAKERS</h2>
    <div class="row">
      <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/bruce-chatterley.jpg" alt="Bruce Chatterley" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">Bruce Chatterley </h4>
       <p class="small">CEO, <strong>Senet</strong></p>
     </div>

     <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/sue-monahan.jpg" alt="Kristan Kline" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">Sue Monahan</h4>
       <p class="small">CEO, <strong>Small Cell Forum</strong></p>
     </div>

     <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/david-orloff.jpg" alt="David Orloff" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">David Orloff</h4>
       <p class="small">Chair, <strong>Small Cell Forum</strong></p>
     </div>

     <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/mahesh-patel.jpg" alt="Mahesh Patel" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">Mahesh Patel</h4>
       <p class="small">IoT Director, <strong>US Cellular</strong></p>
     </div>

     <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/michael-sherwood.jpg" alt="Michael Sherwood" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">Michael Sherwood</h4>
       <p class="small"> Director of Technology & Innovation, <strong>City of Las Vegas</strong></p>
     </div>

     <div class="col-lg-2 mb-2 text-center">
       <img src="<?php echo e(config('app.url')); ?>promotions/scws/bill-stone.jpg" alt="Bill Stone" class="img-fluid rounded-circle" />
       <h4 class="display-6 font-weight-bold mt-2 mb-1">Bill Stone</h4>
       <p class="small"> Vice President, Technology Development and Planning, <strong>Verizon</strong></p>
     </div>
   </div>
 </div>

 <section class="bg-gray">
  <div class="container">
   <h2 class="font-weight-bold display-4 pt-2 pb-2 text-center">PARTNERS</h2>
   <div class="row">
     <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/small-cell-forum-logo.png" alt="Small Cell Forum" class="img-fluid pb-4" />
    </div>
    <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/cbrs-logo.png" alt="CBRS" class="img-fluid pb-4" />
    </div>
    <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/etsi-logo.png" alt="ETSI" class="img-fluid pb-4" />
    </div>
    <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/delloro-logo.png" alt="Dell'Oro Group" class="img-fluid pb-4" />
    </div>
    <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/atis-logo.png" alt="ATIS" class="img-fluid pb-4" />
    </div>
    <div class="col-lg-2 text-center">
      <img src="<?php echo e(config('app.url')); ?>promotions/scws/five-g-americas-logo.png" alt="5G Americas" class="img-fluid pb-4" />
    </div>
  </div>
</div>
</section>


<div class="container-fluid bg-dark">
  <div class="container pt-3 pb-3 text-center text-light">
    <p class="mb-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.plantautomation-technology.com - Powered by Ochre Media Pvt. Ltd.</p>
    <p class="mb-0"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> info@plantautomation-technology.com</p>
  </div>
</div>




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo e(config('app.url')); ?>js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  $('.carousel').carousel({
    pause:"hover"
  })
</script>
<?php if(session('message')): ?>
<script type="text/javascript">
  $(document).ready(function(){ 
    $('#myModal').modal('show');
             /* setTimeout(
              function() 
              {               
               window.location.href = "<?php echo e(URL::to('download-pdf-texweek')); ?>";
             }, 1000);*/
           });
         </script>
         <?php endif; ?>
       </body>
       </html>


<?php /**PATH /home/plantautomationt/public_html/resources/views/flatpages/scwsamericas.blade.php ENDPATH**/ ?>