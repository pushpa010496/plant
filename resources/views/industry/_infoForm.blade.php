<ul class="error" style="list-style-type: none;"></ul>

 <div class="form-group"> 

    {{Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'required'=>'required','class'=> 'form-control'])}}

  </div>

  <div class="form-group"> 

    {{Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'required'=>'required','class'=> 'form-control'])}}

  </div>

   <div class="form-group"> 

    {{Form::text('cf_leads_jobtitle', null,['placeholder'=>"Designation...",'required'=>'required','class'=> 'form-control'])}}

  </div>  

    <div class="form-group"> 

    {{Form::text('company', null,['placeholder'=>"Company Name...",'required'=>'required','class'=> 'form-control'])}}

  </div>

   <div class="form-group"> 

    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])}}

  </div> 

    <div class="form-group"> 

    {{Form::text('mobile', null,['placeholder'=>"Phone Number...",'required'=>'required','class'=> 'form-control'])}}

  </div>                   

  <div class="form-group"> 

    {{Form::textarea('description', null,['placeholder'=>'Message ...','rows'=>5,'class'=> 'form-control'])}}

  </div> 

  <div class="mt-4"></div> 

  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">



<div class="text-danger verifi mb-2"></div> 