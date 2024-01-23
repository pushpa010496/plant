<?php $__env->startSection('style'); ?>

<style type="text/css">

  .help-block strong{

        color: #ff6666;

    font-weight: 100;

    font-size: 14px;

  }

  .close-btn {

      top: 20px!important;

      right: 20px!important;

      transform: translatex(-30px);

      padding: 0!important;

      width: 32px!important;

      height: 32px!important;

  }

</style>





 <?php use App\Category; ?>

<?php $__env->stopSection(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

 <script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script> 
<?php $__env->startSection('content'); ?>



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

          <div class="col-12 text-center mt-2" >

            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" class="" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>

          </div>

          <?php else: ?>

          <?php endif; ?>  

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>

      <!-- End Leader Board Banner-->



 <!-- Begin page content -->

    <div role="main" id="company-profile">



      <div class="container">

        <div class="text-center pt-2">

          <h2 class="main-title"><span class="font-weight-bold">Tenders</span></h2>

        </div>

      </div>



      <!-- // Event Listing -->

      <div class="container pb-3">

        <div class="row">

          <div class="col-lg-12"> 

            <div class="mt-3 mb-3 text-center">

              <form>

                <div class="form-row" style="row-gap:10px;">                 



                  <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <select name="year" id="filter_year" class="form-control">

                        <?php

                    $starting_year  =date('Y', strtotime('-1 year'));

                      $ending_year = date('Y', strtotime('+1 year'));

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



                  <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <div class="form-group mb-1">

                      <div class="input-group">

                        <select id="filter_country" multiple="multiple" class="w-100" style="border:1px solid #ced4da;">                          

                          <?php $__currentLoopData = $countrylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                          <option value="<?php echo e($country->id); ?>"><?php echo e($country->country_name); ?></option>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                          

                        </select>

                      </div>

                    </div>

                  </div>



                  <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="<?php echo e(route('tender.archives')); ?>" class="btn btn-primary btn-block">Archive Tenders</a>

                  </div>



                </div>

              </form>

             <!--  <small class="text-muted">** Search for the Tenders by Country AND Industry Category</small> -->

            </div>          



            <div class="row"> 

              <div class="col-lg-12 mb-2">

                <h2 class="display-5 text-muted">Tenders Search Results</h2>

              </div> 



              <div class="col-lg-9 mb-4">

                <div class="row" id="tenders-list">  

                  <?php $__currentLoopData = $tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <div class="col-lg-12 mb-4">

                    <div class="div-shadow p-3">  

                      <div class="row">                

                        <div class="col-lg-3">

                          <p class="font-weight-bold">Title:</p>

                        </div>

                        <div class="col-lg-9">

                            <p><?php echo e($tender->title); ?></p>                            

                        </div> 

                        <div class="col-lg-3"><p class="font-weight-bold">Country:</p></div>

                        <div class="col-lg-9"><p><?php echo e($tender->country->country_name); ?></p></div>



                        <div class="col-lg-3">

                          <p class="font-weight-bold">Tender Reference:</p>

                        </div>

                        <div class="col-lg-9"><?php echo e($tender->tender_reference); ?> </div>

                        <div class="col-lg-3">

                          <p class="font-weight-bold">Published Date:</p>

                        </div>

                        <div class="col-lg-9">

                          <p><?php echo e(date('d M Y',strtotime($tender->issue_date))); ?></p>

                        </div>



                        <div class="col-lg-3">

                          <p class="font-weight-bold">Action Deadline:</p>

                        </div>

                        <div class="col-lg-9">

                          <p><?php echo e(date('j F Y', strtotime($tender->action_deadline))); ?></p>

                        </div>



                        <div class="col-lg-3">

                          <p class="font-weight-bold">Short Description:</p>

                        </div>

                        <div class="col-lg-9">

                          <p><?php echo e($tender->home_description); ?></p>

                        </div>



                        





                        <div class="col-lg-3">

                          <p class="font-weight-bold mb-0">View Tender Details:</p>

                        </div>

                        <div class="col-lg-9">

                          <h3 class="display-6 mb-0">

                             

                             <?php if(\Auth::check()): ?>

                             <a href="<?php echo e(url('/tenders/'.$tender->tender_url)); ?>" class="text-blue" >View Details</a>

                            <?php else: ?>

                            <a href="#" data-toggle="modal" data-target="#loginForm" class="text-blue" >View Details</a>

                            

                            

                            <?php endif; ?>

                            

                          </h3>

                        </div>

                      </div>

                    </div>

                    



                <!-- // Popup -->

                <!-- Modal -->

                <div class="modal fade" id="exampleModalCenter<?php echo e($tender->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">

                  <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content text-center p-3">

                      <div class="modal-header">

                        <h4 class="modal-title display-6 text-center" id="exampleModalLongTitle">Energy, Power &amp; Electrical Tenders, Proposals, Projects and Bids.</h4>                        

                        <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">

                          <span aria-hidden="true">×</span>

                        </button>

                      </div>

                      <div class="modal-body">

                        <div class="form">

      

                  <ul class="tab-group">

                    <li class="tab active"><a href="#signup">Sign Up</a></li>

                    <li class="tab"><a href="#login">Log In</a></li>

                  </ul>

      

                  <div class="tab-content">

                    <div id="signup">   

                      <h3 class="display-5 pb-2">Sign Up for Free</h3>

                

                        <form method="POST" action="<?php echo e(route('registers')); ?>">

                                      <?php echo e(csrf_field()); ?>


                          <div class="">

                            <div class="field-wrap">

                              <label>

                                First Name<span class="req">*</span>

                              </label>

                              <input type="text" name="name" required autocomplete="off" />

                            </div>    



                          <div class="field-wrap">

                            <label>

                              Email Address<span class="req">*</span>

                            </label>

                            <input name="email"  type="email"required autocomplete="off"/>

                          </div>

                          

                          <div class="field-wrap">

                            <label>

                              Set A Password<span class="req">*</span>

                            </label>

                            <input name="password" type="password"required autocomplete="off"/>

                          </div>

                           <div class="field-wrap">

                              <label>

                                Confirm Password<span class="req">*</span>

                              </label>

                              <input name="password_confirmation" type="password" required autocomplete="off"/>

                            </div>

                          </div>

                          <input name="slug" type="hidden" value="<?php echo e(url('/tenders/'.$tender->tender_url)); ?>" />

                        

                        <button type="submit" class="button button-block"/>Get Started</button>

                        

                        </form>



                      </div>

        

                    <div id="login">   

                      <h3 class="display-5 pb-2">Welcome Back!</h3>

                      

                      <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">

                          <?php echo e(csrf_field()); ?>




                          <div class="field-wrap<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                            <label>

                              Email Address<span class="req">*</span>

                            </label>

                            <input name="email" value="<?php echo e(old('email')); ?>" autofocus  type="email"required autocomplete="off"/>

                            <?php if($errors->has('email')): ?>

                                      <span class="help-block">

                                          <strong><?php echo e($errors->first('email')); ?></strong>

                                      </span>

                                  <?php endif; ?>

                          </div>

                          

                          <div class="field-wrap<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                            <label>

                              Set A Password<span class="req">*</span>

                            </label>

                            <input name="password" type="password"required autocomplete="off"/>

                           <?php if($errors->has('password')): ?>

                              <span class="help-block">

                                  <strong><?php echo e($errors->first('password')); ?></strong>

                              </span>

                          <?php endif; ?>

                          </div>

                         <input name="slug" type="hidden" value="<?php echo e(url('/tenders/'.$tender->tender_url)); ?>" />

                        <button type="submit" class="button button-block">Login</button>

                              

                      </form>



                    </div>

        

            </div><!-- tab-content -->

      

          </div> <!-- /form -->

                          

         </div>



            <div class="text-center text-muted pb-3">

              <small>                     

                <a href="<?php echo e(route('password.request')); ?>" target="_blank" class="text-muted">Forgot Password</a>

              </small>

            </div>

              </div>

            </div>

          </div>

          <!-- Popup // -->

        </div>  

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  

                </div>        

              </div>



               

                    <div class="col-lg-3 col-md-3">

                <div class="p-2 border border-secondary">

                <!--<div class="bg-gray p-2 border border-secondary">-->

                  <!--<div class="text-center">-->

                  <!--  <h3 class="adv-title">Advertisements</h3>-->

                  <!--</div>-->

                  



                  <?php $__currentLoopData = $banner1314; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

                  <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>





                  <?php if($homebanner12->positions[0]->id == 16 and $pcount->id == 6): ?>



                  <a href="<?php echo e($homebanner12->url); ?>" target="_blank" class="mb-3" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="<?php echo e($homebanner12->img_alt); ?>" title="<?php echo e($homebanner12->img_title); ?>" /></a>



                  <?php else: ?>



                  <?php endif; ?>  

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

              </div>

              



              



            </div>

          </div>



          <!-- <div class="col-lg-3 pt-2 pb-3">

            <div class="pt-2 pb-4">

              <a href="<?php echo e(url('registration')); ?>" target="_blank">

              <button type="button" class="btn btn-block btn-primary">

                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Latest Newsletter

              </button></a>

            </div> -->



                <!-- <div id="form-sticky">

                  <div class="bg-light p-2 border border-secondary"> 

                    <h3 class="text-center title mb-3">Post Your Tender</h3>

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


                              <input type="hidden" name="page" value="Tenders">

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

                          <button type="submit" class="btn btn-primary btn-block">Submit</button>                      

                        </div>  

                        <img src="<?php echo e(config('app.url')); ?>/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  

                        <div class="clearfix"></div>

                </div> -->

                

            <!-- <div id="form-sticky">

                 <a href="<?php echo e(url('events')); ?>"><img src="<?php echo e(config('app.url')); ?>/img/skyscraper-banner.jpg" alt="" class="img-fluid mt-1 mb-1" /></a>

                </div>                 

            </div> -->





              </div>

              </div>

              <?php echo Form::close(); ?>


              </div>  

            </div>

          </div>

        </div>

      </div>

      <!-- Event Listing // -->

    </div>





     <!-- Login modal -->

         <!-- Modal -->

                <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">

                  <div class="modal-dialog  modal-sm" role="document">

                    <div class="modal-content p-3">

                      <div class="modal-header">

                        <h4 class="modal-title text-center" id="exampleModalLongTitle">Members Login</h4>                        

                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">

                          <span aria-hidden="true">×</span>

                        </button>

                      </div>

                      <div class="modal-body">

                        <div class="form">

                          <div id="login">   

                              <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">

                                  <?php echo e(csrf_field()); ?>




                                  <div class="field-wrap<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Email<span class="req">*</span>

                                    </label>

                                    <input name="email" value="<?php echo e(old('email')); ?>" class="form-control" autofocus required type="email"required autocomplete="off"/>

                                    <?php if($errors->has('email')): ?>

                                              <span class="help-block">

                                                  <strong><?php echo e($errors->first('email')); ?></strong>

                                              </span>

                                      <?php endif; ?>

                                  </div>

                                  

                                  <div class="field-wrap<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Password<span class="req">*</span>

                                    </label>

                                    <input name="password" type="password" class="form-control" required autocomplete="off"/>

                                   <?php if($errors->has('password')): ?>

                                      <span class="help-block">

                                          <strong><?php echo e($errors->first('password')); ?></strong>

                                      </span>

                                  <?php endif; ?>

                                  </div>

                                 <input name="slug" type="hidden" value="<?php echo e(url('/tenders/'.$tender->tender_url)); ?>" />

                                <button type="submit" class="btn btn-block btn-primary mt-3">Login</button>

                                <br>

                                <h6>Don't have an account?</h6>

                                

                                <a href="#" data-toggle="modal" data-target="#registerForm" data-dismiss="modal"  class="text-blue">Click here to Sign up</a>

                              </form>

                            </div>

                          </div> 

                      </div>

                    </div>

                  </div>

                

                </div>

                

                

                

                

                <div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">

                  <div class="modal-dialog  modal-sm" role="document">

                    <div class="modal-content p-3">

                      <div class="modal-header">

                        <h4 class="modal-title text-center" id="exampleModalLongTitle">Members Signup</h4>                        

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                          <span aria-hidden="true">×</span>

                        </button>

                      </div>

                      <div class="modal-body">

                        <div class="form">

                          <div id="login">   

                              <form class="form-horizontal" method="POST" action="<?php echo e(url('registers')); ?>">

                                  <?php echo e(csrf_field()); ?>


                                  

                                  <div class="field-wrap<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Name<span class="req">*</span>

                                    </label>

                                    <input name="name" value="<?php echo e(old('name')); ?>" class="form-control" autofocus required type="text"required autocomplete="off"/>

                                    <?php if($errors->has('name')): ?>

                                              <span class="help-block">

                                                  <strong><?php echo e($errors->first('name')); ?></strong>

                                              </span>

                                      <?php endif; ?>

                                  </div>

                                  



                                  <div class="field-wrap<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Email<span class="req">*</span>

                                    </label>

                                    <input name="email" value="<?php echo e(old('email')); ?>" class="form-control" autofocus required type="email"required autocomplete="off"/>

                                    <?php if($errors->has('email')): ?>

                                              <span class="help-block">

                                                  <strong><?php echo e($errors->first('email')); ?></strong>

                                              </span>

                                      <?php endif; ?>

                                  </div>

                                  

                                  <div class="field-wrap<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Password<span class="req">*</span>

                                    </label>

                                    <input name="password" type="password" class="form-control" required autocomplete="off"/>

                                   <?php if($errors->has('password')): ?>

                                      <span class="help-block">

                                          <strong><?php echo e($errors->first('password')); ?></strong>

                                      </span>

                                  <?php endif; ?>

                                  </div>

                                  

                                  <div class="field-wrap<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">

                                    <label class="mt-2 mb-0">

                                      Confirmation Password<span class="req">*</span>

                                    </label>

                                    <input name="password_confirmation" type="password" class="form-control" required autocomplete="off"/>

                                   <?php if($errors->has('password_confirmation')): ?>

                                      <span class="help-block">

                                          <strong><?php echo e($errors->first('password_confirmation')); ?></strong>

                                      </span>

                                  <?php endif; ?>

                                  </div>

                                  

                                 <input name="slug" type="hidden" value="<?php echo e(url('/tenders/'.$tender->tender_url)); ?>" />

                                <button type="submit" class="btn btn-block btn-primary mt-3">Signup</button>

                                <br>

                                

                                

                              </form>

                            </div>

                          </div> 

                      </div>

                    </div>

                  </div>

                

                </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php if($errors->any()): ?>

   <script type="text/javascript">

    $('#loginForm').modal('show');

</script>

<?php endif; ?>

<script>

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



  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

    $('.from').datepicker({

      autoclose: true,

      minViewMode: 1,

      format: 'mm/yyyy'

    })

  </script>

  

  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->

  <!-- <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script> -->

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>

  <script>

  

  

  $('#loginForm').modal('hide')

  

    $(document).ready(function() {

   $('#filter_country').multiselect({

        nonSelectedText: 'By Country'

      });

     

      $('#filter_year').multiselect({

        nonSelectedText: 'By Year'

      });

    });





















    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

  

  var $this = $(this),

      label = $this.prev('label');



    if (e.type === 'keyup') {

      if ($this.val() === '') {

          label.removeClass('active highlight');

        } else {

          label.addClass('active highlight');

        }

    } else if (e.type === 'blur') {

      if( $this.val() === '' ) {

        label.removeClass('active highlight'); 

      } else {

        label.removeClass('highlight');   

      }   

    } else if (e.type === 'focus') {

      

      if( $this.val() === '' ) {

        label.removeClass('highlight'); 

      } 

      else if( $this.val() !== '' ) {

        label.addClass('highlight');

      }

    }



});



$('.tab a').on('click', function (e) {

  

  e.preventDefault();

  

  $(this).parent().addClass('active');

  $(this).parent().siblings().removeClass('active');

  

  target = $(this).attr('href');



  $('.tab-content > div').not(target).hide();

  

  $(target).fadeIn(600);

  

});

  </script>

<script type="text/javascript">

$(document).ready(function()

{

$("#filter_year").change(function(){

      var year = $('#filter_year').val();

     

      var dataString = 'year='+year;

        $.ajax({

        type: "GET",

        url: "<?php echo e(url('/tendercountryfilter')); ?>",

        data: dataString,

        cache: false,

        success: function(data)

        {

         

          $('#filter_country').empty();

            $.each( data, function( key, value ) {                                          

                $('#filter_country').append("<option value='"+ value['id'] +"'>"+ value['country_name'] +"</option>");

            });             

              $('#filter_country').multiselect('destroy');          

              $('#filter_country').multiselect({

                  nonSelectedText: 'By Country'

              });

        }

        });

     

      });

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

url: "<?php echo e(url('/tenderfilter')); ?>",

data: dataString,

cache: false,

success: function(data)

{

   $('#tenders-list').empty();

   $('#tenders-list').append(data);

   

} 

});



});



});

</script>

   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/tenders/index.blade.php ENDPATH**/ ?>