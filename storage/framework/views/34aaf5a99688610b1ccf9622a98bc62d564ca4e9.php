<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="shortcut icon" href="<?php echo e(asset('industry/img/favicon.ico')); ?>" type="image/x-icon">
<meta name="google-site-verification" content="s9BzDfVp0YSqEKZiyZWzVHvIbLO_hSfQF8dYHQWYUXs" />
<meta name="robots" content="index, follow"/>
<?php echo app('seotools')->generate(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">

<!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.min.css">


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/peel-banner.css"> -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

   

<?php echo $__env->yieldContent('style'); ?>

<!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->
<script type="application/ld+json"> { "@context" : "https://schema.org", "@type" : "Organization", "name" : " plant automation technology ", "url" : " https://www.plantautomation-technology.com/ ", "sameAs" : [ " https://www.facebook.com/plantautomationtechnology ", " https://twitter.com/plantautomatech ", " https://plus.google.com/+Plantautomation-technology/about ", " https://www.linkedin.com/groups?home=&gid=6618167&trk=anet_ug_hm", " https://www.tumblr.com/blog/plantautomationtechnology " ] } </script> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91626815-1');
</script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KKG856Z');</script>
<!-- End Google Tag Manager -->
<script>
/**
* Function that tracks a click on an outbound link in Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label. Setting the transport method to 'beacon' lets the hit be sent
* using 'navigator.sendBeacon' in browser that support it.
*/
var trackOutboundLink = function(url) {
 ga('send', 'event', 'outbound', 'click', url, {
   'transport': 'beacon',
   'hitCallback': function(){window.open(url,'_blank');}
 });
}
</script>
  <!-- 
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
-->
  <style type="text/css">
    .ui-widget.ui-widget-content {
      position: fixed;
    }

    button.close{
      width: 22px;
      height: 22px;
      position: absolute;      
      right: -10px !important;
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

  <style type="text/css">
    .navbar-nav li.active::after {
      width: 70%;
      background: #4194c9;
    }

    .toast-center-center { top: 50%; left: 50%; transform: translate(-50%, -50%); }
    p, p a {
      word-break: break-word;
    }

    .radius-15{
      border-radius: 15px;
    }
    .bg-grey{
      background-color: #f2f3f5;
    }
    .font-14{
      font-size: 14px !important;
    }
    /*multi select*/
    .multiselect-native-select button,.multiselect-native-select .btn-group,.multiselect-native-select{
      width:100%;
    }
    .multiselect-container>li>a>label{
      padding: 3px 20px 3px 10px;
    }

    /* Header SEARCH
    ---------------- */
    #main-search > .form-control-sm, .input-group-sm > .form-control, .input-group-sm{font-size: 12px;line-height: 14px; width: auto;border-radius: 0px;/*border-top-left-radius: 20px;border-bottom-left-radius: 20px;*/}

    #main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn{padding: .3rem 10px .3rem 10px;line-height: 1.5;background-color:#92278f;cursor: pointer; border: 1px solid #92278f !important;border-radius: 0px;/*border-top-right-radius: 20px;border-bottom-right-radius: 20px;*/}
    #main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn:hover{background-color:#fff;color:#92278f; }
    #main-search .form-control{border: 1px solid #92278f !important;font-size: 14px;}

    @media (min-width: 992px) and (max-width: 1262px) { 
      #main-search > .form-control-sm, .input-group-sm > .form-control, .input-group-sm {width:80% !important;}
    }

    img {
      max-width: 100%;
      /*height: auto;*/
    }

   /*.table {border-color: #ccc !important;}*/

  
  </style>
      <?php if(Request::url() == 'https://www.plantautomation-technology.com/newswires'): ?>;
      <meta name="robots" content="noindex">
      <?php endif; ?>
</head>

<body>  
<?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKG856Z"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php     
    $page_all = getPage(Request::segment(1));     
    ?>

   
    <div class="mt-2"></div>
  <?php echo $__env->yieldContent('content'); ?>
       
      <!--  <div class="mt-3"></div>   -->

      <!---- validation modal -->
      <div id="alertModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Error</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>Please fill the all required fields....!!</p>
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
                 <!-- welcome popup 2 -->
<!--<div id="myModalpopup" class="modal fade" role="dialog">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content p-0">           -->
<!--      <div class="modal-body p-0">-->
<!--        <button type="button" class="close" data-dismiss="modal">&times;</button>        -->
<!--        <a href="https://www.plantautomation-technology.com/promotion/optimizing-production-scheduling-execution" target="_blank"> -->
<!--             <img src="<?php echo e(config('app.url')); ?>images/pop-up.jpg" alt="Pop-Up" class="img-fluid"  /> -->
<!--        </a> -->
<!--      </div>          -->
<!--    </div>-->
<!--  </div>-->
<!--</div> -->
<!--End welcome popup -->


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


          

          <!-- <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js"></script> -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <!-- <script src="<?php echo e(config('app.url')); ?>js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script> -->
          <script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.min.js"></script>
          <script src="<?php echo e(config('app.url')); ?>js/popper.min.js"></script>
          <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js"></script>
          <!--<script src="<?php echo e(config('app.url')); ?>js/slick.min.js"></script> -->
          <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
          <script src="<?php echo e(config('app.url')); ?>js/jquery-ui-1.12.1.min.js"></script>

          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script>        
        $(document).ready(function() {        
            $('#accordion').on('show.bs.collapse', function () {    $('#accordion .in').collapse('hide');});        
        });        
      </script> -->

      <script>
        $(document).ready(function() {
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

              src = "<?php echo e(route('searchajax')); ?>";
              $("#autoComplete").autocomplete({
                source: function(request, response) {
                  $.ajax({
                    url: src,
                    dataType: "json",
                    data: {
                      term : request.term
                    },
                    success: function(data) {
                      response(data);

                    }
                  });
                },
                minLength: 3,
                autoFill: true,
                select: function (event, ui) {
                  $('#autoComplete').val(ui.item.value);
                  $('form.searchform').submit();
                    // var label = ui.item.label;
                    // var value = ui.item.value;

             //store in session
             // document.valueSelectedForAutocomplete = value 
           }

            });

                // document ready  
              });
                //# sourceURL=pen.js

      </script>



  <script type="text/javascript">
    var publishUrl ="<?php echo e(url('publishnews')); ?>"; 
  </script>

  <?php echo $__env->yieldContent('scripts'); ?>
  <script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-91626815-1', 'auto');

    ga('send', 'pageview');

  </script>

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

<script>
  $( "table" ).addClass( "table" );
</script>
<script type="text/javascript">
  $('#enquiry').on('show.bs.modal', function(e) {
      var company_name = $(e.relatedTarget).data('company_name');
      var company_id = $(e.relatedTarget).data('company_id');
      var prod_name = $(e.relatedTarget).data('prod_name');
      var product_id = $(e.relatedTarget).data('product_id');
      var subject_client = $(e.relatedTarget).data('subject_client');
      var subject_admin = $(e.relatedTarget).data('subject_admin');
      var page = $(e.relatedTarget).data('page');
      $(e.currentTarget).find('input[name="company_name"]').val(company_name);
      $(e.currentTarget).find('input[name="company_id"]').val(company_id);
      $(e.currentTarget).find('input[name="prod_name"]').val(prod_name);
      $(e.currentTarget).find('input[name="product_id"]').val(product_id);
      $(e.currentTarget).find('input[name="subject_client"]').val(subject_client);
      $(e.currentTarget).find('input[name="subject_admin"]').val(subject_admin);
      $(e.currentTarget).find('input[name="page"]').val(page);
  });
  $(function() {
    $('#productForm').submit(function(e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $.ajax({
            method: "post",
            headers: {
                'Accept': "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "<?php echo e(route('ajax-product-enquiry')); ?>",
            data: formData,
            success: function(data) {
               console.log(data);
               $('#enquiry').modal('hide');
               $('#product_for_review').modal('show');
               $('#success').append(data.html);//now its working
            },
            error: function(data) {
                console.log(data)
            }
        })
    });
})
</script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->
</body>
</html>    <?php /**PATH /home/plantautomationt/public_html/resources/views////layouts/pages.blade.php ENDPATH**/ ?>