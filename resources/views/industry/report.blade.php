@extends('../layouts/pages')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
      
      <!-- // Press Releases -->  
      <div class="container-fluid">
        <div class="container">
          <div class="text-center pt-2">
            <h1 class="main-title"><span><a href="#" class="text-blue">Reports</a></span></h1>
          </div>
        </div>  

        <div class="container pb-3">
          <!-- <div class="row">
            <div class="col-lg-12 mb-3">
              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>
            </div>              
          </div> -->
          
          <div class="row">
            <div class="col-lg-12">
              @foreach($report as $reports)
              <div class="div-shadow p-3 mb-3">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 class="display-6"><a href="{{ 'reports/'.$reports->reports_url }}" class="text-blue">{{ $reports->title }}</a></h2>
                  </div>
                  <div class="col-lg-2">
                    <!-- <p class="mb-2 text-muted">{{ date('j F Y', strtotime($reports->date)) }}</p> -->
                  </div>
                </div> 
                <p class="mb-1">{{$reports->home_description}}</p>
                <small><a href="{{ 'reports/'.$reports->reports_url }}" class="text-blue">Read more...</a></small>
              </div>
              @endforeach            
            </div>
        </div>
        </div>
        <!-- Press Releases // -->        
      </div>
    </div>
      <!-- Profile Body // -->
    </div>
@endsection
@section('scripts')   
@endsection