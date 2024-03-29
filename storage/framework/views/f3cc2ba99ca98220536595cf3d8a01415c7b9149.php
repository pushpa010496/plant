<?php $__env->startSection('style'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/bootstrap-multiselect.css">



<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/country-typeahead.css">

<style>

  /*multi select*/

  .multiselect-native-select button,.multiselect-native-select .btn-group,.multiselect-native-select{

    width:100%;

  }

  .multiselect-container>li>a>label{

    padding: 3px 20px 3px 10px;

  }

  @media(max-width: 400px){

    .st-btn{

      display: inline-block !important;

      margin-bottom: 5px;

    }

  }    

</style>



<style type="text/css">

  .event-background{

    background-image: url( "<?php echo e(config('app.url')); ?>images/events-banner-bg.jpg");

    width: 100%;

    background-size: cover;

    height: 430px;

  }

  #ui-datepicker-div{z-index: 99999999999999999;}



  .bg-orange{background-color: #e7742d;}

  .bg-blue{background-color: #5580e0;}

  .bg-yellow{background-color: #e2a71b;}



  .custom-checkbox .custom-control-label:before{box-shadow: 0 0 1px rgba(0,0,0,.5) !important;border: 1px solid #fff;border-radius: 2px;padding: 5px;background-color: transparent;color: #fff;}

  .custom-checkbox .custom-control-label:after{top:4px;left: 0px;color: #fff;}



  .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {

    background-color: transparent;

  }



  .bg-skew {

    display:inline-block;

    transition: background 0.2s;

    transform: skew(-15deg);  /* SKEW */

  }

  .bg-skew > label {

    display:block;

    text-decoration:none;

    /*padding: 5px 10px;*/

    transform: skew(15deg); /* INVERSE SKEW */

  }

  

  .btn-purple {

    color: #fff;

    background-color: #92278f;

    border-color: #92278f;

  }



  .btn-purple.active,

  .btn-purple:active,

  .btn-purple:focus,

  .btn-purple:hover,

  .open>.dropdown-toggle.btn-purple {

    color: #fff;

    background-color: #82177F;

    border-color: #92278f;

  }



  .st-btn{z-index: 999 !important;}



  .inputselect-radius{

    border-radius: 0;

  }

  #displayValue.form-control{

    border-right-color: #fff !important;

  }

  #displayValue.form-control:focus,select:focus{

    box-shadow: none;

    outline: none;

  }



  #st-1{

    position: relative;

    right: 60px;

    z-index: 11 !important;

  }

  #st-1 .st-btn{

    height: 38px !important;

  }

  #st-1 .st-btn:hover{

    top:0 !important;

  }

  #st-1 .st-btn[data-network='sharethis'] {

    background-color: #1c83c1 !important;

  }

  /* custom  input select */

  .select_main{

    position:relative;

    width:90%;

    height:42px;

    border:0;

    padding:0;

    margin:0;       

  }

  .select_main select{       

    background: url('<?php echo e(config('app.url')); ?>images/arrow-down.png') right / 20px no-repeat #fff;

    padding-right: 20px;

    border:1px solid #4ca4dc;

    position:absolute;

    top:0px;

    left:0px;

    width:100%;

    height:42px;

    line-height:20px;

    margin:0;

    padding:0;

    border-color: #92278f !important;

  }

  .select_main input{

    position:absolute;

    top:0px;

    left:0px;

    width:95%;

    height:42px;

    border:1px solid #556;

  }

  #event-lists{

    width:100%;

  }

  @media  only screen and (max-width: 455px){

    .select_main{

      width:83%;           

    }

    .select_main select{

      width:100%;

    }

    .select_main input{    

      width:92%;      

    }

  }
  .input-group-btn .btn {
    padding:12px !important;
  }

</style>



<?php $__env->stopSection(); ?>

<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

  function checkpopup($id){

    if($id =='post'){

         grecaptcha.ready(function() {

          grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

            document.getElementById("g-recaptcha-response").value=token

          });

        });

    }else{

        grecaptcha.ready(function() {

          grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

            document.getElementById("g-recaptcha-newsletter-response").value=token

          });

        });

    }

  }

    

</script>



<?php $__env->startSection('content'); ?>





<div class="pt-2"></div>  






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
<!-- Banner & Search -->

<section class="event-background text-white">

  <div class="container">

    <div class="row">

      <div class="col-lg-4 col-md-4">

        <div class="bg-orange pt-3 pl-4 pr-4 text bg-skew">

          <label class=" font-weight-bold" for="tradeshowsCheck"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Trade Shows / Fairs / Expos</label>

        </div>

      </div> 



      <div class="col-lg-5 col-md-5">

        <div class="bg-blue pt-3 pl-4 pr-4 text bg-skew">

          <label class=" font-weight-bold" for="conferencesCheck"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Conferences / Seminars / Workshops</label>             

        </div>

      </div> 



      <div class="col-lg-3 col-md-3">

        <div class="bg-yellow pt-3 pl-4 pr-4 text bg-skew">

          <label class=" font-weight-bold" for="industrialcustomCheck"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Industrial Summits</label>           

        </div> 

      </div>

    </div> 

  </div>           

</section>

<!-- Banner & Search -->





<!-- // Quick Links & Share -->

<div class="container" style="position: relative;top: -38px;">

  <div class="col-lg-12 text-center">

    <div class="">

      <a class="col-lg-2 btn btn-purple mb-2" href="#"  onclick="return checkpopup('event')" data-toggle="modal" data-target="#myModal1" role="button">Post your event</a>



      <a class="col-lg-3 btn btn-primary mb-2" href="#" onclick="return checkpopup('newsletter')" data-toggle="modal" data-target="#myModal2"  role="button">Events Newsletter Sign Up</a>



      <a class="col-lg-3 btn btn-primary mb-2" href="<?php echo e(url('events-newsletters')); ?>" role="button">Newsletter Archives</a>

      <a class="col-lg-2 btn btn-primary mb-2" href="<?php echo e(url('events/archives')); ?>" role="button">Event Archives</a>

      <div class="col-lg-1 sharethis-inline-share-buttons pull-right mb-2"></div>

    </div>

  </div>

</div>

<!-- Quick Links & Share // -->



<div class="pt-1 clearfix"></div>



<div class="container">

  <div class="row">

    <!-- // Left - Events List -->

    <div class="col-lg-8">   

      <!-- // Event SEARCH -->

      <div class="row">

        <div class="col-lg-8 offset-lg-2 pt-2 mb-4 text-center" id="main-search">

          

          <div class="input-group input-group-lg">

            

            

            

            

            <div class="select_main">

              <select class="inputselect-radius filterselect"  

              onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text;" style=" -moz-appearance: none;-webkit-appearance:none;">

              <option disabled>Select Category</option>

              <?php $__currentLoopData = $eventCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <option value=<?php echo e($cat->id); ?>><?php echo e($cat->name); ?></option>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

            <input type="hidden" value="" id="catId">

            <input type="text" name="displayValue" id="displayValue" class="form-control inputselectValue inputselect-radius" 

            placeholder="Search by event type or event name" onfocus="this.select()"

            >

            <input name="idValue" id="idValue" type="hidden">

          </div>

          

          <span class="input-group-btn">

            <button class="btn btn-secondary" id="submitSelect">

              <i class="fa fa-search" aria-hidden="true"></i><!-- Search -->

            </button>

          </span>

        </div>

      </div>

    </div>

    <!-- Event SEARCH // -->





    <!-- // Event Filter -->

    <div class="row"> 

      <div class="col-lg-12">

        <form>

          <div class="form-row">

            <div class="col-lg-4 mb-1">

              <div class="input-group">

                <select name="year" id="filter_year" class="form-control">

                  <option value="" multiple="multiple">Select Year</option>

                  <?php

                  $starting_year  =date('Y');

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

                  </div>

                  <div class="col-lg-4 mb-1">

                    <div class="input-group">

                      <!-- <?php echo e(Form::selectMonth('month[]',null,['class'=>'form-control','multiple'=>'multiple','placeholder'=>'Select Month','id'=>'filter_month'])); ?> -->

                      <select class="form-control" name='month[]' multiple="multiple" id="filter_month">

                        <?php $m = date('n');

                        

                        ?>

                        <?php for($i = $m; $i<=12; $i++): ?>

                        

                        <?php if(date('n') >= $m): ?>

                        <?php  $date="2018-".$i; ?>

                        <option value="<?php echo e($i); ?>"><?php echo  date('F', strtotime($date)) ?></option>

                        <?php endif; ?>                           

                        

                        <?php endfor; ?>

                        

                        

                        </select>

                      </div>

                    </div>

                    <div class="col-lg-4 mb-1">

                      <div class="form-group">

                        <div class="input-group">

                          <!-- <?php echo e(Form::input('text', 'country', null, ['class' => 'form-control','placeholder' => 'Search By Country'])); ?> -->



                          <div id="prefetch">

                            <?php echo e(Form::input('text', 'country', null, ['id'=>'filter_country','class' => 'form-control typeahead','placeholder' => 'Search By Country'])); ?>


                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                </form>

                <div class="clearfix"></div>

              </div>

            </div>

            <!-- // Event Filter -->





            <div class="pb-3"></div>





            <!-- // Event List -->

            <div class="row">

              <h1 class="font-weight-bold display-5 pb-2">Upcoming Events</h1>

              <div id="event-lists" >

                <?php $__currentLoopData = $eventprofiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-12 bg-light border-bottom pb-2 pt-2">

                  <div class="row">

                    <div class="col-lg-9">

                      <h2 class="display-6 mt-2 pb-2">

                        <?php if($cp->event_url): ?>

                        <a href="<?php echo e(url('events/'.$cp->event_url)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>

                        <?php else: ?>

                        <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>

                        <?php endif; ?>

                      </h2>



                      <p class="mb-2">

                        <div class="row">

                          <i class="fa fa-lg fa-calendar-check-o col-lg-1" aria-hidden="true"></i>

                          <span class="col-lg-11"><?php echo date('j F Y', strtotime($cp->start_date)); ?> &nbsp; - &nbsp; <?php echo date('j F Y', strtotime($cp->end_date)); ?></span>

                        </div>

                      </p>



                      <p class="mb-1">

                        <div class="row">

                          <i class="fa fa-lg fa-map-marker col-lg-1" aria-hidden="true"></i>

                          <span class="col-lg-11"><?php echo e($cp->venue); ?>, <?php echo e($cp->country); ?></span>

                        </div>

                      </p>



                     



                              <div class="row">

                      <div class="col-lg-9 col-md-9 col-sm-9 col-12">

                        <p class="mb-1 small font-italic">

                          <img class="img-fluid" width="18" src="<?php echo e(config('app.url')); ?>event/event-type.png" alt="Event Type"/> <span class="bg-white pt-1 pb-1 pl-2 pr-2">Event Type: <?php if($cp->cat_id=='24'): ?><strong class="text-success"><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='25'): ?><strong class="text-warning "><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='26'): ?><strong class="text-primary "><?php echo e($cp->eventcategory->name); ?></strong><?php elseif($cp->cat_id=='27'): ?><strong class="text-info"><?php echo e($cp->eventcategory->name); ?></strong><?php endif; ?></span>

                        </p>

                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">

                        <p class="mb-1">

                          <?php if($cp->event_url): ?>

                          <a href="<?php echo e(url('events/'.$cp->event_url)); ?>"><strong>More...</strong></a>

                          <?php else: ?>

                          <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong>More...</strong></a>

                          <?php endif; ?>                      

                        </p>

                      </div>

                    </div>

                    </div>



                    <div class="col-lg-3 pr-2">

                      <img class="img-fluid" src="<?php echo e(config('app.url')); ?>event/<?php echo e($cp->big_image); ?>" alt="<?php echo e($cp->img_alt); ?>"/>

                    </div>

                  </div>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 <div id="loadmore">

                  <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

               </div>

              </div>

            </div>

           

            <!-- Event List // -->

          </div>



          <!-- Left - Events List //-->



          <!-- // Right - Sponsored Events -->

          <div class="col-lg-3 offset-lg-1 pt-1 text-center">

            <div class=" p-2 border border-secondary banner-sticky">

              <!--<div class="text-center">-->

              <!--  <h3 class="adv-title">Sponsored Events</h3>-->

              <!--</div>-->



              <?php $__currentLoopData = $event_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    

              <?php $__currentLoopData = $banner->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if($banner->positions[0]->id == 16 and $page->id === 4): ?>

              <a href="<?php echo e($banner->url); ?>" target="_blank" title="<?php echo e($banner->title); ?>">

                <img class="img-fluid border border-secondary mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $banner->image;?>" alt="<?php echo e($banner->img_alt); ?>" /></a>                            

              <?php endif; ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- 
              <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/moxa-india-industrial-networking-pvt-ltd/video/Moxa.mp4" type="video/mp4">
                      
                    </video>
                    <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/sms-tork/video/WIN-Eurasia-2023.mp4" type="video/mp4">
                      
                    </video> -->
                    <video controls="" ttile="steel"  width="230" height="130"  allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/mpl-ag/video/MPL-AGSwitzerland-Company.mp4" type="video/mp4">
                </video>
                <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/scaglia-indeva-spa/video/indeva-manipulators.mp4" type="video/mp4">
                </video>



              <!--<p class="font-italic font-weight-bold text-center text-secondary mb-0">See your banner here...</p>-->

            </div>

          </div>

          <!-- Right - Sponsored Events // -->

        </div>

      </div>





      <div class="container">      

        <div class="row">

          <div class="col-lg-12 pl-0">

            <h3 class="font-weight-bold display-5 pb-2 pt-5">Featured Organizers</h3>

          </div>

          

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516629148-sercos-hm.jpg" alt="" class="img-fluid">

          </div>

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516627818-ptc-asia-hm.jpg" alt="" class="img-fluid">

          </div>

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516625903-reedexpo-hm.jpg" alt="" class="img-fluid">

          </div>

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516627926-cemat-asia-hm.jpg" alt="" class="img-fluid">

          </div>

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516625346-aci-hm.jpg" alt="" class="img-fluid">

          </div>

          <div class="col-lg-2 mb-2">

            <img src="<?php echo e(config('app.url')); ?>partner/1516624921-globenewswire-hm.jpg" alt="" class="img-fluid">

          </div>

        </div>

      </div>





      <div class="pt-3 pb-3"></div>





    <div id="myModal1" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <h4 class="modal-title text-success">Post your Event</h4>

            <button type="button" class="close" data-dismiss="modal">&times;</button>



          </div>

          <div class="modal-body">

            <ul class="error" style="list-style-type: none;"></ul>

            <form  method="post" action="<?php echo e(route('storepostevent.post')); ?>" >

              <?php echo csrf_field(); ?>

              <div class="form-group">

                <?php echo e(Form::text('cf_leads_eventname', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Name*'])); ?>


                <input type="hidden" name="page" value="Events">

                <input type="hidden" name="url" value="<?php echo url()->current();?>">

                <input type="hidden" name="slug" value="<?php echo e(\Request::segment(2)); ?>">

              </div>

              <div class="form-group">

                <?php echo e(Form::text('cf_leads_eventvenue',null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Venue*'])); ?>


              </div>

              <div class="form-gropup">

                <?php echo e(Form::textarea('cf_leads_eventaddress',null,['rows'=>3,'required'=>'required',

                'class'=>'form-control mb-3','placeholder'=>'Event Address*'])); ?>




              </div>

              <div class="form-group">

                <?php echo e(Form::text('cf_leads_startdate',null,['required'=>'required','id'=>'datepick','class'=>'form-control','placeholder'=>'Start Date'])); ?>




              </div>

              <div class="form-group">

                <?php echo e(Form::text('cf_leads_enddate',null,['required'=>'required','id'=>'datepick1','class'=>'form-control','placeholder'=>'End Date'])); ?>


              </div>

              <div class="form-group">

               <?php echo e(Form::text('cf_leads_organiser', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Organizer*'])); ?>


             </div>

             <div class="form-group">

               <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Job Title*'])); ?>


             </div>

             <div class="form-group">

               <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email'])); ?>


             </div>

             <div class="form-group">

              <?php echo e(Form::text('cf_leads_weblink', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Weblink*'])); ?>


            </div>

            <div class="form-group">

              <select class="form-control" name="cf_leads_countryname">

                <option>Select Country</option>

                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option> 

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>

            </div>



             <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

             <input type="hidden" name="action" value="<?php echo e(url('postevent-success')); ?>">

            <!-- <div class="form-group">

             <?php echo Form::captcha(); ?>


           </div> -->

           <div class="submit-row"> 

              <button type="submit" class="btn btn-block submit-form">Submit</button> 

            </div>



         </form>

          

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>



 <div id="myModal2" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title text-success">Event Newsletter</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <ul class="error" style="list-style-type: none;"></ul>

              <form method="post" action="<?php echo e(url('newsletter-signup-success')); ?>">

                <?php echo csrf_field(); ?>

                  <input type="hidden" name="name" value="pulpandpaper-events-newsletter-signup">

                  

                   <div class="form-group"> 

                    <?php echo e(Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> 

                   <div class="form-group"> 

                    <?php echo e(Form::text('lastname', null,['placeholder'=>"Enter Your LastName...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> 

                   <div class="form-group"> 

                    <?php echo e(Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> 



                   <div class="form-group"> 

                    <?php echo e(Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> 

                  <div class="form-group"> 

                    <?php echo e(Form::text('cf_leads_jobtitle', null,['placeholder'=>"Enter Your Job Title name...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> 



                   <!-- <div class="form-group"> 

                    <?php echo e(Form::text('phone', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required','class'=> 'form-control'])); ?>


                  </div> --> 



                   <div class="form-group"> 

                    <select id="select2" name="cf_leads_countryname" class="form-control"> 

                      <option value="">Select Your Country</option> 

                     <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <option value="<?php echo e($country->country_name); ?>"> <?php echo e($country->country_name); ?></option> 

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select> 

                  </div> 

                   <input type="hidden" id="g-recaptcha-newsletter-response" name="g-recaptcha-newsletter-response">

                  <input type="hidden" name="action" value="<?php echo e(url('newsletter-signup-success')); ?>">



                   <!-- <div class="form-group"> 

                    <?php echo e(Form::textarea('message', null,['placeholder'=>'Your Message ...','rows'=>5,'class'=> 'form-control'])); ?>


                  </div>  -->



                  <div class="mt-4"></div> 



                  <div class="text-left form-group mb-0 text-black" > 

                    <label class="checkbox-inline "> 

                    <input type="checkbox" name="newsletter" id="newsletter" checked> &nbsp;<small>Pulp and Paper Technology e-Newsletters</small>

                    </label> 

                  </div> 

                  <div class="text-left form-group mb-0 text-black" > 

                    <label class="checkbox-inline "> 

                    <input type="checkbox" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>

                    </label> 

                  </div> 

                  <div class="text-left form-group mb-0 text-black" > 

                    <label class="checkbox-inline "> 

                    <input type="checkbox" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>

                    </label> 

                  </div> 

                 

                 <!--  <div class="text-left form-group">                  

                   <?php echo Form::captcha(); ?>


                  </div>  -->

                  <div class="submit-row"> 

                    <button type="submit" class="btn btn-block submit-form">Submit</button>

                  </div>

                </form>

                   

                  </div>

                  <div class="modal-footer">

                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

                  </div>

          </div>

        </div>

      </div>



        <div id="eventmyModal" class="modal fade" role="dialog">

          <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">

             <div class="modal-header">

              <h5 class="modal-title text-success">Success! You have successfully submitted your Event</h5>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <p class="">Thank you for your interest in our Events section. We have received your posting and a client success team member will get in touch with you shortly to take this ahead.</p>

              <p>Happy Surfing!</p>

              <p class="mb-0">Regards,</p>

              <p class="mb-0">Events -Client Success Team (CRM),</p>

              <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">

            </div>

            <div class="modal-footer">        

            <a class="btn btn-default" role="button" id="aa" name="aa"  href="<?php echo e(url('events')); ?>" aria-expanded="false">

              Close

            </a>          

          </div>

         </div>

       </div>

     </div>



     <div id="myModalEs" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <h4 class="modal-title text-success">success</h4>                

          </div>

          <div class="modal-body">

            <p class="">Thank You. You have successfully Posted your event.</p>

          </div>

          <div class="modal-footer">

           <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a>

         </div>

       </div>

     </div>

   </div>

   <?php $__env->stopSection(); ?>

   

   <?php $__env->startSection('scripts'); ?>

   

   <?php if(session('message')): ?>

   

   <?php endif; ?>







   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

   

   <script src="<?php echo e(config('app.url')); ?>js/jquery-1.12.4.min.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/bootstrap335.min.js"></script>

   <script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/typeahead.bundle.js"></script>

   <script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/bootstrap-multiselect.js"></script>

   <script src="//platform-api.sharethis.com/js/sharethis.js#property=5b2cc883a7603d0012fa893b&product=inline-share-buttons"></script>



   

   <script type="text/javascript">

     var jsonCountries = "<?php echo e(asset('public/js/countries.json')); ?>";

     var url_eventfilter = "<?php echo e(url('/eventfilter')); ?>";

     var url_eventselectfilter = "<?php echo e(url('/eventselectfilter')); ?>";

     var url_eventcategory ="<?php echo e(url('/eventcategory')); ?>";

     var url_newsletter_signup = "<?php echo e(url('newsletter-signup-success')); ?>";

     var url_postevent = "<?php echo e(url('postevent-success')); ?>";

     var url_eventcountryfilter = "<?php echo e(url('/eventcountryfilter')); ?>";

     var url_eventdatefilter = "<?php echo e(url('/eventdatefilter')); ?>";

   </script>

   

   

<script>



  var countries = new Bloodhound({

    datumTokenizer: Bloodhound.tokenizers.whitespace,

    queryTokenizer: Bloodhound.tokenizers.whitespace,

      prefetch: "<?php echo e(asset('public/js/countries.json')); ?>"

    });



      // passing in `null` for the `options` arguments will result in the default

      // options being used

      $('#prefetch .typeahead').typeahead(null, {

        name: 'countries',

        source: countries,

        

      }).on('typeahead:selected', function(event, selection) {



        var month=$('#filter_month').val();



        var country =  $('#filter_country').val();

        var year = $('#filter_year').val();

        var dataString = 'month='+month+'&country='+country+'&year='+year;

        

        $.ajax

        ({

          type: "GET",

          url: "<?php echo e(url('/eventfilter')); ?>",

          data: dataString,

          cache: false,

          success: function(data)

          {

           $('#event-lists').empty();

           $('#event-lists').append(data);

           return data; 

         }

       });

      });

    </script>

  <!-- <style>

    .tt-menu{background-color: #eee;width: 100%;padding: 10px;box-shadow:0 .5rem 1rem rgba(0,0,0,.15);font-size: 14px;line-height: 20px;}

  </style> -->





  <script>

    $('#datepick').datepicker({

      autoclose: true,

      minViewMode: 1,

      changeMonth: true, 

      changeYear: true, 

      format: 'mm/yyyy'

    })

    $('#datepick1').datepicker({

      autoclose: true,

      minViewMode: 1,

      changeMonth: true, 

      changeYear: true, 

      format: 'mm/yyyy'

    })

  </script>

  

  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->

  <!--  <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script> -->

  

  <script>

    $(document).ready(function() {

      $('#filter_month').multiselect({

       nonSelectedText: 'By Month'

     });

      $('#filter_year').multiselect({

        nonSelectedText: 'By Year'

      });



    });

  </script>

  <script type="text/javascript">

    $(document).ready(function()

    {

      $("#filter_month, #filter_year").change(function()

      {

          $('#loadmore').hide();

        var month=$('#filter_month').val();

        var country =  $('#filter_country').val();

        var year = $('#filter_year').val();

        var dataString = 'month='+month+'&country='+country+'&year='+year;

        $.ajax

        ({

          type: "GET",

          url: "<?php echo e(url('/eventfilter')); ?>",

          data: dataString,

          cache: false,

          success: function(data)

          {

           

           $('#event-lists').empty();

           $('#event-lists').append(data);

           return data; 

         }

       });



      });



      $("#filter_country1").on('keyup',function()

      {



        var month=$('#filter_month').val();



        var country =  $('#filter_country').val();

        var year = $('#filter_year').val();

        var dataString = 'month='+month+'&country='+country+'&year='+year;





        $.ajax

        ({

          type: "GET",

          url: "<?php echo e(url('/eventfilter')); ?>",

          data: dataString,

          cache: false,

          success: function(data)

          {

           $('#event-lists').empty();

           $('#event-lists').append(data);

           return data; 

         }

       });



      });



    });

  </script>

  <script >

    function Multiselect(select, options) {

      Multiselect.prototype = {

        defaults: {

          nonSelectedText: 'Select Month'

        }

      }

    }

    $('#displayValue').on("keypress", function(e) {

      if (e.keyCode == 13) {

       ajaxFilter();   

       return false; 

     }

   }); 

    $('.filterselect').change(function(){

     ajaxFilter();              

   });



    $('#submitSelect').on('click',function(){

      ajaxFilter();

    });



    function ajaxFilter(){

     var input = $('.inputselectValue').val(); 

     var category = $('#catId').val($('select').val());

     

     if($('#catId').val() == ''){

      var url = "<?php echo e(url('/eventselectfilter')); ?>";

    }else{

      var url = "<?php echo e(url('/eventcategory')); ?>" +'/'+$('#catId').val();

    }

    

    var dataString = 'event='+input;

    $.ajax

    ({

      type: "GET",

      url: url,

      data: dataString,

      cache: false,

      success: function(data)

      {

        console.log(data);

        $(".select_main select").val('');

        $('#event-lists').empty();

        $('#event-lists').append(data);



        return data; 

      }

    });





  }



  var months = [

  'January', 'February', 'March', 'April', 'May',

  'June', 'July', 'August', 'September',

  'October', 'November', 'December'

  ];

  $("#filter_year").change(function(){

    var year = $('#filter_year').val();

    var dataString = 'year='+year;

    $.ajax({

      type: "GET",

      url: url_eventdatefilter,

      data: dataString,

      cache: false,

      success: function(data)

      {

       $('#filter_month').empty();

       $('#filter_country').empty();

       $.each( data, function( key, value ) {

        $.each( value, function( keyl, val ) {

          

          if(val.month != null){

            $('#filter_month').append('<option value='+val.month+'>'+ months[val.month - 1] || '' +'</option>');

          }

                  });         

            });

       $('#filter_month').multiselect('destroy');          

       $('#filter_month').multiselect({

        nonSelectedText: 'By Month'

      });

            }

          });

    

  });

</script>

<?php if(session('message_type') == 'success'): ?>    

    <script type="text/javascript"> 

        $('#eventmyModal').modal('show');         

   </script>

 <?php endif; ?>

<script type="text/javascript">



         <?php if( Request::segment(2) == 'success' or Request::segment(2) == 'news-letter-signup'): ?>



         if (performance.navigation.type == 1) {



         }else{        

          $('#myModal').modal('show');    

          $('#myModal').addClass('show');   

        }

        <?php endif; ?>

        <?php if( Request::segment(2) == 'register-success'): ?>



        if (performance.navigation.type == 1) {



        }else{        

          $('#myModal5').modal('show');    

          $('#myModal5').addClass('show');   

        }

        <?php endif; ?>

      </script>

<script type="text/javascript">

  var url = "<?php echo e(url('events/more')); ?>";

  <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/index.blade.php ENDPATH**/ ?>