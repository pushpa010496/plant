<!doctype html>

<html lang="<?php echo e(app()->getLocale()); ?>">



<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>img/favicon.ico" type="image/x-icon">

    <meta name="google-site-verification" content="s9BzDfVp0YSqEKZiyZWzVHvIbLO_hSfQF8dYHQWYUXs" />

    <meta name="robots" content="index, follow"/>
    <?php echo app('seotools')->generate(); ?>




    <?php echo $__env->yieldContent('style'); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>mix/app.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery-ui.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.min.css">
   
    


    <link rel="stylesheet" type="text/css"

        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    



    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">



    <style type="text/css">

    body {

        word-wrap: break-word;

    }



    .table {

        border-color: #ccc !important;

    }



    #profile .form-control {

        border-radius: 0px;

    }



    #profile .navbar-expand-lg {

        background-color: #92278f;

    }



    #profile .navbar-dark .navbar-nav .nav-link:focus,

    .navbar-dark .navbar-nav .nav-link {

        color: rgba(255, 255, 255, 1)

    }



    #profile .navbar-dark .navbar-nav .nav-link:focus,

    .navbar-dark .navbar-nav .nav-link:hover {

        color: rgba(255, 255, 255, 0.8)

    }



    #profile .btn-radius {

        border-radius: 20px;

        background-color: #fff;

        color: #92278f;

        border: 1px solid #fff;

        font-weight: bold;

    }



    #profile .btn-radius:hover {

        background-color: #fff;

        color: #fff;

        border: 1px solid #fff;

    }



    #profile .btn-outline-info {

        color: #92278f;

        background-color: transparent;

        background-image: none;

        border-color: #92278f;

    }



    #profile .nav-item.active:after,

    #profile .navbar-nav li:hover:after {

        width: 65%;

        background: #fff;

    }



    #profile .navbar-dark .navbar-nav .nav-link.disabled {

        color: rgba(255, 255, 255, .7);

        cursor: not-allowed;

    }



    #profile .navbar-dark .navbar-nav .active {

        color: #fff !important;

        font-size: 15px;

        font-weight: bold;

    }



    .address-p p {

        margin-bottom: 3px;

        line-height: 18px;

        font-size: 13px;

    }



    .btn-bot-rad {

        border-bottom-left-radius: 25px;

        border-bottom-right-radius: 25px;

    }



    .btn-top-rad {

        border-top-left-radius: 25px;

        border-top-right-radius: 25px;

    }



    /* Header SEARCH

       ---------------- */

    #main-search>.form-control-sm,

    .input-group-sm>.form-control,

    .input-group-sm {

        font-size: 12px;

        line-height: 14px;

        width: auto;

        /*border-top-left-radius: 20px;border-bottom-left-radius: 20px; */

    }



    #main-search>.input-group-addon,

    .input-group-sm>.input-group-btn>.btn {

        padding: .3rem 10px .3rem 10px;

        line-height: 1.5;

        background-color: #92278f;

        cursor: pointer;

        border: 1px solid #92278f !important;

        /*border-top-right-radius: 20px;border-bottom-right-radius: 20px;*/

    }



    #main-search>.input-group-addon,

    .input-group-sm>.input-group-btn>.btn:hover {

        background-color: #fff;

        color: #92278f;

    }



    #main-search .form-control {

        border: 1px solid #92278f !important;

        font-size: 14px;

    }



    .Btn-Rad-BR {

        border-bottom-right-radius: 25px;

    }



    #stickyPostRequirement {

        transition: 1s;

    }



    .btn:hover {

        background-color: #92278F !important;

        cursor: pointer;

        color: #fff;

    }



    @media (max-width: 1099px) {

        .top-bar .sticky-top {

            position: relative;

        }



        #company-profile .sticky-top {

            position: relative;

        }



        .fixed-top {

            position: inherit;

        }



        .navbar {

            box-shadow: 0px 4px 6px rgba(0, 0, 0, .2);

        }



        #searchForm {

            position: static !important;

        }



        .navbar {

            padding: 0rem 1rem .5rem 1rem

        }



        .sticky-top {

            position: static !important;

        }



        #searchForm>.input-group-sm {

            width: 200px !important;

            margin-left: 0px !important

        }



        #searchForm>.input-group-sm>.form-control {

            width: 200px !important

        }



        .navbar-nav li:hover:after {

            width: 70%;

            background: transparent;

        }



        .bg-topbar {

            background-color: #f8f9fa !important;

        }



        .navbar-brand img {

            height: 30px;

        }

    }



    @media (max-width: 575px) {

        .bg-topbar {

            background-color: #5d085a !important;

        }

    }



    button.close {

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



    .modal {

        background-color: rgba(0, 0, 0, 0.4) !important;

    }



    #searchForm {

        /* position: fixed;

           z-index: 99999;*/

    }



    .bg-purple {

        background-color: #5d085a;

    }



    .bg-purple2 {

        background-color: #7a0e77;

    }



    .Btn-Rad-TL {

        border-bottom-left-radius: 25px;

    }



    .submit10:hover {

        background-color: rgb(239, 239, 239) !important;

        cursor: pointer;

        color: #000;

    }

    </style>



    <!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>

    <script async>

    (function(i, s, o, g, r, a, m) {

        i['GoogleAnalyticsObject'] = r;

        i[r] = i[r] || function() {

            (i[r].q = i[r].q || []).push(arguments)

        }, i[r].l = 1 * new Date();

        a = s.createElement(o),

            m = s.getElementsByTagName(o)[0];

        a.async = 1;

        a.src = g;

        m.parentNode.insertBefore(a, m)

    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');



    ga('create', 'UA-91626815-1', 'auto');

    ga('send', 'pageview');

    </script>



    <script>

    window.dataLayer = window.dataLayer || [];



    function gtag() {

        dataLayer.push(arguments);

    }

    gtag('js', new Date());



    gtag('config', 'UA-91626815-1');

    </script>







    <!-- Google Tag Manager -->

    <script>

    (function(w, d, s, l, i) {

        w[l] = w[l] || [];

        w[l].push({

            'gtm.start': new Date().getTime(),

            event: 'gtm.js'

        });

        var f = d.getElementsByTagName(s)[0],

            j = d.createElement(s),

            dl = l != 'dataLayer' ? '&l=' + l : '';

        j.async = true;

        j.src =

            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;

        f.parentNode.insertBefore(j, f);

    })(window, document, 'script', 'dataLayer', 'GTM-KKG856Z');

    </script>

    <!-- End Google Tag Manager -->

</head>



<body>

    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKG856Z" height="0" width="0"

            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->



    <!-- <div class="container-fluid">

        <div class="row fixed-top text-right bg-topbar">

            <div class="col-12 col-sm-5 col-md-3 pl-0 pr-0 col-lg-2 offset-lg-7 offset-md-5 text-center"

                id="stickyPostRequirement">

                <a data-toggle="modal" onclick="return checkpopupform('Post')" data-target="#postRequirement"

                    class="btn btn-sm btn-secondary btn-bot-rad pl-4 pr-4 text-white font-14" data-toggle="tooltip"

                    title="Not a member yet, no problem!">Post Your Requirement</a>

            </div>



            <div class="col-12 col-sm-7 col-md-4 col-lg-3 bg-purple text-center Btn-Rad-TL" id="rad_top_btn">

                <a href="<?php echo e(url('/get-listed')); ?>" class="btn btn-sm bg-purple text-white border-0 mr-3 font-14">Get

                    Listed</a>

                <a href="<?php echo e(url('/events')); ?>" class="btn btn-sm bg-purple text-white border-0 font-14">Industrial

                    Events</a>

            </div>

        </div>

    </div> -->


    <?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 



    <!-- Begin page content -->

    <div role="main" id="profile">

        <?php $__currentLoopData = $companyprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       





    

        <div class="bg-white sticky-top">

            <!-- // Company Heading -->

            <div class="container bg-white">

                <div class=" pt-2 ">

                    <div class="row">

                        <div class="col-12 col-sm-5 col-md-2 col-lg-2 ">

                            <img src="<?php echo e(config('app.url')); ?>suppliers/<?php echo e(str_slug($cp->company->comp_name)); ?>/<?php echo e($cp->company->comp_logo); ?>"

                                alt="<?php echo e($cp->company->comp_name); ?>" title="<?php echo e($cp->company->comp_name); ?>"

                                class="img-fluid mt-1 mb-1" width="150px" />

                        </div>

                        <div class="col-sm-1 col-md-3 col-lg-5 d-none d-sm-block">

                            <div class="searchForm2 mt-5">



                            </div>

                        </div>



                        <div class="col-11 col-sm-6 col-md-7 col-lg-5 pb-2">

                            <h1 class="title display-5 pt-1"><?php echo e($cp->company->comp_name); ?>


                                <a href="javascript:void(0)"

                                    onclick="trackOutboundLink('<?php echo e($cp->company->track_url); ?>'); return false;">

                                    <span class="small ml-1"><i class="fa fa-external-link text-blue"

                                            aria-hidden="true"></i></span>

                                </a>

                            </h1>

                            <span class="small text-secondary address-p"><?php echo $cp->company->address; ?></span>



                            <div class="col-lg-2 col-md-2 col-sm-12 col-12 pt-2 pb-2 align-self-center">

                                <!-- <button type="button" class="btn btn-sm btn-success BTN-Rad pl-3 pr-3"> <i class="fa fa-check mr-1" aria-hidden="true"></i> Verified</button> -->



                                <?php if($cp->company->profileclaim=='pclaim'): ?>

                                <button type="button" class="btn btn-sm btn-success BTN-Rad pl-3 pr-3"

                                    data-toggle="modal" data-target="#seeYourself">Claim your profile</button>

                                <?php elseif($cp->profileclaim ==""): ?>

                                <!--   <button type="button" class="btn btn-sm btn-success BTN-Rad pl-3 pr-3"> <i class="fa fa-check mr-1" aria-hidden="true"></i> Verified</button> -->

                                <?php endif; ?>







                            </div>









                            <div class="pt-1">

                                <?php if($cp->company->linkedin): ?>

                                <a href="<?php echo e($cp->company->linkedin? $cp->company->linkedin : 'javascript:void(0)'); ?>"

                                    target="_blank">

                                    <img src="<?php echo e(config('app.url')); ?>images/linkedin-img.png" alt=""

                                        class="img-fluid rounded-circle mr-1" width="25">

                                </a>

                                <?php endif; ?>

                                <?php if($cp->company->twitter): ?>

                                <a href="<?php echo e($cp->company->twitter? $cp->company->twitter : 'javascript:void(0)'); ?>"

                                    target="_blank">

                                    <img src="<?php echo e(config('app.url')); ?>images/twitter-img.png" alt=""

                                        class="img-fluid rounded-circle mr-1" width="25">

                                </a>

                                <?php endif; ?>

                                <?php if($cp->company->facebook): ?>

                                <a href="<?php echo e($cp->company->facebook? $cp->company->facebook : 'javascript:void(0)'); ?>"

                                    target="_blank">

                                    <img src="<?php echo e(config('app.url')); ?>images/facebook-img.png" alt=""

                                        class="img-fluid rounded-circle" width="25">

                                </a>

                                <?php endif; ?>



                                <?php if($cp->company->instagram): ?>

                                <a href="<?php echo e($cp->company->instagram? $cp->company->instagram : 'javascript:void(0)'); ?>"

                                    target="_blank">

                                    <img src="<?php echo e(config('app.url')); ?>images/instagram.png" alt=""

                                        class="img-fluid rounded-circle" width="25">

                                </a>

                                <?php endif; ?>



                                <?php if($cp->company->youtube): ?>

                                <a href="<?php echo e($cp->company->youtube? $cp->company->youtube : 'javascript:void(0)'); ?>"

                                    target="_blank">

                                    <img src="<?php echo e(config('app.url')); ?>images/youtube.png" alt=""

                                        class="img-fluid rounded-circle" width="25">

                                </a>

                                <?php endif; ?>

                            </div>



                        </div>



                    </div>

                </div>

            </div>

            <!-- Company Heading // -->



            <!-- // Profile Nav -->
            <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12 m-0 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark pt-1 pb-1">

                <div class="container">

                    <!-- <a class="navbar-brand" href="#">Profile Menu</a> -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnav"

                        aria-controls="subnav" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <?php $active_menus = json_decode($cp->active_menus); ?>

                    <div class="collapse navbar-collapse" id="subnav">

                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item <?php if(\Request::segment('1')=='products'): ?> active <?php endif; ?>">

                                <?php if(@$cp->pproduct->count() != 0): ?>

                                <a class="nav-link" href="<?php echo e(url('products/'.$cp->url)); ?>">Products</a>

                                <?php else: ?>

                                <a class="nav-link disabled">Products</a>

                                <?php endif; ?>

                            </li>

                            <li class="nav-item <?php if(\Request::segment('1')=='catalogue'): ?> active <?php endif; ?>">

                                <?php if(@$cp->pcatalog->count() != 0): ?>

                                <a class="nav-link" href="<?php echo e(url('catalogue/'.$cp->url)); ?>">Catalogues</a>



                                <?php else: ?>

                                <a class="nav-link disabled">Catalogues</a>

                                <?php endif; ?>

                            </li>

                            <li class="nav-item <?php if(\Request::segment('1')=='pressrelease'): ?> active <?php endif; ?>">

                                <?php if(@$cp->ppress->count() != 0): ?>

                                <a class="nav-link" href="<?php echo e(url('pressrelease/'.$cp->url)); ?>">Press Release</a>

                                <?php else: ?>

                                <a class="nav-link disabled">Press Release</a>

                                <?php endif; ?>

                            </li>

                            <li class="nav-item <?php if(\Request::segment('1')=='whitepaper'): ?> active <?php endif; ?>">

                                <?php if(@$cp->pwp->count() != 0): ?>

                                <a class="nav-link " href="<?php echo e(url('whitepaper/'.$cp->url)); ?>">White Papers</a>

                                <?php else: ?>

                                <a class="nav-link disabled">White Papers</a>

                                <?php endif; ?>

                            </li>

                            <li class="nav-item <?php if(\Request::segment('1')=='video'): ?> active <?php endif; ?>">

                                <?php if(@$cp->pvideo->count() != 0): ?>

                                <a class="nav-link" href="<?php echo e(url('video/'.$cp->url)); ?>">Videos</a>

                                <?php else: ?>

                                <a class="nav-link disabled">Videos</a>

                                <?php endif; ?>

                            </li>



                            <!--<li class="nav-item"><a class="nav-link disabled" >Events</a></li>-->

                            <!-- <li class="nav-item <?php if(\Request::segment('1')=='project'): ?> active <?php endif; ?>">-->

                            <!--  <?php if(@$cp->pproject->count() != 0): ?>-->

                            <!--  <a class="nav-link" href="<?php echo e(url('project/'.$cp->url)); ?>">Projects</a>-->



                            <!--  <?php else: ?> -->

                            <!--  <a class="nav-link disabled" >Projects</a>-->

                            <!--  <?php endif; ?>-->

                            <!--</li>-->

                            <!--  <li class="nav-item"><a class="nav-link disabled" >Projects</a></li> -->

                            <!--<li class="nav-item"><a class="nav-link disabled" >Interviews</a></li>       -->



                        </ul>



                        <a class="btn btn-sm btn-radius my-2 my-lg-0 pl-4 pr-4 pt-0 pb-0"

                            href="<?php echo e(url('suppliers/'.$cp->url)); ?>" role="button">Profile</a>

                    </div>

                </div>

            </nav>
            </div>
  </div>
</div>
            <!-- Profile Nav // -->

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        <?php echo $__env->yieldContent('content'); ?>



        <div class="mt-3"></div>



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









        <!-- Verification modal RB-->



        <div id="seeYourself" class="modal fade" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title">Claim your Free Profile</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>



                    </div>

                    <div class="modal-body">

                        <form action="<?php echo e(route('profileclaim')); ?>" method="post">

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                            <input type="hidden" name="publicid" value="83fcdd6ec29f4542618f7c104d5eb1a5">

                            <input type="hidden" name="name" value="packaging-labelling-Claim-your-Free-Profile">

                            <input type="hidden" name="type" value="Claim your Free Profile">

                            <input type="hidden" name="admin_subject" value="Enquiry for ">

                            <input type="hidden" name="client_subject" value="Enquiry Submitted | Packaging-Labelling">

                            <input type="hidden" name="company_id" value="<?php echo e($cp->id); ?>">

                            <ul class="error" style="list-style-type: none;"></ul>





                            <div class="form-group row">

                                <label for="whom" class="col-lg-4 col-sm-2 col-form-label">Claim your profile</label>

                                <div class="col-lg-8 col-sm-10">

                                    <select class="form-control" name="firstname" id="firstname" required>

                                        <option selected disabled>--- Claim your profile ---</option>

                                        <option value="I am Interested">I am Interested</option>

                                        <option value="Not Interested">Not Interested</option>

                                        <option value="Need more details">Need more details</option>



                                    </select>

                                </div>

                            </div>









                            <div class="mt-4"></div>



                            <!--   <div class="text-left form-group">                  

   <?php echo Form::captcha(); ?>


 </div>   -->

                            <div class="text-danger verifi mb-2"></div>



                            <button type="submit" class="btn btn-block btn-default submit10">Submit</button>



                    </div>

                    <!--  <div class="modal-footer">

              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div> -->

                </div>



                </form>

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

                        <a href="https://www.ochre-media.com" target="_blank" rel="nofollow">

                            <img src="<?php echo e(config('app.url')); ?>/img/ochre-media-logo.png" width="70"

                                alt="Ochre Media Group" title="Ochre Media Group" class="img-fluid mt-2" />

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

                                        <a href="<?php echo e(url('/terms-conditions')); ?>" target="_blank">Terms &amp;

                                            Conditions</a>

                                    </li>

                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;

                                        <a href="https://www.ochre-media.com/brands.html" rel="nofollow" target="_blank">Our Other

                                            Industries</a>

                                    </li>



                                </ul>

                            </div>

                        </div>

                    </div>





<!-- 

                    <div id="myModalpopup" class="modal fade" role="dialog">

        <div class="modal-dialog modal-dialog-centered" role="document">

          <div class="modal-content p-0">           

            <div class="modal-body p-0">

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              <a href="https://www.plantautomation-technology.com/promotion/sparkplug-open-specification-critical-achieving-roi-in-iiot" >

                <img src="<?php echo e(config('app.url')); ?>images/popup-banner111.jpg" class="img-fluid border">

              </a> 

            </div>          

          </div>

        </div>

      </div>  -->
<!-- 
      <div id="myModalpopup" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-0">           
      <div class="modal-body p-0">
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
        <a href="https://www.automotive-technology.com/functional-safety-usa-2023-conference" > 
             <img src="<?php echo e(config('app.url')); ?>images/functional-safety-usa-banner11.jpg" alt="Pop-Up" class="img-fluid" /> 
        </a> 
      </div>          
    </div>
  </div>
</div>  -->





                    <div id="myModal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <!-- Modal content-->

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title text-success">Form Successfully Submitted</h5>

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>



                                </div>

                                <div class="modal-body">

                                    <p class="">Thank you for showing interest and taking the first step towards

                                        claiming your profile.

                                        Allow us 48 hours for your account and work space creation.

                                        We will get back to you at your registered email-id with your account and

                                        workspace details.

                                    </p>

                                    <!--  <p>Happy Surfing!</p>

            <p class="mb-0">Regards,</p>

            <p class="mb-0">Events -Client Success Team (CRM),</p> -->

                                    <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">

                                </div>

                                <div class="modal-footer">

                                    <a href="<?php echo e(Request::url()); ?>" class="btn btn-info text-right">Close</a>

                                </div>

                                

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

                                <a target="_blank" title="Facebook" class="facebook" href="<?php echo e(config('app.furl')); ?>"><i

                                        class="fa fa-facebook"></i></a>

                            </li>

                            <!--  <li><a target="_blank" title="Google Plus" class="google" href="<?php echo e(config('app.gurl')); ?>"><i class="fa fa-google-plus"></i></a></li>

      </ul>

      <ul class="social-icons"> -->

                            <li><a target="_blank" title="Twitter" class="twitter" href="<?php echo e(config('app.turl')); ?>"><i

                                        class="fa fa-twitter"></i></a></li>



                            <li><a target="_blank" title="LinkedIn" class="linkdin" href="<?php echo e(config('app.lurl')); ?>"><i

                                        class="fa fa-linkedin"></i></a></li>

                        </ul>

                        <!--  <ul class="social-icons"></ul>  -->

                    </div>

                </div>

                <!-- FOOTER-SOCIAL MEDIA // -->



                <!-- // Copyright-Section -->

                <div class="col-lg-12">

                    <div class="copyright-section">

                        <p class="pt-3 text-center">Copyright &copy; <?php echo date('Y'); ?> Ochre Digi Media Pvt Ltd. All Rights Reserved.

                        </p>

                    </div>

                </div>

                <!-- Copyright-Section // -->

            </div>

    </div>

    </footer>

    <!-- FOOTER // -->



    <!-- Modal -->

    <div class="modal fade" id="postRequirement" tabindex="-1" role="dialog" aria-labelledby="postRequirementTitle"

        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title text-blue" id="postRequirementTitle">Post Your Requirement</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <?php echo $__env->make('company._postRequirementForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>

            </div>

        </div>

    </div>

    <!-- Post Your Requirement Modal // -->



<div id="enquiryModal" class="modal fade" role="dialog">

        <div class="modal-dialog">

         

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title text-success">Success</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

                <p class=""><?php echo e(Session('requiry_thank_message')); ?></p>

                <p>Sincerely Plantautomation Technology</p>

            <p class="mb-0">Regards,</p>

            <p class="mb-0">Client Success Team (CRM),</p>

            <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">

            </div>

            <div class="modal-footer">

           

             <a href="<?php echo e(url()->previous()); ?>" class="btn btn-info text-right">Close</a> 

            </div>

          </div>

        </div>

      </div>

      

    <!-- success modal -->

    <div id="postRequirementSuccess" class="modal fade" role="dialog">

        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title text-success">Success</h4>

                    <button type="button" class="close" onClick="<?php echo e(url('/') .'/'. session('slug')); ?>">&times;</button>



                </div>

                <div class="modal-body">

                    <p class=""><?php echo session('message'); ?></p>

                    <p>Sincerely Plantautomation Technology</p>

                    <p class="mb-0">Regards,</p>

                    <p class="mb-0">Client Success Team (CRM),</p>

                    <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" width="150px">

                </div>

                <div class="modal-footer">

                    



                    <a href="<?php echo e(url('/') .'/'. session('slug')); ?>" class="btn btn-info text-right">Close</a>

                </div>

            </div>

        </div>

    </div>







    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    



    <script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.min.js"></script>

    <script src="<?php echo e(config('app.url')); ?>js/popper.min.js"></script>

    <script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js"></script>

    <script src="<?php echo e(config('app.url')); ?>js/jquery-ui-1.12.1.min.js"></script>

    <!-- <script src="<?php echo e(config('app.url')); ?>js/jquery-ui-1.12.1.min.js"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>





    <script type="text/javascript">

    $(document).ready(function() {





        if ($(window).width() > 1100) {



            var form =

                "<form method='POST' action='https://www.plantautomation-technology.com/search' accept-charset='UTF-8' class='form-inline my-2 my-lg-0' id='searchForm' _lpchecked='1'><input name='_token' type='hidden' value='<?php echo e(csrf_token()); ?>'><div class='input-group input-group-sm ml-4 '><input type='text' name='q' class='form-control ui-autocomplete-input' id='autoComplete' required='' placeholder='Search Products &amp; Manufacturers...' autocomplete='off'><span class='input-group-btn'><button class='btn btn-sm btn-secondary' type='submit'><i class='fa fa-search' aria-hidden='true'></i></button></span></div></form>";





            $(window).scroll(function() {

                var scrollTop = $(window).scrollTop();

                if ($(this).scrollTop() >= '100') {

                    // $('#stickyPostRequirement').removeClass('offset-lg-7',{duration:100}).addClass('offset-lg-2',{duration:200});

                    $('#stickyPostRequirement').removeClass('offset-lg-7', {

                        duration: 100

                    }).css({

                        'margin-left': '16.666667%',

                        'transition': '500ms'

                    });

                    $('.searchForm1').empty();

                    $('.searchForm2').html(form);

                    $('#rad_top_btn').addClass('Btn-Rad-BR', {

                        duration: 300

                    });

                    autoComplete();



                } else {

                    // $('#stickyPostRequirement').removeClass('offset-lg-2',{duration:200}).addClass('offset-lg-7',{duration:100});

                    $('#stickyPostRequirement').css({

                        'margin-left': '58.333333%',

                        'transition': '500ms'

                    });

                    $('.searchForm2').empty();

                    $('.searchForm1').html(form);

                    $('#rad_top_btn').removeClass('Btn-Rad-BR', {

                        duration: 300

                    });

                    autoComplete();

                }

            });

        }







        //   function autoComplete(){

        //    src = "<?php echo e(route('searchajax')); ?>";

        //    $("#autoComplete").autocomplete({    

        //     source: function(request, response) {

        //       $.ajax({

        //         url: src,

        //         dataType: "json",

        //         data: {

        //           term : request.term

        //         },

        //         success: function(data) {

        //           response(data);



        //         }

        //       });

        //     },

        //     minLength: 3,

        //     autoFill: true,

        //     select: function (event, ui) {

        //       $('#autoComplete').val(ui.item.value);

        //       $('form#searchForm').submit();

        //                 // var label = ui.item.label;

        //                 // var value = ui.item.value;



        //              //store in session

        //              // document.valueSelectedForAutocomplete = value 

        //            }



        //          });



        //  }

    });

    </script>

    <?php if(session('requirement') == 'success'): ?>

    <script type="text/javascript">

    $('#postRequirementSuccess').modal('show');

    </script>

    <?php endif; ?>





    <script type="text/javascript">

    jQuery(document).ready(function($) {

        alignModal();

        if (sessionStorage.getItem('advertOnce') !== 'true') {

            $('#myModalpopup').modal({

                backdrop: 'static',

                keyboard: false

            });

            sessionStorage.setItem('advertOnce', 'true');

        }

    });



    function alignModal() {

        var modalDialog = $(".modal-dialog");

    }

    </script>



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

            'hitCallback': function() {

                window.open(url, '_blank');

            }

        });

    }

    </script>

<script type="text/javascript">

  <?php if(Session::has('requiry_thank_message')): ?>

  	$('#enquiryModal').modal('toggle');

  <?php endif; ?>	  	

</script>





    <script type="text/javascript">

    $('.submit-btn10').on('click', function(e) {







        var dataString = $('#profile-claim').serialize();



        var selval = $('#firstname').val();



        alert(selval);



        if (selval == 'I am Interested') {



            var urinfo = 'profileclaim-interested';



        }



        if (selval == "Not Interested") {



            var urinfo = 'profileclaim-not-interested';



        }



        if (selval == "Need more details") {



            var urinfo = 'profileclaim-need-more-details';



        }







        $.ajax({

            type: 'POST',

            url: urinfo,

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },

            data: dataString,

            success: function(data) {



                //alert(data); 

                console.log(data);



                $('#seeYourself').modal('hide');



                $('#myModal').modal('show');



            },

            error: function(data) {

                $(".error").empty();

                $.each(data.responseJSON.errors, function(key, value) {

                    $(".error").append('<li class="text-danger">' + value + '</li>');

                });

            }

        });

    });

    </script>



    <?php if(session('thank_message') == 'I am Interested'): ?>



    <script type="text/javascript">

    var slug = '<?php echo e($cp->url); ?>';



    history.pushState(null, null, '/claim-your-profile/i-am-interested-success');



    // $('#myModal1').modal('show');         

    </script>



    <?php endif; ?>



    <?php if(session('thank_message') == 'Not Interested'): ?>



    <script type="text/javascript">

    var slug = '<?php echo e($cp->url); ?>';



    history.pushState(null, null, '/claim-your-profile/not-interested-success');



    // $('#myModal1').modal('show');         

    </script>



    <?php endif; ?>





    <?php if(session('thank_message') == 'Need more details'): ?>



    <script type="text/javascript">

    var slug = '<?php echo e($cp->url); ?>';



    history.pushState(null, null, '/claim-your-profile/need-more-details-success');



    // $('#myModal1').modal('show');         

    </script>



    <?php endif; ?>



    <?php if(session('profileclaim') == 'success'): ?>



    <script type="text/javascript">

    $('#myModal').modal('show');

    </script>





    <script>

    $("table").addClass("table");

    </script>



    <?php endif; ?>

    <!-- <?php echo $__env->yieldContent('scripts'); ?> -->

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/39837407.js"></script>
<!-- End of HubSpot Embed Code -->

</body>



</html><?php /**PATH /home/plantautomationt/public_html/resources/views////layouts/company.blade.php ENDPATH**/ ?>