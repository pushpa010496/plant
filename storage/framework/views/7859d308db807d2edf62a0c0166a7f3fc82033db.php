<!doctype html>

<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>img/favicon.ico" type="image/x-icon">
  <meta name="robots" content="index, follow"/>


  <?php echo app('seotools')->generate(); ?>




  <!-- Bootstrap CSS -->

  <?php echo $__env->yieldContent('style'); ?>

  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">

  

  

  <link rel="stylesheet" type="text/css" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 



  <!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>



  <script>

    window.dataLayer = window.dataLayer || [];

    function gtag(){dataLayer.push(arguments);}

    gtag('js', new Date());



    gtag('config', 'UA-91626815-1');

  </script>



  <style type="text/css">    

    button.close{

      width: 22px;

      height: 22px;

      position: absolute;      

      right: -10px;

      top: -10px;      

      color: #000;

      background-color: #e0e0e0;

      border: 0;

      border-radius: 50%;

      opacity: 1;

      line-height: 20px;

    }

    .modal{background-color: rgba(0,0,0,0.4) !important;}

  </style>



  <style>

    p, ul li {font-size: 14px !important;}

  /* Header SEARCH

  ---------------- */

  #main-search > .form-control-sm, .input-group-sm > .form-control, .input-group-sm{font-size: 12px;line-height: 14px;border-top-left-radius: 20px;border-bottom-left-radius: 20px; width: auto;}



  #main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn{padding: .3rem 10px .3rem 5px;line-height: 1.5;border-top-right-radius: 20px;border-bottom-right-radius: 20px;background-color:#92278f;cursor: pointer; border: 1px solid #92278f !important;}

  #main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn:hover{background-color:#fff;color:#92278f; }

  #main-search .form-control{border: 1px solid #92278f !important;font-size: 14px;}

</style>





</head>



<body>  



  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white div-shadow fixed-top">

      <div class="ml-auto top-bar fixed-top col-sm-offset-9 col-lg-3">

        <div class="btn-group" style="width: 100%;">

          <a href="<?php echo e(url('/get-listed')); ?>" class="btn">Get Listed</a>

          <a href="<?php echo e(url('/events')); ?>" class="btn top-button2" style="width: 100%;

          ">Industrial Events</a>

        </div>

        

      </div>

      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

        <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" height="50" class="d-inline-block align-middle" alt="Logo" />

      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>



      <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">



        <!-- // MAIN SEARCH -->          

        <?php echo e(Form::open(['url' => 'search', 'class' => 'form-inline my-2 my-lg-0'])); ?>


        <div class="input-group input-group-sm ml-4 mt-3">

          <input type="text" name="q" class="form-control" id="autoComplete" required placeholder="Search Products & Manufacturers...">

          <span class="input-group-btn">

            <button class="btn btn-sm btn-secondary" type="submit">

              <i class="fa fa-search" aria-hidden="true"></i></button>

            </span>

          </div>

          <?php echo e(Form::close()); ?> 

          <!-- MAIN SEARCH // -->



          <ul class="navbar-nav ml-auto mt-4">



            <li class="nav-item dropdown <?php echo (Request::is('categories*') ? 'active' : ''); ?>">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                Products

              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                <div class="row">

                  <div class="col-md-12">                

                   <div id="accordion">

                    <?php $i=1; ?>

                    <?php $cat = getcat(22);?>

                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                    <div class="card">



                      <div class="card-header" id="heading<?php echo e($i); ?>">

                        <h2>

                          <a class="collapsed" data-toggle="collapse" data-target="#collapse<?php echo e($i); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($i); ?>">

                            <?php echo e($val['name']); ?>


                          </a>

                        </h2>

                      </div>



                      <?php $childs = getcat($val['id']);?>

                      <?php if(@$childs): ?>

                      <div id="collapse<?php echo e($i); ?>" class="collapse" aria-labelledby="heading<?php echo e($i); ?>" data-parent="#accordion">

                       <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                       

                       <?php 

                       $count = DB::table('products')->where('category_id',$child['id'])->count();

                       ?>

                       <div class="card-body">

                        <a href="<?php echo e(url('categories')); ?><?php echo e('/'.$child->slug); ?>"> 

                          <p><?php echo e(ucwords(strtolower($child['name']))); ?> <!--<span class="text-muted ml-1 pull-right">(<?php echo e($count); ?>)</span>--></p></a>                      

                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </div>

                      <?php endif; ?>



                      <?php $i=$i+1; ?>



                    </div> 

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>



                </div>





              </div>



              <!--  /.container  -->





            </div>

          </li>

          <li class="nav-item <?php echo (Request::is('suppliers') ? 'active' : ''); ?>">

            <a class="nav-link" href="<?php echo e(url('suppliers')); ?>">Suppliers</a>

          </li> 

          

          <li class="nav-item <?php echo (Request::is('projects*') ? 'active' : ''); ?>">

            <a class="nav-link" href="<?php echo e(url('/projects')); ?>">Projects</a>

          </li>

          <li class="nav-item <?php echo (Request::is('tenders*') ? 'active' : ''); ?>">

            <a class="nav-link" href="<?php echo e(url('/tenders')); ?>">Tenders</a>

          </li>



          <li class="nav-item dropdown <?php echo (Request::is('articles*') || Request::is('interviews*') || Request::is('news*') || Request::is('pressreleases*') || Request::is('whitepapers*') || Request::is('reports*') ? 'active' : ''); ?>">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insights </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">



              <ul class="nav flex-column">

                <li class="nav-item">

                  <a class="dropdown-item" href="<?php echo e(url('/articles')); ?>">Articles</a>

                </li>

                <li class="nav-item">

                 <a class="dropdown-item" href="<?php echo e(url('/interviews')); ?>">Interviews</a>

               </li>

               

              <li class="nav-item">

                <a class="dropdown-item" href="<?php echo e(url('/pressreleases')); ?>">Press Releases</a>

              </li>

              <li class="nav-item">

                <a class="dropdown-item" href="<?php echo e(url('/whitepapers')); ?>">Whitepapers</a>

              </li>

               <!--  <li class="nav-item">

                  <a class="dropdown-item" href="<?php echo e(url('/reports')); ?>">Reports</a>

                </li> -->

              </ul>



              <!--  /.container  -->

            </div>

          </li>

          <li class="nav-item <?php echo (Request::is('webinars*') ? 'active' : ''); ?>">

            <a class="nav-link" href="<?php echo e(url('/webinars')); ?>">Webinars</a>

          </li> 





              </ul>



            </div>

          </nav>     



        </header>





        <div class="mt-80"></div>



        <!-- Begin page content -->

        <div role="main" id="company-profile">

          <?php $__currentLoopData = $eventprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="bg-white">

            <!-- // Company Heading -->

            <div class="container pt-4">

              <div class="row">

                <?php $__currentLoopData = $eventprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-9 ">

                  <div class="row">

                    <div class="col-lg-4 pl-0">

                      <img class="img-fluid p-3" src="<?php echo e(config('app.url')); ?>event/<?php echo e($cp->big_image); ?>" alt="<?php echo e($cp->img_alt); ?>"/>

                    </div>

                    <div class="col-lg-8">

                      <h2 class="display-4 mt-2 text-blue mb-2">

                        <?php if($cp->event_url): ?>

                        <strong><?php echo e($cp->name); ?></strong>

                        <?php else: ?>

                        <a href="<?php echo e(url($cp->web_link)); ?>" target="_blank"><strong><?php echo e($cp->name); ?></strong></a>

                        <?php endif; ?>

                      </h2>



                      <p class="mb-1 display-5"><i class="fa mr-2 fa-calendar text-blue" aria-hidden="true"></i>

                        <strong><?php echo date('j F', strtotime($cp->start_date)); ?></strong> 

                        <strong class="ml-1 mr-1">-</strong>

                        <strong><?php echo date('j F', strtotime($cp->end_date)); ?></strong>,

                        <strong class="ml-1"><?php echo date('Y', strtotime($cp->end_date)); ?></strong>

                      </p>



                      <p class="mb-2 text-lowercase"><i class="fa mr-2 fa-envelope text-blue" aria-hidden="true"></i> <?php echo e($cp->email); ?></p>

                      <p class="mb-2"><i class="fa fa-lg mr-2 fa-phone text-blue" aria-hidden="true"></i> <?php echo e($cp->phone); ?></p>

                      <p class="mb-2 text-lowercase">

                        <i class="fa fa-lg mr-2 fa-globe text-blue" aria-hidden="true"></i> 

                        <a href="<?php echo e($cp->web_link); ?>" target="_blank">

                         <?php echo e($cp->web_link); ?>


                        </a>

                      </p>

                      <p class="mb-1">

                        <div class="row">

                          <div class="col-1"><i class="fa fa-lg fa-map-marker text-blue" aria-hidden="true"></i></div> 

                          <div class="col-11 pl-0"><small><?php echo e($cp->venue); ?>, <strong><?php echo e($cp->country); ?></strong></small></div>

                        </div> 

                        <!-- <i class="fa fa-lg mr-2 ml-1 fa-map-marker text-blue" aria-hidden="true"></i> 

                          <?php echo e($cp->venue); ?>, <strong><?php echo e($cp->country); ?></strong> -->

                        </p>

                      </div>

                    </div>

                  </div>





                  <div class="col-lg-3">

                    <!-- <h4 class="display-5 mb-0"><u>Organized By:</u></h4> -->

                    <h4 class="btn btn-sm btn-primary">Organized By:</h4>

                    <br/>

                    <img src="<?php echo e(config('app.url')); ?>/event/organiser/<?php echo e($cp->eventorg->org_logo); ?>" title="<?php echo e($cp->eventorg->org_logo); ?>" class="img-fluid" style="height:40px">

                    <h3 class="display-6 text-blue font-weight-bold mb-1 mt-1"><?php echo e($cp->eventorg->name); ?></h3>

                    <p class="mb-0 small"><i class="fa fa-lg mr-2 fa-phone text-blue" aria-hidden="true"></i> <?php echo e($cp->eventorg->org_contactno); ?></p>

                    <p class="mb-0 text-lowercase small"><i class="fa mr-2 fa-envelope text-blue" aria-hidden="true"></i> <?php echo e($cp->eventorg->org_email); ?></p>

                    <p class="mb-0 text-lowercase small"><i class="fa fa-lg mr-2 fa-globe text-blue" aria-hidden="true"></i> <?php echo e($cp->eventorg->org_website); ?></p>                

                    <p class="mb-0 small">

                      <div class="row">

                        <div class="col-lg-1"><i class="fa fa-lg fa-map-marker text-blue" aria-hidden="true"></i></div> 

                        <div class="col-lg-10"><small><?php echo e($cp->eventorg->org_address); ?></small></div>

                      </div>                  

                    </p>

                  </div>  

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

              </div>

              <!-- Company Heading // -->



              <!-- // Profile Nav -->

              <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <div class="container">

                  <!-- <a class="navbar-brand" href="#">Profile Menu</a> -->

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbar2" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                  </button>

                  <?php $active_menus = json_decode(@$cp->eventprofile->active_menus); ?>

                  <div class="collapse navbar-collapse" id="navbar2">

              <!-- <ul class="navbar-nav mr-auto">

                <li class="nav-item <?php if(count(Request::segments())==2): ?> active <?php endif; ?>"><a class="nav-link" href="<?php echo e(url('events/'.$cp->event_url)); ?>">About Event</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='speakers'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->speakers==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('events/'.$cp->event_url.'/speakers')); ?>">Speakers</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='exhibitors'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->exhibitors==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('events/'.$cp->event_url.'/exhibitors')); ?>">Exhibitors</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='pressrelease'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->pressrelease==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('events/'.$cp->event_url.'/pressrelease')); ?>">Press Release</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='brochure'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->brochures==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('events/'.$cp->event_url.'/brochures')); ?>">Brochure</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='gallery'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->gallery==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('events/'.$cp->event_url.'/gallery')); ?>">Gallery</a></li>    



              </ul> -->

              <ul class="navbar-nav mr-auto">



                <li class="nav-item <?php if(count(Request::segments())==2): ?> active <?php endif; ?>"><a class="nav-link" href="<?php echo e(url('events/'.$cp->event_url)); ?>">About Event</a></li>

                <?php if(@$active_menus->speakers==2): ?>

                <li class="nav-item active <?php if(\Request::segment('3')=='speakers'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/speakers')); ?>">Speakers</a></li>

                <?php else: ?>  

                <li class="nav-item"><a class="nav-link disabled" >Speakers</a></li>

                <?php endif; ?>

                <?php if(@$active_menus->exhibitors==2): ?>

                <li class="nav-item <?php if(\Request::segment('3')=='exhibitors'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/exhibitors')); ?>">Exhibitors</a></li>

                <?php else: ?>  

                <li class="nav-item"><a class="nav-link disabled">Exhibitors</a></li>

                <?php endif; ?>

                

                <?php if(@$active_menus->pressrelease==2): ?>

                <li class="nav-item <?php if(\Request::segment('3')=='pressrelease'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/pressrelease')); ?>">Press Release</a></li>

                <?php else: ?> 

                <li class="nav-item"><a class="nav-link disabled" >Press Release</a></li>



                <?php endif; ?>

                <?php if(@$active_menus->brochure==2): ?> 

                <li class="nav-item <?php if(\Request::segment('3')=='brochure'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/brochures')); ?>">Brochure</a></li>

                <?php else: ?> 

                <li class="nav-item"><a class="nav-link disabled">Brochure</a></li> 



                <?php endif; ?>



                <?php if(@$active_menus->gallery==2): ?>

                <li class="nav-item <?php if(\Request::segment('3')=='gallery'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/gallery')); ?>">Gallery</a></li>   

                <?php else: ?>  

                <li class="nav-item"><a class="nav-link disabled">Gallery</a></li>  



                <?php endif; ?>

                <?php if(@$active_menus->partners==2): ?>

                <li class="nav-item <?php if(\Request::segment('3')=='partners'): ?> active <?php endif; ?>"><a class="nav-link " href="<?php echo e(url('events/'.$cp->event_url.'/partners')); ?>">Partners</a></li>   

                <?php else: ?>  

                <li class="nav-item"><a class="nav-link disabled">Partners</a></li>  



                <?php endif; ?>





              </ul>                  

              <!-- <a class="btn btn-light my-2 my-lg-0" href="<?php echo e(url('event-organiser/'.$cp->eventorg->url)); ?>" role="button">About Organizer</a>  -->        

            </div>

          </div>  

        </nav>

        <!-- Profile Nav // -->

      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <?php echo $__env->yieldContent('content'); ?>



    <div class="mt-3"></div>  



    <!-- // alert modal -->

    <div id="alertModal" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

         <div class="modal-header">

          <h5 class="modal-title text-danger">Error</h5>

          <button type="button" class="close" data-dismiss="modal">&times;</button>



        </div>

        <div class="modal-body">

          <p class="">Please fill the all required fields....!!</p>





        </div>

        <div class="modal-footer">

         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



       </div>

     </div>

   </div>

 </div>

 <!-- // FOOTER -->

 <footer>

  <div class="container">

    <div class="row">

      <!-- // FOOTER-LOGO -->

      <div class="col-lg-2 pt-4 pb-1">

        <div class="footer-widget">

          <h5>Powered By<span class="head-line"></span></h5>

        </div>

        <a href="https://www.ochre-media.com" target="_blank">

          <img src="<?php echo e(config('app.url')); ?>/img/ochre-media-logo.png" width="70" alt="Ochre Media Group" title="Ochre Media Group" class="img-fluid mt-2" />

        </a> 

        <!-- <p class="mt-3 pb-3"><small>Ochre Media Pvt Ltd.</small></p> -->

      </div>

      <!-- FOOTER-LOGO // -->



      <!-- // FOOTER-LINKS -->

            <div class="col-lg-8 pt-4 pb-1">

                <div class="footer-widget">

                  <h5>Quick Links<span class="head-line"></span></h5>

                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/post-requirement')); ?>" target="_blank">Post your Requirement</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/postevent')); ?>" target="_blank">Event Registration</a>

                        </li>

                        <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/registration')); ?>" target="_blank">Newsletter Signup</a>

                        </li> -->

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/events-newsletters')); ?>" target="_blank">Event Newsletters</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/get-listed')); ?>" target="_blank">Get Listed</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('mediapack-download')); ?>" target="_blank">Mediapack</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/clientele')); ?>" target="_blank">Clientele</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/registration')); ?>" target="_blank">e-Newsletters</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(config('app.blogurl')); ?>" target="_blank">Blog</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/partners')); ?>" target="_blank">Our Partners</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/aboutus')); ?>" target="_blank">About Us</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('contactus')); ?>" target="_blank">Contact Us</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                      <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/suppliers')); ?>" target="_blank">Suppliers</a>

                        </li>   -->  

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/sitemap')); ?>" target="_blank">Sitemap</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/terms-conditions')); ?>" target="_blank">Terms &amp; Conditions</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="https://www.ochre-media.com/webprint.html" target="_blank">Our Other Industries</a>

                        </li>      



                      </ul>

                    </div>

                  </div>

                </div>



                

                

              <!-- <div id="myModalpopup" class="modal fade" role="dialog">

                <div class="modal-dialog modal-dialog-centered" role="document">

                  <div class="modal-content p-0">           

                    <div class="modal-body p-0">

                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                      <a href="http://track.plantautomation-technology.com/2021013006232467098009" target="_blank">

                        <img src="<?php echo e(config('app.url')); ?>images/iot-ai-popup.jpg" class="img-fluid border">

                      </a> 

                    </div>          

                  </div>

                </div>

              </div> -->



                

                <!-- FOOTER-LINKS // -->



                <!-- // FOOTER-SOCIAL MEDIA -->

                <div class="col-lg-2 pt-4 pb-1">

                  <div class="footer-widget">

                    <h5>Get in Touch<span class="head-line"></span></h5>

                  </div>

                  <div class="social-widget pt-2 text-center">

                    <ul class="social-icons">

                      <li>

                        <a target="_blank" title="Facebook" class="facebook" href="<?php echo e(config('app.furl')); ?>"><i class="fa fa-facebook"></i></a>

                      </li>

                    <!--   <li><a target="_blank" title="Google Plus" class="google" href="<?php echo e(config('app.gurl')); ?>"><i class="fa fa-google-plus"></i></a></li>

                    </ul>

                    <ul class="social-icons"> -->

                      <li><a target="_blank" title="Twitter" class="twitter" href="<?php echo e(config('app.turl')); ?>"><i class="fa fa-twitter"></i></a></li>



                      <li><a target="_blank" title="LinkedIn" class="linkdin" href="<?php echo e(config('app.lurl')); ?>"><i class="fa fa-linkedin"></i></a></li>

                    </ul>   

                    <!--  <ul class="social-icons"></ul>  -->                      

                  </div>

                </div>

                <!-- FOOTER-SOCIAL MEDIA // -->       



                <!-- // Copyright-Section -->

                <div class="col-lg-12">

                  <div class="copyright-section">                

                    <p class="pt-3 text-center">Copyright &copy; <?php echo date('Y'); ?> Ochre Digi Media Pvt Ltd. All Rights Reserved.</p>

                  </div>

                </div> 

                <!-- Copyright-Section // -->        

              </div>  

            </div>  

          </footer>

          <!-- FOOTER // -->



          <!-- jQuery first, then Popper.js, then Bootstrap JS -->

          <!-- <script src="<?php echo e(config('app.url')); ?>js/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script> -->

          <script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.min.js"></script>

          <script src="<?php echo e(config('app.url')); ?>js/popper.min.js"></script>

          <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js"></script>



          <script src="https://www.google.com/recaptcha/api.js" async defer></script>    

          <script>

      // Form Sticky

      // $(window).scroll(function() {

      //   var y = $(window).scrollTop();

      //   if (y > 0) {

      //     $("#form-sticky").addClass('sticky-top').addClass('pt-180');

      //   } else {

      //     $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');

      //   }

      // });

    </script>



    <script type="text/javascript">



     var eventnl_url = "<?php echo e(url('newsletter-signup-success')); ?>"

   </script>

   



<?php echo $__env->yieldContent('scripts'); ?> 

<script type="text/javascript" src="<?php echo e(config('app.url')); ?>js/eventformajax.js"></script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->
</body>

</html>    

<?php /**PATH /home/plantautomationt/public_html/resources/views////layouts/event.blade.php ENDPATH**/ ?>