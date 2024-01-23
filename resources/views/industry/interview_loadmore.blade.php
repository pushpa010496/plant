   <div class="col-lg-12 mb-3">
              @foreach($data as $interviews)
              <div class="div-shadow p-3 mb-4 interviews">
                <div class="row">
                  <div class="col-lg-3 text-center">
           
                    <img class="img-fluid" src="<?php echo config('app.url'); ?>interview/{{ $interviews->small_image }}" alt="{{ $interviews->img_alt }}" title="{{ $interviews->name }}">
                   
                    <h2 class="display-6 font-weight-bold mt-2">{{ $interviews->name }}</h2>
                    <h3 class="small"><span class="font-weight-light font-italic text-sm">{{ $interviews->designation }}</span></h3>
                    <h4 class="display-6">
                      <a href="{{ route('interview-view',$interviews->interviews_url) }}" class="text-blue">{{ $interviews->company }}</a>
                    </h4>
                  </div>

                  <div class="col-lg-9">
                    <h5 class="font-italic font-weight-bold mb-5">
                      <!-- <span class="quotes mr-2">“</span> -->
                      <a href="{{ route('interview-view',$interviews->interviews_url) }}" class="bio">
                        {{ $interviews->title }}
                      </a>
                      <!-- <span class="quotes ml-1">”</span> -->
                    </h5>
                    <p>{{ $interviews->description }}</p>                   
                  </div>                  
                </div>                 
              </div>
              @endforeach 
            </div>