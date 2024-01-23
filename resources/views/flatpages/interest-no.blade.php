<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Interest - No |  Plant Automation Technology</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">
  
    <!-- LUMEN -->
    {!! app('seotools')->generate() !!}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">     

    <style>
      /* Sticky footer styles
      -------------------------------------------------- */
      html {
        position: relative;
        min-height: 100%;
      }
      body {
        margin-bottom: 100px; /* Margin bottom by footer height */
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px; /* Set the fixed height of the footer here */
        line-height: 100px; /* Vertically center the text there */
        /*background-color: #f5f5f5;*/
      }
    </style>
  </head>

  <body>  

    <header>  
      <nav class="navbar navbar-bootbites navbar-expand-lg navbar-light bg-white" data-toggle="sticky-onscroll">      
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{ config('app.url') }}img/main-logo.png" height="65" class="d-inline-block align-middle" alt="Logo" />
        </a>
      </nav> 
    </header>

    <div class="mt-5 mb-5"></div>  

    <div class="container">
      <div class="col-lg-8 offset-lg-2">
        <p>Dear Subscriber,</p>

        <p>Thank you for your time. For any of your future business listing requirement or if you wish to give us a try, Please feel free to get in touch.</p>

        <p>Thanking you.</p>

        <p>Sincerely,<br/>
        Client Success Team,<br/>
        Plant Automation Technology - PAT</p>
      </div>
    </div>

    <div class="mt-5 mb-5"></div>  


    <!-- // FOOTER -->
    <div class="container-fluid bg-dark footer">
      <div class="container pt-4 pb-4 text-center text-light">
        <p class="mb-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> www.plantautomation-technology.com - Powered by Ochre Media Pvt. Ltd.</p>
        <p class="mb-0"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> info@plantautomation-technology.com</p>
      </div>
    </div>
    <!-- FOOTER // -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
    <script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--<script src="{{ config('app.url') }}js/slick.min.js"></script> -->
    
    <script>
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
    </script>
    
  </body>
</html>    
