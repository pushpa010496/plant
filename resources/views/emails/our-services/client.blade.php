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

              <span class="pb-3">Dear {{ ucfirst($name)}},</span> 

              <br><br>

              {{-- <tr>

                <td style=""></td>s

              </tr> --}}

              <!-- {!!$client_message!!} -->
              <p>Thank you for your interest in Plant Automation Technology’s Marketing Services.</p>

              
              <p>Please find the Media Pack link below for your download.</p>
            
              <p><a href="https://industry.plantautomation-technology.com/mediapack/mediapack-plant.pdf"><strong>Download Plant Automation Technology Marketing Media Pack</strong></a></p>
             
              <p>If you need more details on our programs– feel free to contact us at advertise@plantautomation-technology.com.</p>

          {{-- <tr>

            <td style=""></td>

          </tr> --}}



           @if(@$qr != '')

             <tr>

              

             </tr>

            @endif

             

          @if(@$ebook != '')

                <a href="{{ $ebook }}">Download e-Book</a>

                    <br>

            @endif

          @if(@$brochure != '')

                <a href="{{ $brochure }}">Download Brochure</a>

                    <br>

            @endif

          @if(@$whitepaper != '')

                <a href="{{ $whitepaper }}">Download Whitepaper</a>

                    <br>

            @endif



            @if(@$pdf != '')

                <a href="{{ $pdf }}">Download PDF</a>

                    <br>

            @endif

            @if(@$pdf1 != '')

                <a href="{{ $pdf1 }}">Download Link</a>

                    <br>

            @endif
            

            @if(@$path != '')

                <a href="{{ $path }}">Download Video</a>

                    <br><br> 

            @endif

          <br>
            </td>
          </tr>
          <tr>           

            <td>
             <p style="margin:0px;">  <span class="pt-3">Regards,</span></p>
            <p style="margin:0px;">Client Success Team</p>
          <p style="margin:0px;"> Plant Automation Technology</p></td>
            </tr>

          

         

         <tr>

        <td align="left" valign="middle"  width="500">

          <img src="https://industry.plantautomation-technology.com/img/main-logo.png" alt="{{$site_name}}" height="40"/> 

           

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

