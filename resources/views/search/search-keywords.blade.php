@extends('../layouts/pages')
@section('style')
@endsection
@section('content')
<style>
    .pagination{
        justify-content:center;
        margin:2rem auto;
    }
</style>
    <div role="main" class="bg-white">
      <div class="container">
        <div class="text-center pt-2">
             <h2 class="main-title"><span>Search Keywords</span></h2>
        </div>
      </div>
      <div class="container">
          <div class="row">
              @foreach($keywords as $key)
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a class="ml-3" style="display:list-item;" href="{{route('keyword.search',$key->url)}}">{{ucwords($key->keyword)}}</a>
              </div>
              @endforeach
          </div>
           {!! $keywords->render() !!}
      </div>
    </div>
    </div>
@endsection
@section('scripts')   
@endsection