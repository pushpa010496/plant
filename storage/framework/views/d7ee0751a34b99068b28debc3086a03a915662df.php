<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Ochre Media</title>

</head>



<body>

<table width="800" border="0" align="left" cellpadding="10">

  

  

  <tr>

    <td>

      <table width="800" border="0">

  <tr> 

    <td>

      <table width="800" border="0" cellpadding="5">

          <tr>

            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">

              <span class="pb-3">Dear <strong><?php echo e(ucfirst($name)); ?></strong>,</span> 

              <tr>

                <td style=""></td>

              </tr>

              <tr>
           <td>
           <span> Thank You for showing interest in Downloding EnergyTech Media Kit
              </span>
           </td>
            </tr>

            <tr>
           <td>
           <span> Direct link to the download Media Kit is given below –
              </span>
           </td>
            </tr>

          <tr>

            <td style=""></td>

          </tr>

           <?php if(@$pdf != ''): ?>

       

                <a href="<?php echo e($pdf); ?>">Download Link</a>

                    <br><br> 

            <?php endif; ?>

            <tr>

              <td style=""></td>

            </tr>

           <?php if(@$video != ''): ?>

                 <li>

                   <a href="<?php echo e($video); ?>">Download Video</a>

                   

                    </li>

                    <br><br> 

            <?php endif; ?>



              <span class="pt-3">Thanks & Regards,</span>

              

         

              

            </td>

            </tr>

          

         

         <tr>

        <td align="left" valign="middle"  width="100">

          <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" alt="Plantautomation Technology" height="40"/> 

           

        </td>

  </tr>

      </table>



    </td>

  </tr>

</table>

    </td>

  </tr>

  

</table>  

    







</body>

</html>

<?php /**PATH /home/plantautomationt/public_html/resources/views/emails/flatpages/client_full_msg1.blade.php ENDPATH**/ ?>