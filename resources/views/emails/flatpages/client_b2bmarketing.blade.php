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

              <span class="pb-3">Dear <strong>{{ ucfirst($name)}}</strong>,</span> 

              <tr>

                <td style=""></td>

              </tr>

              

              {!!$client_message!!}

          <tr>

            <td style=""></td>

          </tr>

           @if(@$pdf != '')

       

                <a href="{{ $pdf }}">Download Media Pack</a>

                    <br><br> 

            @endif

            <tr>

              <td style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">One of our senior associates will get in touch with you shortly to give you a complete walk-through of the services and capabilities.</td>

            </tr>

    


              <span class="pt-3">Thanks & Regards,</span>

              {{-- <br> --}}

         

              {{--Plantautomation Technology , --}}

            </td>

            </tr>

          

         

         <tr>

        <td align="left" valign="middle"  width="100">

          <img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" height="40"/> 

           

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

