@foreach($pressrelease as $press)
  <div class="div-shadow col-12 p-3 mb-3">
    <div class="row">
      <div class="col-lg-10">
        <h2 class="display-6"><a
            href="{{ route('pressrelease-view',$press->news_url) }}"
            class="text-blue font-weight-bold" target="_blank">{{ $press->news_head }}</a></h2>
      </div>
    </div>
    <p class="mb-1">{!!strip_tags(substr(@$press->Data,0,500))!!}<small class="float-right">
      <a href="{{ route('pressrelease-view',$press->news_url) }}" class="text-blue font-weight-bold" target="_blank">Read more...</a></small></p>
  </div>
@endforeach