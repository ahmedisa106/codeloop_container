<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/posts/{{ $post->id }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($services as $service)
        <url>
            <loc>{{ url('/') }}/services/{{ $service->id }}</loc>
            <lastmod>{{ $service->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($packages as $package)
        <url>
            <loc>{{ url('/') }}/packages/{{ $package->id }}</loc>
            <lastmod>{{ $package->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @if(isset($terms))
        <url>
            <loc>{{ url('/terms') }}</loc>
            <lastmod>{{ isset($terms)?$terms->created_at->tz('UTC')->toAtomString():''}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endif
    @if(isset($about))
        <url>
            <loc>{{ url('/about') }}</loc>
            <lastmod>{{ isset($about)?$about->created_at->tz('UTC')->toAtomString():'' }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endif

    @if(isset($terms))
        <url>
            <loc>{{ url('/contact-us') }}</loc>
            <lastmod>{{ isset($terms)?$terms->created_at->tz('UTC')->toAtomString():''}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endif
</urlset>
