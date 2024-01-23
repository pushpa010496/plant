<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
    <url>
        <loc>{{ url('/') }}/catalogue/{{$page->url}}</loc>

        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    @endforeach
</urlset>