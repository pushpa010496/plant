

<form action="<?php echo e(route('askquestion')); ?>" method="post" class="contact-form justify-content-center">


<div class="form-group">
  <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])); ?>

   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <input type="hidden" name="cf_leads_page" value="profile view / ask question">  
  <input type="hidden" name="cf_leads_companyenq" value="<?php echo e(@$cp->title); ?>">
  <input type="hidden" name="formtype" value="modal-form">
  <input type="hidden" name="formid" value="askquestion">
  <input type="hidden" name="slug" value="<?php echo e('products/'.\Request::segment(2).'/'.\Request::segment(3)); ?>">
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

 <?php if($errors->has('company')): ?>
 <div class="error text-danger"><?php echo e($errors->first('company')); ?></div>
 <?php endif; ?>
</div>
<div class="form-group">
 <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title'])); ?>

 <?php if($errors->has('cf_leads_jobtitle')): ?>
 <div class="error text-danger"><?php echo e($errors->first('cf_leads_jobtitle')); ?></div>
 <?php endif; ?>
</div>
<div class="form-group">
  <?php echo Form::select('cf_leads_countryname', $countries, old('cf_leads_countryname'),['class'=>'form-control']); ?>


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
<input type="hidden" id="g-recaptcha-ask-response" name="g-recaptcha-ask-response">
<input type="hidden" name="ask" value="<?php echo e(url('company-askquestion')); ?>">
<!-- <div class="form-group mb-1">
 <?php echo Form::captcha(); ?>

 <?php if($errors->has('g-recaptcha-response')): ?>
 <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
 <?php endif; ?>

 <div class="error text-danger verifi"></div>
</div> -->
 <button type="submit"  class="btn btn-primary btn-block">Submit</button>


</form>

<img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />

<div class="clearfix"></div>



<?php /**PATH /home/plantautomationt/public_html/resources/views/company/_askquestion.blade.php ENDPATH**/ ?>