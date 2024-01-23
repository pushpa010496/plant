<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="800" border="0" align="left" cellpadding="10">
  <!-- <tr>
    <td align="left" valign="middle" style="padding-left:30px;">
    <img src="{{config('app.url')}}img/main-logo.png" alt="Plantaitomation Technology" width="300"/>    </td>
  </tr> -->
  
 
  
  <tr>
    <td>
      <table width="800" border="0">
  <tr>
    <td>
      <table width="800" border="0" cellpadding="5">
          <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">Hello &nbsp;{{$name}},</td>
          </tr>
          @if($page == 'event_profile')
          <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">You have successfully registered for  <strong>{{$event_name}}</strong> by submitting your details. We will get in touch with you shortly. In the meanwhile, you may want to check other exciting events in the industry.</td>
            </tr>
          @elseif($page == 'event_partner')
            <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">Your interest for seeking partnership at <strong>{{$event_name}}</strong> is duly received. We will get in touch with you shortly.</td>
            </tr>
            @elseif($page == 'event-speaker')
            <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">Thank you for exploring the possibility of being a Speaker in <strong>{{$event_name}}</strong>. Your enquiry was successfully generated. Our client success team will assist you to take this ahead.</td>
            </tr>
            @elseif($page == 'event-speaker')
            <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">Your enquiry for possibility of exhibiting at <strong>{{$event_name}}</strong> was generated successfully. We will get in touch with you shortly.</td>
            </tr>
         @else
            <tr>
            <td align="left" valign="middle" style="font-family:'Roboto', sans-serif;font-size:13px;">You have successfully registered for  <strong>{{$event_name}}</strong> by submitting your details. We will get in touch with you shortly. In the meanwhile, you may want to check other exciting events in the industry.</td>
            </tr>
         @endif
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">
              <p>Happy Surfing. <br/>
              Sincerely,<br/>
              Client Success Team (CRM),</p>
            </td>
          </tr>
          
         <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; padding-top: 10px;"><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"> 
              <img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" width="150"/>
            </a></td>
          </tr>

          <tr>
            <td style="padding-top: 10px;">
              <table cellpadding="0" cellspacing="0" align="left">
                <tr>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="https://www.plantautomation-technology.com/registration" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Subscribe</a>
                  </td>
                  <td width="10"></td>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="https://www.plantautomation-technology.com/post-requirement" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Post Your Requirement</a>
                  </td>
                  <td width="10"></td>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="https://www.plantautomation-technology.com/get-listed" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">List Your Company</a>
                  </td>
                  <td width="10"></td>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="https://www.plantautomation-technology.com/mediapack-download" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Our Service - Mediapack</a>
                  </td>
                </tr>
              </table>
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
