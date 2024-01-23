<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow, nosnippet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Yokogawa unique approach for APM with Sushi Sensor and Machine Learning.</title>

	<link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>img/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta property="og:title" content="SUEZ Water Technologies & Solutions – Ozonia® Ozone Systems" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="https://industry.plantautomation-technology.com/webinars/iiot/yokogawa-video.png" />
	<link rel="canonical" href="<?php echo e(url('yokogawa-webinar')); ?>"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="<?php echo e(url('webinar-demo/suez-ozonia-ozone-systems-webinar')); ?>" />

	
	<meta property="og:site_name" content="Plantautomation Technology" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="" />

	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css"> 
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/custom-styles.css">
<style type="text/css">
	
	.custom-list li::before {
    content: "\f138";
    font-family: FontAwesome;
    position: absolute;
    color: #337ab7;
    font-size: 14px;
    left: 20px;
}

.TXT-RED {
    color: #F1474E;
}

.mt-2, .my-2 {
    margin-top: .5rem!important;
}
.mb-1, .my-1 {
    margin-bottom: .25rem!important;
}

.h2, h2 {
    font-size: 18px;
}

</style>
	
	<!-- Global site tag (gtag.js) - Google Analytics(as  per bosco) -->
	<script type="application/ld+json"> { "@context" : "https://schema.org", "@type" : "Organization", "name" : " plant automation technology ", "url" : " https://www.plantautomation-technology.com/ ", "sameAs" : [ " https://www.facebook.com/plantautomationtechnology ", " https://twitter.com/plantautomatech ", " https://plus.google.com/+Plantautomation-technology/about ", " https://www.linkedin.com/groups?home=&gid=6618167&trk=anet_ug_hm", " https://www.tumblr.com/blog/plantautomationtechnology " ] } </script> 
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-91626815-1');
	</script>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-91626815-1', 'auto');
		ga('send', 'pageview');
	</script>

	<style type="text/css">
		body {font-size: 15px; font-family: "Open Sans", sans-serif;}
		.person-area {
			background: #fff none repeat scroll 0 0;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding-top: 25px;
			font-size: 15px;
		}
		.audience-title {
			font-size: 26px;
			margin-bottom: 10px;
		}
		.person {
			margin-bottom: 10px;
		}
		.person-name{
			font-size: 20px;
		}
		.gray-text {color: #7a7a7a;font-size: 14px;}

		.shadow {
			box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important
		}
		input[type="submit"]{
			padding-left: 25px;
			padding-right:25px;
		}
		.modal-dialog{
			top:0 !important;
		}
		.video:hover{cursor: pointer;}

		.BG-BLUE{background-color: #1c95ca;}
		.form-control{font-size: 14px; border-radius: 0px;}
		.btn-danger {
			border-radius: 0px;
			color: #fff;
			background-color: #F04E23;
			border-color: #F04E23;
		}
		.form-group{margin-bottom: 10px;}
		/*.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #bde450;
		}*/
		#state{
			display: none;
		}

		footer {
			background-color: #002232 !important;
			color: #ccc;
		}
		footer i{
			color: #F04E23;
			font-size: 17px;
			border-radius: 5px;
			transition: 500ms;
			background: #f1f1f1;
			margin-right: 5px;
		}
		.fa-facebook{
			padding: 5px 8px;
		}
		.fa-google-plus{
			padding: 5px 3px;
		}
		.fa-linkedin,.fa-twitter{
			padding: 5px 5px; 
		}

		footer i:hover{
			color: #fff;
			transition: 500ms;
			background: #F04E23;
		}
		.shadow {
			box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important
		}

		.BG-BLUE{background-color: #003d5b;}
		.TXT-BLUE{color: #003d5b;}
		.PF-TXTRED {color: #f04e23 !important;}
		.font-11 { font-size: 11px; line-height: 1.3; }
		.font-13 { font-size: 13px; line-height: 1.3; }
		.font-14 { font-size: 14px; line-height: 1.2; }
		.font-16 { font-size: 16px; line-height: 1.2; }
		.font-18 { font-size: 18px; line-height: 1.2; }
		.font-20 { font-size: 20px; line-height: 1.2; }
    </style>

</head>

<body> 
<div class="container-fluid fixed-top bg-light div-shadow" style="box-shadow:0px 0px 6px rgb(0 0 0 / 20%)" >
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 my-auto">
				<img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Plantautomation Technology" class="img-fluid">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 my-auto">
						 <div class='row'>
			<div class="col-6 my-auto d-flex justify-content-center">
						 <img src="<?php echo e(config('app.url')); ?>webinars/iiot/webinar-lp-header-banner-img.jpg" alt="Plantautomation Technology" class="img-fluid" data-toggle="modal" data-target="#enquiry" style='cursor:pointer;'>
					 </div>
			<div class="col-6  my-auto pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="<?php echo e(config('app.url')); ?>webinars/iiot/industrial-iot-ai-virtual-series-logo-7.png"
					 alt="5G-Driving" class="ml-2 img-fluid">
				</p>
			</div>
	</div>
	</div>
		</div>
	</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container" style='margin-top:140px;'>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="<?php echo e(config('app.url')); ?>webinars/iiot/industrial-iot-ai-virtual-series-banner-10.jpg" alt="PSI-Webinar" title="PSI-Webinar" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
						<h2 class="font-weight-bold PF-TXTRED font-20">Yokogawa unique approach for APM with Sushi Sensor and Machine Learning 	</h2>

						<p class="font-weight-bold">Today everything is being automated and digitally transformed. However, manual operator rounds are still the most common method of checking non-mission critical plant equipment. This limited information about equipment health status causes maintenance to be reactive and ultimately results in equipment and production downtime. By adding a wireless sensor network and AI anomaly detection function, plants can gain visibility to all assets, detect abnormal conditions and take early action to keep the equipment healthy and running optimally.</p>

						<p class="font-weight-bold">Hydrocarbon Processing has recognized Yokogawa IIoT Plant Asset Management solution as the Best Asset Monitoring Technology in 2020! Join our webinar to see why!.</p>

						<h2 class="font-weight-bold PF-TXTRED font-20">In this webinar we will discuss:</h2>

						<ul>
							<li>IIoT, Asset Performance Management, and Condition Based Maintenance</li>
							<li>Benefits of Yokogawa Sushi Sensor based on LoRaWAN® technology and AI anomaly detection function</li>
						</ul>
					

						
					</div>
				</div> 
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="<?php echo e(config('app.url')); ?>webinars/iiot/yokogawa-video.png" alt="PSI Webinar" title="PSI Webinar" class="img-fluid video shadow border text-center" />
				<div class="p-2 PF-BrdrDDD mb-1 bg-light shadow mt-4" align="center">
					<h3 class="pt-1 pb-1">
						<strong class="TXT-RED font-20">March 30, 2021</strong>
						<span class="small text-secondary ml-2 mr-3">(Tuesday)</span>
						<p class="mt-2 mb-0 font-weight-bold font-16">04:00 PM (SGT)</p>
					</h3>						
				</div>
			</div>

		</div>
	</div>
    <div class="container pt-4">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-12 person text-center">
							<h3 class="PF-TXTRED font-weight-bold font-18 text-uppercase mt-1">Speaker:</h3>
						<img src="<?php echo e(config('app.url')); ?>webinars/iiot/industrial-iot-ai-virtual-series-speaker-7.jpg" alt="Katarzyna Moscicka" title="Katarzyna Moscicka" class="img-fluid">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12 col-12">
							<h2 class="TXT-RED mt-2 mb-1"><strong>Koji Watanabe</strong></h2>
							<p class="gray-text mb-2"><em>Section Manager, AI Business Development</em></p>
							<p class="mb-1">Koji Watanabe starts his carrier as an electrical circuit engineer in 2006 in Yokogawa Electric. After the R&D experience of Giga-band hardware and network algorithm of ISA100 wireless, he moved to the Middle East for business development of the industrial wireless business from 2014 for 4 years. Now he engages in the IIoT and AI business development at Yokogawa HQ.</p>
							
						</div> 
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="container pt-3">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12 custom-list">
				<h2 class="font-weight-bold PF-TXTRED font-20 pb-2">Who Should Attend?</h2>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-12">
						<ul style="list-style-type: none;">
							<li>CEO</li>
							<li>Presidents</li>
							<li>Vice Presidents</li>
							<li>Maintenance Managers</li>
							<li>Project Managers</li>
							<li>Maintenance Engineers</li>
							<li>Operations Personnel</li>
							<li>Cloud computing specialists</li>
							<li>Chief Engineers</li>
							<li>Researchers & Academics</li>
							
						</ul>
					</div>

					<div class="col-md-6 col-sm-12 col-12">
						<ul style="list-style-type: none;">
							<li>Maintenance Personnel</li>
							<li>Managing Directors</li>
							<li>Plant Managers</li>
							<li>Technical Directors</li>
							<li>Operations Managers</li>
							<li>System Integrators</li>
							<li>Design Engineers</li>
							<li>Software Engineers</li>
							<li>Investors</li>
							<li>R&D Manager</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	



	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">	          		
					<p class="pt-3">&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
				</div>

				<div class="col-md-5 col-12 pt-3 pb-2">	   
					<div class="text-right">  
						<a href="https://www.linkedin.com/groups/6618185/" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a href="https://twitter.com/PulpandPaperTec" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://www.facebook.com/PulpandPaperTechnology" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</div>                                  
				</div>
			</div>   
		</div>
	</footer>

	<!-- main container --> 

	<div id="videoFormModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title PF-TXTRED font-18">Free Registration to View Now</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo e(route('yokogawa.post')); ?>" method="post" id='writemessage' >
						<?php echo e(csrf_field()); ?>	
						<div class="row">
							<div class="col-md-12">
								<div class="form-group <?php echo e($errors->first('name', 'has-error')); ?>">
									<input class="form-control" id="name" name="name" placeholder="Full Name *" required=""  value="<?php echo e(old('name')); ?>"  type="text">	
									<input type="hidden" name="type" id="type" value="Yokogawa" />
									<input type="hidden" name="client_message" id="client_message" value="Thank you for your interest in Yokogawa  webinar" />
									<input type="hidden" name="formtype"  value="modal-form" />
									<span class="help-block"><?php echo e($errors->first('name', ':message')); ?></span>
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
									<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="<?php echo e(old('email')); ?>"  type="name">
									<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group <?php echo e($errors->first('phone', 'has-error')); ?>">
									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required=""  value="<?php echo e(old('phone')); ?>"  type="text">
									<span class="help-block"><?php echo e($errors->first('phone', ':message')); ?></span> 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group <?php echo e($errors->first('job_title', 'has-error')); ?>">
									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="<?php echo e(old('job_title')); ?>"  required="" type="text">
									<span class="help-block"><?php echo e($errors->first('job_title', ':message')); ?></span>   
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group <?php echo e($errors->first('company', 'has-error')); ?>">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="<?php echo e(old('company')); ?>" required/>
									<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span> 
								</div>
							</div>							

							<div class="col-md-12">
								<div class="form-group  <?php echo e($errors->first('country', 'has-error')); ?>">
									
<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="<?php echo e(old('country')); ?>" >
										<option value="">Select Country*</option>
										<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($country->country_name); ?>"><?php echo e($country->country_name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										   
									</select>
									<span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>   
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
										<label class="custom-control-label font-13" for="email_updates">I would like to receive email updates about 5G Driving the Future of Industry 4.0 and Smart Manufacturing.</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label font-13" for="quotation">I would like to request a quotation</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
										<label class="custom-control-label font-13" for="representative">I have more questions and would like to be contacted by a 5G Driving  Webinar representative</label>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group text-center mb-1">
									<button type="submit" value="submit" class="btn btn-sm btn-danger pl-3 pr-3">SUBMIT</button>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group mb-1">									
									<small class="mt-2 text-muted">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>


	<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header m-auto">
                <h5 class="modal-title text-center" id="enquiryLabel">
				Get a Free Consultation </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="position: absolute;top: 7px;left: 9px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pt-2"></div>
                <form id="productForm">
                    <input type="hidden" name="company_name" value="">
                    <input type="hidden" name="page" value="">
                    <input type="hidden" name="company_id" value="">
                    <input type="hidden" name="prod_name" value="">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="subject_client" value="">
                    <input type="hidden" name="subject_admin" value="">
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email*" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">
                    </div>

                    <div class="form-group">
                        <select required="required" class="custom-select" name="country"><option value="" selected="selected">Select Country*</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guernsey">Guernsey</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Isle of Man">Isle of Man</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jersey">Jersey</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States minor outlying islands">United States minor outlying islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                    </div>

                    <div class="form-group">
                    <select class="form-control custom-select" name="whom" required="">
                      <option value="">How did you hear about us?*</option>
                      <option value="Internet Search">Internet Search</option>
                      <option value="Social Media">Social Media</option>
                      <option value="Email">Email</option>
                      <option value="Other">Other</option>
                    </select>
                    </div>

                   

                    

                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Write Message..."
                            required=""></textarea>
                    </div>

                    <div class="mt-4"></div>
                    <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-black"> 
                    <input type="checkbox" required="" value="Yes" name="newsletter" id="newsletter" checked=""> &nbsp;<small>Plant Automation Technology e-Newsletters</small>
                    </label> 
                  </div>
                  <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-black"> 
                    <input value="Yes" name="agree" id="agree" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms &amp; Conditions &amp; Disclaimer' : '');" type="checkbox" required="" checked=""> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>
                    </label> 
                  </div>
                  <div class="text-left form-group mb-0"> 
                    <label class="checkbox-inline text-black"> 
                    <input type="checkbox" required="" value="Yes" name="promotions" id="promotions" checked=""> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>
                    </label> 
                  </div>
                    <button type="submit" class="btn btn-primary btn-block post">Submit</button>
                </form>
                <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection"
                    width="100" class="img-fluid pull-right mt-1 mb-1">
            </div>
        </div>
    </div>
</div>



	<?php if(@Session('status') == 'true'): ?> 
	<div id="successModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue">Thank You</h2>
				</div>
				<div class="modal-body">
					<p>Your registration for Suez online webinar is successful. One of our team will get back to you soon and the details will be e-mailed to you.</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Plantautomation Technology
				</div>
				<div class="modal-footer">        
					<a class="btn btn-primary" role="button"  href="<?php echo e(url('webinar-demo/suez-ozonia-ozone-systems-webinar')); ?>" aria-expanded="false">
						Close
					</a>         
				</div>
			</div>
		</div>
	</div>                    
    <?php endif; ?>
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue"> Thank You...</h2>
				</div>
				<div class="modal-body">
					<p><?php echo e(session('thank_message')); ?></p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Plantautomation Technology
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="<?php echo e(url('webinar-demo/suez-ozonia-ozone-systems-webinar')); ?>" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 



	<script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.js"></script>
	<script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>

 	<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
	<script type="text/javascript">
		$('#country').on('change', function() {
			if( this.value  == "India"){
				$('#state').css('display','block').attr('required','true');
			}else{
				$('#state').css('display','none').removeAttr('required');
			}
		});
	</script>
		<?php if(Session('thank_message')): ?> 
		<script type="text/javascript">	  	
			$('#successModal').modal('show');
		</script>

		<?php endif; ?>  

		<script type="text/javascript">
	  	<?php if(session('thank_message')): ?>	
	  	$('#myModal').modal('show');
	  	// for (let link of document.querySelectorAll('a[download]'))
	  	// 	link.click();
	  	<?php endif; ?>	  	
  	</script>


	<?php if($errors->any()): ?>
	<script type="text/javascript">	  	
		<?php if(old('formtype') == 'modal-form'): ?>	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		<?php endif; ?>  
	</script>
	<?php endif; ?>  

</body>

</html>

<?php /**PATH /home/plantautomationt/public_html/resources/views/webinars/yokogawa/index.blade.php ENDPATH**/ ?>