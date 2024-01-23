
@foreach($productsinfo as $val)

  @foreach ($data = App\Product::where('id',$val->product_id)->get(); as $cp)

              @if(@$cp->compprofile->active_flag == 1)
              @php $company_logo = App\Company::where('id',$cp->company_id)->select('id','comp_logo')->get(); 

              @endphp
           
              @foreach($company_logo as $com_logo)
              
              <div class="col-lg-4 mb-4 text-center">

                <div class="product div-shadow" id="product-list">
                  <div id="prodimage{{$cp->id}}">
                    <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}">
                      <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/products/'.$cp->small_image}}" alt="{{$cp->alt_tag}}"/>

                    </a>
                  </div>

                  <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                    <h2 class="small text-center">
                      <a href="{{url('products/'.$cp->compprofile->url.'/'.$cp->url)}}" class="text-secondary font-weight-bold">{!!$cp->title!!}</a>
                    </h2>
                  </div>

                  <div class="text-center pb-2 pt-2">                        
                    <img class="img-fluid" src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/'.$com_logo->comp_logo}}" alt="{{$cp->alt_tag}}" width="100" />
                  </div>
                </div>                    
              </div>
              @endforeach
              @endif
              @endforeach

     
<!--  <div class="col-lg-4 mb-4 text-center" >

                <div class="product div-shadow">
                  <div id="prodimage11037">
                    <a href="https://www.plantautomation-technology.com/products/concorde-battery-corporation/g24-17-aircraft-battery">
                      <img class="img-fluid" src="https://industry.plantautomation-technology.com/suppliers/concorde-battery-corporation/products/g24-17-aircraft-battery-sm.jpg" alt="G24-17 Aircraft Battery">

                    </a>
                  </div>

                  <div class="bg-light d-flex align-items-center justify-content-center pt-2" style="min-height: 46px;max-height: 46px;overflow: hidden;">
                    <h2 class="small text-center">
                      <a href="https://www.plantautomation-technology.com/products/concorde-battery-corporation/g24-17-aircraft-battery" class="text-secondary font-weight-bold">24v | Lead&nbsp;acid battery | Aircraft</a>
                    </h2>
                  </div>

                  <div class="text-center pb-2 pt-2">                        
                    <img class="img-fluid" src="https://industry.plantautomation-technology.com/suppliers/concorde-battery-corporation/201902190933041356747030.jpg" alt="G24-17 Aircraft Battery" width="100">
                  </div>
                </div>                    
              </div>
        -->


           


@endforeach
