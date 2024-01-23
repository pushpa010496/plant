<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Ochre Media</title>

</head>

<body>

<table width="500" border="0" align="left" cellpadding="10">
  <tr>
    <td align="left" valign="middle" style="padding-left:30px;">
    <img src="<?php echo e(asset('industry/img/main-logo.png')); ?>" alt="Plantautomation Technology" width="300"/>    </td>
  </tr>
  
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif;font-size:16px;padding-left:30px;"><?php echo e($name); ?> from <?php echo e($company); ?> wishes to contact PlantAutomation for a query.</td>
  </tr>
  
  <tr>
    <td>
      <table width="500" border="0">
  <tr>
    <td>
      <table width="500" border="0" cellpadding="5">
          <tr>
            <td width="20">&nbsp;</td>            
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Name</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($name); ?></td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($company); ?></td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($phone); ?></td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($email); ?></td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($description); ?></td>
            </tr>
         
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How did you hear about us? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($whom); ?></td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
             <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><a href="<?php echo e(url('/contactus')); ?>"><?php echo e(url('/contactus')); ?></a></td>
            </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
</table>  



</body></html><?php /**PATH /home/plantautomationt/public_html/resources/views/emails/contactus/admin.blade.php ENDPATH**/ ?>