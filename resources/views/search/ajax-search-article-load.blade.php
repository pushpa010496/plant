@foreach($articles as $article)
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="product div-shadow">
      <a href="{{ route('article-view',$article->article_url)  }}" target="_blank">
        @if($article->small_image)
        <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/{{ $article->small_image }}" alt="{{ config('app.url')}}articles/1519109395-article-default.jpg" title="{{$article->article_title}}">
        @else
          <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/article-img.jpg" alt="{{ config('app.url')}}articles/article-img.jpg" title="{{$article->article_title}}">
        @endif
      </a>
      <h2>
        <a href="{{ route('article-view',$article->article_url)  }}">{{$article->article_title}}</a>
      </h2>
    </div>
  </div>
@endforeach