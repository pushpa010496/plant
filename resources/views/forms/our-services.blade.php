@extends('../layouts/app')
@section('style')
<link rel="stylesheet" type="text/css" href="https://industry.plantautomation-technology.com/css/jquery.ui.autocomplete.css">
<link rel="stylesheet" type="text/css" href="https://industry.plantautomation-technology.com/js/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://industry.plantautomation-technology.com/js/slick/slick-theme.css"> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ config('app.url') }}mix/app.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="https://industry.plantautomation-technology.com/css/latest-styles.css" > -->
   <link rel="stylesheet" href="https://industry.plantautomation-technology.com/mix/app.min.css" >
<style type="text/css">
  html {
    scroll-behavior: smooth;
  }
body{
  font-family: 'Open Sans', sans-serif;
    font-size: 14px;
}
  .slick-prev, .slick-next,.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus{
    background: #717070f7 !important;
  }
  .slick-prev {
    right: 47px !important;
    left: auto !important;
  }
  .slick-next{
   right: 20px !important;
 }
 .slick-prev, .slick-next {
  top:130% !important;
  border-radius: 0 !important;
  height: 25px !important;
  width:25px !important;
}
.slick-prev:before, .slick-next:before{
  color: #ffffff !important;
  font:normal normal normal 14px/1 FontAwesome !important;
}
.slick-prev:before{
  content: "\f053" !important;
} 
.slick-next:before{
  content: "\f054" !important;
}
/*///////////////////////////////////*/
.tab-content {
  /*padding:10px;*/
 /*   border:1px solid #ddd;
 border-bottom:0px;*/
}
.nav-tabs {
/*border-bottom: 0px;
border-top: 1px solid #ddd;*/
}
.nav.nav-tabs{
  margin-top: -3px;
  float: right;
}
.nav-tabs > li {
  margin-bottom:0;
  margin-top:-1px;
}
.nav-tabs > li > a {
  padding:5px 10px;
  line-height: 20px;
  font-size: 16px;
  border: 1px solid #ffffff;
  border-bottom: none;
  border-right: none;
  -moz-border-radius:0px;
  -webkit-border-radius:0px;
  border-radius:0px;
  background-color: #cccccc;
}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
  color: #555555;
  /*cursor: default;*/
  background-color: #ffffff;
  border-top-color: transparent;
}
.nav.nav-tabs li a.active{
  cursor: default;
  background: #a9a9a9;
}
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  text-align: center;
  margin-top: 10px;
}
  .links a:hover {
    color: #5d085a !important;
  }
  .nav-pills-custom .nav-link {
    color: #000;
     background: #EBEBEB;
    position: relative;
  }
  .nav-pills-custom .nav-link:hover{
    /* box-shadow:0px 0px 10px #93b8cb; */
    color:#7A0E77;
  }
  .nav-pills-custom .nav-link.active {
    color: #fff;
    background: #7A0E77 !important;
    /* border-left: 5px solid #002232 !important; */
  }
  /* .nav-pills-custom .nav-link :focus, .nav-pills-custom .nav-link :hover{
    color:#92278F ;
    background:red;
  } */
.form-control{
  background:#FFFFFF !important;
}
.modal-content{
background:#FFFFFF !important;
}
.modal-body{
  background:#FFFFFF !important;
}
  /* Add indicator arrow for the active tab */
  @media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
      content: '';
      display: block;
      border-top: 8px solid transparent;
      border-left: 10px solid #fff;
      border-bottom: 8px solid transparent;
      position: absolute;
      top: 50%;
      right: -10px;
      transform: translateY(-50%);
      opacity: 0;
    }
  }
  @media (max-width: 767px) {
    .nav {
      display: -webkit-box;
      /* display:unset !important; */
      flex-direction: row !important;
      flex-wrap: nowrap;
      overflow-x: scroll;
    }
    .nav-pills-custom .nav-link {
      padding: 0px;
      margin: 0px;
      width: max-content;
      text-align: center;
      flex-wrap: nowrap;
      border-radius: none;
      margin-right: 28px;
    }
    .flex-column {
      -webkit-box-orient: unset !important;
      -webkit-box-direction: unset !important;
    }
    .nav-pills-custom .nav-link.active {
      color: #fff;
    background: #7A0E77 !important;
    }
  }
  .nav-pills-custom .nav-link.active::before {
    opacity: 0;
  }
  /* h2,h3,h4,h5,h6,p,a{
  font-family: whitneymedium;
} */
  .text-muted {
    font-size: 16px;
    line-height: 30px;
    color:#000 !important;
  }
  /* .mb-4 {
    font-size: 37px;
  } */
  .mb-1{
    margin-bottom:0.3rem !important;
  }
  .small {
    font-size: 20px;
    font-weight: 600 !important;
  }
  .font-weight-bold {
    font-weight: 700 !important;
  }
  .form-ct>.form-control {
    line-height: 2.8rem;
    padding-left: 3rem;
    border: 1px solid #002232;
  }
  .form-group i {
    top: 30%;
    left: 3%;
    color: #002232;
  }
  .font-30 {
    font-size: 26px;
  }
  .dm-list {
    position: relative;
    list-style: none;
  }
  .dm-list li::before {
    content: '➢';
    position: absolute;
    left: 16px;
  }
  .fade {
    padding: calc(1rem + 1vw) !important;
  }
  .b-link {
    font-weight: 600;
  }
  .tab-content h4 {
    color: #002232;
  }
  /* #contact::before { 
  display: block; 
  content: " "; 
  margin-top: -285px; 
  height: 285px; 
  visibility: hidden; 
  pointer-events: none;
} */
/* 
.tab-content ul {
  list-style: none;
}
.tab-content .list-style-before li:before {
  content: '✓';
  padding:5px;
  color: #42a107;
}
.tab-content .list-style-before1 li:before {
  content: '✓';
  padding:5px;
  color: #000;
} */
.ul-square li {
  list-style: square;
}
.ul-disc li {
  list-style: disc;
}
  /* .tab-content .table li:before {
  content: '✓';
  padding:5px;
  color: #000000;
}   */
.table-p{
  color: #42a107;
}
/* .btn{
  white-space: unset !important;
} */
.carousel-inner img {
    width: 100%;
  }
  @media (max-width: 990px) {
    .main-formDiv{
      position:unset !important;
    }
  }
  .carousel-indicators li {
    border-radius: 100%;
}
/* .tab-content>.tab-pane {
    height: 530px;
} */
/* .multiselect-container>li>a>label {
			padding: 4px;
		} */
		/* .btn-group{
			width: 100%;
		} */
		/* .multiselect{
			background-color: white;
			text-align: left;
			width: 100%;
			border-radius: 5px;
			height: calc(2.2rem + 3px);
			border: 1px solid #ced4da;
		}
		.multiselect:hover{
			background:#fff;
		} 
		.multiselect-native-select{
			width: 100%;
		}
		.multiselect-container{
			max-height:40vh;
			overflow: scroll;
      width:100%;
		}
		.multiselect-selected-text{
			width:100%;
			height:2rem;
			overflow: hidden;
			color: #a9a9a9 !important;
			font-size: 14px !important;
			position: relative;
    		top: -2px;
		}
		.multiselect-container>li>a {
    padding: 0;
	color:#000;
} */
.multiselect {
  width: 100%;
}
.selectBox {
  position: relative;
}
.selectBox select {
  width: 100%;
}
.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
#mySelectOptions {
  display: none;
  border: 0.5px #7c7c7c solid;
  background-color: #ffffff;
  max-height: 150px;
  overflow-y: scroll;
}
#mySelectOptions label {
  display: block;
  font-weight: normal;
  display: block;
  white-space: nowrap;
  min-height: 1.2em;
  background-color: #ffffff00;
  padding: 0 2.25rem 0 .75rem;
  /* padding: .375rem 2.25rem .375rem .75rem; */
}
#mySelectOptions label:hover {
  background-color: #1e90ff;
}
.dropdown-toggle::after {
position: absolute;
left: 92%;
top: 44%;
}
.dropdown-toggle:hover{
  color:#000;
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
  background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
  background-repeat: no-repeat;
  background-position-x: 100%;
  background-position-y: 5px;
  border: 1px solid #dfdfdf;
  border-radius: 2px;
  margin-right: 2rem;
  padding: 0.5rem 1rem;
  padding-right: 2rem;
}
.modal .dropdown-toggle::after {
position: absolute;
left: 95%;
top: 44%;
}
.table-primary th {
    background-color: #7A0E77 !important;
    color:#fff;
    font-weight:700 !important;
text-align:center;
}
.table-primary td {
  color:#fff;
  font-size:14px;
  font-weight:700 !important;
text-align:center;
}
@media (max-width: 439px){
  .table-primary td {
  color:#fff;
  font-size:10px;
  font-weight:700 !important;
text-align:center;
}
}
h4{
    font-size:30px;
  }
  .text-blue{
    color:#7A0E77;
  }
  .font-14{
    font-size:14px;
  }
  .table td{
    color:#60615d;
  }
  .font-16{
    font-size:16px;
  }
  .nav-pills .nav-link {
     border-radius: 0rem;
}
@media (max-width: 1199px){
  .main-formDiv{
    top: 7.5vw !important;
    z-index: 20;
    margin: auto;
    width: calc(100vw - 2rem);
    position: absolute;
}
.form{
  background: #ffffff;
    border-radius: 5px;
    width: 320px;
    height: 430px !important;
    padding: 1rem 2.5rem;
}
}
 @media (max-width: 2000px){
  .form{
  background: #ffffff;
    border-radius: 5px;
    width: 100% !important;
    height: 100% !important;
    padding: 1rem 2.5rem;
}
} 
.form-control{
  font-size:14px !important;
  height:38px;
  background:#FFFFFF !important;
}
::placeholder {
  font-size:14px;
  color: #a9a9a9 !important;
}
.quote{
  text-align: center;
    font-size: 1.2rem;
    margin: auto;
    padding-top: 15px;
    border: 4px solid #7A0E77;
    max-width: 90%;
    position: relative;
    /* margin-top: 100px; */
    border-radius: 20px;
}
.quote:after{
  display:none;
}
.quote:before{
  display:none;
}
blockquote{
  color: #000000;
  text-shadow: -1px 1px #cfc9c9;
border-left: none !important;
  position: relative;
  z-index: 20;
}
/* .left{
  position: absolute;
  top: -50px;
  left: -20px;
  width: 150px;
  text-align: left;
  z-index: 10;
  font-size: 5rem;
  color: #336699;
  background-color: #ffffff; 
  line-height: 200px;
} */
.left {
  position: absolute;
    top: -8px;
    left: 40px;
    width: 27px;
    text-align: left;
    z-index: 10;
    font-size: 3rem;
    color: #4182ab;
    background-color: #ffffff;
    line-height: 22px;
}
.left1 {
  position: absolute;
    top: -8px;
    left: 40px;
    width: 27px;
    text-align: left;
    z-index: 10;
    font-size: 3rem;
    color: #4182ab;
    background-color: #ffffff;
    line-height: 22px;
}
/* .right{
  position: absolute;
  bottom: -50px;
  right: -20px;
  width: 150px;
  text-align: right;
  z-index: 10;
  font-size: 5rem;
  color: #336699;
   background-color: #ffffff; 
  line-height: 200px;
} */
.right {
  position: absolute;
    bottom: -59px;
    right: 36px;
    width: 26px;
    text-align: right;
    z-index: 10;
    font-size: 3rem;
    color: #4182ab;
    background-color: #ffffff;
    line-height: 98px;
}
.right1 {
  position: absolute;
    bottom: -30px;
    right: 36px;
    width: 26px;
    text-align: right;
    z-index: 10;
    font-size: 3rem;
    color: #4182ab;
    background-color: #ffffff;
    line-height: 41px;
}
small{
  font-size: 1.2rem;
  color: #000000;
  position: relative;
  z-index: 20;
  &:before{
    content: "\2014 \0020";
    width: 5px;
  }
}
/* .tab-content ul li p{
    line-height:0px;
} */
.main-title {
    margin: 20px 0 40px;
    padding: 0 20px;
    font-size: 1.2em;
    border-bottom: 1px solid #d3d3d3;
    text-align: center;
    text-transform: capitalize !important;
    color: #222;
    font-weight: bold;
}
.main-title span {
    padding: 0 20px;
    background-color: #fff;
    position: relative;
    bottom: -10px;
    color: #222;
    font-weight: bold;
}
.modal-header .close {
  padding: 1rem;
    margin: 1rem 2rem;
    background: #fff;
}
.web-li li{
  padding:5px;
}
.new-li li {
  font-size:25px;
}
.webinar-table td {
    padding: 0rem;
    vertical-align: center;
    /* border-top: 1px solid #dee2e6; */
}
/* navbar styles start*/
a:hover{
  color:black !important;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.5);
}
.navbar-nav .nav-link {
    padding-right: 9px !important;
    padding-left: 9px !important;
}
/* navbar styles end*/
@media (max-width:530px){
  .btn-lg{
    font-size:1rem;
  }
}
@media (max-width:430px){
  .btn-lg{
    font-size:0.8rem;
  }
}
@media (max-width:300px){
  .btn-lg{
    font-size:0.5rem;
  }
}
.modal-content{
background:#FFFFFF !important;
}
</style>
@endsection
@section('content')
<div class="container p-0 position-relative"  >
    <div class="border-top mt-2"></div>
    <div class="container position-relative;" >
    <div class='row'>
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0" >
<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" alt="" src="https://industry.plantautomation-technology.com/images/plant-our-services-banner.jpg" data-holder-rendered="true" > 
  </div>
 </div>
</div>
</div>
</div>
</div>
<div class='container' id='scroll'>
<div class='row justify-content-center' >
  <div class='col-lg-5 col-md-12 col-sm-12 py-3'>
 <h1 class="text-center font-weight-bold" style="font-size: 28px;color: #ffffff;padding: 8px;background:#7A0E77;border-radius:5px;" >Our Guaranteed ROI Programs</h1>
  </div>
</div> 
</div>
<div class='container mb-4'>
     <div class="row">
     <div class="col-md-4" style="position:relative;">
      <div class='sticky' style="position:sticky;position:-webkit-sticky;top:110px;" >
        <!-- Tabs nav -->
        <div class="nav flex-column nav-pills nav-pills-custom" id="v-business-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link mb-1 p-3 active " id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-messages" aria-selected="false">
            <span class=" small text-uppercase font-16">Email Marketing</span></a>
            <a class="nav-link mb-1  p-3  " id="v-pills-news-tab" data-toggle="pill" href="#v-pills-news" role="tab" aria-controls="v-pills-profile" aria-selected="false">
            <span class=" small text-uppercase font-16" > E - Newsletter </span></a>
            <a class="nav-link mb-1 p-3 " id="v-pills-display-tab" data-toggle="pill" href="#v-pills-display" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <span class=" small text-uppercase font-16">Banner Advertising </span></a>
            <a class="nav-link mb-1 p-3 " id="v-pills-webinar-tab" data-toggle="pill" href="#v-pills-webinar" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <span class=" small text-uppercase font-16 ">Webinars</span></a>
            <a class="nav-link mb-1 p-3 " id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-settings" aria-selected="false">
<span class=" small text-uppercase font-16">Content Marketing</span></a>
<a class="nav-link mb-1 p-3 " id="v-pills-digital-tab" data-toggle="pill" href="#v-pills-digital" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <span class=" small text-uppercase font-16">Social Media Marketing </span></a>
          <a class="nav-link mb-1 p-3 " id="v-pills-abm-tab" data-toggle="pill" href="#v-pills-abm" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <span class=" small text-uppercase font-16">Custom Marketing Programs </span></a>
        </div>
      </div>
</div>
      <div class="col-md-8" >
      <div class="tab-content" id="v-pills-tabContent" style='box-shadow:0px 0px 12px #93b8cb;'>
      <div class="tab-pane fade rounded bg-white show active " id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      <div class="col-12 d-flex justify-content-center align-items-center">
      <img class=" mb-2 mx-1" alt="" src="https://industry.plantautomation-technology.com/images/email-marketing-icon1.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold" style="color:#7A0E77;font-size:26px;">Email Marketing</h4>
 </div>
<p class="text-muted mb-3 font-14" >Send <span class='font-14 font-weight-bold' style='color:#3d3d3d'>exclusive business emails to 188,000+ contacts.</span> Gain actionable insights on customer behaviour, industry trends and future prospects.
            </p>
            <div class="quote">
  <span class="left">❝</span>
  <blockquote>
  <small><u><b>R</b></u>ight Message to the <u><b>R</b></u>ight Audience with the <u><b>R</b></u>ight Pitch.</small>
  </blockquote>
  <span class="right">❞</span>
</div>
<div class="row justify-content-center">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/Web graph-01.jpg" style="width:100%;">
</div>
</div>
<div>
<table class="table table-bordered table-striped">
<tbody>
<tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">A Partial List of Job Roles</h6></th>
  </tr>
    <tr>
        <td>Presidents
</td>
        <td>Project Managers</td>
        <td>Purchase Engineers</td>
      </tr>
     <tr>
       <td>Vice Presidents</td>
       <td>Project Engineers</td>
       <td>Purchase Heads</td>
     </tr>
      <tr>
       <td>Directors</td>
       <td>Project Incharges</td>
       <td>Inventory Heads</td>
      </tr>
      <tr>
       <td>CEOs</td>
       <td>Operation Managers</td>
       <td>Business Analysts</td>
      </tr>
      <tr>
       <td>CMOs</td>
       <td>Production Owners</td>
       <td>Process Owners</td>
      </tr>
    </tbody>
  </table>
  <p class="text-muted mb-3 font-14 text-right mb-3" style='font-style: italic;' ><sup>** And many more…</sup>
</p>
</div>
<div class='row mb-2'>
  <div class='col-md-12'>
<table class="table table-bordered table-striped">
  <tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Exclusive Services Offered</h6></th>
  </tr>
  <tr >
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Email Message Ideation</td>
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Message Design and Production with Optimised Viewing Standards
</td>
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Testing (phase-level for multi-language, multi-country messages)
</td>
  </tr>
  <tr >
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Email Broadcast</td>
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Reporting
</td>
    <td class='font-14 font-weight-bold' style='color:#60615d;line-height:1.5rem;'>Inclusive Performance Analysis and Insights
</td>
  </tr>
</table>
</div>
</div>
  <h6 class="mb-2 text-center p-2"  style='background:#4182ab;color:#ffffff;'>Get a fresh outlook on <br><span style='font-weight:700 !important;color:#ffffff;font-size:18px;'>High Open and Click-Through Rates (CTR).</span>
</h6>
  <h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>
  Our Exclusive Email Marketing Program comes with  <span class='font-16 font-weight-bold' style='color:#3d3d3d'> Guaranteed ROI Assurance. 
</span> 
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-display" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/online.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold"  style='color:#7A0E77;font-size:26px;'>Banner Advertising</h4>
</div>
<p class="text-muted mb-2 font-14 ">Influence thousands of relevant industry professionals
through our wide ranging <br><u><b>Banner/Display Advertising</b></u> options. 
            </p>
            <ul style='list-style-type: circle;'>
  <li><p>Custom  <span class='font-14 font-weight-bold' style='color:#3d3d3d'>Global & Geo-Targeted Banner Advertisements.</span></p></li>
  <li><p>No-Programming, No Position Bidding - <span class='font-14 font-weight-bold' style='color:#3d3d3d'>Get 100% SOV</span> (share of voice).
</p></li>
  <li><p>Wide range of display options available <span class='font-14 font-weight-bold' style='color:#3d3d3d'> – all optimised for multi-device consumption and impact.
</span></p></li>
  <li><p> <span class='font-14 font-weight-bold' style='color:#3d3d3d'>Performance reporting, </span>analysis and actionable insights for generating optimum ROI.
</p></li>
</ul>
<div class="row justify-content-center">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/Web graph-03.jpg" style="width:100%;">
</div>
</div>
<table class="table table-bordered table-striped">
<tbody>
<tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">A Partial List of Job Roles</h6></th>
  </tr>
    <tr >
        <td>Presidents
</td>
        <td>Project Managers</td>
        <td>Purchase Engineers</td>
      </tr>
     <tr>
       <td>Vice Presidents</td>
       <td>Project Engineers</td>
       <td>Purchase Heads</td>
     </tr>
      <tr >
       <td>Directors</td>
       <td>Project Incharges</td>
       <td>Inventory Heads</td>
      </tr>
      <tr>
       <td>CEOs</td>
       <td>Operation Managers</td>
       <td>Business Analysts</td>
      </tr>
      <tr>
       <td>CMOs</td>
       <td>Production Owners</td>
       <td>Process Owners</td>
      </tr>
    </tbody>
  </table>
  <p class="text-muted mb-3 font-14 text-right" style='font-style: italic;' ><sup>** And many more…</sup>
</p>
  <div class='row'>
  <div class='col-md-12'>
<table class="table table-bordered table-striped">
  <tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Exclusive Services Offered</h6></th>
  </tr>
  <tr >
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Non-programmatic<br> banner advertising</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Geo-Targeted <br> Banner Advertising</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Visitor Behaviour <br> Insights</td>
  </tr>
</table>
</div>
</div>
  <h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>
  Our Banner Advertising Program comes with
  <span class='font-16 font-weight-bold' style='color:#3d3d3d'>Guaranteed ROI Assurance.</span> 
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/newsletter-icon1.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold"  style='color:#7A0E77;font-size:26px;'> E - Newsletter</h4>
</div>
<p class="text-muted mb-3 font-14"><span class='font-14 font-weight-bold' style='color:#3d3d3d'>Reimagine Brand Augmentation with our Industry and Product newsletter.</span>
            </p>
<ul style='list-style-type: "›";' class='new-li'>
  <li> <p class='px-1'>Exclusive Branding Opportunity through <span class='font-14 font-weight-bold' style='color:#3d3d3d'>Newsletter sponsorship.</span></p></li>
  <li> <p class='px-1'>Targeted Reach to <span class='font-14 font-weight-bold' style='color:#3d3d3d'>188,000+ opt-in subscribers.</span>
</p></li>
  <li> <p class='px-1'>Designed for  <span class='font-14 font-weight-bold' style='color:#3d3d3d'>multi-device consumption.</span></p></li>
  <li> <p class='px-1'>Place your message along with PAT’s <span class='font-14 font-weight-bold' style='color:#3d3d3d'>high calibre authoritative content.</span>
</p></li>
  <li> <p class='px-1'>Reports, Insights & Analysis on the <span class='font-14 font-weight-bold' style='color:#3d3d3d'>audience behaviour & </span>Market preference.</p></li>
</ul>
<h6 class="text-muted mb-2 font-16 "><b>Global Subscriber Database – 188,000+
</b></h6>
<div class="row justify-content-center">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/Web graph-02.jpg" style="width:100%;">
</div>
</div>
<table class="table  table-bordered table-striped">
<tbody>
<tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">A Partial List of Job Roles
</h6></th>
  </tr>
    <tr >
        <td>Presidents
</td>
        <td>Project Managers</td>
        <td>Purchase Engineers</td>
      </tr>
     <tr>
       <td>Vice Presidents</td>
       <td>Project Engineers</td>
       <td>Purchase Heads</td>
     </tr>
      <tr >
       <td>Directors</td>
       <td>Project Incharges</td>
       <td>Inventory Heads</td>
      </tr>
      <tr>
       <td>CEOs</td>
       <td>Operation Managers</td>
       <td>Business Analysts</td>
      </tr>
      <tr >
       <td>CMOs</td>
       <td>Production Owners</td>
       <td>Process Owners</td>
      </tr>
    </tbody>
  </table>
  <p class="text-muted mb-3 font-14 text-right" style='font-style: italic;' ><sup>** And many more…</sup>
</p>
  <div class='row'>
  <div class='col-md-12'>
<table class="table table-bordered table-striped">
  <tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Exclusive Services Offered</h6></th>
  </tr>
  <tr >
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Newsletter Sponsorship
</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Banner Presence
</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Newsletter cover story
</td>
  </tr>
  <tr >
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Interview publishing
</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Reporting & Analysis</td>
    <td></td>
  </tr>
</table>
</div>
</div>
  <h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>
  Covered with 
  <span class='font-16 font-weight-bold' style='color:#3d3d3d'>Guaranteed ROI Assurance. 
</span>
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-digital" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/digital-marketing.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
      <h4 class="text-center font-weight-bold" style='color:#7A0E77;font-size:26px;'>Social Media Marketing</h4>
</div>
<ul style='list-style-type: circle;'>
  <li><p>Magnify your social footprint, see you message <span class='font-14 font-weight-bold' style='color:#3d3d3d'>reach our 1000s of active industry contacts.
</span></p></li>
  <li><p>Building <span class='font-14 font-weight-bold' style='color:#3d3d3d'>relationships</span> with people.
</p></li>
  <li><p>Engage with their prerequisites <span class='font-14 font-weight-bold' style='color:#3d3d3d'>& add value to their experience.
</span></p></li>
</ul>
<table class="table table-bordered table-striped">
<tbody>
<tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Prominent Social Channels and Reach-out</h6></th>
  </tr>
      <tr >
        <th>Social Reach</th>
        <th>Reach-Out Regions</th>
       <tr>
     <tr>
       <td>LinkedIn</td>
       <td>North America</td>
     </tr>
      <tr>
       <td>Twitter</td>
       <td>Europe</td>
      </tr>
      <tr>
       <td>Facebook</td>
       <td>APAC</td>
      </tr>
    </tbody>
  </table>
  <div class='row'>
  <div class='col-md-12'>
<table class="table table-bordered table-striped">
  <tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Capability</h6></th>
  </tr>
  <tr >
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Organic Promotions</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Paid Promotions</td>
  </tr>
</table>
</div>
</div>
  <h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>
  Social Media Programs are covered under 
  <span class='font-16 font-weight-bold' style='color:#3d3d3d'>Guaranteed ROI Assurance.
</span>
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-webinar" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/webinar-icon.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold" style='color:#7A0E77;font-size:26px;'>Webinars</h4>
</div>
<p class="text-muted mb-3 font-14">Showcase your subject matter expertise, open meaningful dialogue/discussions with the audience that matter and generate highly qualified leads. 
</p> 
<ul style='list-style-type: circle;'>
  <li><p>Ideal for product training and launch.</p></li>
  <li><p>New technology induction.</p></li>
  <li><p>Process Innovation.</p></li>
  <li><p> Industry Innovation.</p></li>
  <li><p> Market Trends & Insights.</p></li>
</ul>
<h6 class="text-muted mb-2 " style='color:#3d3d3d;font-size:16px;'><b>What you can expect –
</b></h6>
<table class="table  table-striped webinar-table" >
<tbody>
      <tr >
        <td style='background:#fff;'><ul style='list-style-type:"✓";' class='web-li m-0'><li>Dedicated marketing promotions
page.</li></ul></td>
        <td style='background:#fff;'><ul style='list-style-type:"✓";' class='web-li m-0'><li>Recording &amp; conversion of webinar
into MP4 format</li></ul></td>
       <tr>
     <tr>
       <td><ul style='list-style-type:"✓";' class='web-li m-0'><li>End-to-end editorial, production and
marketing services.</li></ul></td>
       <td><ul style='list-style-type:"✓";' class='web-li m-0' ><li>On-Demand webinar hosting.</li></ul></td>
     </tr>
      <tr>
       <td><ul style='list-style-type:"✓";' class='web-li m-0'><li>Live polling and metrics.</li></ul></td>
       <td><ul style='list-style-type:"✓";' class='web-li m-0'><li>Webinar moderation.</li></ul></td>
      </tr>
      <tr>
       <td><ul style='list-style-type:"✓";' class='web-li m-0'><li>Hosting live Q&amp;A.</li></ul></td>
       <td><ul style='list-style-type:"✓";' class='web-li m-0'><li>Marketing –
       <ul ><li class='p-0'>Email Marketing (eBlasts).</li>
<li class='p-0'>Social Media Promotions.</li>
<li class='p-0'>Display Advertising.</li>
<li class='p-0'>Reminder Emails.</li>
</ul>
</li>
</td>
      </tr>
    </tbody>
  </table>
            <div class="row justify-content-center mb-3">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/Web graph-4.jpg" style="width:100%;">
</div>
</div>
<div class='row'>
  <div class='col-md-12'>
<table class="table table-bordered table-striped">
  <tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Exclusive Services Offered </h6></th>
  </tr>
  <tr >
  <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Live Webinar Hosting</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Webinar Material Production.
</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Webinar Promotions.
</td>
  </tr>
  <tr >
  <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>On-Demand Webinar Marketing
</td>
    <td class='font-14' style='color:#60615d;line-height:1.5rem;font-weight:bold;'>Account Based Webinar Marketing
</td>
<td></td>
  </tr>
</table>
</div>
</div>
  <h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>
 <span class='font-16 font-weight-bold' style='color:#3d3d3d'>
 Guaranteed results in Registrations, Attendees & Visitor Engagements.
</span>
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/writing.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold" style='color:#7A0E77;font-size:26px;'>Content Marketing</h4>
</div>
<h6 class="text-muted mb-2 font-16"><b>Used for - </b></h6>
<ul style='list-style-type: circle;'>
  <li><p>Sharing and promoting business ideas.
</p></li>
  <li><p>Innovative trends.
</p></li>
  <li><p>Futuristic roadmaps.
</p></li>
  <li><p> Propagate capabilities 
</p></li>
</ul>
<div class='mb-5 mt-5'>
<div class="quote">
  <span class="left1">❝</span>
  <blockquote>
  All Consumable formats on the Web is Content 
  </blockquote>
  <span class="right1">❞</span>
</div>
</div>
<table class="table table-bordered table-striped">
<tbody>
<tr class="table-primary">
    <th colspan='4' align='center'><h6 class="text-center font-16 m-0 font-weight-bold">Some Examples</h6></th>
  </tr>
    <tr >
        <td>Hosting Webinar Series
</td>
        <td>Info graphics</td>
      </tr>
     <tr>
       <td>Expert Interviews</td>
       <td>Press Releases</td>
     </tr>
      <tr >
       <td>Industry Insights</td>
       <td>Technical Document </td>
      </tr>
      <tr>
       <td>Original Research Papers</td>
       <td>Technical Videos</td>
      </tr>
      <tr >
       <td>Podcasts</td>
       <td>Articles</td>
      </tr>
      <tr >
       <td>Whitepapers</td>
       <td>E-book</td>
      </tr>
    </tbody>
  </table>
  <div class="row justify-content-center">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/content-marketing-graph.jpg" style="width:100%;">
</div>
</div>
  <h6 class="text-muted mb-2 font-14 text-center"  style='color:#60615d;'>
  All <span class='font-16 font-weight-bold text-center' style='color:#3d3d3d'>Content Marketing</span> Programs comes with 
  <span class='font-16 font-weight-bold text-center' style='color:#3d3d3d'>Guaranteed ROI Assurance
</span>
</h6>
          </div>
          <div class="tab-pane fade rounded bg-white" id="v-pills-abm" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <div class="col-12 d-flex justify-content-center align-items-center">
      <img class="mb-2 mx-1" alt="" src="{{ config('app.url') }}images/digital-marketing-icon.png" data-holder-rendered="true" style="width:calc(3vh + 3vw);">
            <h4 class="text-center font-weight-bold" style='color:#7A0E77;font-size:26px;'>Custom Marketing Programs </h4>
</div>
<ul style='list-style-type: circle;'>
  <li><p>Custom marketing solution for your specific marketing endeavour.
</p></li>
  <li><p>Geo-targeted optimised campaign designs with multi-language support.
</p></li>
  <li><p>Highly targeted solution designs.
</p></li>
  <li><p> Data driven campaign optimisation programs.
</p></li>
</ul>
      <p  style='margin-left:1.3rem;'>All our assignments have clear definitions of deliverables wrt quality, quantity, time-line and impact cases.
</p>      
            <div class="row justify-content-center">
<div class=" col-lg-8 col-md-8  col-12">
<img alt="" src="https://industry.plantautomation-technology.com/images/Web graph-05.jpg" style="width:100%;">
</div>
</div>
<h6 class="text-muted mb-2 font-14 text-center" style='color:#60615d;'>Custom Programs are covered with <span class='font-16 font-weight-bold' style='color:#3d3d3d'>Guaranteed ROI Assurance.
</span></h6>
          </div>
</div>
</div>
     </div>
   </div>
   <div class="form-model d-flex justify-content-center mb-4">
              <button type="button" class="btn btn-primary btn-lg rounded know-more mx-3 mt-4" data-toggle="modal" data-target="#myModal0" style='background:#7A0E77;border:none;'>
              Download our Media Pack & Avail Free Consultation
              </button>
            </div>
  <!-- // Popup -->
  <div class="container advert">
  <div class="row">
    <!-- Modal 0 -->
    <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="get-listed-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-20 text-blue font-weight-bold text-center" id="get-listed-modal" style='color:#4182ab;'>Download our Media Pack</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <ul class="error" style="list-style-type: none;"></ul>
            <form method="post" id="writemessage" action="{{route('ourServices.post')}}">
              @csrf
            <input type="hidden" name="type" id="type" value="OurServices">
            						<input type="hidden" name="formtype" value="modal-form">
            						<input type="hidden" name="client_subject" value="Thank You for Registration">
            						<input type="hidden" name="admin_subject" value="Thank You for Registration">
            						<input type="hidden" name="thank_message" value="You will receive a welcome email along with download link to your registered email-id.">
<div class="form-groupposition-relative mb-3 ">
                <input type="hidden" class="form-control" name="firstname" id="fname" placeholder="First Name*" required>
              </div>
<div class="form-groupposition-relative mb-3 ">
                <input type="text" class="form-control" name="firstname" id="fname" placeholder="First Name*" required>
              </div>
              <div class="form-groupposition-relative mb-3 ">
                <input type="text" class="form-control" name="lastname" id="lname" placeholder="Last Name*" required>
              </div>
              <div class="form-groupposition-relative mb-3">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
              </div>
              <div class="form-groupposition-relative mb-3">
                <input type="text" class="form-control" name="job_title" id="designation" placeholder="Designation*" required>
              </div>
              <div class="form-groupposition-relative mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
              </div>
              <div class="form-groupposition-relative mb-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" required>
              </div>
              <div class="form-groupposition-relative mb-3">
    <!-- <label for="myMultiselect">BS custom multiselect</label> -->
    <div id="myMultiselect" class="multiselect">
      <div id="mySelectLabel" class="selectBox" onclick="toggleCheckboxArea()">
        <select class="form-select" style='color: #a9a9a9 !important;'>
          <option>Select Service</option>
        </select>
        <div class="overSelect"></div>
      </div>
      <div id="mySelectOptions" >
        <label for="Email Marketing"><input type="checkbox" id="one" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="Email Marketing" /> Email Marketing</label>
        <label for="E - Newsletter"><input type="checkbox" id="two" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="E - Newsletter" /> E - Newsletter</label>
        <label for="Banner Advertising"><input type="checkbox" id="three" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="Banner Advertising" /> Banner Advertising</label>
        <label for="Webinars"><input type="checkbox" id="four" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="Webinars" /> Webinars</label>
        <label for="Content Marketing"><input type="checkbox" name="areas_of_interest[]" id="five" onchange="checkboxStatusChange()" value="Content Marketing" /> Content Marketing</label>
        <label for="Social Media Marketing"><input type="checkbox" id="six" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="Social Media Marketing" /> Social Media Marketing</label>
        <label for="Custom Marketing Programs"><input type="checkbox" id="seven" name="areas_of_interest[]" onchange="checkboxStatusChange()" value="Custom Marketing Programs" /> Custom Marketing Programs</label>
      </div>
    </div>
  </div>
              <div class="form-groupposition-relative mb-3">
                <select class="form-control p-2" name="country" required style='color:#a9a9a9 !important;font-size:14px;'>
                  <option value="">Select Country*</option>
                  @foreach($countries as $country)
                  <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="text-danger verifi"></div>
              <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
              <div class="form-group position-relative text-center">
                <button type="submit" class="btn btn-primary rounded mt-1 pl-3 pr-3 submit-btn " id="sub" style="background:#4182ab;border:none;">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Popup // -->
<div class="container">
<h2 class="main-title"><span>Trusted By</span></h2>
  <div class="col-12 mb-3">
  <div class="slick">
 
  @foreach($companyprofile as $cp)
  @if($cp->company)
<div><img src="{{ config('app.url') }}suppliers/{{str_slug(@$cp->company->comp_name)}}/{{@$cp->company->comp_logo}}" class="img-fluid"></div>
@endif
@endforeach
    </div>
</div>
</div>
</div> 
</div> 
<!-- modal pop up -->
<a id="filedownload" download style="display: none" href="{{url('/')}}/industry/mediapack/mediapack-plant.pdf">download</a>
<div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-blue"> Thank You...</h2>
                    </div>
                    <div class="modal-body">
                        <p style="color: green;">{{session('thank_message')}}</p>
                        <br>
                        Thank You
                        <br>
</br>
                        <img src="{{config('app.url')}}img/main-logo.png" alt="plant" width="150"/>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{ url('our-services') }}"
                            aria-expanded="false">
                            Close
                        </a>
                    </div>
                </div>
            </div>
        </div>
  <!--  end modal pop up -->
  <script>
  let x = document.getElementById("v-business-tab");
  // scroll to an element with id = "scroll"
  x.addEventListener("click", function() {
    document.getElementById("scroll").scrollIntoView({
      behavior: "smooth",
      block: "start"
    });
  });
</script>
  @endsection
@section('scripts')
<script type="text/javascript" src="{{ config('app.url')}}js/slick/slick.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
 <script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
<script type="text/javascript">
        $(document).ready(function(){
          $('.slick').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed:1000,
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 5,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }]
          });
          var loaded_messages = 6;
          var is_loading = true; 
          var num_messages = {{ $companies_count }};
          var slide_count = 6;
        });
      </script>
<script>
  function checkboxStatusChange() {
  var multiselect = document.getElementById("mySelectLabel");
  var multiselectOption = multiselect.getElementsByTagName('option')[0];
  var values = [];
  var checkboxes = document.getElementById("mySelectOptions");
  var checkedCheckboxes = checkboxes.querySelectorAll('input[type=checkbox]:checked');
  for (const item of checkedCheckboxes) {
    var checkboxValue = item.getAttribute('value');
    values.push(checkboxValue);
  }
  var dropdownValue = "Nothing is selected";
  if (values.length > 0) {
    dropdownValue = values.join(', ');
  }
  multiselectOption.innerText = dropdownValue;
}
function toggleCheckboxArea(onlyHide = false) {
  var checkboxes = document.getElementById("mySelectOptions");
  var displayValue = checkboxes.style.display;
  if (displayValue != "block") {
    if (onlyHide == false) {
      checkboxes.style.display = "block";
    }
  } else {
    checkboxes.style.display = "none";
  }
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#research-area1').multiselect({
            nonSelectedText: 'Select Service'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#research-area2').multiselect({
            nonSelectedText: 'Select Service'
        });
    });
</script>

<script type="text/javascript">
       @if(session('thank_message'))
        $('#myModal').modal('show');
        for (let link of document.querySelectorAll('a[download]'))
        link.click();
       
        </script>
         @endif
@endsection
