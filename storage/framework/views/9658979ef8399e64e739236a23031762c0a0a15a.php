           <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
                <h3 class="text-center mb-3 font-20 font-weight-bold">Product Enquiry</h3>
                  <div class="form-group">
                    <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])); ?>

                    <input type="hidden" name="cmpslug" value="<?php echo e(\Request::segment(2)); ?>">
                    <input type="hidden" name="cf_leads_companyenq" value="<?php echo e(@$companyprofile->first()->company->comp_name); ?>">    <input type="hidden" name="source" value="<?php echo e(\Request::segment(1) == 'im' ?'Marketing':'Direct'); ?>">
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
                   <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title*'])); ?>

                   <?php if($errors->has('cf_leads_jobtitle')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('cf_leads_jobtitle')); ?></div>
                    <?php endif; ?>
                  </div>
                  

                   <?php if(\Request::segment(1) == 'products' && count(Request::segments()) == 3 && Request::segment(3) != 'enquiry-success' || \Request::segment(4) == 'enquiry-success'): ?>
                    
                      <input type="hidden" name="product_id" value="<?php echo e(@$prod->id); ?>">
                      <input type="hidden" name="cf_leads_product" value="<?php echo e(@$prod->title); ?>">

                    <?php else: ?>
                      <?php
                        $products = $companyprofile->first()->pproduct->where('active_flag',1)->where('stage',1)->pluck('title','id')->prepend('-- select product* --',''); 
                      ?>
                      <div class="form-group">
                        <?php echo Form::select('product_id', $products, old('product_id'),['class'=>'form-control','required'=>true]); ?>


                        <?php if($errors->has('product_id')): ?>
                        <div class="error text-danger"><?php echo e($errors->first('product_id')); ?></div>
                        <?php endif; ?>
                      </div>

                    <?php endif; ?>

                  <div class="form-group">
                    <?php echo Form::select('cf_leads_countryname', $countries, old('cf_leads_countryname'),['required'=>'required','class'=>'form-control']); ?>

                
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
                    <textarea rows="3" class="form-control" placeholder="Write Message..." name="description" cols="50" required=""></textarea>
                  </div>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                  <button type="submit"  class="btn btn-primary btn-block">Submit</button> 
                </form>
              </div>  
              <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
              <div class="clearfix"></div>
  </div>


 <?php /**PATH /home/plantautomationt/public_html/resources/views/company/_productEnquiryForall.blade.php ENDPATH**/ ?>