<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
    <url>
    <loc>{{ url('/') }}/suppliers/{{$page->url}}</loc>   
   @if($page->pcatalog->count() >0)
    <loc>{{ url('/') }}/catalogue/{{$page->url}}</loc> 
    @endif
    @if($page->ppress->count() >0)
    <loc>{{ url('/') }}/pressrelease/{{$page->url}}</loc>  
    @endif
    @if($page->pwp->count() >0)
    <loc>{{ url('/') }}/whitepaper/{{$page->url}}</loc>  
    @endif
    @if($page->pvideo->count() >0)
    <loc>{{ url('/') }}/video/{{$page->url}}</loc>  
      @endif 
    <priority>0.8</priority>
    </url>
    @endforeach
</urlset>