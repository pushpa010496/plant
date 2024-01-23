<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
    <url>
        <loc>{{ url('/') }}/news/{{$page->news_url}}</loc>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>