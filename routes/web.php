<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/uslugi/roboty-ziemne', 'services.roboty-ziemne')->name('roboty-ziemne');
Route::view('/uslugi/transport-kruszywa', 'services.transport-kruszywa')->name('transport-kruszywa');
Route::view('/uslugi/wywoz-gruzu', 'services.wywoz-gruzu')->name('wywoz-gruzu');
Route::view('/uslugi/uslugi-koparka', 'services.uslugi-koparka')->name('uslugi-koparka');

Route::get('/sitemap.xml', static function () {
    $routes = [
        'home',
        'roboty-ziemne',
        'transport-kruszywa',
        'wywoz-gruzu',
        'uslugi-koparka',
    ];

    $lastModified = now()->toAtomString();
    $urls = collect($routes)
        ->map(static fn (string $routeName): string => sprintf(
            "<url>\n<loc>%s</loc>\n<lastmod>%s</lastmod>\n<changefreq>weekly</changefreq>\n<priority>%s</priority>\n</url>",
            route($routeName),
            $lastModified,
            $routeName === 'home' ? '1.0' : '0.8'
        ))
        ->implode("\n");

    $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{$urls}
</urlset>
XML;

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
