@foreach($products as $product)
  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-4 px-3">
    <div class="container border p-0" style="box-shadow: 0px 0px 6px rgb(0 0 0 / 20%); border-radius: 0.6rem; ">
      <a href="{{url('products/'.$product->company->profile->url.'/'.$product->url)}}"  target="_blank">
         <img class="img-fluid w-100" style="border-radius: 0.6rem 0.6rem 0 0;"
         src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/products/'.$product->small_image}}" alt="{{$product->alt_tag}}">
      </a>
      <div class="bg-light d-flex align-items-center justify-content-center pt-2"
        style="min-height: 62px;max-height: 62px;overflow: hidden;">
        <h2 class="small text-center">
          <a href="{{url('products/'.$product->company->profile->url.'/'.$product->url)}}"
            class="text-secondary font-weight-bold" style="font-size: 15px;" target="_blank">
            {{$product->title}}</a>
        </h2>
      </div>
      <div class="text-center pb-2" style="height: 50.5px;">
        <img class="img-fluid"
          src="{{config('app.url').'suppliers/'.str_slug($product->company->comp_name).'/'.$product->company->comp_logo}}"
          alt="{{$product->alt_tag}}" width="100">
      </div>
      <div class="text-center d-flex pb-3">
        <button type="button" class="btn mx-3 w-100 bg-white font-weight-bold rounded"
          style="border: 2px solid#92278f;color: #92278f;" data-toggle="modal" data-target="#enquiry" data-company_name="{{$product->company->comp_name}}" data-company_id="{{$product->company->id}}" data-prod_name="{{$product->title}}" data-product_id="{{$product->id}}" data-subject_client="{{$product->title}} - Enquiry Submitted | Plantautomation Technology" data-subject_admin="Enquiry  Plantautomation Technology" data-page="product view">
          <img src="{{config('app.url')}}/img/enquiry.png" alt="" srcset="">
          Enquire</button>
      </div>
    </div>
  </div>
@endforeach