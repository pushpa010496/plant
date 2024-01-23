 {{-- <div id="load" style="position: relative;">

@if(count($suppliers) != 0)

 	page {{$page}} of {{ $pageCount }}





 	@foreach($suppliers as $company)

 		<h6 style="color:blue">{{ $company->comp_name }}</h6>

 		

 		<p>{{ @$company->companyproduct[0]->categories[0]->ParentCategory->name}} >> {{ @$company->companyproduct[0]->categories[0]->name}}</p>

 		



 	@endforeach



 	<div class="col-md-12">

 		

 	<nav aria-label="Page navigation example">

  <ul class="pagination">

  	@for($i=1; $i<=$pageCount; $i++)

 		@if($page == $i )

 			<li class="page-item"><a class="page-link" href="#">{{$i}}</a></li>

 		@else

 		<li class="page-item"><a class="page-link" href="{{url('suppliers')}}/{{ $string}}/{{$i}}">{{$i}}</a></li>

 		@endif	

 		 

 	@endfor  

  </ul>

</nav>

 	



 	</div>

@endif

</div> --}}

{{-- {{ $suppliers->render() }} --}}

<div class="col-lg-9 pt-3"> 

	

	<div class="row">

		<div class="col-lg-6">

			<nav aria-label="breadcrumb">

				<ol class="breadcrumb">

					<li class="breadcrumb-item"><a href="#">Home</a></li>

					<li class="breadcrumb-item active" aria-current="page">Suppliers</li>

				</ol>

			</nav>

		</div>

		<div class="col-lg-6 text-right">              	

			<p class="mb-0 pt-2">page {{$pageno}} of {{ $pageCount }}</p>

		</div>

	</div>



	<div class="row">

		<div class="col-lg-12 bg-light border border-secondary">

			<h1 class="display-5 pt-3">Partnered Companies</h1>

			<div class="filter">

				<ul>

						<li><a class="{!! ($string == 'a' ? 'active' : '') !!}" href="{{url('suppliers')}}/a">A</a></li>

						@foreach (range('B', 'Z') as $column)



							<li><a class="{!! ($string == strtolower($column) ? 'active' : '') !!}" href="{{url('suppliers')}}/{{ strtolower($column) }}/1">{{ $column }}</a></li>

						@endforeach



				



					<li style="width: 30px;"><a class="{!! ($string == '0-9' ? 'active' : '') !!}" href="{{url('suppliers')}}/0-9/1">0-9</a></li>

				</ul>

				<div class="clearfix"></div>

			</div>                          

			@if(count($suppliers) != 0)

			<div class="suppliers mt-2 mb-4">

				@foreach($suppliers as $company)

				<h3 class="display-6 mb-3">

					<a href="{{url('suppliers').'/'. @$company->companyprofile[0]->url }}" class="font-weight-bold">{{ $company->comp_name }} </a>

					@if(@$company->companyproduct[0]->category->ParentCategory->id == 22 )

						<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

						<small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->name)}}</small>

					@else

					<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

					<small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->ParentCategory->name)}}</small>

					<i class="fa fa-angle-double-right ml-1 mr-1" aria-hidden="true"></i>

					<small style=" text-transform: capitalize;">{{ strtolower(@$company->companyproduct[0]->category->name)}}</small>

					@endif		

				</h3>

				@endforeach



		

			</div>

			@else

				<h5>No suppliers available</h5>

			@endif	

			

		</div>

		</div>

		@if($pageCount > 1)
		

		<div aria-label="Page navigation pagination-sm" style="display:inline-block;">

				<ul class="pagination pt-3" style="display:inline-block;">           

		            @for($i=1; $i<=$pageCount; $i++)

		            @if($pageno == $i )

		            <li class="page-item active" style="display:inline-block;padding:10px;"><a class="page-link" href="javascript:void(0)">{{$i}}</a></li>

		            @else

		            <li class="page-item" style="display:inline-block;padding:10px;"><a class="page-link" href="{{url('suppliers')}}/{{ $string}}/{{$i}}">{{$i}}</a></li>

		            @endif	              

		            @endfor            

        		</ul>

    		</div> 	

    		@endif

	



</div>