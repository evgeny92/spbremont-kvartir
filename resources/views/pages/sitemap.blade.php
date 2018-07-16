<?php echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <url>
        <loc>https://spbremont-kvartir.ru/</loc>
    </url>
    <url>
        <loc>https://spbremont-kvartir.ru/price</loc>
    </url>
    <url>
        <loc>https://spbremont-kvartir.ru/portfolio</loc>
    </url>
    <url>
        <loc>https://spbremont-kvartir.ru/articles</loc>
    </url>
    <url>
        <loc>https://spbremont-kvartir.ru/contact</loc>
    </url>
    @foreach($portfolios as $portfolio)
        <url>
            <loc>https://spbremont-kvartir.ru/portfolio/{{ $portfolio->portfolio_slug }}</loc>
        </url>
    @endforeach
    @foreach($articles as $article)
        <url>
            <loc>https://spbremont-kvartir.ru/articles/{{ $article->article_slug }}</loc>
        </url>
    @endforeach
</urlset>
