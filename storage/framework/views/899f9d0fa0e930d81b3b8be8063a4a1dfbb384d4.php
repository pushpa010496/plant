<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91626815-1');
</script>
    <title>Ducks in a ROW | TEX WEEK 2018</title>
    <meta property="og:description" content="Ducks in a ROW: Exclusive Interview - Virgil Miller Ex V.P, COO, Aflac" />
    <meta property="og:title" content="Technology Excellence Week 2018" />
    <meta property="og:url" content="http://www.plantautomation-technology.com/event/texweek-2018" />
    <meta property="og:keyword" content="Ducks in a ROW: Exclusive Interview - Virgil Miller Ex V.P, COO, Aflac,technology excellence week 2018, tex week 2018" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:image" content="https://industry.plantautomation-technology.com/promotions/ducks-in-a-row-image.jpg" />
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo e(asset('industry/img/favicon.ico')); ?>" type="image/x-icon">  

    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
    <?php echo $__env->yieldContent('style'); ?>
  </head>

  <body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white div-shadow fixed-top">
          <div class="col-lg-6 text-left">
          <img src="<?php echo e(config('app.url')); ?>/img/main-logo.png" height="60" class="img-fluid d-inline-block" alt="Plant Automation Technology" /> </div>
          <div class="col-lg-6 text-right">
          <img src="<?php echo e(config('app.url')); ?>promotions/texweek-logo.png" height="60" class="d-inline-block" alt="TEX WEEK" />
          </div>                  
      </nav> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    </header>

    <div class="mt-80 pt-1"></div>
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
                <p>Thank you for downloading the interview. We hope you like it. Keep visiting us for even more insightful industry stuff. If you face any diffculty in downloading or viewing the interview kindly get back to us at <a href="#">info@plantautomation.com</a></p>
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

    <?php if(session('message')): ?>
    <script type="text/javascript">
          $(document).ready(function(){ 
              $('#myModal').modal('show');
              setTimeout(
              function() 
              {               
               window.location.href = "<?php echo e(URL::to('download-pdf-texweek')); ?>";
              }, 1000);
          });
    </script>
    <?php endif; ?>

    <div class="container-fluid bg-light">
      <div class="container text-right pt-2 pb-2">
        <p class="mb-0 font-weight-bold">June 4 – 6, 2018 • Nashville, TN • +44 (0) 207 368 9809</p>
      </div>     
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- <h1 class="font-weight-bold">Ducks in a ROW: Exclusive interview with Ex V.P, COO, Aflac</h1> -->
        	<h2 class="text-center font-weight-bold">Ducks in a ROW: Exclusive Interview <br />
              - Virgil Miller Ex V.P, COO, Aflac</h2>
          <div class="text-center">
        		<img src="<?php echo e(config('app.url')); ?>promotions/ducks-in-a-row-image.jpg" class="img-fluid d-inline-block pt-2" alt="Ducks in a ROW - TEX WEEK" />   
        	</div>
          	<div class="p-3">           	        
	            <p class="mb-2">With 27 years' experience in the insurance game, Virgil Miller has been <b>transforming processes</b> and <b>spearheading technology excellence</b> with a customer focus since the early 90s.</p>
	            <p class="mb-2">Now Executive Vice President, Chief Operations Officer of Aflac U.S.; and President of Aflac Group, he shares his insights into successful digital transformation.</p>

	            <p class="mb-2 font-italic">Read on to learn about:</p>
	            <p class="mb-1 ml-4">&bull; How Virgil transformed Aflac's approach to <b>technology excellence</b> though <b>agility</b></p>
	            <p class="mb-1 ml-4">&bull; What the perspective of <b>digital transformation</b> is from the executive-level</p>
	            <p class="mb-1 ml-4">&bull; Why failures can be as vital as successes when <b>embarking on a transformation journey</b></p>

		           <!--  <ul>
		            	<li>How Virgil transformed Aflac's approach to <b>technology excellence</b> though <b>agility</b></li>
		            	<li>What the perspective of <b>digital transformation</b> is from the executive-level</li>
		            	<li>Why failures can be as vital as successes when <b>embarking on a transformation journey</b></li>
		            </ul> -->

          	</div>
        </div>

        <div class="col-lg-4" id="company-profile">
          <div class="border border-secondary p-3 bg-light mt-3">
            <h2 class="font-weight-bold display-4 pb-3 text-center text-blue">Download Interview</h2>
            <form method="post" action="<?php echo e(route('texweek.success')); ?>">
              <?php echo e(csrf_field()); ?>                  
              <input type="hidden" name="page_type" value="RPA & AI Extension">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail Address*" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" required>
              </div>
              
              <div class="form-group">
                <select class="form-control" name="country" required>
                  <option>Select Country</option>
                  <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <!-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                <label class="custom-control-label pl-2 pt-1" for="customCheck1">Free Executive Survey Report</label>
              </div> -->

              <div class="form-group mb-0 mt-3">
                <?php echo Form::captcha(); ?>

              </div>   

              <div class="form-group text-center">
                  <button type="submit" class="btn btn-block btn-primary mt-1 btn-radius">Download</button>
              </div>
            </form>
          </div>
        <div class="mt-3 p-3 text-center bg-light">
        <h5 style="font-size: 18px; line-height: 25px;">Under no circumstances we could sell or share your personal detials with anyone. Your info is safe with us.</h5>
        </div>
        </div>
      </div>  
    </div>


    <div class="pt-3 pb-3"></div> 

    <div class="container-fluid bg-dark">
      <div class="container pt-4 pb-4 text-center text-light">
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

</body>
</html>


<?php /**PATH /home/plantautomationt/public_html/resources/views/flatpages/texweek.blade.php ENDPATH**/ ?>