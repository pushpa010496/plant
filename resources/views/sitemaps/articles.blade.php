<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
    <url>
        <loc>{{ url('/') }}/articles/{{$page->article_url}}</loc>
        <priority>1.0</priority>
    </url>
    @endforeach
</urlset>