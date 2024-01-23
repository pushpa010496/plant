@extends('../layouts/pages')

@section('style')

 <style type="text/css">

  .event-bg {

    background-image: url("{{config('app.url')}}img/events/event-list/event-listing-bg.jpg");

  }

 </style>

 

@endsection
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

 <script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script> 
@section('content')



 @php     

       $page = getPageId(Request::segment(2));     



       $page_all = getPage(Request::segment(1));     

     @endphp

 

    <!-- Leader Board Banner -->

    @include('layouts.partials._leaderboard_banner')

    <!-- End Leader Board Banner-->



 <!-- Begin page content -->

    <div role="main" id="company-profile">



      <div class="container">

        <div class="text-center pt-2">

          <h2 class="main-title"><span class="font-weight-bold">Tender View</span></h2>

        </div>

      </div>



       <!-- // Event Listing -->

      <div class="container pt-2 pb-3">

        <div class="row">

          @foreach($tenders as $tender)



           <div class="col-lg-9 div-shadow mt-3 mb-4 p-4"> 

            <div class="mb-3">

              <h1 class="display-6 text-blue">{{$tender->title}}</h1>



              <div class="col-lg-12 bg-light p-4 mt-4">

                <h3 class="display-6 text-uppercase font-weight-bold">Tender Summary </h3>

                <div class="row">

                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Issuer:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{$tender->issuer}}</p>

                  </div>



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Tender reference:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{$tender->tender_reference}}</p>

                  </div>



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Sector:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{$tender->sector}}</p>

                  </div>



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Closing Date:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{ date('j F Y', strtotime($tender->closing_date)) }}</p>

                  </div>



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Issue Date:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{ date('j F Y', strtotime($tender->issue_date)) }}</p>

                  </div>



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Region:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{ $tender->region  }}</p>

                  </div>



                  <!-- <div class="col-lg-3">

                    <p class="text-blue mb-2">Meeting Compulsary:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{ $tender->meeting_compulsary }}</p>

                  </div>                  



                  <div class="col-lg-3">

                    <p class="text-blue mb-2">Meeting Date:</p>

                  </div>

                  <div class="col-lg-9">

                    <p class="mb-2">{{ date('j F Y', strtotime($tender->meeting_date)) }}</p>

                  </div> -->

                </div>

              </div>



              <h3 class="display-6 text-uppercase font-weight-bold pt-4">Tender Description</h3>



             {!! $tender->description !!}



            </div>          

          </div>

         

          @endforeach

          <div class="col-lg-3 pt-2 pb-3">

            <div class="pt-2 pb-4">

             <a href="{{url('registration')}}" target="_blank">

              <button type="button" class="btn btn-block btn-primary">

                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Newsletter

              </button></a>

            </div>





              {{-- banner       --}}

                   

                <div class="bg-gray p-2 border border-secondary">

                  <div class="text-center">

                    <h3 class="adv-title">Advertisements</h3>

                  </div>

                  {{-- <img src="{{config('app.url').'/slider/1532509891-sps-automation-2018gif' }}" alt="" class="img-fluid"> --}}



                  @foreach($banner1314 as $k=>$homebanner12)   

                  @foreach($homebanner12->pagesCount as $j=>$pcount)





                  @if($homebanner12->positions[0]->id == 16 and $pcount->id == 6)



                  <a href="{{$homebanner12->url}}" target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" /></a>



                  @else



                  @endif  

                  @endforeach

                  @endforeach

                </div>

              

              {{-- banner --}}



            <!-- <div id="form-sticky">

              <div class="bg-light p-2 border border-secondary"> 

               <h3 class="text-center title mb-3">Post Your Project</h3>

                 @if(session('message'))

                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">

                      <a href="{{url('newsletter-signup')}}">  <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button></a>

                              {{@session('message')}}

                          </div>

                      @endif

                {!! Form::open(['url' => 'company-enquiry']) !!}

                     

                    <div class="form-group">

                      {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}

                      <input type="hidden" name="page" value="Tenders View">

                      <input type="hidden" name="slug" value="{{\Request::segment(1).'/'.\Request::segment(2)}}">

                    </div>

                    <div class="form-group">

                     {{Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])}}

                    </div>

                    <div class="form-group">

                      <select class="form-control" name="country">

                        <option>Select Country</option>

                      @foreach($countries as $country)

                        <option value="{{$country->country_name}}">{{$country->country_name}}</option> 

                      @endforeach

                      </select>

                    </div>

                    <div class="form-group">

                     {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}

                    </div>

                    <div class="form-group">

                      {{Form::text('telephone', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])}}

                    </div>

                    <div class="form-group">

                      {{Form::textarea('message', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}

                    </div>

                   <div class="form-group">

                     {!! Form::captcha() !!}

                  </div>

                  <button type="submit"  class="btn btn-primary btn-block">Submit</button>

                  

                </div>  

            </div> -->



            <!-- <div id="form-sticky">

              <a href="{{url('events')}}"><img src="{{ config('app.url') }}/img/skyscraper-banner.jpg" alt="" class="img-fluid mt-1 mb-1" /></a>

            </div>  -->





                </div>

              </div>

              </div>

              {!! Form::close() !!}

              </div>  

            </div>

          </div>



        </div>

      </div>

      <!-- Event Listing // -->

    </div>

@endsection

@section('scripts')

<script>

      // Form Sticky

      $(window).scroll(function() {

        var y = $(window).scrollTop();

        if (y > 0) {

          $("#form-sticky").addClass('sticky-top').addClass('pt-180');

        } else {

          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');

        }

      });

    </script>



  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

    $('.from').datepicker({

      autoclose: true,

      minViewMode: 1,

      format: 'mm/yyyy'

    })

  </script>

  

  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->

  <script src="{{ asset('industry/js/multiselect.js')}}"></script>

  <script>

    $(document).ready(function() {

      $('#example-getting-started').multiselect();

    });

  </script>



   

@endsection