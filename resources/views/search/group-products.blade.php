<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('industry/img/favicon.ico')}}" type="image/x-icon">
<meta name="google-site-verification" content="s9BzDfVp0YSqEKZiyZWzVHvIbLO_hSfQF8dYHQWYUXs" />
{!! app('seotools')->generate() !!}
<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/latest-styles.css">

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/jquery.ui.autocomplete.min.css">

{{-- <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}css/font-awesome.min.css"> --}}
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/peel-banner.css"> -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"> 

@yield('style')
@section('style')
<style>
  .view-more:hover {
    background-color: #92278f !important;
    cursor: pointer;
    color: #ffffff !important;
  }
  .bg-purple { background-color: #92278f; }
  .font-20 { font-size: 20px; }
  .font-16 { font-size: 16px; }
  .checkbox-block { width: 30px; height: 30px; margin-left: auto; background-color: #fff; display: flex; justify-content: center;
    align-items: center; }
.card-border { border: 1px solid #dee2e6; box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; margin-bottom: 16px; }
.page-item { padding: 0 4px; }
.text-purple { color: #92278f; }
/* The container */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked)+label,
[type="checkbox"]:checked+label {
  position: relative;
  padding-left: 25px;
  cursor: pointer;
}
[type="checkbox"]:not(:checked)+label:before,
[type="checkbox"]:checked+label:before {
  content: '';
  position: absolute;
  left: -2px;
  top: -11px;
  width: 30px;
  height: 30px;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #92278f;
  background-color: #fff;
  outline: none;
}
.small-check input[type="checkbox"]:not(:checked)+label:before,
.small-check input[type="checkbox"]:checked+label:before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #92278f;
  background-color: #fff;
  outline: none;
}

[type="checkbox"]:not(:checked)+label:after,
[type="checkbox"]:checked+label:after {
  content: '✔️';
  position: absolute;
  top: -6px;
  left: 5px;
  font-size: 24px;
  line-height: 0.8;
  color: #92278f;
  transition: all .2s;
}
.small-check input[type="checkbox"]:not(:checked)+label:after,
.small-check input[type="checkbox"]:checked+label:after {
  content: '✔️';
  position: absolute;
  top: 4px;
  left: 5px;
  font-size: 16px;
  line-height: 0.8;
  color: #92278f;
  transition: all .2s;
}

[type="checkbox"]:not(:checked)+label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked+label:after {
  opacity: 1;
  transform: scale(1);
}
.pdng-left-30 { padding-left: 30px!important; }
.dropdown-toggle { border: 1px solid #c3c3c378; }
.dropdown-toggle:hover { background-color: #92278f; color: #fff!important; }
.dropdown-menu { min-width: 100%; }
.card-body a:hover {
    color: #ffff !important;
}
.dropdown-item:focus, .dropdown-item:hover {
    background-color: #92278f;
    color: #fff;
}
.img-block{width: 150px;height: 60px;text-align: center;margin: 0 auto;}
footer { display: flex; justify-content: center;align-items: center; padding: 16px 0; }
footer i { color: #fff; margin-right: 8px; }
@media (min-width: 320px) and (max-width: 767px) {
  .pagination { display: flex; flex-direction: row; flex-wrap: wrap; }
  .page-item { margin-bottom: 20px; }
  .sm-border-btm { border-bottom: 1px solid #c3c3c3; margin-bottom: 8px; }
  .sm-img-block { display: flex; justify-content: center; align-items: center; }
 /* .sm-img-block img { width: 30%!important; }*/
  .sm-enquire-btn { display: flex; justify-content: center; align-items: center; margin-bottom: 16px; }
  .sm-enquire-pera-btn { font-size: 16px; line-height: 30px; }
}
@media (min-width: 768px) and (max-width: 1050px) {
  .resp-md button { padding: 6px 24px!important;  }
}
</style>
<style>
#loading
{
 text-align:center; 
 background: url('https://industry.plantautomation-technology.com/images/loader.gif') no-repeat center; 
 height: 150px;
}
</style>
<div class="container-fluid pt-4 pb-3 mb-3">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4 my-auto">
        <a class="navbar-brand">
          <img src="https://industry.plantautomation-technology.com/img/main-logo.png" height="50" class="d-inline-block align-middle" alt="Logo">
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 col-sm-12 text-right">
        <h2 class="font-weight-bold" style="color: #92278f;">{{$keywords->product}}</h2>
        <p>New Arrivals </p>
      </div>
    </div>
    <!--<div class="row">-->
    <!--  <div class="col-lg-8 col-md-10 col-sm-12 text-right">-->
    <!--    <p class="text-dark font-weight-bold font-20 sm-enquire-pera-btn">Select multiple product and Enquire Here <a href=""><button class="bg-purple border-0 text-white rounded py-2 px-5 ml-3">Enquire </button></a> </p>-->
    <!--  </div>-->
    <!--</div>-->
  </div>

  <div class="container mt-3 mb-3">
    <div class="row justify-content-center" >
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12" >
        <div class="row pb-2">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6  px-3">
            <div class="container resp-md" id="group-products-filter">
              @foreach($products as $product)
                <div class="row card-border">
                  <div class="col-xl-3 col-lg-3 col-md-3 sm-img-block">
                    <img class="img-fluid w-100" src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image}}" alt="{{$product->title}}" />
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 pt-4 sm-border-btm">
                    <h4 class="font-weight-bold">{{$product->title}}</h4>
                    <p>Usage/Application: Lorem ipsum </p>
                    <p>Country: {{$product->company->country}} </p>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 pr-0">
                     <!--<div class="checkbox-block">-->
                     <!--   <input type="checkbox" id="test1" />-->
                     <!--   <label for="test1"></label>-->
                     <!-- </div>-->
                      <div class="img-block mb-2">
                          <img src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo}}" class="w-100 h-auto" />
                      </div>
                      <button type="button" class="bg-purple border-0 text-white rounded py-2 px-5 ml-3"
                      style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal" data-target="#enquiry" data-company_name="{{$product->company->comp_name}}" data-company_id="{{$product->company->id}}" data-prod_name="{{$product->title}}" data-product_id="{{$product->id}}" data-subject_client="{{$product->title}} - Enquiry Submitted | Plantautomation Technology" data-subject_admin="Enquiry  Plantautomation Technology" data-page="group products">
                      Enquire</button>
                  </div>
                </div>
              @endforeach
               {!! $products->render() !!}
            </div>
          </div>
        </div>
      </div>
    <!--<form>-->
          <div class="col-xl-3 col-lg-3 col-md-10 col-sm-12">
            <div class="border rounded border-secondary div-shadow small-check">
              <div class="card">
                <div class="card-header text-center w-100" style="border-bottom: 1px solid #c3c3c382;">
                   <h5 class="card-title text-purple">By Country </h5>
                 </div>
                <div class="card-body p-0 mx-3 my-3" style="height: 330px;overflow-y: scroll;">
                   @foreach(getCompnayCountry($companyIds) as $item)
                    <div class="form-group">
                      <div class="form-check">
                        <input type="checkbox" name="country[]"  class="country" id="test{{$item->country}}" value="{{$item->country}}"  />
                        <label for="test{{$item->country}}" class="font-16 pdng-left-30 mylab">{{$item->country}}</label>
                      </div>
                    </div>
                    @endforeach
                </div>
              </div>
            
            </div>
    
            <div class="border rounded border-secondary div-shadow small-check mt-2">
                <div class="card-header text-center w-100" style="border-bottom: 1px solid #c3c3c382;">
                   <h5 class="card-title text-purple">By Supliers </h5>
                </div>
    
              <div class="card">
                <div class="card-body p-0 mx-3 my-3" style="height: 330px;overflow-y: scroll;">
                  @foreach(getSuppliers($companyIds) as $product)
                    <div class="form-group">
                      <div class="form-check">
                        <input type="checkbox" class="comp_name" name="comp_name[]"  id="test{{$product->comp_name}}" value="{{$product->comp_name}}"  />
                        <label for="test{{$product->comp_name}}" class="font-16 pdng-left-30 mylab"> {{$product->comp_name}} </label>
                      </div>
                    </div>
                  @endforeach
                </div>
                <div class="card-footer text-center" style="background-color: #fff;">
                    <button class="bg-purple border-0 text-white rounded py-2 px-5" id="apply" onclick="return groupproduct()" >Apply</button>
                </div>
              </div>
            
            </div>
          </div>
    <!--</form>-->
      
    </div>
  </div>
  
   <div id="product_for_review" class="modal fade show" role="dialog" style="padding-right: 17px; display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-success">success</h4>
          <button type="button" onclick="return getData()" class="close" data-dismiss="modal">×</button>

        </div>
        <div class="modal-body">
          <p class="" id="success"></p>
          <br> Happy Surfing!
          <p>Sincerely Plantautomation Technology</p>
          <p class="mb-0">Regards,</p>
          <p class="mb-0">Client Success Team (CRM),</p>
          <img src="https://industry.plantautomation-technology.com/img/main-logo.png" width="150px">
        </div>
        <div class="modal-footer">
          <button type="button" onclick="return getData()" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
    <!--Start Product Enquiry Modal -->
 <div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header m-auto">
        <h5 class="modal-title text-center" id="enquiryLabel">
          Product Enquiry </h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="position: absolute;top: 7px;left: 470px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="pt-2"></div> 
          <form  id="productForm">
                <input type="hidden" name="company_name" value="">
                <input type="hidden" name="page" value="">  
                <input type="hidden" name="company_id" value="">
                <input type="hidden" name="prod_name" value="">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="subject_client" value="">
                <input type="hidden" name="subject_admin" value="">
                <div class="form-group">
                  <input type="text" name="firstname" class="form-control" placeholder="First Name*" required="">
                </div>

                <div class="form-group">
                  <input type="text" name="lastname" class="form-control" placeholder="Last Name*" required="">
                </div>

                 <div class="form-group">
                  <input type="text" name="company" class="form-control" placeholder="Company Name*" required="">
                </div>

                 <div class="form-group">
                  <input type="text" name="job_title" class="form-control" placeholder="Job Title*" required="">
                </div>

                 <div class="form-group">
                    {!! Form::select('country', $countries, old('country'),['required'=>'required','class'=>'form-control']) !!}
                  </div>

                 <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email*" required="">
                </div>

                <div class="form-group">
                  <input type="text" name="mobile" class="form-control" placeholder="Telephone*" required="">
                </div>

                 <div class="form-group">
                   <textarea name="message" class="form-control" rows="5" placeholder="Write Message..." required=""></textarea>
                </div>
                 
                <button type="submit" class="btn btn-primary btn-block post load_submit_btn" >Submit
                </button>
            
          </form>
        <img src="https://industry.plantautomation-technology.com//img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1">
      </div>
    </div>
  </div>
</div> 


<!--   End Product Enquiry Modal -->
 <script src="{{ config('app.url') }}js/jquery-3.3.1.min.js"></script>
 <script src="{{ config('app.url') }}js/popper.min.js"></script>
 <script src="{{ config('app.url') }}js/bootstrap.min.js"></script>
 <script type="text/javascript">
  $('#enquiry').on('show.bs.modal', function(e) {
      var company_name = $(e.relatedTarget).data('company_name');
      var company_id = $(e.relatedTarget).data('company_id');
      var prod_name = $(e.relatedTarget).data('prod_name');
      var product_id = $(e.relatedTarget).data('product_id');
      var subject_client = $(e.relatedTarget).data('subject_client');
      var subject_admin = $(e.relatedTarget).data('subject_admin');
      var page = $(e.relatedTarget).data('page');
      $(e.currentTarget).find('input[name="company_name"]').val(company_name);
      $(e.currentTarget).find('input[name="company_id"]').val(company_id);
      $(e.currentTarget).find('input[name="prod_name"]').val(prod_name);
      $(e.currentTarget).find('input[name="product_id"]').val(product_id);
      $(e.currentTarget).find('input[name="subject_client"]').val(subject_client);
      $(e.currentTarget).find('input[name="subject_admin"]').val(subject_admin);
      $(e.currentTarget).find('input[name="page"]').val(page);
  });
  $(function() {
    $('#productForm').submit(function(e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $.ajax({
            method: "post",
            headers: {
                'Accept': "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('group-product-enquiry')}}",
            data: formData,
            beforeSend: function() {
                  $(".load_submit_btn").html('<img src="https://code-boxx.com/wp-content/uploads/2018/12/ajax-loader.gif">');
                  $(".load_submit_btn").prop('disabled', true); 
             },
            success: function(data) {
               $(".load_submit_btn").prop('disabled', false);
               $('#enquiry').modal('hide');
               $('#product_for_review').modal('show');
               $('#success').append(data.html);//now its working
            },
            error: function(data) {
                console.log(data)
            },
        })
    });
})
</script>
<script>
$(document).on('click', '#filterPagnation .pagination a', function(event){
     $('#group-products-filter').html('<div id="loading" style="" ></div>');
    event.preventDefault(); 
    var page = $(this).attr('href').split('page=')[1];
    groupproduct(page)
});
   
function groupproduct(page=1){
    $('#group-products-filter').html('<div id="loading" style="" ></div>');
    var countrys = get_filter('country');
    var comp_names = get_filter('comp_name');
    var slug = "{{$slug}}";
    $.ajax({
            method: "POST",
            headers: {
                'Accept': "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('group-product-filter')}}"+'?page='+page,
            data: { countrys: countrys, comp_names: comp_names,slug:slug},
            dataType: 'json',
            success: function(data) {
                console.log(data);
               $('#group-products-filter').html(data.html);
            },
            error: function(data) {
                console.log(data)
            },
        })

}
  function get_filter(class_name)
  {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
  }
  function getData(e) {
    e.preventDefault();
}
</script>