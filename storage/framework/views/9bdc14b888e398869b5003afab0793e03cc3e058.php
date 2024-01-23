<ul class="error" style="list-style-type: none;"></ul>

 <div class="form-group"> 

    <?php echo e(Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'required'=>'required','class'=> 'form-control'])); ?>


  </div>

  <div class="form-group"> 

    <?php echo e(Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'required'=>'required','class'=> 'form-control'])); ?>


  </div>

   <div class="form-group"> 

    <?php echo e(Form::text('cf_leads_jobtitle', null,['placeholder'=>"Designation...",'required'=>'required','class'=> 'form-control'])); ?>


  </div>  

    <div class="form-group"> 

    <?php echo e(Form::text('company', null,['placeholder'=>"Company Name...",'required'=>'required','class'=> 'form-control'])); ?>


  </div>

   <div class="form-group"> 

    <?php echo e(Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])); ?>


  </div> 

    <div class="form-group"> 

    <?php echo e(Form::text('mobile', null,['placeholder'=>"Phone Number...",'required'=>'required','class'=> 'form-control'])); ?>


  </div>                   

  <div class="form-group"> 

    <?php echo e(Form::textarea('description', null,['placeholder'=>'Message ...','rows'=>5,'class'=> 'form-control'])); ?>


  </div> 

  <div class="mt-4"></div> 

  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">



<div class="text-danger verifi mb-2"></div> <?php /**PATH /home/plantautomationt/public_html/resources/views/industry/_infoForm.blade.php ENDPATH**/ ?>