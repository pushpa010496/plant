 
 <div class="row" id="product">  
 @foreach($data as $articles)
                <div class="col-lg-3 mb-4">
                  <div class="product div-shadow"> 
                    <a href="{{ route('article-view',$articles->article_url) }}">
                      @if($articles->small_image)
                      <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/{{ $articles->small_image }}" alt="{{ config('app.url')}}articles/1519109395-article-default.jpg" title="{{$articles->article_title}}">
                      @else
                        <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/article-img.jpg" alt="{{ config('app.url')}}articles/article-img.jpg" title="{{$articles->article_title}}">
                      @endif
                    </a>
                    <h2>
                      <a href="{{ route('article-view',$articles->article_url) }}">{{ $articles->article_title }}</a>
                    </h2>
                  </div>
                </div>
                @endforeach   
              </div>
           