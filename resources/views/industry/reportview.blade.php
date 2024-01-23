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
            <h2 class="main-title"><span><a href="#" class="text-blue">Reports</a></span></h2>
          </div>
        </div>  

        <div class="container pb-3">
          @foreach($report as $reports)
          <div class="row">
           <div class="col-lg-12">
            <h1 class="display-5 pb-3 text-blue">{{ $reports->title }}</h1>
              <img class="img-fluid div-shadow mb-2 mr-4 pull-left" src="<?php echo config('app.url'); ?>reports/<?php echo $reports->image;?>" alt=""/>
               <p>{!! $reports->description !!}</p>
              </div>             
          </div>
          @endforeach 
          
        </div>
        <!-- Press Releases // -->        
      </div>
    </div>
      <!-- Profile Body // -->
      <div class="container">
    <div id="disqus_thread"></div>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
    </div>
@endsection
@section('scripts')
<script id="dsq-count-scr" src="//plantautomation-technology-1.disqus.com/count.js" async></script>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://plantautomation-technology-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection