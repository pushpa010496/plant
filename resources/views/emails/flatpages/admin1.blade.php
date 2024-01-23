<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Ochre Media</title>

</head>



<body>

<table width="500" border="0" align="left" cellpadding="10">

  



  <tr>

    <td align="left" valign="middle" style="padding-left:20px;" width="500">

      <img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technologys" height="40"/> 

        

    </td>

  </tr>

  

  {{-- <tr>

    <td style="font-family:Arial, Helvetica, sans-serif;font-size:16px;padding-left:30px;">RPA & AI Exchange has a new invitation request.</td>

  </tr>

   --}}

  <tr>

    <td>

      <table width="500" border="0">

  <tr>

    <td>

      <table width="500" border="0" cellpadding="5">



        @if(@$salutation !='')

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Salutation</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$salutation}}</td>

            </tr>

            @endif



        @if(@$name !='')

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">First Name</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$name}}</td>

            </tr>

            @endif

             @if(@$last_name !='')

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Last Name</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$last_name}}</td>

            </tr>

            @endif





             @if(@$email != '')

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$email}}</td>

            </tr>

            @endif

          

            @if(@$phone != '')

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$phone}}</td>

                </tr>

            @endif

              @if(@$company != '')

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$company}}</td>

                </tr>

            @endif

            <!-- @if(@$industry != '')

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$industry}}</td>

                </tr>

            @endif -->



            @if(@$company_size != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Size Of company</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$company_size}}</td>

            </tr>

            @endif



             @if(@$industry != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> How would you describe yourself?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$industry}}</td>

            </tr>

            @endif

             @if(@$job_title != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job Title</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$job_title}}</td>

            </tr>

            @endif



              @if(@$country != '') 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$country}}</td>

            </tr>

            @endif



             @if(@$pincode != '') 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Pincode</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$pincode}}</td>

            </tr>

            @endif



         @if(@$state != '') 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">State</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$state}}</td>

            </tr>

            @endif



             @if(@$headquarters != '') 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Headquarters</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$headquarters}}</td>

            </tr>

            @endif



            @if(@$pdf_language != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">PDF Language</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $pdf_language !!}</td>

            </tr>

            @endif

          

             @if(@$city != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">City</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $city !!}</td>

            </tr>

            @endif



             @if(@$suggestion_early_key != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Advising on a relationship management system?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$suggestion_early_key}}</td>

            </tr>

            @endif



            @if(@$working != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What cell type are you working on?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$working}}</td>

            </tr>

            @endif



            @if(@$development != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What stage of cell therapy development are you at?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$development}}</td>

            </tr>

            @endif



            @if(@$challenges != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What would be most helpful as you evaluate new solutions to your cell therapy challenges?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$challenges}}</td>

            </tr>

            @endif



             @if(@$upcoming_project_early_key != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">key opinion leaders?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$upcoming_project_early_key}}</td>

            </tr>

            @endif

              @if(@$upcoming_project_biorasi != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Requirement for enhanced data capture, reporting and analysis tools?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$upcoming_project_biorasi}}</td>

            </tr>

            @endif

              @if(@$upcoming_project_southern_star != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Requirement for enhanced data capture, reporting and analysis tools?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$upcoming_project_southern_star}}</td>

            </tr>

            @endif



              @if(@$upcoming_project != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Responsibility for working with key opinion leaders?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$upcoming_project}}</td>

            </tr>

            @endif

            @if(@$suggestion != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Suggestion</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$suggestion}}</td>

            </tr>

            @endif



            @if(@$zipcode != '') 

            <tr>

              <td width="20">&nbsp;</td>

              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Zipcode</td>

              <td width="30" align="left" valign="middle"><strong>:</strong></td>

              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$zipcode}}</td>

            </tr>

            @endif



            @if(@$address != '') 

            <tr>

              <td width="20">&nbsp;</td>

              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Address</td>

              <td width="30" align="left" valign="middle"><strong>:</strong></td>

              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$address}}</td>

            </tr>

            @endif





              @if(@$type != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$type}}</td>

            </tr>

            @endif





            @if(@$from != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Submited From</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$from}}</td>

            </tr>

            @endif

            









              @if(@$venue != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Venue</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$venue}}</td>

            </tr>

            @endif



            @if(@$subscribe != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$subscribe}}</td>

            </tr>

            @endif





          



            @if(@$terms != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Terms</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$terms}}</td>

            </tr>

            @endif



            @if(@$url != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">source URL</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$url}}</td>

            </tr>

            @endif



         

             @if(@$subscribe_type != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$subscribe_type}}</td>

            </tr>

            @endif



              @if(@$subscribe_typeby != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$subscribe_typeby}}</td>

            </tr>

            @endif

             @if(@$description != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $description !!}</td>

            </tr>

            @endif



             @if(@$intrested != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Interested in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $intrested !!}</td>

            </tr>

            @endif

        @if(@$current_project != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Current project is on</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $current_project !!}</td>

            </tr>

            @endif





             @if(@$application != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type of Application in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $application !!}</td>

            </tr>

            @endif





            @if(@$research != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Research and Development in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $research !!}</td>

            </tr>

            @endif



            @if(@$solutions != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Following Solutions in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $solutions !!}</td>

            </tr>

            @endif



             @if(@$areas_of_interest != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Areas of Interest in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $areas_of_interest !!}</td>

            </tr>

            @endif

             @if(@$products_interest != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Product of Interest In</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $products_interest !!}</td>

            </tr>

            @endif



             @if(@$would_like_to_have != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Request in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $would_like_to_have !!}</td>

            </tr>

            @endif





            

             @if(@$promotions != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Contact you in the Future </td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $promotions !!}</td>

            </tr>

            @endif

            

            

             @if(@$signup_communication != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Sign up to receive communication</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $signup_communication !!}</td>

            </tr>

            @endif

            

            

             @if(@$other_communication != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Receive other communications</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $other_communication !!}</td>

            </tr>

            @endif

             @if(@$store_personaldata != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Store and process my personal data.</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $store_personaldata !!}</td>

            </tr>

            @endif

            



             @if(@$product_name != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Product Interested In</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{!! $product_name !!}</td>

            </tr>

            @endif





                @if(@$email_updates != '')  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email updates</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$email_updates  }}</td>

                  </tr>

                  @endif



                  @if(@$representative != '')  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Representative</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$representative  }}</td>

                  </tr>

                  @endif



                  @if(@$quotation != '')  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Quotation</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$quotation  }}</td>

                  </tr>

                  @endif

            



            @if(@$declaration != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$declaration}}</td>

            </tr>

            @endif



            @if(@$nature_of_business != '')

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$nature_of_business}}</td>

            </tr>

            @endif

            

         

      </table>



    </td>

  </tr>

</table>

    </td>

  </tr>

</table>  

    







</body>

</html>

