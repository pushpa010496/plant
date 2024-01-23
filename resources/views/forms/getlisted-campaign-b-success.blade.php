<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- <title>{{ config('app.name') }}</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">


  
  <!-- Bootstrap CSS -->
  <!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->

  <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">
  {{-- <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> --}}
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91626815-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-91626815-1');
  </script>

<style>
  button.close{
    position: absolute;
    right: 5px;
  }
  .modal{background-color: rgba(0,0,0,0.4) !important;}
</style>
<style type="text/css">

.navbar-nav li.active::after {
  width: 70%;
  background: #4194c9;
}

.toast-center-center { top: 50%; left: 50%; transform: translate(-50%, -50%); }
p, p a {
  word-break: break-word;
}
/*Author box*/
.radius-15{
  border-radius: 15px;
}
.bg-grey{
  background-color: #f2f3f5;
}
.font-14{
  font-size: 14px !important;
}
/*multi select*/
.multiselect-native-select button,.multiselect-native-select .btn-group,.multiselect-native-select{
  width:100%;
}
.multiselect-container>li>a>label{
  padding: 3px 20px 3px 10px;
}

/* Header SEARCH
  ---------------- */
#main-search > .form-control-sm, .input-group-sm > .form-control, .input-group-sm{font-size: 12px;line-height: 14px;border-top-left-radius: 20px;border-bottom-left-radius: 20px; width: 330px;}

#main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn{padding: .3rem 10px .3rem 5px;line-height: 1.5;border-top-right-radius: 20px;border-bottom-right-radius: 20px;background-color:#92278f;cursor: pointer; border: 1px solid #92278f !important;}
#main-search > .input-group-addon, .input-group-sm > .input-group-btn > .btn:hover{background-color:#fff;color:#92278f; }
#main-search .form-control{border: 1px solid #92278f !important;font-size: 14px;}
</style>

</head>

<body>  
 <div class="pt-3 pb-3"></div>
    <header>
      <nav class="navbar">
        
      </nav>
    </header>

    <div class="container">
      <div class="row">

        <div class="col-lg-8 offset-lg-2">
          <img src="{{ config('app.url') }}/img/main-logo.png" alt="Plantautomation Technology" class="img-fluid pb-4" width="250" >
          <h1>Thank You</h1>
          <h3 style="font-size: 16px;">For signing-up Plant Automation Technology for Free Trial Offer. Please check your inbox for further instructions.</h3>
          <p>Regards,<br />Client Acquisition Team<br />Plant Automation Technology</p>
        </div>
      </div>
    </div>

    <div class="pt-3 pb-3"></div>

 
</body>
</html>    
