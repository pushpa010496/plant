  @foreach($eventprofiles as $cp)
              <div class="col-lg-12 div-shadow mb-4">
                <div class="row">
                  <div class="col-lg-4 pl-0">
                    <img class="img-fluid p-3" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/>
                  </div>
                  <div class="col-lg-8">
                    <h2 class="display-6 mt-2">
                      @if($cp->event_url)
                      <a href="{{url('events/'.$cp->event_url)}}"><strong>{{$cp->name}}</strong></a>
                      @else
                      <a href="{{url($cp->web_link)}}" target="_blank"><strong>{{$cp->name}}</strong></a>
                      @endif
                    </h2>
                    <p class="mb-2">{{$cp->venue}}</p>
                    <p class="mb-2">For more information, contact:{{$cp->organiser }}</p>
                    <p class="mb-2">{{$cp->phone}}</p>
                    <p class="mb-2 text-lowercase">{{$cp->email}}</p>
                    <p class="mb-2 text-lowercase"><a href="{{$cp->web_link}}" target="_blank">{{$cp->web_link}}</a></p>

                    <div class="row pt-1">
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> Start Date</strong></p>
                        <p class="mb-2">{!! date('j F Y', strtotime($cp->start_date)) !!}</p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> End Date</strong></p>
                        <p class="mb-2">{!! date('j F Y', strtotime($cp->end_date))!!}</p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-map-marker text-primary" aria-hidden="true"></i> Country</strong></p>
                        <p class="mb-2">{{$cp->country}}</p>
                      </div>
                      <div class="col-lg-3 text-center pt-2 pb-2">
                        @if($cp->event_url)
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="{{url('events/'.$cp->event_url)}}">View More</a>
                        @else
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="{{url($cp->web_link)}}" target="_blank">View More</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               @endforeach 