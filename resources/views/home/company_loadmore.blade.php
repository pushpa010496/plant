@foreach($data as $cp)
   @if($cp->company)
   	<div><img src="{{ config('app.url') }}suppliers/{{str_slug($cp->company->comp_name)}}/{{$cp->company->comp_logo}}" class="img-fluid"></div>
   @endif
 @endforeach