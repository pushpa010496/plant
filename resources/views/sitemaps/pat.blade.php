<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
 @foreach($keywords as $keyword)
     <url>
        <loc>{{ url('/') }}/pat/{{$keyword->url}}</loc>      
    
    </url>
 @endforeach
</urlset>