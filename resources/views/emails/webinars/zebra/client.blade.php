<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="500" border="0" align="left" cellpadding="10">
 
  <tr>
    <td>
        <table width="1000" border="0">
          <tr>
            <td>
              <table width="1000" border="0" cellpadding="5">
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Dear {{$name}},</td>
                  </tr>
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Thank you for showing interest in Zebra healthcare Webinar. </td>
                  </tr>                           
                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Regards,</td>
                  </tr>

                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">{{trans('messages.shortname')}}.</td>
                  </tr>
                  
              </table>

            </td>
          </tr> 
          <tr>
            <td align="left" valign="middle" style="padding-left:30px;">
              <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.siteshortname')}}" width="150" />   
            </td>
        </tr>
        <tr>
            <td style="padding-top: 10px;">
              <table cellpadding="0" cellspacing="0" align="left">
                <tr>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="{{url('registration')}}" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Subscribe</a>
                  </td>
                  <td width="10"></td>
                  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
                    <a href="{{url('mediapacks')}}" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Our Service - Mediapack</a>
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
