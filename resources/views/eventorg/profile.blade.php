@extends('../layouts/eventorg')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          @foreach($eventorg as $org)
        <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-12">
                <!-- <img src="assets/img/events/smart-factory-expo-event-image.jpg" alt="" class="img-fluid" /> -->
                <h2 class="display-5 pt-1"><b>{{$org->name}}</b></h2>
            
                <div class="pt-2">
                 {!!$org->exhibitor_description!!}
                </div>
              </div>
            </div>
            
            <div class="pb-2"></div>

            <div class="text-center">
                <h2 class="main-title"><span><b>DIRECTION &amp; VENUE</b></span></h2>
            </div>

            <div class="row">              
              <div class="col-lg-5 mt-2">
                 <div id="map"></div>
              </div>

              <div class="col-lg-6 offset-lg-1 mt-2">
                <p class="mb-3"><i class="fa fa-map-marker text-blue fa-lg" aria-hidden="true"></i> &nbsp; {{$org->org_address}}</p>
              
                <p class="mb-3"><i class="fa fa-envelope text-blue" aria-hidden="true"></i> &nbsp; <a href="mailto:visitor-eng.sfe@reedexpo.co.jp" class="text-dark" target="_blank">{{$org->org_email}}</a></p>
                <p class="mb-3"><i class="fa fa-phone text-blue" aria-hidden="true"></i> &nbsp; {{$org->org_contactno}}</p>
                <p class="mb-3"><i class="fa fa-globe text-blue" aria-hidden="true"></i> &nbsp; <a href="http://www.sma-fac.jp/en/" class="text-dark" target="_blank">{{$org->org_website}}</a></p>
              </div>
            </div>

            <div class="mt-3"></div>
          </div>
            @endforeach
          <div class="col-lg-3 pb-3">
            <div id="form-sticky">
              <div class="bg-white p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Register <small class="text-muted">( for this Event )</small></h3>
                 @if(session('message'))
                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{@session('message')}}
                    </div>
                @endif
                {!! Form::open(['url' => 'company-enquiry']) !!}
                  <div class="form-group">
                    {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}
                    <input type="hidden" name="page" value="profile">
                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
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
                {!! Form::close() !!}
              </div>  
            </div>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
@endsection
@section('scripts')

   <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $org->latitude; ?>, lng: <?php echo $org->longitude; ?>},
          zoom: 18
        });

        var labels = '<?php echo substr($org->name,0); ?>';
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            title: "<?php echo $org->name; ?>",
            label: labels[i % labels.length]
          });
        });
      var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = [
        {lat: <?php echo $org->latitude; ?>, lng: <?php echo $org->longitude; ?>}
      ]
    </script>
 <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDRDGrQ2qfvhvGoxgwIXol6DJVqwNeVs9Y&callback=initMap" async defer></script>
@endsection