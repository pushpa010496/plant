@extends('../layouts/pages')
@section('style')
 
@endsection
@section('content')

      <div class="pt-3 pb-3"></div>

      <!-- <div class="container-fluid pt-1 pb-1 text-center">
        <div class="container">
          <a href="{{url('/get-listed')}}" target="_blank"><img class="img-fluid" src="<?php echo config('app.url'); ?>images/cta/sub-category-1.jpg" alt="Get Started"/> 
          </a>
        </div> 
      </div> -->
      <!-- CTA-5 // -->

    <div role="main" class="bg-white">

          <div class="container">
            <div class="text-center pt-2"> 
              @foreach($subcat as $chield)
               <h2 class="main-title"><span class="font-weight-bold">{{$chield->name}}</span></h2>
            </div>
          </div>

          <div class="container mt-5">                  
              <?php $childs = getcat($chield['id']);?>                  
              <div class="row"> 
              @foreach($childs as $child)
                <div class="col-lg-4 mb-4">                         
                    <h2 class="display-6 text-blue"><a href="{{route('category.sub-cat',[$child->slug])}}"> {{ucwords(strtolower($child->name))}}</a> </h2>
                </div>
                 @endforeach
              </div>      
          </div>

          <div class="container mb-3 mt-4">            
            <div class="row">
               @foreach($childs as $child)
               <?php $product = \App\Product::where('category_id',$child->id)->orderBy('id','desc')->where('active_flag', 1)->get();?>
               @foreach($product->where('active_flag',1) as $cp)
              @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 
                  @endphp
                  @foreach($company_logo as $com_logo)
                  <div class="col-lg-3 mb-4 text-center">
                    <div class="product div-shadow">
                      <div id="prodimage{{$cp->id}}">
                        <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}">
                          <img class="img-fluid" src="{{config('app.url').'products/'.$cp->small_image}}" alt="{{$cp->alt_tag}}"/>
                        </a>
                      </div>

                      <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                        <h2 class="small text-center">
                          <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}" class="text-secondary font-weight-bold">{{$cp->title}}</a>
                        </h2>
                      </div>
                      
                      <div class="text-center pb-2 pt-2">                        
                        <img class="img-fluid" src="{{config('app.url').'company/'.$com_logo->comp_logo}}" alt="{{$cp->alt_tag}}" width="100" />
                      </div>
                    </div>                    
                  </div>
                  @endforeach
                 
              @endforeach
               @endforeach
            </div>       
          </div>

        <!-- Categories // -->

        <!-- // CTA-6 -->
        <!-- <div class="container-fluid pt-1 pb-3 text-center">
          <div class="container">
            <a href="{{url('/get-listed')}}" target="_blank"><img class="img-fluid" src="<?php echo config('app.url'); ?>images/cta/sub-category-2.jpg" alt="Get Started"/> 
            </a>
          </div> 
        </div> -->
        <!-- CTA-6 // -->      

      @endforeach
  
</div>
@endsection
@section('scripts')   
@endsection