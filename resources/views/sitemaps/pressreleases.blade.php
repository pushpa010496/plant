<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
    <url>
        <loc>{{ url('/') }}/pressreleases/{{$page->news_url}}</loc>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>