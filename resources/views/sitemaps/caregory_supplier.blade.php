<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($urls as $list)   	
   	@foreach($list as$url)
    <url>
        <loc>{{ $url }}</loc>
           
    
        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    @endforeach
    @endforeach
</urlset>