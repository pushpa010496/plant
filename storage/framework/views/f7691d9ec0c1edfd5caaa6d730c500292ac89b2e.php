<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <!-- <title><?php echo e(config('app.name')); ?></title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo e(asset('industry/img/favicon.ico')); ?>" type="image/x-icon">  
  <meta name="google-site-verification" content="s9BzDfVp0YSqEKZiyZWzVHvIbLO_hSfQF8dYHQWYUXs" />
  <meta name="robots" content="index, follow"/>
  <!-- LUMEN -->
  <?php echo app('seotools')->generate(); ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>mix/app.min.css">
  <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">
  
  <link rel="stylesheet" type="text/css" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
  <!-- <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/peel-banner.css"> -->
  <?php echo $__env->yieldContent('style'); ?>
  <script>
var trackOutboundLink = function(url) {
 ga('send', 'event', 'outbound', 'click', url, {
   'transport': 'beacon',
   'hitCallback': function(){window.open(url,'_blank');}
 });
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->

<script type="application/ld+json"> { "@context" : "https://schema.org", "@type" : "Organization", "name" : " plant automation technology ", "url" : " https://www.plantautomation-technology.com/ ", "sameAs" : [ " https://www.facebook.com/plantautomationtechnology ", " https://twitter.com/plantautomatech ", " https://plus.google.com/+Plantautomation-technology/about ", " https://www.linkedin.com/groups?home=&gid=6618167&trk=anet_ug_hm", " https://www.tumblr.com/blog/plantautomationtechnology " ] } 
</script>
<script type="application/ld+json">{ "@context": "https://schema.org", "@type": "WebSite","url": "https://www.plantautomation-technology.com/","potentialAction": {"@type": "SearchAction","target": "https://www.plantautomation-technology.com/search-result?q={search_term_string}","query-input": "required name=search_term_string"}}</script>
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
</head>
<body>  

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2RKWQ91EMR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2RKWQ91EMR');
</script>
<?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Google Tag Manager (noscript) -->


    <!--<header>-->
    <!--  </header>-->
        <?php echo $__env->yieldContent('content'); ?>
        <div class="mt-3"></div>  
<!-- // Popup Banner -->
         <!-- <div id="popUp-Banner" class="modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-0">           
              <div class="modal-body p-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="https://www.asianhhm.com/magazine-subscription" target="_blank">
                  <img src="https://industry.asianhhm.com/images/popup-ahhm.jpg" alt="Popup" class="img-fluid rounded border border-white" />
                </a> 
              </div>          
            </div>
          </div>
        </div>  -->
        <!-- <div id="popUp-Banner" class="modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-0">           
              <div class="modal-body p-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="http://track.hospitals-management.com/20230308075807979386037" target="_blank">
                  <img src="https://industry.hospitals-management.com/images/pop-up-banner-working.jpg" alt="Popup" class="img-fluid rounded border border-white" />
                </a> 
              </div>          
            </div>
          </div>
        </div>  -->


        <div id="popUp-Banner" class="modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-0">           
              <div class="modal-body p-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="https://industry.hospitals-management.com/images/Hospital_management_Merry-Christmas-Greeting_SM_posting.jpg" alt="Popup" class="img-fluid rounded border border-white" />
                </a> 
              </div>          
            </div>
          </div>
        </div> 
        <!-- Popup Banner // -->
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
                        <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="<?php echo e(url('/events-newsletters')); ?>" target="_blank">Event Newsletters</a>
                        </li> -->
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
                          <a href="<?php echo e(url('/events')); ?>" target="_blank">Industrial Events</a>
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
                          <a href="https://www.ochre-media.com/brands.html" target="_blank">Our Other Industries</a>
                        </li>      
                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;
                          <a href="<?php echo e(url('contactus')); ?>" target="_blank">Contact Us</a>
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
                     <!--  <li><a target="_blank" title="Google Plus" class="google" href="<?php echo e(config('app.gurl')); ?>"><i class="fa fa-google-plus"></i></a></li>
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
       
          <script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.min.js"></script>
          <script src="<?php echo e(config('app.url')); ?>js/popper.min.js"></script>
          <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js"></script>
         
          <script src="<?php echo e(config('app.url')); ?>js/owl.carousel.min.js"></script>
          <script>
            $('.owl_products').owlCarousel({
              loop:true,
              margin:20,
              responsiveClass:true,
              dots:false,
              responsive:{
                0:{
                  items:1,
                  nav:true
                },
                600:{
                  items:3,
                  nav:false
                },
                1000:{
                  items:4,
                  nav:true,
                  loop:false
                }
              }
            })
          </script>
          <script>        
            $(document).ready(function() {        
              $('#accordion').on('show.bs.collapse', function () { $('#accordion .in').collapse('hide');});        
            });        
          </script>
          <!-- <script>$(document).ready(function() {
              // executes when HTML-Document is loaded and DOM is ready
              // breakpoint and up  
              $(window).resize(function(){
                if ($(window).width() >= 980){  
                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function () {
                     $(this).parent().toggleClass("show");
                     $(this).parent().find(".dropdown-menu").toggleClass("show"); 
                   });
                      // hide the menu when the mouse leaves the dropdown
                      $( ".navbar .dropdown-menu" ).mouseleave(function() {
                        $(this).removeClass("show");  
                      });
                      // do something here
                    } 
                  });  
                  // document ready  
                });
                  //# sourceURL=pen.js
            </script> -->
  <!-- <script>
      // Sticky navbar
      // =========================
      $(document).ready(function() {
        // Custom function which toggles between sticky class (is-sticky)
        var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
          var stickyHeight = sticky.outerHeight();
          var stickyTop = stickyWrapper.offset().top;
          if (scrollElement.scrollTop() >= stickyTop){
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
            sticky.addClass("div-shadow");
          }
          else{
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
            sticky.removeClass("div-shadow");
          }
        };
        // Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function() {
          var sticky = $(this);
          var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
          sticky.before(stickyWrapper);
          sticky.addClass('sticky');
          // Scroll & resize events
          $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
            stickyToggle(sticky, stickyWrapper, $(this));
          });
          // On page load
          stickyToggle(sticky, stickyWrapper, $(window));
        });
      });
    </script> -->
    <script type="text/javascript">       
      jQuery(document).ready(function($){  
        alignModal();
        if (sessionStorage.getItem('advertOnce') !== 'true') {
          $('#myModalpopup').modal({backdrop: 'static', keyboard: false});
          sessionStorage.setItem('advertOnce','true');
        }     
      });
      function alignModal(){
        var modalDialog = $(".modal-dialog");
      }
    </script> 
    
    <!-- End Google Analytics -->



<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->

    <?php echo $__env->yieldContent('scripts'); ?>
  </body>
  </html><?php /**PATH /home/plantautomationt/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>