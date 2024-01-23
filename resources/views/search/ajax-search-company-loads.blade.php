@foreach($companies as $company) 
  <div class="col-lg-3 col-6 text-center mb-4">
    <div class="product">
      <div id="prodimage">
          @if($company->companyproduct->count() > 0)
            <a href="{{url('products').'/'. @$company->profile->url }}" target="_blank">
              <img class="div-shadow p-2 img-fluid"
                src="{{config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo}}"
                title="{{$company->comp_name}}" alt="{{$company->comp_name}}">
            </a>
          @else
            <a href="{{url('suppliers').'/'. @$company->profile->url }}" target="_blank">
              <img class="div-shadow p-2 img-fluid"
                src="{{config('app.url').'suppliers/'.str_slug($company->comp_name).'/'.$company->comp_logo}}"
                title="{{$company->comp_name}}" alt="{{$company->comp_name}}">
            </a>
          @endif
      </div>
    </div>
  </div>
@endforeach