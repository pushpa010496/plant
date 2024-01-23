<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
@foreach($pages as $page)
<url>
<loc>{{url('/')}}/video/{{$page->compprofile->url}}</loc>
<video:video>
<video:title>{{@$page->title}}</video:title>
<video:content_loc>
{{config('app.url') }}suppliers/{{$page->compprofile->url}}/video/{{$page->video}}
</video:content_loc>
</video:video>
</url>
@endforeach
</urlset>