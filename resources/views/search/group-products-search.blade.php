 @if(count($products) > 0)
         @foreach($products as $product)
            <div class="row card-border">
              <div class="col-xl-3 col-lg-3 col-md-3 sm-img-block">
                <img class="img-fluid w-100" src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image}}" alt="{{$product->title}}" />
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 pt-4 sm-border-btm">
                <h4 class="font-weight-bold">{{$product->title}}</h4>
                <p>Usage/Application: Lorem ipsum </p>
                <p>Country: {{$product->company->country}} </p>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 pr-0">
                 <!--<div class="checkbox-block">-->
                 <!--   <input type="checkbox" id="test1" />-->
                 <!--   <label for="test1"></label>-->
                 <!-- </div>-->
                  <div class="img-block mb-2">
                      <img src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo}}" class="w-100 h-auto" />
                  </div>
                  <button type="button" class="bg-purple border-0 text-white rounded py-2 px-5 ml-3"
                  style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal" data-target="#enquiry" data-company_name="{{$product->company->comp_name}}" data-company_id="{{$product->company->id}}" data-prod_name="{{$product->title}}" data-product_id="{{$product->id}}" data-subject_client="{{$product->title}} - Enquiry Submitted | Plantautomation Technology" data-subject_admin="Enquiry  Plantautomation Technology" data-page="group products">
                  Enquire</button>
              </div>
            </div>
          @endforeach
  @else
  <p>No Products Found</p>
  @endif
   <!--{{ $products->links() }}-->
  <div id ="filterPagnation">
      {{ $products->links() }}
  </div>