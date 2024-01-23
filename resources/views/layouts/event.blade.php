<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ config('app.url') }}img/favicon.ico" type="image/x-icon">
  <meta name="robots" content="index, follow"/>


  {!! app('seotools')->generate() !!}



  <!-- Bootstrap CSS -->

  @yield('style')

  <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/latest-styles.css">

  

  {{-- <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/font-awesome.min.css"> --}}

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

          <a href="{{url('/get-listed')}}" class="btn">Get Listed</a>

          <a href="{{url('/events')}}" class="btn top-button2" style="width: 100%;

          ">Industrial Events</a>

        </div>

        {{--  <span><a href="{{url('/registration')}}">Subscribe</a></span> 

        <span><a href="{{url('/get-listed')}}">Get Listed</a></span> 

        <span><a href="{{url('/contactus')}}">Contact</a></span> --}}

      </div>

      <a class="navbar-brand" href="{{url('/')}}">

        <img src="{{ config('app.url') }}img/main-logo.png" height="50" class="d-inline-block align-middle" alt="Logo" />

      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>



      <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">



        <!-- // MAIN SEARCH -->          

        {{Form::open(['url' => 'search', 'class' => 'form-inline my-2 my-lg-0'])}}

        <div class="input-group input-group-sm ml-4 mt-3">

          <input type="text" name="q" class="form-control" id="autoComplete" required placeholder="Search Products & Manufacturers...">

          <span class="input-group-btn">

            <button class="btn btn-sm btn-secondary" type="submit">

              <i class="fa fa-search" aria-hidden="true"></i></button>

            </span>

          </div>

          {{Form::close()}} 

          <!-- MAIN SEARCH // -->



          <ul class="navbar-nav ml-auto mt-4">



            <li class="nav-item dropdown {!! (Request::is('categories*') ? 'active' : '') !!}">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                Products

              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                <div class="row">

                  <div class="col-md-12">                

                   <div id="accordion">

                    <?php $i=1; ?>

                    <?php $cat = getcat(22);?>

                    @foreach($cat as $val)



                    <div class="card">



                      <div class="card-header" id="heading{{$i}}">

                        <h2>

                          <a class="collapsed" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">

                            {{$val['name']}}

                          </a>

                        </h2>

                      </div>



                      <?php $childs = getcat($val['id']);?>

                      @if(@$childs)

                      <div id="collapse{{$i}}" class="collapse" aria-labelledby="heading{{$i}}" data-parent="#accordion">

                       @foreach($childs as $child)                       

                       <?php 

                       $count = DB::table('products')->where('category_id',$child['id'])->count();

                       ?>

                       <div class="card-body">

                        <a href="{{url('categories')}}{{'/'.$child->slug}}"> 

                          <p>{{ucwords(strtolower($child['name']))}} <!--<span class="text-muted ml-1 pull-right">({{$count}})</span>--></p></a>                      

                        </div>

                        @endforeach

                      </div>

                      @endif



                      <?php $i=$i+1; ?>



                    </div> 

                    @endforeach

                  </div>



                </div>





              </div>



              <!--  /.container  -->





            </div>

          </li>

          <li class="nav-item {!! (Request::is('suppliers') ? 'active' : '') !!}">

            <a class="nav-link" href="{{url('suppliers')}}">Suppliers</a>

          </li> 

          {{--   <li class="nav-item {!! (Request::is('events*') ? 'active' : '') !!}">

            <a class="nav-link" href="{{url('/events')}}">Events</a>

          </li> --}}

          <li class="nav-item {!! (Request::is('projects*') ? 'active' : '') !!}">

            <a class="nav-link" href="{{url('/projects')}}">Projects</a>

          </li>

          <li class="nav-item {!! (Request::is('tenders*') ? 'active' : '') !!}">

            <a class="nav-link" href="{{url('/tenders')}}">Tenders</a>

          </li>



          <li class="nav-item dropdown {!! (Request::is('articles*') || Request::is('interviews*') || Request::is('news*') || Request::is('pressreleases*') || Request::is('whitepapers*') || Request::is('reports*') ? 'active' : '') !!}">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insights </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">



              <ul class="nav flex-column">

                <li class="nav-item">

                  <a class="dropdown-item" href="{{url('/articles')}}">Articles</a>

                </li>

                <li class="nav-item">

                 <a class="dropdown-item" href="{{url('/interviews')}}">Interviews</a>

               </li>

               {{-- <li class="nav-item">

                <a class="dropdown-item" href="{{url('/news')}}">News</a>

              </li> --}}

              <li class="nav-item">

                <a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a>

              </li>

              <li class="nav-item">

                <a class="dropdown-item" href="{{url('/whitepapers')}}">Whitepapers</a>

              </li>

               <!--  <li class="nav-item">

                  <a class="dropdown-item" href="{{url('/reports')}}">Reports</a>

                </li> -->

              </ul>



              <!--  /.container  -->

            </div>

          </li>

          <li class="nav-item {!! (Request::is('webinars*') ? 'active' : '') !!}">

            <a class="nav-link" href="{{url('/webinars')}}">Webinars</a>

          </li> 





              </ul>



            </div>

          </nav>     



        </header>





        <div class="mt-80"></div>



        <!-- Begin page content -->

        <div role="main" id="company-profile">

          @foreach($eventprofile as $cp)

          <div class="bg-white">

            <!-- // Company Heading -->

            <div class="container pt-4">

              <div class="row">

                @foreach($eventprofile as $cp)

                <div class="col-lg-9 ">

                  <div class="row">

                    <div class="col-lg-4 pl-0">

                      <img class="img-fluid p-3" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/>

                    </div>

                    <div class="col-lg-8">

                      <h2 class="display-4 mt-2 text-blue mb-2">

                        @if($cp->event_url)

                        <strong>{{$cp->name}}</strong>

                        @else

                        <a href="{{url($cp->web_link)}}" target="_blank"><strong>{{$cp->name}}</strong></a>

                        @endif

                      </h2>



                      <p class="mb-1 display-5"><i class="fa mr-2 fa-calendar text-blue" aria-hidden="true"></i>

                        <strong>{!! date('j F', strtotime($cp->start_date)) !!}</strong> 

                        <strong class="ml-1 mr-1">-</strong>

                        <strong>{!! date('j F', strtotime($cp->end_date))!!}</strong>,

                        <strong class="ml-1">{!! date('Y', strtotime($cp->end_date))!!}</strong>

                      </p>



                      <p class="mb-2 text-lowercase"><i class="fa mr-2 fa-envelope text-blue" aria-hidden="true"></i> {{$cp->email}}</p>

                      <p class="mb-2"><i class="fa fa-lg mr-2 fa-phone text-blue" aria-hidden="true"></i> {{$cp->phone}}</p>

                      <p class="mb-2 text-lowercase">

                        <i class="fa fa-lg mr-2 fa-globe text-blue" aria-hidden="true"></i> 

                        <a href="{{$cp->web_link}}" target="_blank">

                         {{$cp->web_link}}

                        </a>

                      </p>

                      <p class="mb-1">

                        <div class="row">

                          <div class="col-1"><i class="fa fa-lg fa-map-marker text-blue" aria-hidden="true"></i></div> 

                          <div class="col-11 pl-0"><small>{{$cp->venue}}, <strong>{{$cp->country}}</strong></small></div>

                        </div> 

                        <!-- <i class="fa fa-lg mr-2 ml-1 fa-map-marker text-blue" aria-hidden="true"></i> 

                          {{$cp->venue}}, <strong>{{$cp->country}}</strong> -->

                        </p>

                      </div>

                    </div>

                  </div>





                  <div class="col-lg-3">

                    <!-- <h4 class="display-5 mb-0"><u>Organized By:</u></h4> -->

                    <h4 class="btn btn-sm btn-primary">Organized By:</h4>

                    <br/>

                    <img src="{{config('app.url')}}/event/organiser/{{$cp->eventorg->org_logo}}" title="{{$cp->eventorg->org_logo}}" class="img-fluid" style="height:40px">

                    <h3 class="display-6 text-blue font-weight-bold mb-1 mt-1">{{$cp->eventorg->name}}</h3>

                    <p class="mb-0 small"><i class="fa fa-lg mr-2 fa-phone text-blue" aria-hidden="true"></i> {{$cp->eventorg->org_contactno}}</p>

                    <p class="mb-0 text-lowercase small"><i class="fa mr-2 fa-envelope text-blue" aria-hidden="true"></i> {{$cp->eventorg->org_email}}</p>

                    <p class="mb-0 text-lowercase small"><i class="fa fa-lg mr-2 fa-globe text-blue" aria-hidden="true"></i> {{$cp->eventorg->org_website}}</p>                

                    <p class="mb-0 small">

                      <div class="row">

                        <div class="col-lg-1"><i class="fa fa-lg fa-map-marker text-blue" aria-hidden="true"></i></div> 

                        <div class="col-lg-10"><small>{{$cp->eventorg->org_address}}</small></div>

                      </div>                  

                    </p>

                  </div>  

                  @endforeach

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

                <li class="nav-item @if(count(Request::segments())==2) active @endif"><a class="nav-link" href="{{url('events/'.$cp->event_url)}}">About Event</a></li>

                <li class="nav-item @if(\Request::segment('3')=='speakers') active @endif"><a class="nav-link @if(@$active_menus->speakers==2) @else  disabled @endif" href="{{url('events/'.$cp->event_url.'/speakers')}}">Speakers</a></li>

                <li class="nav-item @if(\Request::segment('3')=='exhibitors') active @endif"><a class="nav-link @if(@$active_menus->exhibitors==2) @else  disabled @endif" href="{{url('events/'.$cp->event_url.'/exhibitors')}}">Exhibitors</a></li>

                <li class="nav-item @if(\Request::segment('3')=='pressrelease') active @endif"><a class="nav-link @if(@$active_menus->pressrelease==2) @else  disabled @endif" href="{{url('events/'.$cp->event_url.'/pressrelease')}}">Press Release</a></li>

                <li class="nav-item @if(\Request::segment('3')=='brochure') active @endif"><a class="nav-link @if(@$active_menus->brochures==2) @else  disabled @endif" href="{{url('events/'.$cp->event_url.'/brochures')}}">Brochure</a></li>

                <li class="nav-item @if(\Request::segment('3')=='gallery') active @endif"><a class="nav-link @if(@$active_menus->gallery==2) @else  disabled @endif" href="{{url('events/'.$cp->event_url.'/gallery')}}">Gallery</a></li>    



              </ul> -->

              <ul class="navbar-nav mr-auto">



                <li class="nav-item @if(count(Request::segments())==2) active @endif"><a class="nav-link" href="{{url('events/'.$cp->event_url)}}">About Event</a></li>

                @if(@$active_menus->speakers==2)

                <li class="nav-item active @if(\Request::segment('3')=='speakers') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/speakers')}}">Speakers</a></li>

                @else  

                <li class="nav-item"><a class="nav-link disabled" >Speakers</a></li>

                @endif

                @if(@$active_menus->exhibitors==2)

                <li class="nav-item @if(\Request::segment('3')=='exhibitors') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/exhibitors')}}">Exhibitors</a></li>

                @else  

                <li class="nav-item"><a class="nav-link disabled">Exhibitors</a></li>

                @endif

                

                @if(@$active_menus->pressrelease==2)

                <li class="nav-item @if(\Request::segment('3')=='pressrelease') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/pressrelease')}}">Press Release</a></li>

                @else 

                <li class="nav-item"><a class="nav-link disabled" >Press Release</a></li>



                @endif

                @if(@$active_menus->brochure==2) 

                <li class="nav-item @if(\Request::segment('3')=='brochure') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/brochures')}}">Brochure</a></li>

                @else 

                <li class="nav-item"><a class="nav-link disabled">Brochure</a></li> 



                @endif



                @if(@$active_menus->gallery==2)

                <li class="nav-item @if(\Request::segment('3')=='gallery') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/gallery')}}">Gallery</a></li>   

                @else  

                <li class="nav-item"><a class="nav-link disabled">Gallery</a></li>  



                @endif

                @if(@$active_menus->partners==2)

                <li class="nav-item @if(\Request::segment('3')=='partners') active @endif"><a class="nav-link " href="{{url('events/'.$cp->event_url.'/partners')}}">Partners</a></li>   

                @else  

                <li class="nav-item"><a class="nav-link disabled">Partners</a></li>  



                @endif





              </ul>                  

              <!-- <a class="btn btn-light my-2 my-lg-0" href="{{url('event-organiser/'.$cp->eventorg->url)}}" role="button">About Organizer</a>  -->        

            </div>

          </div>  

        </nav>

        <!-- Profile Nav // -->

      </div>

      @endforeach

    </div>

    @yield('content')



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

          <img src="{{ config('app.url') }}/img/ochre-media-logo.png" width="70" alt="Ochre Media Group" title="Ochre Media Group" class="img-fluid mt-2" />

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

                          <a href="{{url('/post-requirement')}}" target="_blank">Post your Requirement</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/postevent')}}" target="_blank">Event Registration</a>

                        </li>

                        <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/registration')}}" target="_blank">Newsletter Signup</a>

                        </li> -->

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/events-newsletters')}}" target="_blank">Event Newsletters</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/get-listed')}}" target="_blank">Get Listed</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('mediapack-download')}}" target="_blank">Mediapack</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/clientele')}}" target="_blank">Clientele</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/registration')}}" target="_blank">e-Newsletters</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{config('app.blogurl')}}" target="_blank">Blog</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/partners')}}" target="_blank">Our Partners</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/aboutus')}}" target="_blank">About Us</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('contactus')}}" target="_blank">Contact Us</a>

                        </li>

                      </ul>

                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                      <ul>

                      <!-- <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/suppliers')}}" target="_blank">Suppliers</a>

                        </li>   -->  

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/sitemap')}}" target="_blank">Sitemap</a>

                        </li>

                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                          <a href="{{url('/terms-conditions')}}" target="_blank">Terms &amp; Conditions</a>

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

                        <img src="{{ config('app.url') }}images/iot-ai-popup.jpg" class="img-fluid border">

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

                        <a target="_blank" title="Facebook" class="facebook" href="{{ config('app.furl') }}"><i class="fa fa-facebook"></i></a>

                      </li>

                    <!--   <li><a target="_blank" title="Google Plus" class="google" href="{{ config('app.gurl') }}"><i class="fa fa-google-plus"></i></a></li>

                    </ul>

                    <ul class="social-icons"> -->

                      <li><a target="_blank" title="Twitter" class="twitter" href="{{ config('app.turl') }}"><i class="fa fa-twitter"></i></a></li>



                      <li><a target="_blank" title="LinkedIn" class="linkdin" href="{{ config('app.lurl') }}"><i class="fa fa-linkedin"></i></a></li>

                    </ul>   

                    <!--  <ul class="social-icons"></ul>  -->                      

                  </div>

                </div>

                <!-- FOOTER-SOCIAL MEDIA // -->       



                <!-- // Copyright-Section -->

                <div class="col-lg-12">

                  <div class="copyright-section">                

                    <p class="pt-3 text-center">Copyright &copy; {!! date('Y') !!} Ochre Digi Media Pvt Ltd. All Rights Reserved.</p>

                  </div>

                </div> 

                <!-- Copyright-Section // -->        

              </div>  

            </div>  

          </footer>

          <!-- FOOTER // -->



          <!-- jQuery first, then Popper.js, then Bootstrap JS -->

          <!-- <script src="{{ config('app.url') }}js/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script> -->

          <script src="{{ config('app.url') }}js/jquery-3.3.1.min.js"></script>

          <script src="{{ config('app.url') }}js/popper.min.js"></script>

          <script src="{{ config('app.url') }}js/bootstrap.min.js"></script>



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



     var eventnl_url = "{{url('newsletter-signup-success')}}"

   </script>

   {{-- <script type="text/javascript">       

    // jQuery(document).ready(function($){  

    //   alignModal();

    //   if (sessionStorage.getItem('advertOnce') !== 'true') {

    //     $('#myModalscwsamericas').modal({backdrop: 'static', keyboard: false});

    //     sessionStorage.setItem('advertOnce','true');

    //   }     

    // });



    



    function alignModal(){

      var modalDialog = $(".modal-dialog");

    /* Applying the top margin on modal dialog to align it vertically center 

    modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 3));*/

  }

</script> --}}



@yield('scripts') 

<script type="text/javascript" src="{{ config('app.url') }}js/eventformajax.js"></script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->
</body>

</html>    

