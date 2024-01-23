<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)  
    @if(!empty($page->event_url))
    <url>
        <loc>{{ url('/') }}/events/{{$page->event_url}}</loc>
        <priority>0.8</priority>
    </url>
    @endif
    @endforeach
</urlset>