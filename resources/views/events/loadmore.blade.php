
              @foreach($eventprofiles as $cp)
              <div class="col-lg-12 bg-light border-bottom pb-2 pt-2">
                <div class="row">
                  <div class="col-lg-9">
                    <h2 class="display-6 mt-2 pb-2">
                      @if($cp->event_url)
                      <a href="{{url('events/'.$cp->event_url)}}"><strong>{{$cp->name}}</strong></a>
                      @else
                      <a href="{{url($cp->web_link)}}" target="_blank"><strong>{{$cp->name}}</strong></a>
                      @endif
                    </h2>

                    <p class="mb-2">
                      <div class="row">
                        <i class="fa fa-lg fa-calendar-check-o col-lg-1" aria-hidden="true"></i>
                        <span class="col-lg-11">{!! date('j F Y', strtotime($cp->start_date)) !!} &nbsp; - &nbsp; {!! date('j F Y', strtotime($cp->end_date))!!}</span>
                      </div>
                    </p>

                    <p class="mb-1">
                      <div class="row">
                        <i class="fa fa-lg fa-map-marker col-lg-1" aria-hidden="true"></i>
                        <span class="col-lg-11">{{$cp->venue}}, {{$cp->country}}</span>
                      </div>
                    </p>

     <div class="row">
                      <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                        <p class="mb-1 small font-italic">
                          <img class="img-fluid" width="18" src="{{ config('app.url') }}event/event-type.png" alt="Event Type"/> <span class="bg-white pt-1 pb-1 pl-2 pr-2">Event Type: @if($cp->cat_id=='24')<strong class="text-success">{{$cp->eventcategory->name}}</strong>@elseif($cp->cat_id=='25')<strong class="text-warning ">{{$cp->eventcategory->name}}</strong>@elseif($cp->cat_id=='26')<strong class="text-primary ">{{$cp->eventcategory->name}}</strong>@elseif($cp->cat_id=='27')<strong class="text-info">{{$cp->eventcategory->name}}</strong>@endif</span>
                        </p>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">
                        <p class="mb-1">
                          @if($cp->event_url)
                          <a href="{{url('events/'.$cp->event_url)}}"><strong>More...</strong></a>
                          @else
                          <a href="{{url($cp->web_link)}}" target="_blank"><strong>More...</strong></a>
                          @endif                      
                        </p>
                      </div>
                    </div>
                 <!--    <p class="mb-0 text-right">

                        @if($cp->event_url)
                      <a href="{{url('events/'.$cp->event_url)}}"><strong>More...</strong></a>
                      @else
                      <a href="{{url($cp->web_link)}}" target="_blank"><strong>More...</strong></a>
                      @endif
                      
                      <a href="{{url($cp->web_link)}}" target="_blank">More...</a>
                    </p> -->
                  </div>

                  <div class="col-lg-3 pr-2">
                    <img class="img-fluid" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/>
                  </div>
                </div>
              </div>
               @endforeach

