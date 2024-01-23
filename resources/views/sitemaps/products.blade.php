<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pages as $page)
	    @if($page->compprofile)
	    <url>
	        <loc>{{ url('/') }}/products/{{$page->compprofile->url}}/{{$page->url}}</loc>
			<priority>1.0</priority>
	    </url>
	    @endif
    @endforeach
</urlset>