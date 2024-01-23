<?php $__env->startSection('style'); ?>
   <style>
      .contact-bg{
        background-image: url("<?php echo e(url('/industry/img/contact-us-bg.jpg')); ?>");
        background-repeat: no-repeat;
        background-position:center;
        background-size: cover;
        color:#00838F;
        width: 100%;
        height: 200px;
        color: #fff;
         background-color: #fff;color: #3388B9;
      }
      .contact-bg h1{/*padding: 80px 0;*/color: #fff; line-height: 200px;}
      .contact-body-bg{
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3486b8+0,1db9c6+100 */
        background: #3486b8; /* Old browsers */
        background: -moz-linear-gradient(top,  #3486b8 0%, #1db9c6 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #3486b8 0%,#1db9c6 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #3486b8 0%,#1db9c6 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        color: #fff !important;
        background-color: #fff;color: #3388B9;
      }
      .form-group { margin-bottom: 1rem;}
      .form-control {
          display: block;
          width: 100%;
          padding: .375rem .75rem;
          font-size: 1rem;
          line-height: 1.5;
          color: #495057;
          background-color: transparent;
          background-image: none;
          background-clip: padding-box;
          /* border: 1px solid #fff; */
          border-radius:0rem;
          transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
      }
      #autoComplete{
        background-color: #fff !important;
        border: 1px solid #9894944a;
      }
      .contact-btn{width: 200px;height: 40px; background-color: transparent;color: #fff; border: 1px solid #fff;}
      .contact-btn:hover{background-color: #fff;color: #3388B9;}
      iframe{width: 100%;height: 300px;border: 0px;}
      h5{
        font-weight:bold;
      }
      .bold{
        font-weight:bold;
      }
      fieldset {
    display: block;
    /* margin-inline-start: 2px; */
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    /* padding-inline-end: 0.75em; */
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 1px;
    border-style: groove;
    border-color: #fff;

}
.product {
    max-width: 61% !important;
}

.advertising {
      
      max-width: 93% !important;
    
  }
  button.close {
      width: 0px;
      height: 0px;
      position: static !important;
      right:0px;
      top:0px;
      color: #000;
      background-color:#fff !important;
      border: 0;
      border-radius:0%;     
      line-height:0px !important;
    }
  

      </style>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script>
  grecaptcha.ready(function() {
    // First reCAPTCHA
    grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', { action: 'action' }).then(function(token) {
      document.getElementById("g-recaptcha-response").value = token;
    });
  });
</script>
<script>
    grecaptcha.ready(function() {
    // Second reCAPTCHA
    grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', { action: 'action_new' }).then(function(token) {
      document.getElementById("g-recaptcha-response-new").value = token;
    });
  });
</script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="myModal1" class="modal fade" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

        <div class="modal-header">

            <h2 class="modal-title text-blue"> Thank You...</h2>

        </div>

        <div class="modal-body">

            <p class="text-blue">On successful form submission email notification will be sent to the respective regional contact which the
              visitor initially clicked to touch-base us. The form submitter will also get email notification in his registered email.</p>

<br>

        </div>

        <div class="modal-footer">

            <a class="btn btn-primary" role="button" id="aa" name="aa" href="<?php echo e(url('contactus')); ?>"

                aria-expanded="false">

                Close

            </a>

        </div>

    </div>

</div>

</div>

<?php     
       $page = getPageId(Request::segment(2));     
       $page_all = getPage(Request::segment(1));     
     ?>
      <!-- Leader Board Banner -->
      <div class="container">
        <div class="row">
          <?php
          $count =0;
          ?>
          <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
            <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>
                <?php $count++;  ?>
              <?php endif; ?>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if($count == 1): ?>
          <?php $column=12 ?>             
          <?php else: ?>
          <?php $column=6 ?>
          <?php endif; ?>
          <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
          <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all): ?>
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>
          </div>
          <?php else: ?>
          <?php endif; ?>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
 <!-- Start Content -->
    <div class="mt-2"></div>
     <div class="container-fluid contact-bg text-center">
      <div class="row">
        <div class="col-lg-12">
       <h1 class="text-white text-uppercase fa-2x">Contact Us</h1>  
       </div>
     </div>
     </div>
     <div class="container-fluid contact-body-bg pt-4 pb-4">
        <!-- Start Contact -->
        <div class="container">
          <div class="row">  
            <div class="col-lg-6 col-sm-12 pt-4">      
                    <div class="MRGN-10"></div>
                <!--  <div class="col-lg-1"></div> -->
                  <!-- Start Contact Form -->      
                 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                  <!-- <form name="contactus_form" method="post" id="form_count"> -->
                  <form  method="post" action="<?php echo e(route('contactus.post')); ?>">
                    <?php echo csrf_field(); ?>
                     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group row">
                      <label for="name" class="col-lg-4 col-sm-2 col-form-label">First Name</label>
                      <div class="col-lg-8 col-sm-10">
                        <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets "])); ?>

                        <?php if($errors->has('firstname')): ?>
                        <div class="error text-danger"><?php echo e($errors->first('firstname')); ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-lg-4 col-sm-2 col-form-label">Last Name</label>
                      <div class="col-lg-8 col-sm-10">
                        <?php echo e(Form::text('lastname', null,['required'=>'required','class'=>'form-control','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets "])); ?>

                        <?php if($errors->has('lastname')): ?>
                        <div class="error text-danger"><?php echo e($errors->first('lastname')); ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-lg-4 col-sm-2 col-form-label">Email</label>
                      <div class="col-lg-8 col-sm-10">
                       <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control'])); ?>

                       <?php if($errors->has('email')): ?>
                          <div class="error text-danger"><?php echo e($errors->first('email')); ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Company Name</label>
                  <div class="col-lg-8 col-sm-10">
                   <?php echo e(Form::text('company', null,['required'=>'required','class'=>'form-control','pattern'=>"[A-Za-z0-9\s]{3,30}"])); ?>

                   <?php if($errors->has('company')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('company')); ?></div>
                    <?php endif; ?>
                  </div>
                </div>  
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Job Title</label>
                  <div class="col-lg-8 col-sm-10">
                    <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control'])); ?>

                    <?php if($errors->has('cf_leads_jobtitle')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_jobtitle')); ?></div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Telephone</label>
                  <div class="col-lg-8 col-sm-10">
                    <?php echo e(Form::text('mobile', null,['required'=>'required','class'=>'form-control','pattern'=>"[0-9\s._*#()+-]+"])); ?>

                    <?php if($errors->has('mobile')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('mobile')); ?></div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="whom" class="col-lg-4 col-sm-2 col-form-label">How did you hear about us?</label>
                  <div class="col-lg-8 col-sm-10">
                    <select class="form-control" name="whom" required>
                      <option selected disabled>--- Select ---</option>
                      <option value="Internet Search">Internet Search</option>
                      <option value="Social Media">Social Media</option>
                      <option value="Email">Email</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Message</label>
                  <div class="col-lg-8 col-sm-10">
                    <?php echo e(Form::textarea('description', null,['rows'=>3,'required'=>'required','class'=>'form-control'])); ?>

                     <?php if($errors->has('description')): ?>
                          <div class="error text-danger"><?php echo e($errors->first('description')); ?></div>
                        <?php endif; ?>
                  </div>
                </div>
                 <input type="hidden" id="g-recaptcha-response-new" name="g-recaptcha-response-new">
                <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label"></label>
                  <div class="col-lg-8 col-sm-10">
                  <button type="submit" class="btn contact-btn">Submit</button>
                    
                  </div>
                </div>
                
              </form>
            </div>     
            <div class="col-lg-1"></div>
            <div class="col-lg-5 text-white">
              <div class="pt-3"></div>

           

              <div class="col-md-12 mb-2 p-0">
        <fieldset>
                <legend class="advertising">
                    <h6 style="margin:0px !important;font-size:23px;padding:10px;font-weight: bold;">Advertising & Marketing Enquiries</h6>
        </legend>
           
            <div class="form-row">
        <div class="col-lg-6">
        
        <h4>Asia</h4>
        <div class="bold font-16">Monica James</div>
        <p><a data-toggle="modal" data-target="#enquiry"  style="color:yellow;text-decoration:none;cursor:pointer;">Register to Contact</a></p>
        
        </div>
        
        <div class="col-lg-6">
        <h4>EMEA</h4>
        <div class="bold font-16">Peter Thomas</div>
        <p><a  data-toggle="modal" data-target="#enquiry"  style="color:yellow;text-decoration:none;cursor:pointer;">Register to Contact</a></p>
        </div>
        
        </div>
        
        
        <div class="form-row">
        <div class="col-lg-6">
              <h4>North America</h4>
              <div class="bold font-16">Mark Twain</div>
              <p><a data-toggle="modal" data-target="#enquiry"  style="color:yellow;text-decoration:none;cursor:pointer;">Register to Contact</a></p>
        </div>
        
        <div class="col-lg-6">
          <h4>Media Partnership </h4>
          <div class="bold font-16">Sussane Vincent</div>
          <p><a data-toggle="modal" data-target="#enquiry"  style="color:yellow;text-decoration:none;cursor:pointer;">Register to Contact</a></p>
        </div>
        </div>
        </fieldset>
        </div>


        <div class="col-md-12 mb-2 p-0">
        <fieldset>
                <legend class="product">
                    <h6 style="margin:0px !important;font-size:23px;padding:10px;font-weight: bold;">For Product Enquiries</h6>
        </legend>
           
            <div class="form-row">
            <div class="col-lg-12">
        <div class="bold font-16">Lavina Johns</div>
        <p><a data-toggle="modal" data-target="#enquiry"  style="color:yellow;text-decoration:none;cursor:pointer;">Register to Contact</a></p>
        </div>
        
        </div>
        
        </fieldset>
        </div>
              

              
            </div>
          </div>
        </div>
        <!-- End Contact -->
      </div>

<!-- modal -->

<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <h5 class="modal-title text-center">Register to Contact</h5>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
            <div class="modal-body pt-0 pb-0 pl-3 pr-3">
                      <div class="pt-2"></div>          
                      <form  method="post" action="<?php echo e(route('contactus.post')); ?>">
                      <?php echo csrf_field(); ?>
                    <div class="row">
                    <div class="form-group col-md-6 col-12 p-0 m-0">
                      <label for="name" class="col-lg-12 col-12">First Name*</label>
                      <div class="col-lg-12 col-12">
                          <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control'])); ?>

                      </div>
                    </div>
                     <div class="form-group col-md-6 col-12 p-0 m-0">
                      <label for="name" class="col-lg-12 col-12">Last Name*</label>
                      <div class="col-lg-12 col-12">
                          <?php echo e(Form::text('lastname', null,['required'=>'required','class'=>'form-control'])); ?>

                      </div>
                    </div>
                    </div>
                    <div class="row">
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="email" class="col-lg-12 col-12">Email*</label>
                  <div class="col-lg-12 col-12">
                   <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="name" class="col-lg-12 col-12">Telephone*</label>
                  <div class="col-lg-12 col-12">
                    <?php echo e(Form::text('mobile', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="name" class="col-lg-12 col-12">Company Name*</label>
                  <div class="col-lg-12 col-12">
                   <?php echo e(Form::text('company', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="name" class="col-lg-12 col-12">Job Title*</label>
                  <div class="col-lg-12 col-12">
                   <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
              </div>
            <div class="row">
              <div class="form-group col-md-12  col-12 p-0 m-0">
                <label for="name" class="col-lg-12 col-12">Query</label>
                <div class="col-lg-12 col-12">
                  <?php echo e(Form::textarea('description', null,['rows'=>2,'class'=>'form-control'])); ?>

                </div>
              </div>
            </div>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                <!-- <div class="form-group row">
                  <label for="name" class="col-lg-4 col-sm-2 col-form-label">Captcha</label>
                  <div class="col-lg-8 col-sm-10">
                   <?php echo Form::captcha(); ?>

                    </div>
                    <div class="error text-danger verifi"></div>
                </div> -->
               
                <div class="form-group row pt-3" align="center">                 
                  <div class="col-lg-12 col-12" >
                    
                    <input type="submit" class="btn btn-danger rounded" value="Submit">
                  </div>
                </div>
              
                
              </form>
            </div>   
            </div>   
            </div>   
            </div>   

<!-- modal End -->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<?php if(session('status') == 'true'): ?> 
<script type="text/javascript">
 $('#myModal1 ').modal('show');
 </script>
 <?php endif; ?>

  <!-- <?php if(Session::has('status')): ?>
  $('#myModal').modal('show');
      <?php endif; ?>
       -->

 <!-- <?php if(session('status')): ?>
    <script type="text/javascript">
       $('#myModal').modal('show');   
        history.pushState(null, null, "/contactus-success");
    </script>
  <?php endif; ?>  -->
     <!-- <script type="text/javascript">
      var url = "<?php echo e(url('contactus-success')); ?>";
      function OnButton1(){    
        setTimeout(function(){
        document.contactus_form.action = url;
        document.contactus_form.submit();  
        },200);
      }
      //validation
        function checkform() {      
           var flag = true;
           var form = $('#form_count');
           $("#form_count input").each(function(){
              if($(this)[0].hasAttribute("required")){
                if($(this)[0].value == ""){
                  $('#alertModal').modal('show');
                  flag = false;
                }else{
                  return OnButton1();
                }
              }
          });
       }
  </script>  -->
  


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/forms/contactus.blade.php ENDPATH**/ ?>