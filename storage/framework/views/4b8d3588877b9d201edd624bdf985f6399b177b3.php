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

      <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Plantautomation Technologys" height="40"/> 

        

    </td>

  </tr>

  

  

  <tr>

    <td>

      <table width="500" border="0">

  <tr>

    <td>

      <table width="500" border="0" cellpadding="5">



        <?php if(@$salutation !=''): ?>

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Salutation</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($salutation); ?></td>

            </tr>

            <?php endif; ?>



        <?php if(@$name !=''): ?>

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">First Name</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($name); ?></td>

            </tr>

            <?php endif; ?>

             <?php if(@$last_name !=''): ?>

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Last Name</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($last_name); ?></td>

            </tr>

            <?php endif; ?>





             <?php if(@$email != ''): ?>

          <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($email); ?></td>

            </tr>

            <?php endif; ?>

          

            <?php if(@$phone != ''): ?>

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($phone); ?></td>

                </tr>

            <?php endif; ?>

              <?php if(@$company != ''): ?>

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($company); ?></td>

                </tr>

            <?php endif; ?>

            <!-- <?php if(@$industry != ''): ?>

              <tr>

                <td width="20">&nbsp;</td>

                <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry</td>

                <td width="30" align="left" valign="middle"><strong>:</strong></td>

                <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($industry); ?></td>

                </tr>

            <?php endif; ?> -->



            <?php if(@$company_size != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Size Of company</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($company_size); ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$industry != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> How would you describe yourself?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($industry); ?></td>

            </tr>

            <?php endif; ?>

             <?php if(@$job_title != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job Title</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($job_title); ?></td>

            </tr>

            <?php endif; ?>



              <?php if(@$country != ''): ?> 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($country); ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$pincode != ''): ?> 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Pincode</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($pincode); ?></td>

            </tr>

            <?php endif; ?>



         <?php if(@$state != ''): ?> 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">State</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($state); ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$headquarters != ''): ?> 

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Headquarters</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($headquarters); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$pdf_language != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">PDF Language</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $pdf_language; ?></td>

            </tr>

            <?php endif; ?>

          

             <?php if(@$city != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">City</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $city; ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$suggestion_early_key != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Advising on a relationship management system?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($suggestion_early_key); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$working != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What cell type are you working on?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($working); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$development != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What stage of cell therapy development are you at?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($development); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$challenges != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What would be most helpful as you evaluate new solutions to your cell therapy challenges?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($challenges); ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$upcoming_project_early_key != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">key opinion leaders?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($upcoming_project_early_key); ?></td>

            </tr>

            <?php endif; ?>

              <?php if(@$upcoming_project_biorasi != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Requirement for enhanced data capture, reporting and analysis tools?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($upcoming_project_biorasi); ?></td>

            </tr>

            <?php endif; ?>

              <?php if(@$upcoming_project_southern_star != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Requirement for enhanced data capture, reporting and analysis tools?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($upcoming_project_southern_star); ?></td>

            </tr>

            <?php endif; ?>



              <?php if(@$upcoming_project != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Responsibility for working with key opinion leaders?</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($upcoming_project); ?></td>

            </tr>

            <?php endif; ?>

            <?php if(@$suggestion != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Suggestion</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($suggestion); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$zipcode != ''): ?> 

            <tr>

              <td width="20">&nbsp;</td>

              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Zipcode</td>

              <td width="30" align="left" valign="middle"><strong>:</strong></td>

              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($zipcode); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$address != ''): ?> 

            <tr>

              <td width="20">&nbsp;</td>

              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Address</td>

              <td width="30" align="left" valign="middle"><strong>:</strong></td>

              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($address); ?></td>

            </tr>

            <?php endif; ?>





              <?php if(@$type != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($type); ?></td>

            </tr>

            <?php endif; ?>





            <?php if(@$from != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Submited From</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($from); ?></td>

            </tr>

            <?php endif; ?>

            









              <?php if(@$venue != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Venue</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($venue); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$subscribe != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($subscribe); ?></td>

            </tr>

            <?php endif; ?>





          



            <?php if(@$terms != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Terms</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($terms); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$url != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">source URL</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($url); ?></td>

            </tr>

            <?php endif; ?>



         

             <?php if(@$subscribe_type != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($subscribe_type); ?></td>

            </tr>

            <?php endif; ?>



              <?php if(@$subscribe_typeby != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe Type</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($subscribe_typeby); ?></td>

            </tr>

            <?php endif; ?>

             <?php if(@$description != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $description; ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$intrested != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Interested in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $intrested; ?></td>

            </tr>

            <?php endif; ?>

        <?php if(@$current_project != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Current project is on</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $current_project; ?></td>

            </tr>

            <?php endif; ?>





             <?php if(@$application != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type of Application in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $application; ?></td>

            </tr>

            <?php endif; ?>





            <?php if(@$research != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Research and Development in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $research; ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$solutions != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Following Solutions in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $solutions; ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$areas_of_interest != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Areas of Interest in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $areas_of_interest; ?></td>

            </tr>

            <?php endif; ?>

             <?php if(@$products_interest != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Product of Interest In</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $products_interest; ?></td>

            </tr>

            <?php endif; ?>



             <?php if(@$would_like_to_have != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Request in</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $would_like_to_have; ?></td>

            </tr>

            <?php endif; ?>





            

             <?php if(@$promotions != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Contact you in the Future </td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $promotions; ?></td>

            </tr>

            <?php endif; ?>

            

            

             <?php if(@$signup_communication != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Sign up to receive communication</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $signup_communication; ?></td>

            </tr>

            <?php endif; ?>

            

            

             <?php if(@$other_communication != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> Receive other communications</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $other_communication; ?></td>

            </tr>

            <?php endif; ?>

             <?php if(@$store_personaldata != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Store and process my personal data.</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $store_personaldata; ?></td>

            </tr>

            <?php endif; ?>

            



             <?php if(@$product_name != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Product Interested In</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo $product_name; ?></td>

            </tr>

            <?php endif; ?>





                <?php if(@$email_updates != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email updates</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($email_updates); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$representative != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Representative</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($representative); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$quotation != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Quotation</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($quotation); ?></td>

                  </tr>

                  <?php endif; ?>

            



            <?php if(@$declaration != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($declaration); ?></td>

            </tr>

            <?php endif; ?>



            <?php if(@$nature_of_business != ''): ?>

            <tr>

            <td width="20">&nbsp;</td>

            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>

            <td width="30" align="left" valign="middle"><strong>:</strong></td>

            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($nature_of_business); ?></td>

            </tr>

            <?php endif; ?>

            

         

      </table>



    </td>

  </tr>

</table>

    </td>

  </tr>

</table>  

    







</body>

</html>

<?php /**PATH /home/plantautomationt/public_html/resources/views/emails/flatpages/admin1.blade.php ENDPATH**/ ?>