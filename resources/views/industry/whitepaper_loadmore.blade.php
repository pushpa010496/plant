 
  <div class="row">
            <div class="col-lg-12">
                 @foreach($data as $whitepapers)
              <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="{{ route('whitepaper-view',$whitepapers->whitepapers_url) }}" class="text-blue">{{ $whitepapers->title }}</a></h2>
                  </div>
                  <div class="col-lg-2">
                    <!-- <p class="mb-2 text-muted">{{ date('j F Y', strtotime($whitepapers->date)) }}</p> -->
                  </div>
                </div> 
                <p class="mb-1">{!!$whitepapers->description!!}</p>
                <small><a href="{{ route('whitepaper-view',$whitepapers->whitepapers_url) }}" class="text-blue">Read more...</a></small>
                
              </div>
              @endforeach            
            </div>
        </div>