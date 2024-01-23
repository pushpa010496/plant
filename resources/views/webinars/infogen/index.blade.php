<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow, nosnippet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Creating a prototype additive manufacturing supply chain including a cyber secure digital transport system.</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}img/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta property="og:title" content="Creating a prototype additive manufacturing supply chain including a cyber secure digital transport system" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="https://industry.plantautomation-technology.com/webinars/iiot/mtdg-video.png" />
	<link rel="canonical" href="{{url('mtdg-webinar')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('webinar-demo/suez-ozonia-ozone-systems-webinar')}}" />

	
	<meta property="og:site_name" content="Plantautomation Technology" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="" />

	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">
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

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" class="img-fluid">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-8 my-auto offset-lg-4 pt-2 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/iiot/industrial-iot-ai-virtual-series-logo-1.png"
					 alt="5G-Driving" class="ml-2 img-fluid">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/iiot/industrial-iot-ai-virtual-series-banner-4.jpg" alt="PSI-Webinar" title="PSI-Webinar" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
						<h2 class="font-weight-bold PF-TXTRED font-20">Predictive Maintenance with IoT and Data Analytics – Challenges and Solution</h2>

						<ul>
							<li>What is predictive maintenance and it’s benefit?</li>
							<li>What are the challenges to achieve predictive maintenance?</li>
							<li>How to overcome these challenges with use of advance IoT and Data technologies?</li>
						</ul>

						<p class="font-weight-bold">In this webinar, we will talk about various aspect around enabling a business for predictive maintenance, the challenges around collecting data, storing data and gaining insight from big data.</p>

						
					

						
					</div>
				</div> 
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="{{config('app.url')}}webinars/iiot/mtdg-video.png" alt="PSI Webinar" title="PSI Webinar" class="img-fluid video shadow border text-center" />
				<div class="p-2 PF-BrdrDDD mb-1 bg-light shadow mt-4" align="center">
					<h3 class="pt-1 pb-1">
						<strong class="TXT-RED font-20">April 02, 2021</strong>
						<span class="small text-secondary ml-2 mr-3">(Friday)</span>
						<p class="mt-2 mb-0 font-weight-bold font-16">01:30 PM (IST)</p>
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
						<img src="{{config('app.url')}}webinars/iiot/industrial-iot-ai-virtual-series-speaker-1.jpg" alt="Katarzyna Moscicka" title="Katarzyna Moscicka" class="img-fluid">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12 col-12">
							<h2 class="TXT-RED mt-2 mb-1"><strong>Shailendra Birthare</strong></h2>
							<p class="gray-text mb-2"><em>Group Manager</em></p>
							<p class="mb-1">Shailendra is a Group Manager at Infogain and work from Pune Development Center. Shailendra has over 16 years of experience in developing software using various Microsoft Technologies. In his current role, he works with clients to design and develop IoT and Cloud based solutions. In recent times, Shailendra has been instrumental in delivering large enterprise scale IoT Solutions successfully for Fortune 500 companies. Shailendra likes to talk about IoT, Code Quality, TDD, SOLID and Agile.</p>
							
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
					<form action="{{ route('mtdg.post') }}" method="post" id='writemessage' >
						{{ csrf_field() }}	
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->first('name', 'has-error')}}">
									<input class="form-control" id="name" name="name" placeholder="Full Name *" required=""  value="{{ old('name') }}"  type="text">	
									<input type="hidden" name="type" id="type" value="mtdg" />
									<input type="hidden" name="client_message" id="client_message" value="Thank you for your interest in Creating a prototype additive manufacturing supply chain including a cyber secure digital transport system webinar" />
									<input type="hidden" name="formtype"  value="modal-form" />
									<span class="help-block">{{ $errors->first('name', ':message') }}</span>
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('email', 'has-error')}}">
									<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="{{ old('email') }}"  type="name">
									<span class="help-block">{{ $errors->first('email', ':message') }}</span>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('phone', 'has-error')}}">
									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required=""  value="{{ old('phone') }}"  type="text">
									<span class="help-block">{{ $errors->first('phone', ':message') }}</span> 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="{{ old('job_title') }}"  required="" type="text">
									<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('company', 'has-error')}}">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="{{ old('company') }}" required/>
									<span class="help-block">{{ $errors->first('company', ':message') }}</span> 
								</div>
							</div>							

							<div class="col-md-12">
								<div class="form-group  {{ $errors->first('country', 'has-error')}}">
									<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="{{ old('country') }}" >
										<option value="">Select Country*</option>
										@foreach($countries as $country)
											<option value="{{$country->country_name}}">{{$country->country_name}}</option>
										@endforeach
										   
									</select>
									<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
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



	@if(@Session('status') == 'true') 
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
					<a class="btn btn-primary" role="button"  href="{{url('webinar-demo/suez-ozonia-ozone-systems-webinar')}}" aria-expanded="false">
						Close
					</a>         
				</div>
			</div>
		</div>
	</div>                    
    @endif
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue"> Thank You...</h2>
				</div>
				<div class="modal-body">
					<p>{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Plantautomation Technology
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('webinar-demo/suez-ozonia-ozone-systems-webinar')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 



	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>

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
		@if(Session('thank_message')) 
		<script type="text/javascript">	  	
			$('#successModal').modal('show');
		</script>

		@endif  

		<script type="text/javascript">
	  	@if(session('thank_message'))	
	  	$('#myModal').modal('show');
	  	// for (let link of document.querySelectorAll('a[download]'))
	  	// 	link.click();
	  	@endif	  	
  	</script>


	@if($errors->any())
	<script type="text/javascript">	  	
		@if(old('formtype') == 'modal-form')	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		@endif  
	</script>
	@endif  

</body>

</html>

