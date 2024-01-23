@extends('../layouts/pages')
@section('style')
 <!-- <style type="text/css">
     .input-group .form-control{
        width:100%;
     }
 </style> -->
@endsection
@section('content')

 <div class="container pt-4 pb-3">
        <div class="row">
           <!-- // MAIN SEARCH -->
              <div class="col-md-6 offset-md-3" id="main-search">
                <div class="text-center mb-3">
                  <h1 class="main-heading text-capitalize">search products, suppliers, manufacturers</h1>
                </div>
                {{Form::open(['url' => 'search'])}}
                <div class="input-group input-group-lg">
                  <input type="text" name="q" class="form-control autoComplete" required placeholder="">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search</button>
                  </span>
                </div>
                @if(Session('error'))                 
                   <h5 class="text-danger">{{Session('error') }}</h5>
                @endif
                {{Form::close()}}
              </div>
        <!-- MAIN SEARCH // -->
          <div class="col-lg-12">

            <h2 class="main-title"><span>Search Results</span></h2>
            <!-- <div class="input-group input-group-md">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search!</button>
                    <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                </span>
                </div> -->
                 
            <div class="row mt-3">
              <div class="col-lg-12 mt-3">
                <div class="row" id="product"> 
                  <div class="col-lg-3 mb-3" v-for="product in products">
                    <div class="product div-shadow">
                     <!--  <div class="check">                     
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" name="productname[]" id="check@{{product.id}}" class="custom-control-input" value="@{{product.title}}">
                          <span class="custom-control-indicator"></span>
                        </label>                      
                      </div>  -->
                      @if($products !=  null)
                      <div id="prodimage@{{product.id}}">
                        <a href="{{url('products')}}/@{{product.compprofile.url}}/@{{product.url}}"><img class="img-fluid" src="{{config('app.url')}}products/@{{product.small_image}}" alt="@{{product.alt_tag}}"/></a>                                           
                        <h2><a href="{{url('products')}}/@{{product.compprofile.url}}/@{{product.url}}">@{{product.title}}</a></h2>
                      </div>
                       @else
                    <p>Not found ...</p>
                     @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
              @if(@$products)
              <div class="col-lg-12 mb-3">
                <div class="row"> 
                  @foreach ($products as $cp)
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
                </div>
              </div>
              @endif

              @if(@$companies)
              <div class="col-lg-12 mb-3">
                <div class="row" id="product"> 
                  @foreach($companies as $company)       
                  <div class="col-lg-3 mb-4">
                    <div class="product div-shadow" style="min-height: 150px">
                      <div id="prodimage{{$company->id}}">
                        <a href="{{url('suppliers/'.$company->url)}}"><img  class="img-fluid pt-4" src="{{config('app.url').'company/'.$company->company->comp_logo}}" alt="{{$company->alt_tag}}"/></a>                                           
                        <h2><a href="{{url('suppliers/'.$company->url)}}">{{$company->title}}</a></h2>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif





        </div>
       </div>
   </div>
   </div>
    
  
       
@endsection
@section('scripts')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
       <script type="text/javascript">
         $('header form').remove();
       </script>
      <script type="text/javascript">
          new Vue({

    el: 'body',

    data: {
        products: [],
        loading: false,
        error: false,
        query: ''
    },

    methods: {
        search: function() {
            // Clear the error message.
            this.error = '';
            // Empty the products array so we can fill it with the new products.
            this.products = [];
            // Set the loading property to true, this will display the "Searching..." button.
            this.loading = true;

            // Making a get request to our API and passing the query to it.
            this.$http.get('{{url("/api/search")}}?q=' + this.query).then((response) => {
                // If there was an error set the error message, if not fill the products array.
                response.body.error ? this.error = response.body.error : this.products = response.body;
                // The request is finished, change the loading to false again.
                this.loading = false;
                // Clear the query.
                this.query = '';
            });
        }
    }

});
      </script>
       <script type="text/javascript">
 $(document).ready(function() {

   src = "{{ route('searchajax') }}";
   $(".autoComplete").autocomplete({
    source: function(request, response) {
      $.ajax({
        url: src,
        dataType: "json",
        data: {
          term : request.term
        },
        success: function(data) {
          response(data);

        }
      });
    },
    minLength: 3,
    autoFill: true,
    select: function (event, ui) {
      $('.autoComplete').val(ui.item.value);
      $('form').submit();
          // var label = ui.item.label;
          // var value = ui.item.value;

   //store in session
   // document.valueSelectedForAutocomplete = value 
 }

});
 });            
</script>
@endsection
