@extends('../layouts/pages')

@section('style')
<style>
  .bg-404{
    background-image: url('{{ config('app.url') }}images/bg-404.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
</style>

@endsection
@section('content')

  <div role="main">

    <div class="container-fluid bg-404">
    	<div class="row">
    		<div class="col-lg-12 pt-5 pb-4 text-center">
    			<h1 class="text-white"> wooops.... something went wrong..</h1>
          <p class="text-center text-white">We're sorry, but the page you were looking for doesn't exist.</p>
    		</div>	
    	</div>
    </div>

    <div class="container pt-4 pb-4">
      <div class="row">
        <!-- // Categories -->
          <div class="col-lg-12 text-center">
            <h2 class="display-4 text-center pb-3 text-blue">Categories</h2>            
          </div>

          <div class="panel-group row" id="accordion">  
            <?php $cat = ordercatfirst(1);?>
              <?php $i=1; ?>
                @foreach($cat as $val)
          
                <div class="col-lg-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">                
                      <h2 class="panel-title">
                        <!-- <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a> -->
                        <a class="collapsed" href="{{url('categories')}}/{{$val['slug']}}">
                                  {{$val['name']}}
                                </a>
                      </h2>                 
                    </div>

                    <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
                         <?php $childs = getcat($val['id']);?>
                         @if(@$childs)
                      <div class="panel-body">
                         @foreach($childs as $child)                       
                            <?php 
                             $count = DB::table('products')->where('category_id',$child['id'])->count();
                             ?>
                             <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
                              <p>{{ucwords(strtolower($child['name']))}} </p>
                            </a>
                            @endforeach
                      </div>
                       @endif
                    </div>
                  </div>
                </div>
         
              <?php $i=$i+1; ?>
                @endforeach
                <div class="col-lg-4 offset-lg-4 pt-3">
                      <a class="btn btn-primary btn-radius text-white btn-block" href="{{url('/get-listed')}}" role="button">Get Started</a>
                </div>
          </div>
        <!-- Categories // -->     
      </div>
    </div>

  </div>

  @endsection
 
  @section('scripts')
  
<!--   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
 
@endsection