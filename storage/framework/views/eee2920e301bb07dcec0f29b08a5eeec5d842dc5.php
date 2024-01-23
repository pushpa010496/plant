<!doctype html>

<html lang="<?php echo e(app()->getLocale()); ?>">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>img/favicon.ico" type="image/x-icon">

  <?php echo app('seotools')->generate(); ?>




    <!-- Bootstrap CSS -->

    <link href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">

    

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> 

    <?php echo $__env->yieldContent('style'); ?>

<!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-91626815-1');

</script>

 



  </head>



  <body>  

    <header>

      <nav class="navbar navbar-expand-lg navbar-light bg-light div-shadow fixed-top">

      <div class="ml-auto top-bar fixed-top col-sm-offset-9 col-lg-3">

        <span><a href="<?php echo e(url('/registration')); ?>">Subscribe</a></span>  

        <span><a href="<?php echo e(url('/get-listed')); ?>">Get Listed</a></span> 

        <span><a href="<?php echo e(url('/contactus')); ?>">Contact</a></span>

      </div>

      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

          <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" height="75" class="d-inline-block align-middle" alt="Logo" />

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto mt-4">

            <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>

                  </li> 

                   <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  Categories

                </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                  <div class="row">

                    <div class="col-md-12">                

                       <div id="accordion">

                        <?php $i=1; ?>

                        <?php $cat = getcat(22);?>

                     <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                      <div class="card col-lg-12">

                    

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

            <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(url('/events')); ?>">Events</a>

                  </li>

            <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(url('/projects')); ?>">Projects</a>

                  </li>

            <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(url('/tenders')); ?>">Tenders</a>

                  </li>

                 

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insights</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                  <div class="row">               

                      <ul class="nav flex-column">

                      <li class="nav-item">

                        <a class="dropdown-item" href="<?php echo e(url('/articles')); ?>">Articles</a>

                      </li>

                      <li class="nav-item">

                         <a class="dropdown-item" href="<?php echo e(url('/interviews')); ?>">Interviews</a>

                      </li>

                      <li class="nav-item">

                        <a class="dropdown-item" href="<?php echo e(url('/news')); ?>">News</a>

                      </li>

                      <li class="nav-item">

                        <a class="dropdown-item" href="<?php echo e(url('/pressreleases')); ?>">Press Releases</a>

                      </li>

                      <li class="nav-item">

                        <a class="dropdown-item" href="<?php echo e(url('/whitepapers')); ?>">Whitepapers</a>

                      </li>

                      <li class="nav-item">

                        <a class="dropdown-item" href="<?php echo e(url('/reports')); ?>">Reports</a>

                      </li>

                    </ul>

                  </div>

               

                <!--  /.container  -->

              </div>

            </li>

            



          </ul>

         

        </div>







    </nav>     

      

    </header>

    

    <!-- Begin page content -->

    <div role="main" id="company-profile">

      <?php $__currentLoopData = $eventorg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="sticky-top bg-white">

        <!-- // Company Heading -->

        <div class="container-fluid bg-white">

          <div class="container">

            <div class="row">

              <div class="col-lg-9">

                <img src="<?php echo e(config('app.url')); ?>event/organiser/<?php echo e($cp->org_logo); ?>" alt="<?php echo e($cp->org_logo_alt); ?>" title="<?php echo e($cp->org_logo_title); ?>" class="img-fluid d-flex align-items-center small-header"/>        

              </div>

            </div>

          </div>

        </div>

        <!-- Company Heading // -->

        

        <!-- // Profile Nav -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

          <div class="container">

            <!-- <a class="navbar-brand" href="#">Profile Menu</a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

              <?php $active_menus = json_decode($cp->active_menus); ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto">

                <li class="nav-item <?php if(count(Request::segments())==2): ?> active <?php endif; ?>"><a class="nav-link" href="<?php echo e(url('event-organiser/'.$cp->url)); ?>">About</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='interviews'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->interview==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('event-organiser/'.$cp->url.'/interviews')); ?>">Interviews</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='articles'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->article==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('event-organiser/'.$cp->url.'/articles')); ?>">Articles</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='pressreleases'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->pressrelease==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('event-organiser/'.$cp->url.'/pressreleases')); ?>">Press Release</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='brochures'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->brochures==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('event-organiser/'.$cp->url.'/brochures')); ?>">Brochure</a></li>

                <li class="nav-item <?php if(\Request::segment('3')=='gallery'): ?> active <?php endif; ?>"><a class="nav-link <?php if(@$active_menus->gallery==2): ?> <?php else: ?>  disabled <?php endif; ?>" href="<?php echo e(url('event-organiser/'.$cp->url.'/gallery')); ?>">Gallery</a></li>    



              </ul>           

              <a class="btn btn-light my-2 my-lg-0" href="<?php echo e(url('event-organiser/'.$cp->url.'/upcoming-events')); ?>" role="button">Upcoming Events</a>         

            </div>

          </div>  

        </nav>

        <!-- Profile Nav // -->

      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      

     <?php echo $__env->yieldContent('content'); ?>



     <div class="mt-3"></div>  





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

                  <div class="col-lg-3">

                    <ul>

                      <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/registration')); ?>" target="_blank">Register Your Company</a>

                      </li> -->

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/post-requirement')); ?>" target="_blank">Post your Requirement</a>

                      </li>

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/postevent')); ?>" target="_blank">Event Registration</a>

                      </li>

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/registration')); ?>" target="_blank"> Newsletter Signup</a>

                      </li>

                    </ul>

                  </div>



                  <div class="col-lg-3">

                    <ul>

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/get-listed')); ?>" target="_blank">Get Listed</a>

                      </li>

                     

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('mediapack-download')); ?>" target="_blank">Mediapack</a>

                      </li>

                       <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/registration')); ?>" target="_blank">Subscribe</a>

                      </li>

                      <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="<?php echo e(url('/clientele')); ?>" target="_blank">Clientele</a>

                      </li>

                    </ul>

                  </div>



                  <div class="col-lg-3">

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



                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

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

                    <li><a target="_blank" title="Google Plus" class="google" href="<?php echo e(config('app.gurl')); ?>"><i class="fa fa-google-plus"></i></a></li>

                  </ul>

                  <ul class="social-icons">

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

            <p class="pt-3 text-center">&copy; Ochre Media Pvt Ltd., <?php echo date('Y'); ?>. All rights reserved.</p>

            </div>

          </div> 

          <!-- Copyright-Section // -->        

          </div>  

        </div>  

    </footer>

    <!-- FOOTER // -->





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?php echo e(config('app.url')); ?>js/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>

    <script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>

    <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>   

    <script>

      // Form Sticky

      $(window).scroll(function() {

        var y = $(window).scrollTop();

        if (y > 0) {

          $("#form-sticky").addClass('sticky-top').addClass('pt-180');

          $(".small-header").height('70');

        } else {

          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');

          $(".small-header").height('auto');

        }

      });

    </script>

  

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->



    <?php echo $__env->yieldContent('scripts'); ?>



  </body>

</html>    

<?php /**PATH /home/plantautomationt/public_html/resources/views////layouts/eventorg.blade.php ENDPATH**/ ?>