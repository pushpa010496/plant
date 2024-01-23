     <div class="row">
            <div class="col-lg-12 mb-3">
             @foreach($pressrelease as $pressreleases)
             <div class="div-shadow p-3 mb-3">
              <div class="row">
                <div class="col-lg-10">
                  <h2 class="display-6"><a href="{{ route('pressrelease-view',$pressreleases->news_url) }}" class="text-blue">{{ $pressreleases->news_head }}</a></h2>
                </div>
                <div class="col-lg-2">
                  <p class="mb-2 text-muted">{{ date('j F Y', strtotime($pressreleases->story_date)) }}</p>
                </div>
              </div> 
              <p class="mb-1">{!!strip_tags(substr($pressreleases->Data,0,500))!!}</p>
              <small><a href="{{ route('pressrelease-view',$pressreleases->news_url) }}" class="text-blue">Read more...</a></small>
            </div>
            @endforeach 
          </div>

        </div>