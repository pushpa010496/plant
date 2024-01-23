<style type="text/css">
	#Supp-list .card {margin-bottom: 15px;}
	#Supp-list .card-header {background-color: #fff; }
	#Supp-list .card-header h4 .btn {font-size: 16px; color: #222; font-weight: bold; overflow: visible;}
	#Supp-list .card-header h4 .btn:hover {text-decoration: none; color: #009B68; background-color: #fff; }
	#Supp-list .card-body ul {margin-left: -30px; margin-bottom: 10px;}
	#Supp-list .card-body ul li {list-style: none; padding-bottom:7px; font-size: 15px;}
	#Supp-list .card-body ul li::before {
		content: "\f0da";
		font-family: FontAwesome;
		position: absolute;
		color: #009B68;
		font-size: 14px;
		font-weight: 400;
		left: 30px;
	}

	.products {
    display: block;
    list-style-type: disc;
    margin-block-start:0em;
    margin-block-end: 0em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start:10px;
}
</style>
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
			<h2 class="display-5 pt-3">Featured Companies</h2>
			<div class="filter">
				<ul>
				
						@foreach (range('A', 'Z') as $column)

							<li><a class="{!! ($string == strtolower($column) ? 'active' : '') !!}" href="{{url('featured-suppliers')}}/{{ strtolower($column) }}/1">{{ $column }}</a></li>
						@endforeach

				{{-- 	<li><a href="{{url('suppliers')}}/a/1">A</a></li>
					<li><a href="{{url('suppliers')}}/b/1">B</a></li>
					<li><a href="{{url('suppliers')}}/c/1">C</a></li>
					<li><a href="{{url('suppliers')}}/d/1">D</a></li>
					<li><a href="{{url('suppliers')}}/e/1">E</a></li>
					<li><a href="{{url('suppliers')}}/g/1">G</a></li>
					<li><a href="{{url('suppliers')}}/h/1">H</a></li>
					<li><a href="{{url('suppliers')}}/i/1">I</a></li>
					<li><a href="{{url('suppliers')}}/j/1">J</a></li>
					<li><a href="{{url('suppliers')}}/k/1">K</a></li>
					<li><a href="{{url('suppliers')}}/l/1">L</a></li>
					<li><a href="{{url('suppliers')}}/m/1">M</a></li>
					<li><a href="{{url('suppliers')}}/n/1">N</a></li>
					<li><a href="{{url('suppliers')}}/o/1">O</a></li>
					<li><a href="{{url('suppliers')}}/p/1">P</a></li>
					<li><a href="{{url('suppliers')}}/q/1">Q</a></li>
					<li><a href="{{url('suppliers')}}/r/1">R</a></li>
					<li><a href="{{url('suppliers')}}/s/1">S</a></li>
					<li><a href="{{url('suppliers')}}/t/1">T</a></li>
					<li><a href="{{url('suppliers')}}/u/1">U</a></li>
					<li><a href="{{url('suppliers')}}/v/1">V</a></li>
					<li><a href="{{url('suppliers')}}/w/1">W</a></li>
					<li><a href="{{url('suppliers')}}/x/1">X</a></li>
					<li><a href="{{url('suppliers')}}/y/1">Y</a></li>
					<li><a href="{{url('suppliers')}}/z/1">Z</a></li> --}}

					<li style="width: 30px;"><a class="{!! ($string == '0-9' ? 'active' : '') !!}" href="{{url('featured-suppliers')}}/0-9/1">0-9</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>                          
			@if(count($suppliers) != 0)
			<div class="suppliers mt-2 mb-4">

				@foreach($suppliers as $company)
				<div class="accordion" id="Supp-list">
					@if($company->companyproduct->count()>0)
					<div class="card">
						<div class="card-header" id="headingOne">
							<h3 class="display-6 mb-3">
							
								<a href="{{url('testsuppliers').'/'. @$company->companyprofile[0]->url }}" class="font-weight-bold" style="font-size: 16px">{{ $company->comp_name }}</a>
									<i class="fa fa-angle-double-right ml-2 mr-2 text-secondary" aria-hidden="true"></i>{{ $company->country }}
								
									
								
							</h3>
						</div>
							<ul class="products">
								@foreach($company->companyproduct as $product)
								    @if($product !='')
									<span style="font-size:12px; ">{{$product->title}}</span>,
									@endif
								@endforeach
							</ul>
							
					</div>
					@endif
				</div>
				@endforeach

			</div>
			@else
				<h5>No suppliers available</h5>
			@endif	
			
		</div>
		</div>
		@if($pageCount > 1)
		<div aria-label="Page navigation">
				<ul class="pagination d-flex justify-content-center pt-3">           
		            @for($i=1; $i<=$pageCount; $i++)
		            @if($pageno == $i )
		            <li class="page-item active"><a class="page-link" href="javascript:void(0)">{{$i}}</a></li>
		            @else
		            <li class="page-item"><a class="page-link" href="{{url('featured-suppliers')}}/{{ $string}}/{{$i}}">{{$i}}</a></li>
		            @endif	              
		            @endfor            
        		</ul>
    		</div> 	
    		@endif
	

</div>