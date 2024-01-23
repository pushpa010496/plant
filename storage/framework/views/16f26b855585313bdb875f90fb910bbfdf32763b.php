
<?php $__env->startSection('style'); ?>
 <style>
    #form-block .card{display:block;border:none;box-shadow: 2px 2px 7px #999;border-radius:7px;transition: all .5s ease-in-out;}
    #form-block .card:hover{transform: scale(1.07);border-radius: 0px;transition: all .5s ease-in-out;}

    #form-block .title-font{font-size:20px;font-weight: 500;padding-top: 10px;padding-bottom: 10px;}
    #form-block p{font-size: 14px;}

    .red-block{color:#e26262;}
    .red-block:hover{background-color:#e26262;color: #fff !important;}

    .teal-blue-block{color: #01c0c8;}
    .teal-blue-block:hover{background-color:#01c0c8;color: #fff !important;}

    .green1-block{color: #77b905;}
    .green1-block:hover{background-color:#77b905;color: #fff !important;}

    .yellow-block{color: #ffb727;}
    .yellow-block:hover{background-color:#ffb727;color: #fff !important;}

    .aqua-blue-block{color: #15da84;}
    .aqua-blue-block:hover{background-color:#15da84;color: #fff !important;}

    .violet-block{color: #9465dc;}
    .violet-block:hover{background-color:#9465dc;color: #fff !important;}

    .pink-block{color: #e966ac;}
    .pink-block:hover{background-color:#e966ac;color: #fff !important;}

    .blue-block{color: #3078b8;}
    .blue-block:hover{background-color:#3078b8;color: #fff !important;}
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>
 
<!-- // Content -->
    <div class="container pt-4 pb-4">  
      <p class="pb-2 pt-4">Plant Automation Technology provides wide range of services to customers who are actively seeking to enhance global visibility. Register with us to expand your business opportunities and be ahead of the competition.</p>

      <div class="row" id="form-block">
        <div class="col-lg-3 pt-2 pb-3 text-center">
          <a href="<?php echo e(url('registration')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 red-block div-scal">
              <i class="fa fa-3x fa-pencil-square-o" aria-hidden="true"></i>
              <h2 class="title-font">Register Your Company</h2>
              <p class="text-center text-dark">Create an amazing impact REGISTERING your company on our portal. Accelerate your professional identity with us.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 pt-2 pb-3 text-center">
          <a href="<?php echo e(url('post-requirement')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 teal-blue-block div-scal">
              <i class="fa fa-3x fa-envelope-open" aria-hidden="true"></i>
              <h2 class="title-font">Post Your Requirement</h2>
              <p class="text-center text-dark">Post your business requirements & find the list of B2B products/services matching your requirement from buyers/sellers.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 pt-2 pb-3 text-center">
          <a href="<?php echo e(url('postevent')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 green1-block div-scal">
              <i class="fa fa-3x fa-desktop" aria-hidden="true"></i>
              <h2 class="title-font">Event Registration</h2>
              <p class="text-center text-dark">Registering event with us helps to announce your event’s existence globally and attract audience attention.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 pt-2 pb-3 text-center">
          <a href="<?php echo e(url('advertise')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 yellow-block div-scal">
              <i class="fa fa-3x fa-bullhorn" aria-hidden="true"></i>
              <h2 class="title-font">Advertise</h2>
              <p class="text-center text-dark">Advertise with us and speed up chances of getting seen and identified by your clients across the globe.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 pt-2 pb-3 text-center">
          <a href="<?php echo e(url('mediapack-download')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 aqua-blue-block div-scal">
              <i class="fa fa-3x fa-file-pdf-o" aria-hidden="true"></i>
              <h2 class="title-font">Download Mediapack</h2>
              <p class="text-center text-dark">Fast-track your business by taking advantage of our various offerings/services. Download our media pack here.</p>
            </div>
          </a>
        </div>

        <!-- <div class="col-lg-3 pt-2 pb-2 text-center">
          <a href="#" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 violet-block div-scal">
              <i class="fa fa-3x fa-question" aria-hidden="true"></i>
              <h2 class="title-font">Enquiry</h2>
              <p class="text-center text-dark">Make it easy to keep up and engage better with your target audience globally by posting an event on our portal.</p>
            </div>
          </a>
        </div> -->
        <div class="col-lg-3 pt-2 pb-2 text-center">
          <a href="<?php echo e(url('/events-newsletters')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 violet-block div-scal">
              <i class="fa fa-3x fa-envelope" aria-hidden="true"></i>
              <h2 class="title-font">Event Newsletter Signup</h2>
              <p class="text-center text-dark">Receive the latest updates happening in the industry straight to your inbox signing up...</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3 pt-2 pb-2 text-center">
          <a href="<?php echo e(url('/registration')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 pink-block div-scal">
              <i class="fa fa-3x fa-user-plus" aria-hidden="true"></i>
              <h2 class="title-font">Newsletter Signup</h2>
              <p class="text-center text-dark">Receive the latest updates happening in the industry straight to your inbox signing up our e-newsletter.</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 pt-2 pb-2 text-center">
          <a href="<?php echo e(url('/contactus')); ?>" target="_blank">
            <div class="card bg-light-gray rounded border-0 p-3 blue-block div-scal">
              <i class="fa fa-3x fa-microphone" aria-hidden="true"></i>
              <h2 class="title-font">Contact Us</h2>
              <p class="text-center text-dark">Thank you for your interest in our services/products. Get in touch with us to serve you better. We would love to hear from you!</p>
            </div>
          </a>
        </div>
        
      </div>
    </div><!-- Container // -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/register.blade.php ENDPATH**/ ?>